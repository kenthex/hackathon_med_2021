import { createRouter, createWebHistory } from 'vue-router';

const routes = [{
        path: '/',
        name: 'home',
        meta: { layout: 'main' },
        component: () =>
            import ('@/views/Home.vue')
    },
    {
        path: '/login',
        name: 'login',
        meta: { layout: 'empty' },
        component: () =>
            import ('@/views/Login.vue')
    },
    {
        path: '/register',
        name: 'register',
        meta: { layout: 'empty' },
        component: () =>
            import ('@/views/Register.vue'),
    },
    {
        path: '/categories',
        name: 'categories',
        meta: { layout: 'main' },
        component: () =>
            import ('@/views/Categories.vue')
    },
    {
        path: '/profile',
        name: 'profile',
        meta: { layout: 'main' },
        component: () =>
            import ('@/views/Profile.vue')
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router
