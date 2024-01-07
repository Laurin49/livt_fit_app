<template>
  <div class="mt-2 text-xl">
    {{ workout.datum }}
  </div>
  <div class="text-gray-500 text-l text-bold">
    {{ workout.exercise }} - {{ workout.muscle }}
  </div>
</template>

<script setup>
defineProps({
  workout: Object,
})
</script>