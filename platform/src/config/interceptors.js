import Qs from 'qs';
import { hObjectIsEmpty } from '@/utils/helpers';

export const serializeParamsInterceptor = (config) => {
  const _config = config;
  _config.paramsSerializer = (params) => {
    const serializedParams = Qs.stringify(params, {
      arrayFormat: 'brackets',
      encode: false,
    });

    // add serialized empty params
    const serializedEmptyParams = Object.keys(params)
      .filter(param => typeof params[param] === 'object' && hObjectIsEmpty(params[param]))
      .map(param => `${param}[]`)
      .join('&');
    const _emptyParams = serializedEmptyParams.length === 0 ? '' : `&${serializedEmptyParams}`;
    return `${serializedParams}${_emptyParams}`;
  };

  return _config;
};

export const addSessionToken = (config) => {
  const _config = config;
  const token = sessionStorage.getItem('user-token');

  _config.headers = token ? { token, ...config.headers } : config.headers;

  return _config;
};

export const errorHandler = (error) => {
  // TODO
  console.log(error);

  return Promise.rejec();
};
