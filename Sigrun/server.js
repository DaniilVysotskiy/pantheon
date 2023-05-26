import fs from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'url';
import express from 'express';
import cluster from 'node:cluster';
import { availableParallelism } from 'node:os';
import process from 'node:process';
const __dirname = path.dirname(fileURLToPath(import.meta.url));
const numCPUs = availableParallelism();
const PORT = process.env.PORT ?? 4108;
import dotenv from 'dotenv';
dotenv.config({
  path: process.env.NODE_ENV === 'production'
    ? '.env.production'
    : '.env.development'
})

export async function createServer(app) {
  const resolve = (p) => path.resolve(__dirname, p);

  app.use((await import('compression')).default());
  app.use((await import('cookie-parser')).default());
  app.use(
    (await import('serve-static')).default(resolve('dist/client'), {
      index: false,
    })
  );

  app.get('/eid:eventId', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/info`);
  })

  app.get('/eid:eventId/add-online', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/info`);
  })

  app.get('/eid:eventId/last', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/games`);
  })

  app.get('/eid:eventId/last/page/:page', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/games/page/${req.params.page}`);
  })

  app.get('/eid:eventId/stat', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/order/rating`);
  })

  app.get('/eid:eventId/stat/team', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/order/team`);
  })

  app.get('/eid:eventId/user/:playerId', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/player/${req.params.playerId}`);
  })

  app.get('/eid:eventId/game/:gameHash', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/game/${req.params.gameHash}`);
  })

  app.get('/eid:eventId/timer', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/timer`);
  })

  app.get('/eid:eventId/achievements', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/achievements`);
  })

  app.get('/eid:eventId/achievements/:achievement', (req, res) => {
    res.redirect(301, `${process.env.EXTERNAL_SIGRUN_URL}/event/${req.params.eventId}/achievements`);
  })

  app.use('*', async (req, res) => {
    const url = req.baseUrl;

    const template = fs.readFileSync(
      resolve('dist/client/index.html'),
      'utf-8'
    );
    const render = (await import('./dist/server/server.js')).SSRRender;

    render(url, req.cookies).then(({ cookies, helmet, appHtml, serverData }) => {
      const html = template
        .replace(`<!--app-head-->`, helmet)
        .replace(`<!--app-html-->`, appHtml)
        .replace(`<!--app-server-data-->`, serverData);
      res.status(200);
      res.set({ 'Content-Type': 'text/html' });
      for (let name in cookies.add) {
        res.cookie(name, cookies.add[name], {
          domain: import.meta.env.COOKIE_DOMAIN,
          expires: new Date(Date.now() + 365 * 24 * 3600 * 1000)
        });
      }
      for (let name of cookies.remove) {
        res.clearCookie(name, {
          domain: import.meta.env.COOKIE_DOMAIN,
          expires: new Date(Date.now() + 365 * 24 * 3600 * 1000)
        });
      }
      res.end(html);
    });
  });

  return app;
}

if (cluster.isPrimary) {
  console.log(`Primary ${process.pid} is running`);
  console.log('Env settings: ', process.env);

  // Fork workers.
  for (let i = 0; i < numCPUs; i++) {
    cluster.fork();
  }

  cluster.on('exit', (worker) => {
    console.log(`worker ${worker.process.pid} died`);
  });
} else {
  const app = express();
  createServer(app).then((app) =>
    app.listen(PORT, () => {
      console.log('http://localhost:' + PORT);
    })
  );

  console.log(`Worker ${process.pid} started`);
}

