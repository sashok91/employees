<template>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"></button>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        name: "AlertFail"
    }
</script>

<style scoped>

</style>