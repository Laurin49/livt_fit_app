<template>
  <Filters :filters="filters" />
  <div
    class="grid grid-cols-1 gap-4 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4"
  >
    <Workout v-for="workout in workouts.data" :key="workout.id" :workout="workout" />
  </div>
  <div v-if="workouts.data.length" class="flex justify-center w-full mt-8 mb-8">
    <Pagination :links="workouts.links" />
  </div>
</template>

<script setup>
import Workout from '@/Pages/Workout/Index/Components/Workout.vue'
import Filters from '@/Pages/Workout/Index/Components/Filters.vue'
import Pagination from '@/Components/UI/Pagination.vue'
defineProps({
  workouts: Object,
  filters: Object,
})
</script>
