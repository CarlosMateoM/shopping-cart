<script setup>

import NavBar from '@/Components/NavBar.vue';

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    navbarStyle: String,
    data: Object,
});

</script>

<template>

    <NavBar
    class="sticky top-0 z-50" 
        :canLogin="props.canLogin"
        :canRegister="props.canRegister"
        :navbarStyle="props.navbarStyle"
        :data="data"
    />
    
</template>

<style>


</style>