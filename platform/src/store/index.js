import Vue from 'vue';
import Vuex from 'vuex';

import purchases from './modules/purchases';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    purchases,
  },
});
