<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    first_name: '',
    middle_name: '',
    first_surname: '',
    second_surname: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>

    <Head title="Register" />


    <div class="main min-h-screen">
        <div clas="flex content-start">
            <Link :href="route('manga-unicor')" role="button">

            <img id="logo-home" src="img/logo.png" class="mb-8" width="150" alt="tag">

            </Link>
            <p
            class="mb-16 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl text-center"
             >Todo tipo de mangas, <br/>para todos los gustos</p>
            <div class="mt-20">
                <img src="img/banner-login.jpg" width="500" alt="tag">
            </div>

        </div>

        <div class="form-container">
            <h1
                class="mb-16 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl text-center ">
                Crear una cuenta
            </h1>
            <form @submit.prevent="submit">
                <div>
                    <InputLabel for="first_name" value="First Name" />

                    <TextInput id="first_name" type="text" class="mt-1 block w-full" v-model="form.first_name" required
                        autofocus autocomplete="name" />

                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mt-4">
                    <InputLabel for="middle_name" value="Middle Name" />

                    <TextInput id="middle_name" type="text" class="mt-1 block w-full" v-model="form.middle_name" required
                        autofocus autocomplete="name" />

                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mt-4">
                    <InputLabel for="first_surname" value="First Surname" />

                    <TextInput id="first_surname" type="text" class="mt-1 block w-full" v-model="form.first_surname" required
                        autofocus autocomplete="name" />

                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mt-4">
                    <InputLabel for="second_surname" value="Second Surname" />

                    <TextInput id="second_surname" type="text" class="mt-1 block w-full" v-model="form.second_surname" required
                        autofocus autocomplete="name" />

                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div class="mt-4">
                    <InputLabel for="email" value="Email" />

                    <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
                        autocomplete="username" />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password" value="Password" />

                    <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                        autocomplete="new-password" />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password_confirmation" value="Confirm Password" />

                    <TextInput id="password_confirmation" type="password" class="mt-1 block w-full"
                        v-model="form.password_confirmation" required autocomplete="new-password" />

                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <Link :href="route('login')"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Already registered?
                    </Link>

                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Register
                    </PrimaryButton>
                </div>
            </form>
        </div>


    </div>
</template>

<style>
.main {
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-container {
    margin-left: 100px;
    width: 400px;
}

#logo-home{
    position: absolute;
    top: 10px;
    left: 10px;
}

</style>
