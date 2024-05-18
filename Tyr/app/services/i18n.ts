/* Tyr - Japanese mahjong assistant application
 * Copyright (C) 2016 Oleg Klimenko aka ctizen
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

import { TranslationProvider, TranslationController } from 'i18n-dialect';
import { TranslationJson } from 'i18n-proto';

// TODO: exclude from primary bundle
import langRu from '../i18n/ru.json';
import langEma from '../i18n/ema.json';
import langCn from '../i18n/cn.json';
import langJp from '../i18n/jp.json';
import langDe from '../i18n/de.json';
import langKo from '../i18n/ko.json';
import { IStorage } from '../../../Common/storage';
export const supportedLanguages = ['en', 'ru', 'de', 'ko', 'jp', 'cn', 'ema'] as const;
const langs = {
  ema: langEma,
  jp: langJp,
  cn: langCn,
  ru: langRu,
  de: langDe,
  ko: langKo,
};

export class I18nService {
  protected i18nController: TranslationController;
  protected i18n: TranslationProvider;

  constructor(private readonly storage: IStorage) {
    this.i18nController = new TranslationController(
      /* translationGetter: */ (
        name: string,
        onReady: (name: string, contents: string) => void
      ) => {
        switch (name) {
          case 'ru':
          case 'de':
          case 'ema':
          case 'jp':
          case 'cn':
          case 'ko':
            onReady(name, JSON.stringify(langs[name]));
            break;
          case 'en':
          default:
            const defaultTrn: TranslationJson = {
              items: [],
              meta: {
                projectIdVersion: '1',
                reportMsgidBugsTo: '',
                potCreationDate: '',
                poRevisionDate: '',
                lastTranslator: {
                  name: '',
                  email: '',
                },
                language: 'en',
                languageTeam: '',
                pluralForms: 'nplurals=1; plural=(n==1 ? 0 : 1)', // (n: number) => number
                mimeVersion: '',
                contentType: '',
                contentTransferEncoding: '',
                generatedBy: '',
              },
            };
            onReady('en', JSON.stringify(defaultTrn));
            break;
        }
      },
      /* onFailedSubstitution: */ (str: string, substitutions) => {
        console.error(`Failed i18n substitution: ${str}`, substitutions);
      },
      /* defaultPluralSelect: */ (factor: number) => (factor == 1 ? 0 : 1) // default english plurality rule
    );
    this.i18n = new TranslationProvider(this.i18nController);
  }

  public init(onReady: (localeName: string) => void, onError: (error: any) => void) {
    // See also app.component.ts where this item is set
    const lang = this.storage.getLang();
    if (lang) {
      if (!supportedLanguages.includes(lang as (typeof supportedLanguages)[number])) {
        this.storage.deleteLang();
        // pass further if wrong lang is contained in local storage
      } else {
        this.i18nController.setLocale(lang, onReady, onError);
        return;
      }
    }

    for (const navlang of window.navigator.languages) {
      if (supportedLanguages.includes(navlang as (typeof supportedLanguages)[number])) {
        this.i18nController.setLocale(navlang, onReady, onError);
        return;
      }
    }

    // default to en if nothing good found
    this.i18nController.setLocale('en', onReady, onError);
  }

  get _t() {
    return this.i18n._t;
  }
  get _pt() {
    return this.i18n._pt;
  }
  get _nt() {
    return this.i18n._nt;
  }
  get _npt() {
    return this.i18n._npt;
  }
  get _gg() {
    return this.i18n._gg;
  }
  get _ngg() {
    return this.i18n._ngg;
  }
  get _pgg() {
    return this.i18n._pgg;
  }
  get _npgg() {
    return this.i18n._npgg;
  }
}
