<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const newTitle = ref('')
const newContent = ref('')

</script>

<template>
    Inertiaテストです<br>
    <a href="/">aタグ経由</a><br>
    <Link href="/">Link経由</Link><br>
    <Link :href="route('inertia.index')">名前付きルートの確認でIndexへ</Link><br>
    <Link :href="route('inertia.create')">Form画面へ</Link><br>
    <Link :href="route('inertia.show', { id: 999 })">詳細表示</Link><br>
    <input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
    <input type="text" name="newContent" v-model="newContent">{{ newContent }}
    <br>
    <Link as="button" method="post" :href="route('inertia.store')"
    :data="{
        title: newTitle,
        content: newContent
    }">
    保存テスト
    </Link>
</template>
