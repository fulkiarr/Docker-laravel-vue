import Vue from 'vue'
import Router from 'vue-router'
//Layout
import DashboardLayout from '@/layout/DashboardLayout'
import LoginLayout from '@/layout/AuthLayout'
//Pages
import Dashboard from '@/views/Dashboard.vue';
import Login from '@/views/Login.vue';

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            redirect: 'dashboard',
            component: DashboardLayout,
            children: [
              {
                path: '/dashboard',
                name: 'dashboard',
                // route level code-splitting
                // this generates a separate chunk (about.[hash].js) for this route
                // which is lazy-loaded when the route is visited.
                component: Dashboard
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

