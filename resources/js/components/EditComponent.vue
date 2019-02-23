<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Users</div>

                    <div class="card-body">
                        <form method="POST" action="">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" v-model="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" v-model="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" v-model="password"
                                           name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-3">
                                    <input type="button" class=" btn btn-primary" v-on:click="btn_update()"
                                           value="submit">
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
        props: ['id'],

        name: "EditComponent",
        data() {
            return {
                email: '',
                name: '',
                password: ''

            }


        },


        mounted() {
            let id = this.$route.params.id;
            axios.get("/api/user/" + id)
                .then(responser => {
                    console.log(responser.data);
                    var user = responser.data;
                    this.name = user.name;
                    this.email = user.email;
                    this.password = user.password;

                }).catch(errors => {
                console.log(errors);
            });

        },
        methods: {
        btn_update(){

            axios.put('/api/user/' + this.id ,{
                name: this.name,
                email: this.email,
                password: this.password
            }).then(repsonser => {
                alert("update users");
                window.location.href = "/user";

                console.log(repsonser)
            }).catch( errors => {

                console.log(errors)
            })


        }

      }
    }
</script>

<style scoped>

</style>