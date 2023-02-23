<template>
    <main id="main" class="kh result">
        <section class="top">
            <h2>회사소개</h2>
            <p>금하테크는 최고의 품질과 서비스로 고객만족을 추구합니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li><Link href="/introduce/greeting">대표 인사말</Link></li>
                        <li><Link href="/introduce/organization">조직도</Link></li>
                        <li><Link href="/introduce/present">인증현황</Link></li>
                        <li class="now"><Link href="/introduce/result">사업실적</Link></li>
                        <li><Link href="/introduce/directions">오시는 길</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner">
            <span>회사소개</span>
            <h3>사업실적</h3>
        </section>

        <section class="section1">
            <div class="bg"><h4>정보통신공사</h4></div>
            <div class="container2">
                <ul class="result-tab">
                    <li :class="tabClass('정보통신공사')" @click="change('정보통신공사')">정보통신공사</li>
                    <li :class="tabClass('CCTV')" @click="change('CCTV')">CCTV</li>
                    <li :class="tabClass('출입통제·보안솔루션')" @click="change('출입통제·보안솔루션')">출입통제·보안솔루션</li>
                    <li :class="tabClass('구내방송장치')" @click="change('구내방송장치')">구내방송장치</li>
                    <li :class="tabClass('가전B2B·에어컨·PC사업부')" @click="change('가전B2B·에어컨·PC사업부')">가전B2B·에어컨·PC사업부</li>
                </ul>
                <div class="result-content">
                    <div class="content now">
                        <div class="year" v-for="(key, index) in Object.keys(years).reverse()">
                            <div class="left">
                                <span>{{ key }}</span>
                            </div>
                            <div class="right">
                                <ul>
                                    <li v-for="history in years[key]">
                                        <p><span v-if="history.month">{{history.month}}월</span> {{history.title}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
            histories : this.$page.props.histories,
            form: this.$inertia.form({
                type: this.$page.props.type
            })
        }
    },

    methods: {
        change(type){
            this.form.type = type;

            this.form.get("/introduce/result", {
                preserveScroll: true,
                preserveState: false,
            });
        },

        tabClass(type){
            console.log(this.form.type);
            if(this.form.type === type)
                return "now";

            return "";
        }
    },

    mounted() {


    },

    computed: {
        years() {
            let result = {};

            this.histories.data.map(history => {
                if(!result[history.year])
                    return result[history.year] = [history];

                return result[history.year].push(history);
            });

            return result;
        },


    }
}
</script>
