<script setup>

import itemcart from './Partials/ItemCart.vue';
import { Link, useForm, usePage } from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue'

const props = defineProps({
    data: Object,
    subtotal: Object
});

const paymentForm = useForm({
    cart_id: props.data.cart.id,
    user_id: props.data.cart.user_id,
});

const paymentSubmit = () => {
    paymentForm.post(route('invoice.store'), {
        onFinish: () => form.reset('password'),
    });
};


function mangasCount() {
    let objectSize = 0;

    if (props.data.cart == null) {
        return 0;
    }

    for (let k in props.data.cart.mangas) {
        objectSize += props.data.cart.mangas[k].pivot.quantity;
    }
    return objectSize;
}

function shipping(){
    if(mangasCount() == 0){
        return 0;
    } else {
        return 10000;
    }
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

    <div class="main min-h-screen flex justify-center items-center" style="background-color: white">
        <div class="cart-container">
            <div class="cart-datails">
                <div class="details-section">
                    <Link :href="route('manga-unicor')" role="button">
                    <p> Seguir comprando</p>
                    </Link>
                </div>
                <div class="details-section">
                    <p>Carrito de compras</p>
                    <small>tienes {{ mangasCount() }} articulos en tu carrito</small>
                </div>
                <div class="products-details">
                    <template v-if="data.cart">
                        <template v-for="manga in data.cart.mangas">
                            <itemcart :manga="manga" />
                        </template>
                    </template>
                </div>
            </div>
            <div class="cart-payment">
                <div class="payment-details">
                    <div>
                        <p>DETALLES DE PAGO</p>
                        <div class="card-payment">
                            <div class="card"><img src="img/card-payment/VISA-Logo.png" alt="card-payment"></div>
                            <div class="card"><img src="img/card-payment/MasterCard_Logo.png" alt="card-payment"></div>
                            <div class="card"><img src="img/card-payment/Rupay-Logo.png" alt="card-payment"></div>
                        </div>
                        <div class="mt-3">
                            <InputLabel for="email" value="Propietario" />

                            <TextInput id="email" type="email" class="mt-1 block w-full" required autofocus
                                autocomplete="username" />

                            <InputError class="mt-2" />
                        </div>
                        <div class="mt-3">
                            <InputLabel for="email" value="Número tarjeta" />

                            <TextInput id="email" type="email" class="mt-1 block w-full" required autofocus
                                autocomplete="username" />

                            <InputError class="mt-2" />
                        </div>
                        <div class="flex mt-3 mb-6">
                            <div>

                                <InputLabel for="email" value="Fecha caducidad" />

                                <TextInput id="email" type="email" class="mt-1 block w-full" required autofocus
                                    autocomplete="username" />

                                <InputError class="mt-2" />
                            </div>
                            <div class="ml-2">
                                <InputLabel for="email" value="cvv" />

                                <TextInput id="email" type="email" class="mt-1 block w-full" required autofocus
                                    autocomplete="username" />

                                <InputError class="mt-2" />
                            </div>
                        </div>
                    </div>

                    <div class="info-container">
                        <div class="info-section">

                            <div>
                                <p>
                                    Subtotal:
                                </p>
                            </div>
                            <div>
                                <p>
                                    {{ formatMoney(subtotal.subtotal) }}
                                </p>
                            </div>
                        </div>

                        <div class="info-section">

                            <div>
                                <p>
                                    Descuento:
                                </p>
                            </div>
                            <div>
                                <p>
                                    {{ formatMoney(0) }}
                                </p>
                            </div>
                        </div>
                        <div class="info-section">

                            <div>
                                <p>
                                    Envio:
                                </p>
                            </div>
                            <div>
                                <p>
                                    {{ formatMoney(shipping()) }}
                                </p>
                            </div>
                        </div>
                        <div class="info-section" style="margin-top:20px">

                            <div>
                                <p>
                                    TOTAL:
                                </p>
                            </div>
                            <div>
                                <p>
                                    {{ formatMoney(subtotal.subtotal + shipping()) }}
                                </p>
                            </div>
                        </div>
                        <form @submit.prevent="paymentSubmit">
                            <PrimaryButton class="payment-btn" :disabled="paymentForm.processing">Pagar</PrimaryButton>
                        </form>
                    </div>


                </div>
                <div class="purchase-history">
                    <Link :href="route('invoice.index')" role="button">
                        <p>Historial de compras</p>
                    </Link>
                </div>
            </div>
        </div>
    </div>

</template>

<style>
.cart-container {
    display: flex;
    border-radius: 20px;
    width: 80%;
    height: 750px;
    background-color: antiquewhite;
}

.cart-datails,
.cart-payment {
    width: 50%;
}

.details-section {
    margin: 40px;
    padding: 10px;
    border-bottom: 3px solid rgb(202, 200, 200);
}

.details-section:nth-child(2) {
    border-bottom: none;
}

.details-section:nth-child(1) {
    padding-top: 0px;
    margin-bottom: 20px;

}

.details-section:nth-child(2) {
    padding-top: 0px;
    margin-top: 0px;
    margin-left: 120px;
}


.cart-payment {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
}

.info-container {
    padding-top: 20px;
    border-top: 1px solid rgb(202, 200, 200);
}

.payment-details {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 400px;
    height: 600px;
    padding: 20px;
    margin: 40px;
    background-color: white;
    border-radius: 10px;
}

.purchase-history {
    width: 90%;
    text-align: end;
    margin-bottom: 40px;
    padding: 10px;
    border-top: 3px solid rgb(202, 200, 200);
    border-bottom: none;
}

.info-section {
    display: flex;
    justify-content: space-between;
}

.payment-btn {
    margin-top: 10px;
    width: 100%;
}

p {
    font-weight: bold;
}


.card-payment {
    margin-top: 20px;
    display: flex;
    justify-content: space-around;
}

.card {
    width: 80px;
}
</style>