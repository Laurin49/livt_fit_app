<template>
  <form @submit.prevent="create">
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
        <button type="submit" class="btn-primary">Create</button>
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
const form = useForm({
  exercise: null,
  muscle: null,
  datum: null,
  set: 0,
  weight_min: 0,
  weight_max: 0,
})
const create = () => form.post(route('workouts.store'))
</script>