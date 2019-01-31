<template>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" v-model="email" type="email" class="form-control" name="email" value="" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                                Password
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" v-model="password" class="form-control" name="password" required>

                         
                            </div>
                        </div>

                 

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="button" class="btn btn-primary" v-on:click="loginUsers()">
                                    save
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
   export default {
      data(){
          return {
            password:'',
            email: '',
          }
      },
       mounted(){

       },
       methods:{
           loginUsers(){
             axios.post('/login',{
                 email:this.email,
                 password:this.password
             }).then(response =>{

                console.log(response);
             }).catch(errors=>{
                 console.log(errors);

             });

           }
       }


   }   
</script>