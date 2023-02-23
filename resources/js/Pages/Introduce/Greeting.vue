<template>
    <main id="main" class="kh greeting">
        <section class="top">
            <h2>회사소개</h2>
            <p>금하테크는 최고의 품질과 서비스로 고객만족을 추구합니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li class="now"><Link href="/introduce/greeting">대표 인사말</Link></li>
                        <li><Link href="/introduce/organization">조직도</Link></li>
                        <li><Link href="/introduce/present">인증현황</Link></li>
                        <li><Link href="/introduce/result">사업실적</Link></li>
                        <li><Link href="/introduce/directions">오시는 길</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner">
            <span>회사소개</span>
            <h3>대표 인사말</h3>
        </section>

        <section class="section1">
            <div class="bg"></div>
            <div class="container2">
                <p class="point"><span>축적된 기술과 노하우</span>로 믿을 수 있는 기업으로 최고의 서비스를 제공해 드리겠습니다. </p>
                <p>㈜금하테크는 정보통신공사업 및 전기공사업면허를 기반으로 ICT 를 활용하여 계장제어 출입통제 빌딩자동제어시스템<br>
                    및 수배전반을 관공서, 학교, 병원, 대형건물 등에 서비스 하고 있으며 빠르게 변화하는 정보통신환경에 지속적인 R&D를 통해 <br>
                    영상감시장치,데스크탑, CCTV, 컴퓨터제조 생산, 정보 시스템 개발, 서버유지보수,<br>
                    빌딩자동화시스템, SMS문자솔루션 사업분야로 진출하였습니다.</p>
                <p>정보통신과 전기공사업을 통해 축적된 기술과 노하우를 통해 고객에게 필요한  맞춤형 서비스를 제공하고 있으며, <br>
                    장애인 표준사업장 인증을 통해 장갑 직접생산 을 하고 있습니다.</p>
                <p>㈜ 금하테크는 언제나 고객과의 신뢰를 바탕으로  최고의 품질과 서비스를 제공해 드릴 것을 약속드립니다</p>
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
