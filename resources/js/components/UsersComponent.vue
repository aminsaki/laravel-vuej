<template>
    <div class="container">
        <div class="form-group">
            <a href="/create" class="btn btn-success">Add USERS</a>

        </div>

        <div class="form-group">
            ‌ <lable> Sreach by  name </lable>
             <input type="text"  @keyup="btn_sreach()"  class="form-control" v-model="serach"  name="serach"   >
        </div>

        <table class="table table-bordered  table-dark ">
            <thead class="bg-danger">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(user , index) in users">
                <td>{{user.id}}</td>
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
                <td><a href="#" class="btn btn-danger" v-on:click="deleteUser(user.id, index)">Delete</a>
                    <a :href="'user/'+ user.id +'/edit'" class="btn btn-success">Edit</a>
                </td>

            </tr>
            <tr>
                <td colspan="4" style="background: #2d5965;">

                    <button class="btn btn-default" v-on:click="foreachPaginateUsers(paginatetion.prev_page_url)"
                            :disabled="!paginatetion.prev_page_url"> Previous
                    </button>
                    <span>Page {{paginatetion.current_page}} of {{paginatetion.last_page}}</span>

                    <button class="btn btn-default" v-on:click="foreachPaginateUsers(paginatetion.next_page_url)"
                            :disabled="!paginatetion.next_page_url">Next
                    </button>

                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
         name:  'users',
        data() {
            return {
                users: {},
                user: {
                    id: '',
                    name: '',
                    email: '',
                    serach:''
                },
                url: '/api/user',
                paginatetion: {},


            }


        },
        mounted() {
            this.getUser();
        },
        methods: {
            btn_sreach() {
                axios.get('/api/user?serach='+ this.serach)
                    .then(response => {
                        this.users = response.data.data;
                        $this.makePaginatetion(response.data);
                }).catch(errors => {
                    console.log(errors);
                })
            },




        getUser() {
            let $this = this;

            axios.get(this.url).then(response => {
                // console.log(response.data);
                this.users = response.data.data;
                $this.makePaginatetion(response.data);

            });
        },
        deleteUser(id, index) {
            axios.delete(this.url + "/" + id)

                .then(response => {
                    console.log(response);
                    this.users.splice(index, 1);


                }, (response) => {
                    // success : false,


                })

        },
        makePaginatetion(data) {

            let paginatetion = {
                current_page: data.current_page,
                last_page_url: data.last_page_url,
                next_page_url: data.next_page_url,
                prev_page_url: data.prev_page_url

            }
            this.paginatetion = paginatetion;


        },
        foreachPaginateUsers(url) {
            this.url = url,
                this.getUser()
        }


    }
    }
</script>

<style scoped>

</style>