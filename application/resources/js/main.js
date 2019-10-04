import './bootstrap'
import Vue from 'vue'
import Routes from './routes.js'
import App from './App.vue'
import store from './stores/store_auth.js'
import Axios from 'axios'
import ArgonDashboard from './plugins/argon-dashboard'
import VueApexCharts from 'vue-apexcharts'
// import * as VueGoogleMaps from 'vue2-google-maps'

Vue.component('apexchart', VueApexCharts)
//Route
Vue.config.productionTip = false

Vue.use(ArgonDashboard);
Vue.prototype.$http =  Axios;
const token = localStorage.getItem('token')
if(token){
    Vue.prototype.$http.defaults.headers.common['Authorization'] = 'Bearer '+token
}
new Vue({
    router: Routes,
    store,
    render: h => h(App)
  }).$mount('#app')
