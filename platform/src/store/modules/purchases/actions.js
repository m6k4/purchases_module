// Vuex tariffs module actions
import { API } from '@/config';

import {
  FILL_LIST,
} from './mutations-types';

export default {
  async getList({ state, commit }) {
    try {
      const _state = state;
      _state.listLoading = true;
      const data = await API.get('clients/purchases/getList');
      _state.listLoading = false;
      commit(FILL_LIST, data);
    } catch (err) {
      console.log(err);
    }
  },
};
