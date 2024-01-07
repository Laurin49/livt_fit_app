<template>
  <form @submit.prevent="update">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-4">
        <label class="label">Exercise</label>
        <input v-model="form.exercise" type="text" class="input" />
        <div v-if="form.errors.exercise" class="input-error">
          {{ form.errors.exercise }}
        </div>      
      </div>
      <div class="col-span-2">
        <label class="label">Muscle</label>
        <input v-model="form.muscle" type="text" class="input" />
        <div v-if="form.errors.muscle" class="input-error">
          {{ form.errors.muscle }}
        </div>      
      </div>
      <div class="col-span-2">
        <label class="label">Datum</label>
        <input v-model="form.datum" type="date" class="input" />
        <div v-if="form.errors.datum" class="input-error">
          {{ form.errors.datum }}
        </div>      
      </div>
      <div class="col-span-4">&nbsp;</div>
      
      <div class="col-span-2">
        <label class="label">Sets</label>
        <input v-model.number="form.set" type="text" class="input" />
        <div v-if="form.errors.set" class="input-error">
          {{ form.errors.set }}
        </div>  
      </div>
      <div class="col-span-2">
        <label class="label">Weight (min)</label>
        <input v-model.number="form.weight_min" type="text" class="input" />
        <div v-if="form.errors.weight_min" class="input-error">
          {{ form.errors.weight_min }}
        </div>  
      </div>
      <div class="col-span-2">
        <label class="label">Weight (max)</label>
        <input v-model.number="form.weight_max" type="text" class="input" />
        <div v-if="form.errors.weight_max" class="input-error">
          {{ form.errors.weight_max }}
        </div>  
      </div>
      <div class="col-span-3">
        <button type="submit" class="btn-primary">Update</button>
      </div>
      <div class="col-span-3">
        <div class="flex justify-end">
          <Link :href="route('workouts.index')" class="btn-secondary">&lt;- Back</Link>
        </div>
      </div>
    </div>
  </form>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/inertia-vue3'
const props = defineProps({
  workout: Object,
})
const form = useForm({
  exercise: props.workout.exercise,
  muscle: props.workout.muscle,
  datum: props.workout.datum,
  set: props.workout.set,
  weight_min: props.workout.weight_min,
  weight_max: props.workout.weight_max,
})
const update = () => form.put(
  route('workouts.update', {workout: props.workout.id})
)
</script>