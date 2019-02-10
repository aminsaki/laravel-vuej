<template>

      <div class="content">

          sdfdsfds
          <router-link to="/Users">Go to Users</router-link>
          <router-view></router-view>


      </div>

</template>

<script>
    export default {
        name: "Home",
        date(){
            return {
                message:"Thie is for Web Sites"
            }
        }
    }
</script>

<style scoped>

</style>