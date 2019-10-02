import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    status: '',
    token: localStorage.getItem('token') || '',
    user : {}
  },
  mutations: {
      auth_request(state){
        state.status = 'loading'
      },
      auth_success(state, token, user){
        state.status = 'success'
        state.token = token
        state.user = user
      },
      auth_error(state){
        state.status = 'error'
      },
      logout(state){
        state.status = ''
        state.token = ''
        state.user_info = ''
      },
  },
  actions: {
    login({commit}, user){
        return new Promise((resolve, reject) => {
          commit('auth_request')
          axios({url: '../../api/login', data: user, method: 'POST' })
          .then(resp => {
            if(resp.data.response.message){
                resolve('<div class="alert alert-danger mb-5" role="alert"><strong>ERROR :</strong><br> '+resp.data.response.message+'</div>')
            }else{
                const token = resp.data.response.token
                const user = resp.data.response.userinfo
                localStorage.setItem('token', JSON.stringify(token))
                localStorage.setItem('user', JSON.stringify(user))
                axios.defaults.headers.common['Authorization'] = token
                commit('auth_success', token, user)
                resolve(resp)
            }
          })
          .catch(err => {
            commit('auth_error')
            localStorage.removeItem('token')
            localStorage.removeItem('user')
            //delete axios.defaults.headers.common['Authorization']
            reject(err)
          })
        })
    },
    logout({commit}){
        return new Promise((resolve, reject) => {
          commit('logout')
          let json = JSON.parse(localStorage.getItem('user'))
          let token = JSON.parse(localStorage.getItem('token'))
          axios.post('../../api/logout', {'email' : json[0]['email'] }, {
              headers:{
                  Authorization: 'Bearer '+ token['token']
              }
          }).catch(err => {
                console.log(err)
          })
          localStorage.removeItem('token')
          localStorage.removeItem('user')
          resolve()
        })
      }
  },
  getters : {
    isLoggedIn: state => !!state.token,
    authStatus: state => state.status,
  }
})
