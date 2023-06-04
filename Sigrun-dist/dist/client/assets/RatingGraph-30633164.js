import{_ as b,u as v}from"./index-7c828d73.js";import{r as a,u as E,g as p,j as R}from"./vendor-6c7c893d.js";const x="/assets/star-d428c403.svg",k=a.lazy(()=>b(()=>import("./LineGraph-27db2b61.js"),["assets/LineGraph-27db2b61.js","assets/vendor-6c7c893d.js"])),B=({playerId:d,playerStats:r,onSelectGame:w,lastSelectionX:l,setLastSelectionX:u,lastSelectionHash:m,setLastSelectionHash:I})=>{const f=v(),t=E(),s=p().colorScheme==="dark",e=r==null?void 0:r.scoreHistory,g=((r==null?void 0:r.ratingHistory)??[]).map((o,n)=>({x:n,y:Math.floor(o)})),h=[];for(let o=0;o<g.length;o++)h.push(o);const c=[];e==null||e.forEach((o,n)=>c.push(n));const _=a.useRef();return a.useEffect(()=>{var n;const o=((n=r==null?void 0:r.scoreHistory)==null?void 0:n.findIndex(i=>i.tables[0].sessionHash===m))??null;u(o!==null?1+o:null)},[d,r]),a.useEffect(()=>{if(!window.__ratingStarIcon){const o=new Image;o.src=x,o.height=20,o.width=20,window.__ratingStarIcon=o;const n=new Image;n.src=x,n.height=32,n.width=32,window.__ratingStarIconBig=n}}),R.jsx(k,{ref:_,data:{labels:h,datasets:[{data:g}]},options:{interaction:{mode:"nearest"},backgroundColor:s?t.colors.blue[8]:t.colors.blue[3],borderColor:s?t.colors.blue[8]:t.colors.blue[3],color:s?t.colors.gray[2]:t.colors.dark[7],font:{size:16,family:'"PT Sans Narrow", Arial'},onClick:o=>{const n=H(_.current,{nativeEvent:o});if(n.length){const{index:i}=n[0];u(i),I((e==null?void 0:e[c[i-1]].tables[0].sessionHash)??null),e!=null&&e[c[i-1]]&&w(e==null?void 0:e[c[i-1]])}},plugins:{legend:{display:!1},tooltip:{enabled:!1},zoom:{zoom:{wheel:{enabled:!0},pinch:{enabled:!0},mode:"x"}}},elements:{point:{radius:o=>l&&o.dataIndex===l?8:3,hoverRadius:8,hoverBorderWidth:1,pointStyle:o=>{if(o.dataIndex!==0&&e!=null&&e[c[o.dataIndex-1]].tables.every(n=>n.playerId===d||n.ratingDelta<0))return o.dataIndex===l?window.__ratingStarIconBig:window.__ratingStarIcon}},line:{tension:.3}},scales:{x:{grid:{color:s?t.colors.gray[8]:t.colors.gray[3]},position:"bottom",title:{display:!0,text:f._t("Games played")}},y:{grid:{color:s?t.colors.gray[8]:t.colors.gray[3]},position:"left",title:{display:!0,text:f._t("Rating")}}}}})};function H(d,r){return d.getElementsAtEventForMode(r.nativeEvent,"nearest",{intersect:!1},!1)}export{B as RatingGraph,B as default};
