<template>
    <div>
        Test
    </div>
</template>

<script>

import { mapGetters } from 'vuex';

export default {
    name: "CommentsComponent",
    mounted () {
        this.$store
            .dispatch('fetchComments')
            .then(() => {})
            .catch(err => {});
    },
}
</script>
