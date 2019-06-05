<template>
  <section>
    <app-header></app-header>
        <router-view></router-view>
    <app-footer></app-footer>
  </section>
</template>

<script>
import AppHeader from '@/js/layouts/AppHeader.vue';
import AppFooter from '@/js/layouts/AppFooter.vue';

    export default {
        components:{
            AppHeader, AppFooter
        }
    };
</script>
