<template>
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                        <div class="btn-wrapper text-center">
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="img/icons/common/google.svg"></span>
                                <span class="btn-inner--text">Miota Mail</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                         <div v-html="model.notification">
                                {{ model.notification }}
                         </div>
                        <form role="form" class="login" @submit.prevent="login">
                            <base-input class="input-group-alternative mb-3"
                                        placeholder="Email"
                                        addon-left-icon="ni ni-email-83"
                                        v-model="model.email">
                            </base-input>

                            <base-input class="input-group-alternative"
                                        placeholder="Password"
                                        type="password"
                                        addon-left-icon="ni ni-lock-circle-open"
                                        v-model="model.password">
                            </base-input>
                            <div class="text-center">
                                <button type="submit" class="my-4 btn btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="#" class="text-light"><small>Forgot password?</small></a>
                    </div>
                </div>
            </div>
        </div>
</template>
<script>
  export default {
    name: 'login',
    data() {
      return {
        model: {
          email: '',
          password: '',
          notification: '',
        }
      }
    },
      methods: {
          login : function() {
            let email = this.model.email
            let password = this.model.password
            this.$store.dispatch('login', { email, password })
            .then(response => {
                if(response == '<div class="alert alert-danger mb-5" role="alert"><strong>ERROR :</strong><br> This user already logged in</div>' || response == '<div class="alert alert-danger mb-5" role="alert"><strong>ERROR :</strong><br> Request doesnt match with our requirement</div>'){
                    this.model.notification = response;
                }else{
                    this.$router.push('/dashboard');
                }
            })
            .catch(err => console.log(err))
          }
        // login: function()
        // {
        //    axios.post('../../api/login', { 'email' : this.model.email, 'password' : this.model.password }).then(response => {
        //         if(response.data.status == "error"){
        //             console.log(response.data.response.message);
        //         }else{
        //             if(response.data.response.token)
        //             {
        //                 try{
        //                     localStorage.setItem('usersToken', JSON.stringify(response.data.response.token));
        //                     console.log("Token saved");
        //                 }catch(err){
        //                     console.log("Token not saved with error : "+err);
        //                 }
        //             }else{
        //                 console.log('Token already created');
        //             }
        //         }
        //         }
        //    )
        // }
    }
  }
</script>
<style>
</style>
