<template>
    <main id="main" class="kh electric">
        <section class="top">
            <h2>전기공사업</h2>
            <p>앞서가는 기술과 끊임없는 연구, 금하테크의 자부심입니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li><Link href="/electric/electric0">전기공사</Link></li>
                        <li class="now"><Link href="/electric/electric1">계장제어</Link></li>
                        <li><Link href="/electric/electric2">수배전반</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner2">
            <div class="container">
                <span>전기공사업</span>
                <div class="yellow-wrap">
                    <h3>계장제어</h3>
                    <p>Motor 제어 계장 Panel 설계 및 제작, 각종 Sensor 제어 PLC Panel 설계 및 제작, 각종 제어 Panel 설비진단</p>
                </div>
            </div>
        </section>

        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <ul class="list-wrap">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-2-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>변전소, 발전소의 전력 감시 제어</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-2-2.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>관로 감시제어</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-2-3.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>농업용수 및 홍수에방 감시제어</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-2-4.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>오일및 석유관로 감시제어</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-2-5.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>각종 Plant 설비 제어</p>
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
