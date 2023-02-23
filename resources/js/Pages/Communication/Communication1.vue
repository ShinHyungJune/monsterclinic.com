<template>
    <main id="main" class="kh communication">
        <section class="top">
            <h2>정보통신업</h2>
            <p>앞서가는 기술과 끊임없는 연구, 금하테크의 자부심입니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li><Link href="/communication/communication0">정보통신공사</Link></li>
                        <li class="now"><Link href="/communication/communication1">CCTV제조&공사</Link></li>
                        <li><Link href="/communication/communication2">서버유지보수</Link></li>
                        <li><Link href="/communication/communication3">엔지니어링 사업부</Link></li>
                        <li><a target="_blank" href="http://munja1.net/index.php">대량문자 전송시스템</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner2">
            <div class="container">
                <span>정보통신업</span>
                <div class="yellow-wrap">
                    <h3>CCTV공사</h3>
                    <p>금하테크는 CCTV 제조 및 설치 전문 업체로 설치장소마다 개별 견적을 통하여,<br>
                        귀사의 사업장에 최적화된 맞춤형 CCTV 서비스를 제공 합니다.</p>
                </div>
            </div>
        </section>

        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <ul class="list-wrap">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-2-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>Full-HD 고화질 영상</p>
                        </div>
                        <div class="text-wrap2">
                            <p>고화질 영상저장으로 사고 발생 시 선명한<br>
                                증거자료 확보 및 야간 고성능 영상 감시</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-2-2.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>실시간 영상조회</p>
                        </div>
                        <div class="text-wrap2">
                            <p>PC, 스마트폰으로 언제 어디서나 Full-HD 고화질 영상 조회 가능<br>
                                (저장장치가 인터넷이 연결되어 있는 경우 사용 가능)</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-2-3.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>차별화된 보안기술</p>
                        </div>
                        <div class="text-wrap2">
                            <p>기기장애 자가진단 기능과 장기간 녹화를 위한<br>
                                최신 압축 기술 탑재하였습니다.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="banner2">
            <div class="container">
                <span>정보통신업</span>
                <div class="yellow-wrap">
                    <h3>태양광 CCTV</h3>
                    <p>태양광 CCTV는 케이블 / 전구/ 전선 연결등의 작업이 불필요하여 태양광 묘듈이 장착되어<br>
                        친환경적이고 전력공급이 필요 없으며 주거시설, 여가시설, 상업시설등 광범위하게 활용 가능 합니다.</p>
                </div>
            </div>
        </section>
        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <ul class="list-wrap">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-2-4.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>불법주차단속</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-2-5.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>치안예방활동</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-2-6.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>쓰레기 투기 단속</p>
                        </div>
                    </li>
                </ul>
                <div class="cctv-wrap">
                    <h3>금하테크 CCTV 4종</h3>
                    <ul>
                        <li>
                            <div class="img-wrap">
                                <img src="/images/img1/business1-2-7.jpg" alt="">
                            </div>
                            <div class="text-wrap">
                                <p>차량번호 인식 CCTV 카메라</p>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrap">
                                <img src="/images/img1/business1-2-8.jpg" alt="">
                            </div>
                            <div class="text-wrap">
                                <p>2 메가픽셀 Full-HD IP 카메라</p>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrap">
                                <img src="/images/img1/business1-2-9.jpg" alt="">
                            </div>
                            <div class="text-wrap">
                                <p>1080 AHD 카메라</p>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrap">
                                <img src="/images/img1/business1-2-10.jpg" alt="">
                            </div>
                            <div class="text-wrap">
                                <p>2.1 메가픽셀 Full-HD IP 카메라</p>
                            </div>
                        </li>
                    </ul>
                    <a href="http://kumha7777.godomall.com/" class="orange-btn">금하장터 바로가기</a>
                </div>
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
