<template>
    <main id="main" class="kh manufacture">
        <section class="top">
            <h2>ICT사업부</h2>
            <p>앞서가는 기술과 끊임없는 연구, 금하테크의 자부심입니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li><Link href="/manufacture/manufacture0">장갑</Link></li>
                        <li class="now"><Link href="/manufacture/manufacture1">컴퓨터</Link></li>
                        <li><Link href="/manufacture/manufacture2">방송통신음향장비</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner2">
            <div class="container">
                <span>제조(R&D)사업부</span>
                <div class="yellow-wrap">
                    <h3>컴퓨터</h3>
                    <p>보다 앞선 기술력으로 정보기기인 데스크톱 등을 제조 및 공급하고 있습니다.</p>
                </div>
            </div>
        </section>

        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <ul class="list-wrap sz">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img4/business4-2-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>컴퓨터 조립</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img4/business4-2-2.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>컴퓨터 제조</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>

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

    },

    mounted() {

    }
}
</script>
