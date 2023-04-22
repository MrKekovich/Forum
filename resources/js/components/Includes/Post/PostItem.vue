<template>
    <router-link :to="{name: 'post.show', params: {id: post?.id}}"
                 class="list-group-item list-group-item-action list-group-item-dark">
        <figure class="figure">
            <img :src="post?.cover_image"
                class="figure-img img-fluid rounded"
                onerror="this.onerror=null; this.src='https://via.placeholder.com/400x300/777777/dddddd?text=No%20Image'"
                :alt="post?.cover_image">
            <figcaption class="figure-caption">
                {{ post?.title }}
                <p>{{ post?.content }}</p><br>
                <template v-for="tag in tags">
                    #{{ tag.title }}
                </template>
                <br>
                created by: {{ user?.name }}
            </figcaption>
        </figure>
    </router-link>
    <a @click.prevent class="list-group-item list-group-item-action list-group-item-primary">edit</a>
    <button type="submit" class="list-group-item list-group-item-action list-group-item-danger"
            onclick="alert('post will be deleted')">delete
    </button>
    <br>
</template>

<script>
export default {
    name: "PostItem",
    props: {
        post: {
            type: Object,
            required: true
        },
    },
    data() {
        return {
            user: null,
            tags: null
        }
    },
    methods: {
        getUser(userId) {
            axios.get(`/api/users/${userId}`)
                .then(response => {
                    this.user = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        getTags(postId) {
            axios.get(`/api/tags/${postId}`)
                .then(response => {
                    this.tags = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },
    mounted() {
        this.getUser(this.post.user_id);
        this.getTags(this.post.id);
    }
}
</script>

<style scoped>

</style>
