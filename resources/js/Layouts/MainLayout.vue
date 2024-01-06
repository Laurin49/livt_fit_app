<template>
  <header class="w-full bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900">
    <div class="container mx-auto">
      <nav class="flex items-center justify-between p-4">
        <div class="text-xl font-bold text-center text-indigo-600 dark:text-indigo-300">
          <Link :href="route('index')">Home</Link>
        </div>
        <div class="text-xl font-bold text-center text-indigo-600 dark:text-indigo-300">
          <Link :href="route('index.show')">Show</Link>
        </div>
        <div>
          <Link :href="route('index.create')" class="btn-primary">+ Create</Link>
        </div>
      </nav>
    </div>
  </header>
  <main class="container p-4 mx-auto">
    <slot>Default</slot>
  </main>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3'

</script>