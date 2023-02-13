<script setup>

import Layout from '@/Layouts/Layout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import MangaCatalog from './Partials/MangaCatalog.vue';
import { usePage } from '@inertiajs/inertia-vue3';



defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    navbarStyle: String,
    name: Object,
    data: Object,
    mangas: Object,
});



</script>



<template>

    <Head title="Tus animes favoritos" />

    <Layout :canLogin="canLogin" :canRegister="canRegister" :navbarStyle="navbarStyle" :data="data"/>

    <MangaCatalog :mangas="mangas" />

</template>

