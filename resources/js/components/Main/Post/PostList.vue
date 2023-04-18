<template>

</template>

<script>

import PostListItem from "./Items/PostListItem.vue";

export default {
    name: "PostList",
    components: {PostListItem},

    data() {
        return {
            posts: null
        }
    },

    methods: {
        getPosts() {
            axios.get('/api/posts')
                .then(response => {
                    this.posts = response.data
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },

    mounted() {
        this.getPosts();
    }
}
</script>

<style scoped>

</style>
