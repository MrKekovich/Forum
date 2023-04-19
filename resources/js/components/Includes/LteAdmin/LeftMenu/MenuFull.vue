<template>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a @click.prevent class="nav-link">
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
                    <li class="nav-item">
                        <router-link :to="{name: 'post.index'}" class="nav-link">
                            <i class="far fas fa-user"></i>
                            <p>My posts</p>
                            <span class="badge badge-info right">{{ postCount }}</span>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <router-link :to="{name: 'calendar'}" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>
                        Calendar
                        <span class="badge badge-info right">2</span>
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link :to="{name: 'gallery'}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Gallery
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link :to="{name: 'mailbox'}" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                        Mailbox
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
                <a @click.prevent class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Pages
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link :to="{name: 'contacts'}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Contacts</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'faq'}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>FAQ</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'contact_us'}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Contact us</p>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <router-link :to="{name: 'settings'}" class="nav-link">
                    <i class="nav-icon fas fa-gear"></i>
                    <p>
                        Settings
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
                <a @click.prevent class="nav-link active">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Exit
                    </p>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "MenuFull",
    props: {
        postCount: 0,
    },
    mounted() {
        console.log('Component menu mounted.')
    }
}
</script>

<style scoped>

</style>
