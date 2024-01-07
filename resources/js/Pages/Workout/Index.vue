<template>
  <div
    class="grid grid-cols-1 gap-4 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4"
  >
    <Box v-for="workout in workouts" :key="workout.id">
      <div class="flex justify-between align-items-center">
        <Link :href="route('workouts.show', { workout: workout.id })">
          {{ workout.datum }} - {{ workout.exercise }}
        </Link>
        <div>
          <Link :href="route('workouts.edit', {workout: workout.id})" class="px-2 mr-1 btn-primary">
            Edit
          </Link>
          <Link
            :href="route('workouts.destroy', {workout: workout.id})" method="DELETE" class="px-2 btn-secondary"
          >
            Delete
          </Link>
        </div>
      </div>
    </Box>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Box from '@/Components/UI/Box.vue'

defineProps({
  workouts: Array,
})
</script>
