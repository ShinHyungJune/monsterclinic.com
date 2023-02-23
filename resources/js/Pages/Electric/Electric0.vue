<template>
    <main id="main" class="kh electric electric0">
        <section class="top">
            <h2>전기공사업</h2>
            <p>앞서가는 기술과 끊임없는 연구, 금하테크의 자부심입니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li class="now"><Link href="/electric/electric0">전기공사</Link></li>
                        <li><Link href="/electric/electric1">계장제어</Link></li>
                        <li><Link href="/electric/electric2">수배전반</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner2">
            <div class="container">
                <span>전기공사업</span>
                <div class="yellow-wrap">
                    <h3>전기공사</h3>
                    <p>전기를 안전하게 공급 배분하기 위한 배관, 배선 공사작업으로 빌딩, 공장, 신축건물, 상가, 쇼핑몰 등<br>
                        전문 기술자의 손길로 위험한 전기를 안전하게 사용할 수 있도록 건축전기공사 작업을 신속하고 안전하게 공사해 드립니다.</p>
                </div>
            </div>
        </section>

        <section class="report">
            <div class="container">
                <h3>주요서비스</h3>
                <ul class="list-wrap sz">
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-1-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>전기설비, 수변전설비</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-1-2.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>전기공사, 누전공사, 동력공사</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-1-3.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>조명공사</p>
                        </div>
                    </li>
                    <li>
                        <div class="img-wrap">
                            <img src="/images/img2/business2-1-4.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>외선/내선 공사, 신설/증설공사</p>
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
