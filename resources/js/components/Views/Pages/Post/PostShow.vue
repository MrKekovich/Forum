<template>
    <div class="container" v-if="post">
        <div class="list-group">
            <post-item :post="post"></post-item>
        </div>
    </div>
</template>

<script>
import PostItem from "../../../Includes/Post/PostItem.vue";

export default {
    name: "PostShow",

    data() {
        return {
            post: null,
            chats: null,
        }
    },

    methods: {
        getPost() {
            axios.get(`/api/posts/${this.id}`)
                .then(response => {
                    this.post = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        getChats() {
            axios.get(`/api/chats/${this.id}`)
                .then(response => {
                    this.chats = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },

    mounted() {
        this.getPost();
        this.getChats();
    },

    computed: {
        id() {
            return this.$route.params.id;
        }
    },
    components: {PostItem},
    params: {
        id: {
            required: true
        }
    }
}
</script>

<style scoped>

</style>
