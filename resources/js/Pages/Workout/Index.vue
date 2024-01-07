<template>
  <div
    class="grid grid-cols-1 gap-4 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4"
  >
    <Box v-for="workout in workouts" :key="workout.id">
      <div class="flex justify-between align-items-center">
        <Link :href="route('workouts.show', { workout: workout.id })">
          {{ workout.datum }} - {{ workout.exercise }}
        </Link>
        <div class="flex justify-between">
          <Link :href="route('workouts.edit', {workout: workout.id})" as="button">
            <PencilIcon class="w-5 h-5 mr-2 text-blue-500" />
          </Link>
          <Link :href="route('workouts.destroy', {workout: workout.id})" method="DELETE" as="button">
            <TrashIcon class="w-5 h-5 text-blue-500" />
          </Link>
        </div>
      </div>
    </Box>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Box from '@/Components/UI/Box.vue'
import { PencilIcon, TrashIcon } from '@heroicons/vue/24/solid'

defineProps({
  workouts: Array,
})
</script>
