import React, {Suspense} from 'react';
import ReactDOM from 'react-dom/client';
import App from './App';
import store from './redux/redux-store'
import {Provider} from "react-redux";
import PreLoader from "./Components/common/PreLoader";

import i18next from "i18next";
import {initReactI18next} from "react-i18next";
import LanguageDetector from "i18next-browser-languagedetector";
import HttpApi from "i18next-http-backend";

import './css/bootstrap.css';
import './css/style.css';

i18next
    .use(initReactI18next)
    .use(LanguageDetector)
    .use(HttpApi)
    .init({
        supportedLngs: ['en', 'ru'],
        fallbackLng: "en",
        detection: {
            order: ['cookie', 'htmlTag', 'localStorage', 'path', 'subdomain'],
            caches: ['cookie']
        },
        backend: {
            loadPath: '/assets/locales/{{lng}}/translation.json',
        },
    });


const root = ReactDOM.createRoot(document.getElementById('root'));

root.render(
    <Suspense fallback={<PreLoader/>}>
        <Provider store={store}>
            <App/>
        </Provider>
    </Suspense>
);

