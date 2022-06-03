import { createWebHistory, createRouter } from "vue-router";
import Home from '@/components/HomeSession/HomeDash.vue'
const history = createWebHistory();
const router = createRouter({
    history,
    routes: [
        {
            path: '/home',
            component: Home
        }
    ]
})

export default router;