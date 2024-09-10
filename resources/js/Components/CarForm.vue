<script setup lang="ts">
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import { useForm } from '@inertiajs/vue3';


const form = useForm({
    model_name: '',
    brand: '',
    color: '',
    year: '',
    release_date: '',
});

const submit = () => {
    form.post(route('car.store'), {
        // onFinish: () => {
        //     form.reset('password', 'password_confirmation');
        // },
    });
}
</script>

<template>
<h1 class="block text-2xl text-center">Create A Car</h1>
<form @submit.prevent="submit">
    <div>
        <label for="model_name">Model Name<span class="text-red-500">*</span></label>
        <TextInput id="model_name" type="text" v-model="form.model_name" required  />
        <InputError class="mt-2" :message="form.errors.model_name" />
    </div>
    <div>
        <label for="brand">Brand<span class="text-red-500">*</span></label>
        <TextInput id="brand" type="text" v-model="form.brand" required />
        <InputError class="mt-2" :message="form.errors.brand" />
    </div>
    <div>
        <label for="color">Color<span class="text-red-500">*</span></label>
        <TextInput id="color" type="text" v-model="form.color" required />
        <InputError class="mt-2" :message="form.errors.color" />
    </div>
    <div>
        <label for="year">Year<span class="text-red-500">*</span></label>
        <TextInput id="year" type="number" v-model="form.year" required />
        <InputError class="mt-2" :message="form.errors.year" />
    </div>
    <div>
        <label for="release_date">Release Date<span class="text-red-500">*</span></label>
        <TextInput id="release_date" type="date" v-model="form.release_date" required />
        <InputError class="mt-2" :message="form.errors.release_date" />
    </div>
    <div class="text-right mt-2">
        <button type="submit" class="bg-blue-500 rounded-md p-2 hover:bg-blue-400 text-white">Submit</button>
    </div>
</form>
</template>