const Home = resolve => require(['./components/Blog/index.vue'], resolve);
const Show = resolve => require(['./components/Blog/show.vue'], resolve);

export default [
    {
        path: '/',
        component: Home,
        name: 'home'
    },
    {
        path: '/show/:id',
        component: Show,
        name: 'show'
    },
]

  