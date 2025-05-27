<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const newTeam = ref('');
const newDescription = ref('');
const newPtsAvg = ref(0);
const newAstAvg = ref(0);
const newRebAvg = ref(0);

</script>
<template>
<Link href="/">表示テスト</Link><br>
<Link :href="route('output.index')">データ一覧表示が可能なインデックスへ</Link><br>
<Link :href="route('output.show',{id:1})">データ詳細確認可能な詳細画面へ</Link><br>
<input type="text" name="newTeam" v-model="newTeam">{{ newTeam }}<br>
<input type="text" name="newDescription" v-model="newDescription">{{ newDescription }}<br>
<input type="number" name="newPtsAvg" v-model="newPtsAvg" step="0.1">{{ newPtsAvg }}<br>
<input type="number" name="newAstAvg" v-model="newAstAvg" step="0.1">{{ newAstAvg }}<br>
<input type="number" name="newRebAvg" v-model="newRebAvg" step="0.1">{{ newRebAvg }}<br>
<Link as="button" method="post" :href="route('output.store')"
:data="{
    team: newTeam,
    description: newDescription,
    pts_avg: newPtsAvg,
    ast_avg: newAstAvg,
    reb_avg: newRebAvg,
}">
保存テストやあ
</Link><br>
<Link :href="route('output.create')">フォーム入力画面へ</Link>

</template>
