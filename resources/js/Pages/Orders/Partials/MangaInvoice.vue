<script setup>

const props = defineProps({
    data: Object
});

function formatMoney(value) {
    return new Intl.NumberFormat('es-CO', {
        style: "currency",
        currency: "COP",
        minimumFractionDigits: 0,
    }).format(value);
}

</script>

<template>
    <div class="manga-container">
        <div class="info">
            <img class="object-cover h-20  rounded-t-lg" :src="'/img/cover/' + data.image_path" alt="product image" />
        </div>
        <div class="info">
           <p>
            {{ data.title }}
           </p> 
        </div>
        <div class="info">
            <p>
                {{ data.pivot.quantity}}
            </p>
        </div>
        <div class="info">
            <p>
                {{ formatMoney(data.price) }}
            </p>
        </div>
    </div>

</template>

<style>
.manga-container {
    border-radius: 10px;
    display: flex;
    margin: 10px auto;
    padding: 5px;
    width: 70%;
    justify-content: space-between;
    background-color: white;

}



</style>