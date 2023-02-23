<template>
    <main id="main" class="kh electric">
        <section class="top">
            <h2>전기공사업</h2>
            <p>앞서가는 기술과 끊임없는 연구, 금하테크의 자부심입니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li><Link href="/electric/electric0">전기공사</Link></li>
                        <li><Link href="/electric/electric1">계장제어</Link></li>
                        <li class="now"><Link href="/electric/electric2">수배전반</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner2">
            <div class="container">
                <span>전기공사업</span>
                <div class="yellow-wrap">
                    <h3>수배전반</h3>
                    <p>일체형 수배전반, 일반산업용 수배전반, MCC반/동력반, 분전반</p>
                </div>
            </div>
        </section>

        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <ul class="list-wrap">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-3-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>수배전 설비Power Substation</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-3-2.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>신규 변전실 설치 공사</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-3-3.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>수배전반 설치 및 교체 공사</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-3-4.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>변압기 설치 및 교체 공사</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-3-5.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>전력용 콘덴서 설계 및 설치 공사</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-3-6.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>디지털계전기 Relay Coordination 및 Setting</p>
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
