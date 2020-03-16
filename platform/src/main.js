import Vue from 'vue';
import Element from 'element-ui';
import locale from 'element-ui/lib/locale/lang/pl';
import 'element-ui/lib/theme-chalk/index.css';
import 'font-awesome/css/font-awesome.css';
import { VueSpinners } from '@saeris/vue-spinners';

import './assets/styles/style.sass';

import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

import Axios from 'axios';
import App from './App';
import router from './router';
import store from './store';

Vue.prototype.$http = Axios;
const token = localStorage.getItem('token');
if (token) {
  Vue.prototype.$http.defaults.headers.common.Authorization = token;
}

Vue.use(VueSpinners);
Vue.use(Element, { locale });
Vue.use(BootstrapVue);
Vue.config.productionTip = false;

new Vue({
  router,
  store,
  render: h => h(App),
}).$mount('#app');
