


import {createRouter, createWebHistory} from 'vue-router';


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'post.index',
            component: () => import('./components/Views/Pages/Post/PostList.vue')
        },
        {
            path: '/:id',
            name: 'post.show',
            component: () => import('./components/Views/Pages/Post/PostShow.vue')
        },
        {
            path: '/calendar',
            name: 'calendar',
            component: () => import('./components/Views/Pages/Post/PostList.vue')
        },
        {
            path: '/gallery',
            name: 'gallery',
            component: () => import('./components/Views/Pages/Post/PostList.vue')
        },
        {
            path: '/mailbox',
            name: 'mailbox',
            component: () => import('./components/Views/Pages/Post/PostList.vue')
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: () => import('./components/Views/Pages/Post/PostList.vue')
        },
        {
            path: '/faq',
            name: 'faq',
            component: () => import('./components/Views/Pages/Post/PostList.vue')
        },
        {
            path: '/contact_us',
            name: 'contact_us',
            component: () => import('./components/Views/Pages/Post/PostList.vue')
        },
        {
            path: '/settings',
            name: 'settings',
            component: () => import('./components/Views/Pages/Post/PostList.vue')
        }
    ]
});

export default router
