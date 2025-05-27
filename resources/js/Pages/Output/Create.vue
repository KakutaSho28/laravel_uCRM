<script setup>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
const form = reactive({
    team: null,
    description: null,
    pts_avg: 0.0,
    ast_avg: 0.0,
    reb_avg: 0.0
})
const submitFunction = () => {
    Inertia.post('/output', form)
}

</script>
<template>
    <form @submit.prevent="submitFunction">
        <input type="text" name="team" v-model="form.team"><br>
        <input type="text" name="description" v-model="form.description"><br>
        <input type="number" name="pts_avg" v-model="form.pts_avg" step="0.1"><br>
        <input type="number" name="ast_avg" v-model="form.ast_avg" step="0.1"><br>
        <input type="number" name="reb_avg" v-model="form.reb_avg" step="0.1"><br>
        <button>送信</button>
    </form>
</template>
