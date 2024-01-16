<template>
  <form @submit.prevent="filter">
    <div class="flex flex-wrap justify-between gap-2 p-2 mt-2 mb-4 border border-solid">
      <div class="flex items-end">
        <select v-model="filterForm.muscle" class="w-30 input-filter-l">
          <option :value="null">Muscle</option>
          <option>Rücken</option>
          <option>Brust</option>
          <option>Schultern</option>
          <option>Beine</option>
          <option>Bizeps</option>
          <option>Trizeps</option>
        </select>
      </div>
      <div class="flex items-end gap-4">
        <div>
          <label class="label">Datum_von</label>
          <input v-model="filterForm.datum_von" type="date" class="input" />
        </div>
        <div>
          <label class="label">Datum bis</label>
          <input v-model="filterForm.datum_bis" type="date" class="input" />
        </div>
      </div>
      <div class="flex items-end gap-4">
        <button type="submit" class="btn-normal">Filter</button>
        <button type="reset" class="btn-secondary" @click="clear">Clear</button>
      </div>
    </div>
  </form>
</template>
<script setup>
import {useForm} from '@inertiajs/inertia-vue3'
const props = defineProps({
  filters: Object,
})
const filterForm = useForm({
  muscle: props.filters.muscle ?? null,
  datum_von: props.filters.datum_von ?? Date('yyyy-MM-dd'),
  datum_bis: props.filters.datum_bis ?? Date('yyyy-MM-dd'),
})
const filter = () => {
  filterForm.get(
    route('workouts.index'),
    {
      preserveState: true,
      preserveScroll: true,
    },
  )
}
const clear = () => {
  filterForm.muscle = null
  filterForm.datum_von = null
  filterForm.datum_bis = null
  filter()
}
</script>