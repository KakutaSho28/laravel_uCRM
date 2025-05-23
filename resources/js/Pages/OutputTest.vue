<script setup>
import { Link } from '@inertiajs/inertia-vue3';

</script>
<template>
<Link href="/">表示テスト</Link><br>
<Link :href="route('output.index')">データ一覧表示が可能なインデックスへ</Link><br>
<Link :href="route('output.show',{id:1})">データ詳細確認可能な詳細画面へ</Link>
</template>
