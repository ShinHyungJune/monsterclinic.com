<template>
    <div class="m-pagination">
        <button class="m-pagination-btn" @click="first">
            <img src="/img/pagination-first.png" alt="">
        </button>
        <button class="m-pagination-btn" @click="prev">
            <img src="/img/pagination-prev.png" alt="">
        </button>

        <div class="m-pagination-pages">
            <button :class="pageClass(page)" v-for="page in pages" :key="page" @click="paginate(page)">{{page}}</button>
        </div>

        <button class="m-pagination-btn" @click="next">
            <img src="/img/pagination-next.png" alt="">
        </button>
        <button class="m-pagination-btn" @click="last">
            <img src="/img/pagination-last.png" alt="">
        </button>
    </div>
</template>
<script>
export default {
    props:["meta"],

    computed: {
        pages(){
            let i = 1;
            let pages = [];

            for(i = 1; i <= this.meta.last_page; i++){
                pages.push(i);
            }

            return pages;
        }
    },

    methods: {
        pageClass(page){
            return this.meta.current_page == page
                ? "m-pagination-page active"
                : "m-pagination-page";
        },

        paginate(page){
            this.$emit("paginate", page);
        },

        first(){
            this.paginate(1);
        },

        prev(){
            if(this.meta.current_page > 1)
                this.paginate(parseInt(this.meta.current_page) - 1);
        },

        next(){
            if(this.meta.current_page < this.meta.last_page)
                this.paginate(parseInt(this.meta.current_page) + 1);
        },

        last(){
            this.paginate(this.meta.last_page);
        }
    }

}
</script>
