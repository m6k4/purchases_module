import axios from 'axios';
import { serializeParamsInterceptor, addSessionToken, errorHandler } from './interceptors';

const API_HEADERS = {};
const API_CONFIG = {};
const API_TOKEN_STORAGE = sessionStorage;

// SET API CONFIGURATION
API_HEADERS['X-Requested-With'] = 'XMLHttpRequest';

API_CONFIG.baseURL = process.env.VUE_APP_API_URL;
API_CONFIG.headers = API_HEADERS;
API_CONFIG.timeout = 10000;
API_CONFIG.withCredentials = true;

const API = axios.create(API_CONFIG);

API.interceptors.request.use(serializeParamsInterceptor);
API.interceptors.request.use(addSessionToken);
API.interceptors.response.use(config => config, errorHandler);

// SET AUTH CONFIGURATION
const AUTHORIZATION_OPTIONS = {
  endpoints: {
    login: '/auth/login',
    logout: '/auth/logout',
    session: '/auth/checkIfUserSessionExist',
    registration: '/auth/registerUser',
  },
};

export {
  API, API_TOKEN_STORAGE, AUTHORIZATION_OPTIONS,
};
