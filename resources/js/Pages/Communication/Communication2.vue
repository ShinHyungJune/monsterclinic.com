<template>
    <main id="main" class="kh communication">
        <section class="top">
            <h2>정보통신업</h2>
            <p>앞서가는 기술과 끊임없는 연구, 금하테크의 자부심입니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li><Link href="/communication/communication0">정보통신공사</Link></li>
                        <li><Link href="/communication/communication1">CCTV제조&공사</Link></li>
                        <li class="now"><Link href="/communication/communication2">서버유지보수</Link></li>
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
                    <h3>서버유지보수</h3>
                    <p>다양한 전산장비와 시스템환경에 대하여 자체전문인력 및 서비스지정점을 통한 체계적인 통합유지보수 서비스로 서버관리, 네트워크관리 등<br>
                        급변하는 IT환경변화에 유연하게 대처함으로써 고객사 전사시스템의 효율적인 운영을 통하여 고객의 안정적이고 효율적인 IT자산운영을 지원합니다</p>
                </div>
            </div>
        </section>

        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <ul class="list-wrap">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-3-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>장애대비 점검</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-3-2.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>고객사 기술지원 대응</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-3-3.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>신속한 장애조치</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-3-4.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>상세한 사후관리</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-3-5.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>신규구축 및 운영지원</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-3-6.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>인프라 환경 변화에 따른 컨설팅 지원</p>
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
