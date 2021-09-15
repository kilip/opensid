import Vue from "vue";
import VueRouter from "vue-router";
import auth from '../utils/auth';
import artikel from './artikel';
import kategori from './kategori';
import dashboard from "./dashboard";

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
      meta: {
        requiresAuth: true
      },
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
        {
          path: '/admin',
          component: () => import(/* webpackChunkName: "homepage" */ "../pages/Admin"),
          children: [
            ...artikel,
            ...kategori
          ]
        }
      ]
    },
    {
      name: "login",
      path: '/login',
      component: () => import(/* webpackChunkName: "Login" */ "../pages/Login"),
    }
  ]
});

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta['requiresAuth'])) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    auth.checkLogin().then(state => {
      if (!state) {
        next({
          path: '/login',
          query: { redirect: to.fullPath }
        })
      } else {
        next()
      }
    });
  } else {
    next() // make sure to always call next()!
  }
});

export default router;
