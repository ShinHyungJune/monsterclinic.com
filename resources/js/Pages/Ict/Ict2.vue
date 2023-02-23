<template>
    <main id="main" class="kh ict ict0">
        <section class="top">
            <h2>ICT사업부</h2>
            <p>앞서가는 기술과 끊임없는 연구, 금하테크의 자부심입니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li><Link href="/ict/ict0">스마트팜</Link></li>
                        <li><Link href="/ict/ict1">빌딩제어&출입통제</Link></li>
                        <li class="now"><Link href="/ict/ict2">스마트기저귀커버</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner2">
            <div class="container">
                <span>ICT사업부</span>
                <div class="yellow-wrap">
                    <h3>스마트기저귀커버</h3>
                    <p>감지 장치를 통해 유아나 노약자 및 환자와 물리적인 접촉을 하지 않아도 배변 여부를 감지할 수 있어 보호자뿐만 아니라 노약자 및 환자에게도<br>
                        불편함을 초럐하지 않고, 배변 여부를 쉽게 판단할 수 있으며, 배변 주기에 따라 유아나 노약자 및 환자의 건강 상태를 판단할 수 있음</p>
                </div>
            </div>
        </section>

        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <p>배변 시 알림기능  실시간 온도체크로 환자의 건강상태 모니터링</p>
                <ul class="list-wrap">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img3/business3-3-1.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img3/business3-3-2.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img3/business3-3-3.jpg" alt="">
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
