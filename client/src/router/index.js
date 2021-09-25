//import { h, resolveComponent } from 'vue'
import { createRouter, createWebHashHistory } from 'vue-router'

//import DefaultLayout from '@/layouts/DefaultLayout'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: () =>  import(/* webpackChunkName: "DefaultLayout" */ "../ui/layouts/DefaultLayout"),
    redirect: '/dashboard',
    children: [
      {
        path: '/dashboard',
        name: 'Dashboard',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
          import(/* webpackChunkName: "dashboard" */ '../views/Dashboard.vue'),
      },
    ]
  },
  {
    path: '/login',
    name: 'Login',
    component: () =>  import(/* webpackChunkName: "login" */ "../views/Login"),
  }
]

const router = createRouter({
  history: createWebHashHistory(process.env.BASE_URL),
  routes,
})

export default router
