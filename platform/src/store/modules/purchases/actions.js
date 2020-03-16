// Vuex tariffs module actions
import { API } from '@/config';

import {
  FILL_LIST,
} from './mutations-types';

export default {
  async getList({ commit }) {
    try {
      const data = await API.get('clients/purchases/getList');
      commit(FILL_LIST, data);
    } catch (err) {
      console.log(err);
    }
  },
};
