
<script setup lang="ts">
import GeneralLayout from '@/Layouts/GeneralLayout.vue'
import MarkdownRendered from '@/Components/MarkdownRendered.vue'
import { marked } from 'marked'

const props = withDefaults(
    defineProps<{
        text?: string
    }>(),
    {
        text: '# Hello'
    })
const markdown = marked(props.text)
</script>

<template>
    <GeneralLayout>
        <MarkdownRendered v-html="markdown" />
    </GeneralLayout>
</template>
