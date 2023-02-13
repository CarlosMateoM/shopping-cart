
<script setup>

import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import { watch } from "vue";
import { Inertia } from "@inertiajs/inertia";



const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    navbarStyle: String,
    data: Object,
});


function mangasCount() {
    let objectSize = 0;

    if (props.data == null) {
        return 0;
    }

    for (let k in props.data.cart.mangas) {
        objectSize += props.data.cart.mangas[k].pivot.quantity;
    }
    return objectSize;
}

</script>
<template>

    <nav id="nav">
        <div class="nav-container">

            <div class="nav-list">
                <ul class="list">
                    <li>Categorias</li>
                    <li>Novedades</li>
                    <li>Populares</li>
                    <li>Pagos y envíos</li>
                </ul>
            </div>
            <div class="flex">
                <Link :href="route('manga-unicor')" role="button">
                <ul class="list" style="font-weight: bold;">
                    <li>
                        <img src="img/logo.png" width="80" alt="tag">

                    </li>
                    <li>
                        Unicor Manga
                    </li>

                </ul>
                </Link>

            </div>

            <div class="nav-list nav-form" :style="props.navbarStyle">


                <ul class="list">
                    <li
                        class="cart font-sans block mt-4 lg:inline-block lg:mt-0 lg:ml-6 align-middle text-black hover:text-gray-700">
                        <Link :href="route('cart.index')" role="button" class="relative flex">
                        <svg class="flex-1 w-8 h-8 fill-current" viewbox="0 0 24 24">
                            <path
                                d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" />
                        </svg>
                        <span
                            class="absolute right-0 top-0 rounded-full bg-red-600 w-4 h-4 top right p-0 m-0 text-white font-mono text-sm  leading-tight text-center">

                            {{ mangasCount() }}

                        </span>
                        </Link>
                    </li>
                    <template v-if="props.canLogin">
                        <template v-if="$page.props.auth.user">
                            <p v-if="$page.props.auth.user">
                                {{ props.data.person.first_name +' '+ props.data.person.frist_surname }}  
                            </p>

                            <Link :href="route('logout')" method="post" as="button" class="register-btn">
                            Log Out
                            </Link>
                        </template>
                        <template v-else>
                            <Link :href="route('login')" class="login-btn">Entrar</Link>
                            <Link :href="route('register')" class="register-btn">Registrarse</Link>
                        </template>
                    </template>
                </ul>

            </div>

            <div class="nav-search">
             
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text" id="default-search"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border-0 rounded-lg bg-gray-50 focus:ring-0 focus:border-none "
                            placeholder="Buscar Título..." required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-slate-800 hover:bg-slate-600 focus:ring-0 focus:outline-none focus:ring-slate-800 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                    </div>
               
            </div>
        </div>

    </nav>

</template>

<style>
#nav {
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    background-color: antiquewhite;
}

.nav-container {
    display: flex;
    width: 95%;
    justify-content: space-between;
    align-items: center;

}

.nav-list {
    font-weight: bold;
    width: 30%;
}

.list {
    display: flex;
    list-style: none;
    align-items: center;
    justify-content: space-between;
}

.nav-form {
    width: 16%;
}

.nav-search {
    width: 20%;
}

.login-btn {
    padding: 10px;
    border-radius: 5px;

    background-color: rgb(176, 172, 172);

}

.register-btn {
    padding: 10px;
    border-radius: 5px;
    color: white;
    background-color: rgb(20, 19, 19);
}
</style>