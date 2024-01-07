<template>
  <div class="flex flex-col-reverse gap-4 md:grid md:grid-cols-12">
    <Box class="flex items-center md:col-span-7">
      <div class="w-full font-medium text-center text-gray-500">No images</div>
    </Box>
    <div class="flex flex-col gap-4 md:col-span-5">
      <Box>
        <template #header>
          Basic info
        </template>
        <WorkoutContent :workout="workout" class="text-gray-500" />
      </Box>

      <Box>
        <template #header>
          Offer
        </template>
        Make an offer
      </Box>
    </div>
  </div>
  <div class="flex justify-end mt-2">
    <Link :href="route('workouts.index')" class="px-4 btn-secondary">&lt;- Back</Link>
  </div>
</template>

<script setup>
import WorkoutContent from '@/Components/WorkoutContent.vue'
import Box from '@/Components/UI/Box.vue'
import { Link } from '@inertiajs/inertia-vue3'
defineProps({
  workout: Object,
})
</script>