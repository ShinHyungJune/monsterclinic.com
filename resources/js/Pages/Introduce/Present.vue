<template>
    <main id="main" class="kh present">
        <section class="top">
            <h2>회사소개</h2>
            <p>금하테크는 최고의 품질과 서비스로 고객만족을 추구합니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li><Link href="/introduce/greeting">대표 인사말</Link></li>
                        <li><Link href="/introduce/organization">조직도</Link></li>
                        <li class="now"><Link href="/introduce/present">인증현황</Link></li>
                        <li><Link href="/introduce/result">사업실적</Link></li>
                        <li><Link href="/introduce/directions">오시는 길</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner">
            <span>회사소개</span>
            <h3>인증현황</h3>
        </section>

        <section class="section1">
            <div class="bg"></div>
            <div class="container2">
                <p class="point"><span>최고의 조직과 인원</span>으로 고객만족 서비스를 위해 최선을 다하고 있습니다.</p>
                <p>㈜금하테크는 법인설립 후 사회적 취약 계층을 위해 지속적으로 지원하고 있으며 최근 장애인 표준화 사업장으로 인증 받았으며<br>
                    사회적 기업으로 선정되어 지역 사회구성원과 함께 발전해 나갈 수 있는 방향을 모색하며, 또한 청년 일자리 창출을 통해 지역사회와<br>
                    청년의 일자리 적응훈련 및 기술교육을 통한 지역사회와 동반성장을 도모하고 있습니다. </p>
            </div>
            <div class="container">
                <ul class="certificate">
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/01_certificate.jpg" alt=""></div>
                        <span>사회적기업 인증서</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/02_certificate.jpg" alt=""></div>
                        <span>장애인표준화사업장 인증서</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/03_certificate.jpg" alt=""></div>
                        <span>선도기업 확인서</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/04_certificate.jpg" alt=""></div>
                        <span>여성기업확인서</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section2">
            <div class="container">
                <ul class="certificate">
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/05_certificate.jpg" alt=""></div>
                        <span>특허증</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/06_certificate.jpg" alt=""></div>
                        <span>이노비즈 인증서</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/07_certificate.jpg" alt=""></div>
                        <span>중소기업 확인서</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/08_certificate.jpg" alt=""></div>
                        <span>기업부설연구소 인증서</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/09_certificate.jpg" alt=""></div>
                        <span>ISO9001 인증서</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/10_certificate.jpg" alt=""></div>
                        <span>케이비즈 회원증</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/11_certificate.jpg" alt=""></div>
                        <span>엔지니어링사업자 신고증</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/12-certificate.jpg" alt=""></div>
                        <span>KC인증서(차번인식카메라)-2019년</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/13-certificate.jpg" alt=""></div>
                        <span>KC인증서 POE(8포트)-2018년</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/14-certificate.jpg" alt=""></div>
                        <span>KC인증서 NVR(KHR-NQ36F216)-2018년</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/15-certificate.jpg" alt=""></div>
                        <span>KC인증서 앰프-2018년</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/16-certificate.jpg" alt=""></div>
                        <span>KC인증서 CCTV(KHD-115)-2018년</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/17-certificate.jpg" alt=""></div>
                        <span>직접생산증명서<br>
                                (정보인프라구축서비스)</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/18-certificate.jpg" alt=""></div>
                        <span>직접생산증명서<br>
                                (패키지소프트웨어개발및도입서비스)</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/19-certificate.jpg" alt=""></div>
                        <span>직접생산증명서<br>
                                (정보시스템유지관리서비스)</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/20-certificate.jpg" alt=""></div>
                        <span>직접생산증명서<br>
                                (소프트웨어유지및지원서비스)</span>
                    </li>
                    <li>
                        <div class="img-wrap"><img src="/images/certificate/21-certificate.jpg" alt=""></div>
                        <span>직접생산확인증명서 공공안전및치안장비</span>
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
