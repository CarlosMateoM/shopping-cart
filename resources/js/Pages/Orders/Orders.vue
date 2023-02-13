<script setup>

import Invoice from './Partials/Invoice.vue';
import { Link } from '@inertiajs/inertia-vue3';


const props = defineProps({
    data: Object
});

</script>

<template>

    <div class="main min-h-screen flex justify-center items-center" style="background-color: white">
        <div class="order-history-container">
            <h1 class="title">Historial de compras</h1>
            <div class="order-invoice-container">
                <div class="invoice" v-for="invoiceData in data.invoice">
                    <Invoice class="invoice" :data="invoiceData" />
                </div>
            </div>
            <div class="back-container">
                <Link :href="route('cart.index')" role="button">
                    <p>
                        Regresar 
                    </p>
                </Link>
            </div>
        </div>
    </div>

</template>

<style>

.title {
    margin:auto;
    padding: 10px;
    text-align: center;
    font-weight: bold;
    font-size: x-large;
    padding-top: 0px;
    margin-bottom: 20px;
    width: 90%;
    border-bottom: 3px solid rgb(202, 200, 200);
}

.order-history-container {
    border-radius: 20px;
    padding: 20px;
    width: 80%;
    height: 750px;
    background-color: antiquewhite;
}

.order-invoice-container{
    height: 570px;
    overflow-y: scroll;
}

.invoice {
    margin-top: 50px
}

.invoice:nth-child(1) {
    margin-top: 0px
}

.back-container {
    margin: 20px auto;
    width: 90%;
    padding: 20px;
    border-top: 3px solid rgb(202, 200, 200);
    text-align: center;
}

</style>