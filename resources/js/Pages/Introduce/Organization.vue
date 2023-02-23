<template>
    <main id="main" class="kh organization">
        <section class="top">
            <h2>회사소개</h2>
            <p>금하테크는 최고의 품질과 서비스로 고객만족을 추구합니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li><Link href="/introduce/greeting">대표 인사말</Link></li>
                        <li class="now"><Link href="/introduce/organization">조직도</Link></li>
                        <li><Link href="/introduce/present">인증현황</Link></li>
                        <li><Link href="/introduce/result">사업실적</Link></li>
                        <li><Link href="/introduce/directions">오시는 길</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner">
            <span>회사소개</span>
            <h3>조직도</h3>
        </section>

        <section class="section1">
            <div class="bg"></div>
            <div class="container2">
                <p class="point"><span>최고의 조직과 인원</span>으로 고객만족 서비스를 위해 최선을 다하고 있습니다.</p>
                <img src="/images/organization.png" alt="조직도" class="organization-img pc">
                <img src="/images/organization-m.svg" alt="조직도" class="mb">
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
