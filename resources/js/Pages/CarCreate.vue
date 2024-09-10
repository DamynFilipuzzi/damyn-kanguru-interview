<script setup lang="ts">
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import { useForm } from '@inertiajs/vue3';
import CarForm from '@/Components/CarForm.vue';


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
};

</script>

<template>
<div class="bg-gray-100 min-h-screen flex flex-cols justify-center items-center">
    <div class="w-max-md p-3 bg-white shadow-md rounded-md">
        <CarForm />
    </div>
</div>
</template>