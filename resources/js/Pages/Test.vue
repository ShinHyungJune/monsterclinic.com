<template>
    <form @submit.prevent="login">
        <button>로그인</button>
    </form>
</template>
<script>
import {Link} from '@inertiajs/inertia-vue';

export default {
    components: { Link},

    data() {
        return {

        }
    },

    methods: {
        login() {
            axios.post("https://memory.in-diary.com/app/login", {
                ids: "member1234",
                password: "member1234",
            })
        },
    },

    mounted() {

    }
}
</script>
