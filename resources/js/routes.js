export  const  routes = [
    {
        path: '/',
        name:'home',
        components:'Home'
    },

    {
       path: '/admin',
        name:'/admin',
        components:'Home'
    },
    {
        path: '/users',
        name: 'users',
        components: 'Users'
    },
    {
        path: '/create',
        components: 'Create'
    },
    {
        path: '/edit',
        components: 'Edit'
    },
];