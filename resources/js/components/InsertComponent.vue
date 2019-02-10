<template>
 <div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>
                <span class="alert alert-success" v-if="errors">
                    Post created!
                </span>
                <div class="card-body">
                    <form method="POST" action="">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" v-model="name" required autofocue>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" v-model="email"  required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"v-model="password" name="password" >
                             </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-3">
                                <input type="button" class=" btn btn-primary" v-on:click="btn_insert()" value="submit" >
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
        name:'Create',
        data() {
            return {
                name: '',
                email: '',
                password: '',
                errors:[]

            }
            url:"api/create"

        },
        mounted() {
            this.btn_insert();
        },

     methods: {
         btn_insert(){
             axios.post('/api/user',{
                name:this.name,
                email:this.email,
                password:this.password
             }).then(response => {
                  alert('insert into');
             }).catch(errors=>{
                  console.log(errors);
                  this.errors =errors.response.data.errors;
             })


         }
     }
  }
</script>

<style scoped>

</style>