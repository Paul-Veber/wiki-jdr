
<script setup lang="ts">
import GeneralLayout from '@/Layouts/GeneralLayout.vue'
import { Head } from '@inertiajs/vue3'

defineProps<{
    canLogin?: boolean
    canRegister?: boolean
}>();
</script>

<template>
    <Head title="Wiki JDR" />

    <GeneralLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Wiki JDR</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-center p-6 text-gray-900 dark:text-gray-100">Mon site de notes pour mes campagnes de JDR</div>
                </div>
            </div>
        </div>
    </GeneralLayout>
</template>
