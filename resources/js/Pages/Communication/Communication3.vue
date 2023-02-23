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
                        <li><Link href="/communication/communication2">서버유지보수</Link></li>
                        <li class="now"><Link href="/communication/communication3">엔지니어링 사업부</Link></li>
                        <li><a target="_blank" href="http://munja1.net/index.php">대량문자 전송시스템</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner2">
            <div class="container">
                <span>정보통신업</span>
                <div class="yellow-wrap">
                    <h3>엔지니어링 사업부</h3>
                    <p>최고의 기술력으로 설계의 선진화에 앞장서고 있으며, 편의성, 효율성 및 안정성을 고려한 기계·전기·통신 시스템의<br>
                        계획 및 설계와 시공의 적절성 평가를 통하여 사용자에게 편안하고 쾌적한 환경을 제공하기 위해 노력하고 있습니다.</p>
                </div>
            </div>
        </section>

        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <p>전기 · 통신 분야의 다양한 엔지니어링 설계</p>
                <ul class="list-wrap">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-4-1.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-4-2.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img1/business1-4-3.jpg" alt="">
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
