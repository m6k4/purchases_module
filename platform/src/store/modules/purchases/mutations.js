// Vuex tariffs module mutations

import {
  FILL_LIST,
} from './mutations-types';

export default {
  [FILL_LIST](state, payload) {
    const _state = state;
    _state.list.data = payload.data.data;
  },

};
