<template>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"></button>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        name: "AlertSuccess"
    }
</script>

<style scoped>

</style>