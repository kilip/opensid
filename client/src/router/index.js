import Vue from "vue";
import VueRouter from "vue-router";
import artikel from './artikel';
import kategori from './kategori';

Vue.use(VueRouter);

// Add routes to VueRouter
const router = new VueRouter({
  // ...
  routes: [
    {
      path: "/",
      redirect: {
        name: 'Terbaru'
      },
      component: () => import(/* webpackChunkName: "homepage" */ "../pages/Frontend"),
      children: [
        {
          path: "/",
          name: 'Terbaru',
          component: () => import(/* webpackChunkName: "homepage" */ "../components/frontend/Terbaru")
        },
        {
          path: "/artikel",
          name: 'Artikel',
          component: () => import(/* webpackChunkName: "homepage" */ "../components/frontend/Artikel")
        }
      ]
    },
    {
      path: "/dashboard",
      name: "dashboard",
      component: () => import(/* webpackChunkName: "homepage" */ "../pages/Backend"),
      redirect: {
        name: 'DashboardMain'
      },
      children: [
        {
          path: '/',
          name: 'DashboardMain',
          component: () => import(/* webpackChunkName: "homepage" */ "../pages/Dashboard"),
        },
        ...artikel,
        ...kategori,
      ]
    }
  ]
});

export default router;
