import Vue from 'vue'
import Router from 'vue-router'
import store from './stores/store_auth.js'
//Layout
import DashboardLayout from '@/layout/DashboardLayout'
import LoginLayout from '@/layout/AuthLayout'
import Auth from '@/stores/store_auth.js'
//Pages
import Dashboard from '@/views/Dashboard.vue';
import Login from '@/views/Login.vue';

Vue.use(Router)

let router = new Router({
    routes: [
        {
            path: '/',
            redirect: 'dashboard',
            component: DashboardLayout,
            children: [
              {
                path: '/dashboard',
                name: 'dashboard',
                component: Dashboard,
                meta: {
                    requiresAuth: true
                }
              }
            ]
        },
        {
            path: '/',
            redirect: 'login',
            component: LoginLayout,
            children: [
              {
                path: '/login',
                name: 'login',
                component: Login
              }
            ]
          }
    ]
  })

  router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiresAuth)) {
      if (store.getters.isLoggedIn) {
        next()
        return
     }
        next('/login')
    }else{
        next()
    }
  })

  export default router
