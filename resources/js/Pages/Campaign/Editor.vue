<script setup lang="ts">
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import MarkdownRendered from '@/Components/MarkdownRendered.vue';
import { marked } from 'marked'
import { ref, computed } from 'vue'

const input = ref('# Hello')

const output = computed(() => marked(input.value))

const update = (e: Event) => input.value = (<HTMLInputElement>e.target).value
</script>

<template>
    <GeneralLayout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Editeur</h2>
            </template>

            <div class="editor">
                <textarea class="input" :value="input" @input="update"></textarea>
                <MarkdownRendered v-html="output"></MarkdownRendered>
            </div>
    </GeneralLayout>
</template>

<style>
    body {
      margin: 0;
    }

    .editor {
      height: 100vh;
      display: flex;
    }

    .input,
    .output {
      overflow: auto;
      width: 50%;
      height: 100%;
      box-sizing: border-box;
      padding: 0 20px;
    }

    .input {
      border: none;
      border-right: 1px solid #ccc;
      resize: none;
      outline: none;
      background-color: #f6f6f6;
      font-size: 14px;
      font-family: 'Monaco', courier, monospace;
      padding: 20px;
    }

    .output > h1 {
        font-size: 50px
    }

</style>
