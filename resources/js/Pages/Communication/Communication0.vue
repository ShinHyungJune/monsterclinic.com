<template>
    <main id="main" class="kh communication">
        <section class="top">
            <h2>정보통신업</h2>
            <p>앞서가는 기술과 끊임없는 연구, 금하테크의 자부심입니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li class="now"><Link href="/communication/communication0">정보통신공사</Link></li>
                        <li><Link href="/communication/communication1">CCTV제조&공사</Link></li>
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
                    <h3>정보통신공사</h3>
                    <p>저희 금하테크는 통신관제 센터 구축 및 유지보수와 통신선로 공사를 전문으로 하는 업체로<br>
                        고객 맞춤형 보안솔루션 제공 및 네트워크 장비 시공 및 유지보수를 하고 있습니다.</p>
                </div>
            </div>
        </section>

        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <ul class="list-wrap">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-1-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>사무실 이전 및 신규 구축</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-1-2.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>기업 인터넷 회선 제공 및 상업용 네트워크 구축</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-1-3.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>기업용 단말기 / 키폰 / IP-PBX 공사</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-1-4.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>프린터, 공유 서버 간 네트워크 연계</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-1-5.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>합리적인 네트워크 구축 및 전문 기술력 보유</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-1-6.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>행정망, 학내망, 구내통신망 구축 및 보안솔루션</p>
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
