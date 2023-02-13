<script setup>
import MangaInvoice from './MangaInvoice.vue';


const props = defineProps({
    data: Object
})

function mangasCount() {
    let objectSize = 0;
    for(let index in props.data.mangas){
        objectSize += props.data.mangas[index].pivot.quantity;
    }
    return objectSize;
}

function subtotalInvoice() {
    let objectSize = 0;
    for(let index in props.data.mangas){
        objectSize += (props.data.mangas[index].pivot.quantity * props.data.mangas[index].price);
    }
    return objectSize;
}

function formatMoney(value) {
    return new Intl.NumberFormat('es-CO', {
        style: "currency",
        currency: "COP",
        minimumFractionDigits: 0,
    }).format(value);
}

</script>

<template>
    <div class="purchase-summary">
        <div class="purchase-summary-info">
            <div class="info">
                <div><p>Fecha</p></div>
                <div>{{ data.created_at.substring(0, 10) }}</div>
            </div>
            <div class="info">
                <div><p>Cantidad</p></div>
                <div>{{ mangasCount() }}</div>
            </div>
            <div class="info">
                <div><p>Subtotal</p></div>
                <div>{{ formatMoney(subtotalInvoice()) }}</div>
            </div>
        </div>
        <div class="purchase-summary-products">
            <div v-for="manga in data.mangas">
                <MangaInvoice :data="manga"/>
            </div>
        </div>
    </div>
</template>

<style>
    .purchase-summary-info{
        display: flex;
        width: 80%;
        padding: 10px;
        border-radius: 10px;
        justify-content: space-around;
        background-color: white;
        margin: 10px auto;
    }

    .info {
        flex: 1;
        display: flex;
        justify-content: space-around;
    }

    p {
        font-weight: bold;
    }

</style>