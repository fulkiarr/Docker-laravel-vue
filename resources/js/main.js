import './bootstrap'
import Vue from 'vue'
import Routes from './routes.js'
import App from './App.vue'
import ArgonDashboard from './plugins/argon-dashboard'

//Route

Vue.use(ArgonDashboard);

new Vue({
    router: Routes,
    render: h => h(App)
  }).$mount('#app')
