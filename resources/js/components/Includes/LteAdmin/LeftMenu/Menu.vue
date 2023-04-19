<template>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a @click.prevent="" class="nav-link">
                    <i class="nav-icon fas fa-scroll"></i>
                    <p>
                        Posts
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link :to="{name: 'post.index'}" class="nav-link">
                            <i class="far fas fa-users"></i>
                            <p>All posts</p>
                        </router-link>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "Menu"
}
</script>

<style scoped>

</style>
