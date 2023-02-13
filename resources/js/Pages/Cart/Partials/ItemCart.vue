<script setup>

import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { usePage } from '@inertiajs/inertia-vue3';
import { useForm } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';


const cartId = usePage().props.value.data.cart.id;


const props = defineProps({
    manga: Object,
});

const count = ref(props.manga.pivot.quantity);

function formatMoney(value) {
    return new Intl.NumberFormat('es-CO', {
        style: "currency",
        currency: "COP",
        minimumFractionDigits: 0,
    }).format(value);
}

function increment() {
    if(count.value < props.manga.stock){
        count.value++;
    }
}

function decrement() {
    if(count.value > 1){
        count.value--;
    }
}

const form = useForm({
    cart_id: cartId,
    manga_id: props.manga.id,
    quantity: count,
});

const deleteForm = useForm({
    id: props.manga.pivot.id,
});

const addItemCart = () => {
    form.patch(route('itemCart.update'), {
        preserveScroll: true,
    });
}

const deleteItemCart = () => {
   deleteForm.delete(route('itemCart.destroy'), {
        preserveScroll: true,
    });
}


</script>

<template>

    <div class="product">
        <div class="test product-img">
            <img class="object-cover h-20  rounded-t-lg" :src="'/img/cover/' + manga.image_path" alt="product image" />
        </div>
        <div class="test product-info">
            <p>{{ manga.title }}</p>
            <small></small>
            {{ manga.categories[0].name }}
        </div>
        <div class="test product-form">
            <form @submit.prevent="addItemCart">
                <div class="flex justify-center">
                    <PrimaryButton  @click="decrement()" :disabled="form.processing"  class="focus:ring-0 focus:ring-white" style="background-color: white;">
                        <svg class="svg fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path
                                d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                        </svg>
                    </PrimaryButton>
                    <TextInput id="quantity"
                        v-model="form.quantity"
                        autocomplate="quantity"
                     class="cantidad-input mx-2 border text-center w-8" type="text"/>

                    <PrimaryButton  @click="increment()" :disabled="form.processing" class="focus:ring-0 focus:ring-white" style="background-color: white;">
                        <svg class="svg fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path
                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                        </svg>
                    </PrimaryButton>
                </div>
            </form>

        </div>
        <div class="test product-price">
            <p>{{ formatMoney(manga.price) }}</p>
        </div>
        <div>
            <form @submit.prevent="deleteItemCart">
                <PrimaryButton :disabed="form.processing" >
                    x
                </PrimaryButton>
            </form>
            
        </div>
    </div>
</template>

<style>
.products-details {
    max-height: 500px;
    margin: 40px;
    margin-left: 120px;
    overflow-y: scroll;
}

.product {
    display: flex;
    padding: 10px;
    border-radius: 20px;
    background-color: white;
    margin: 10px;
}

.product-form, .product-price{
    display: flex;
    align-items: center;
}

.test {
    flex: 1;
}

.svg {
    width: 10px;
}

.cantidad-input {
    margin: 10px;
    padding: 0px;
    border: none;
}
</style>