<script setup>
import {Link} from '@inertiajs/vue3';
import {computed, defineProps} from 'vue';

const props = defineProps({
    links: {
        type: Array,
        required: true,
    },
    nextPageUrl: {
        type: String,
        required: true,
    },
    prevPageUrl: {
        type: String,
        required: true,
    },
});

// Filter out the previous and next links
const filteredLinks = computed(() => {
    return props.links.filter(link => link.label !== '&laquo; Previous' && link.label !== 'Next &raquo;');
});
</script>

<template>
    <div class="flex justify-between items-center mt-4">
        <Link
            as="button"
            :disabled="!prevPageUrl"
            :href="prevPageUrl"
            class="bg-gray-800 py-2 px-4 text-sm font-medium text-gray-300 hover:bg-gray-700"
        >
            Previous
        </Link>
        <ul class="flex space-x-1">
            <li
                v-for="link in filteredLinks"
                :key="link"
                :class="{ 'bg-blue-600 text-white': link.active }"
                class="py-2 px-4 leading-tight bg-gray-800 border border-gray-600 text-gray-400 hover:bg-gray-700 hover:text-white"
            >
                <Link :href="link.url" class="cursor-pointer" v-html="link.label"></Link>
            </li>
        </ul>
        <Link
            as="button"
            :disabled="!nextPageUrl"
            :href="nextPageUrl"
            class="bg-gray-800 py-2 px-4 text-sm font-medium text-gray-300 hover:bg-gray-700"
        >
            Next
        </Link>
    </div>
</template>
