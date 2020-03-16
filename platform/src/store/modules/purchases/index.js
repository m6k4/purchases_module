// Vuex tariffs module main file

import actions from './actions';
import mutations from './mutations';

const INITIAL_STATE = {
  list: {
    data: [],
  },
};

const getters = {
  list: state => state.list.data,
};

// VUEX MODULE /////////////////////////////////////////////////////////////////
const Module = {
  namespaced: true,
  state: INITIAL_STATE,
  mutations,
  actions,
  getters,
};

export default Module;
