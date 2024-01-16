<template>
  <header class="w-full bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900">
    <div class="container mx-auto">
      <nav class="flex items-center justify-between p-4">
        <div class="text-xl font-bold text-center text-indigo-600 dark:text-indigo-300">
          <Link :href="route('index')">Home</Link>
        </div>
        <div class="text-xl font-bold text-center text-indigo-600 dark:text-indigo-300">
          <Link :href="route('workouts.index')">Workouts</Link>
        </div>
        <div v-if="user" class="flex items-center gap-4">
          <Link class="text-sm text-gray-500" :href="route('practice.workout.index')">{{ user.name }}</Link>
          <Link :href="route('logout')" method="delete" as="button">Logout</Link>
          <Link :href="route('workouts.create')" class="btn-primary">+ New Workout</Link>
        </div>
        <div v-else class="flex items-center gap-2">
          <Link :href="route('user-account.create')">Register</Link>
          <Link :href="route('login')">Sign-In</Link>
        </div>
      </nav>
    </div>
  </header>
  <main class="container p-4 mx-auto">
    <div v-if="flashSuccess" class="p-2 mb-4 border border-green-200 rounded-md shadow-sm dark:border-green-800 bg-green-50 dark:bg-green-900">
      {{ flashSuccess }}
    </div>
    <slot>Default</slot>
  </main>
</template>

<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/inertia-vue3'

// page.props.value.flash.success
const page = usePage()
const user = computed(
  () => page.props.value.user,
)
const flashSuccess = computed(
  () => page.props.value.flash.success,
)
</script>