<template>
    <main id="main" class="kh ict ict0">
        <section class="top">
            <h2>ICT사업부</h2>
            <p>앞서가는 기술과 끊임없는 연구, 금하테크의 자부심입니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li class="now"><Link href="/ict/ict0">스마트팜</Link></li>
                        <li><Link href="/ict/ict1">빌딩제어&출입통제</Link></li>
                        <li><Link href="/ict/ict2">스마트기저귀커버</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner2">
            <div class="container">
                <span>ICT사업부</span>
                <div class="yellow-wrap">
                    <h3>스마트팜</h3>
                    <p>비닐하우스·유리온실·축사 등에 ICT를 접목하여 원격·자동으로 작물과 가축의 생육환경을<br>
                        적정하게 유지·관리할 수 있는 시스템을 제공합니다.</p>
                </div>
            </div>
        </section>

        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <ul class="list-wrap">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img3/business3-1-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>언제 어디서나 통합 / 제어가 가능한 편리한 생활</p>
                        </div>
                        <div class="text-wrap2">
                            <ul>
                                <li>
                                    인터넷이 연결되는 곳이면 언제 어디서나 내 매장을 모니터링 하며 제어
                                </li>
                                <li>
                                    Android / iOS를 모두 지원하여 누구나 쉽게  사용가능
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img3/business3-1-2.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>안심 보안을 보장하는365 자가보안</p>
                        </div>
                        <div class="text-wrap2">
                            <ul>
                                <li>
                                    외부자의침입-가스 누출 등 각종비상사태  발생을 실시간 으로 확인가능
                                </li>
                                <li>
                                    가스밸브 및 도어락 원격제어가능
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img3/business3-1-3.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>에너지절감을 통한 경제적인 경영관리</p>
                        </div>
                        <div class="text-wrap2">
                            <ul>
                                <li>
                                    매장 관리환경의 패턴에 따라 &변경에 따라 셋팅 값 변경 설정 후 자동으로 전력소모량을 최소화
                                </li>
                                <li>
                                    매정종료시에 배선차단기 설정 값으로 자동-반 자동-원격제어 대기전력 소모감소로 관리비 절약
                                </li>
                            </ul>
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
