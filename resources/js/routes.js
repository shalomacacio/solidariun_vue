import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/Home';
import User from '@/js/components/User';
import Login from '@/js/components/Login';
import Campanha from '@/js/components/Campanha';
import Show from '@/js/components/Show';
import UploadFile from '@/js/components/UploadFile';

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/',
            name:'home',
            component: Home
        },
        {
            path:'/user',
            name:'user',
            component: User
        },
        {
            path:'/login',
            name:'login',
            component: Login
        },
        {
            path:'/campanha',
            name:'campanha',
            component: Campanha
        },
        {
            path:'/upload-file',
            name:'upload-file',
            component: UploadFile
        },
        {
            path:'/campanha/:id',
            name:'campanha-show',
            component: Show
        },
    ]
});

export default router;
