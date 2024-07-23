<script setup>
</script>

<template>
    <div v-if="$page.props.flash.status === 'Success'" class="bg-blue-300 text-white p-4">
        {{ $page.props.flash.message }}
    </div>
    <div v-if="$page.props.flash.status === 'Danger'" class="bg-red-300 text-white p-4">
        {{ $page.props.flash.message }}
    </div>
</template>
