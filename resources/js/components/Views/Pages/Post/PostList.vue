<template>
    <div class="container">
        <div class="list-group">
            <template v-for="post in posts">
                <post-item :post="post"></post-item>
            </template>
        </div>
    </div>
</template>

<script>
import PostItem from "../../../Includes/Post/PostItem.vue";

export default {
    name: "PostList",
    data() {
        return {
            posts: null,
        }
    },
    methods: {
        getPosts() {
            axios.get("/api/posts")
                .then(response => {
                    this.posts = response.data;
                })
        },
    },
    components: {PostItem},
    mounted() {
        this.getPosts();
    }
}
</script>

<style scoped>

</style>
