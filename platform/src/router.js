import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

const router = new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/platform',
      component: () => import('@/views/Platform'),
      children: [
        {
          path: '/purchases',
          name: 'PlatformPurchases',
          component: () => import('@/views/PlatformPurchases'),
        },
      ],
    },
    // catch all redirect
    { path: '*', redirect: '/platform' },
  ],
});

export default router;
