
<script setup>

import MangaCard from './MangaCard.vue';;

defineProps({
    mangas: Object,
});

</script>

<template>
     <div class="flex flex-wrap justify-center mt-12">
        <div class="flex flex-wrap w-11/12 justify-around gap-y-7">

            <template v-for="manga in mangas">
                <MangaCard :manga="manga" />
            </template>
            
        </div>
    </div>

</template>