<template>
  <h1 class="mb-4 text-3xl">Your Workouts</h1>
  <section class="mb-8">Filters</section>
  <section class="grid grid-cols-1 gap-2 lg:grid-cols-2">
    <Box v-for="workout in workouts" :key="workout.id">
      <div class="flex flex-col justify-between gap-2 md:flex-row md:items-center">
        <div>
          <div class="items-center gap-2 xl:flex">
            <WorkoutContent :workout="workout" class="text-2xl font-medium" />
          </div>
        </div>
        <div class="flex items-center gap-1 text-gray-600 dark:text-gray-300">
          <Link class="text-xs font-medium btn-outline">
            <MagnifyingGlassIcon class="w-4 h-4 mr-2 text-blue-500" />
          </Link>
          <Link class="text-xs font-medium btn-outline" as="button">
            <PencilIcon class="w-4 h-4 mr-2 text-blue-500" />
          </Link>
          <Link class="text-xs font-medium btn-outline" as="button">
            <TrashIcon class="w-4 h-4 text-blue-500" />
          </Link>
        </div>
      </div>
    </Box>
  </section>
</template>

<script setup>
import Box from '@/Components/UI/Box.vue'
import { Link } from '@inertiajs/inertia-vue3'
import WorkoutContent from '@/Components/WorkoutContent.vue'
import { PencilIcon, TrashIcon, MagnifyingGlassIcon } from '@heroicons/vue/24/solid'

defineProps({ workouts: Array })

</script>
