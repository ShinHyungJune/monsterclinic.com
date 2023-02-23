<template>
    <header id="header">
        <div class="header">
            <div class="container">
                <h1 class="logo"><Link href="/"></Link></h1>
                <button class="mb-bt mb"><i class="xi-align-right"></i></button>
                <ul class="nav-b">
                    <div class="m-logo mb"><Link href="/"></Link></div>
                    <li>
                        <button class="btn" @click="move('/introduce/greeting')">회사소개</button>
                        <button class="op-bt"><i class="xi-angle-down"></i></button>
                        <ul class="nav-s">
                            <li><Link href="/introduce/greeting">대표 인사말</Link></li>
                            <li><Link href="/introduce/organization">조직도</Link></li>
                            <li><Link href="/introduce/present">인증현황</Link></li>
                            <li><Link href="/introduce/result">사업실적</Link></li>
                            <li><Link href="/introduce/directions">오시는 길</Link></li>
                        </ul>
                    </li>
                    <li>
                        <button class="btn" @click="move('/communication/communication0')">정보통신업</button>
                        <button class="op-bt"><i class="xi-angle-down"></i></button>
                        <ul class="nav-s">
                            <li><Link href="/communication/communication0">정보통신공사</Link></li>
                            <li><Link href="/communication/communication1">CCTV제조&공사</Link></li>
                            <li><Link href="/communication/communication2">서버유지보수</Link></li>
                            <li><Link href="/communication/communication3">엔지니어링 사업부</Link></li>
                            <li><a target="_blank" href="http://munja1.net/index.php">대량문자 전송시스템</a></li>
                        </ul>
                    </li>
                    <li>
                        <button class="btn" @click="move('/electric/electric0')">전기공사업</button>
                        <button class="op-bt"><i class="xi-angle-down"></i></button>
                        <ul class="nav-s">
                            <li><Link href="/electric/electric0">전기공사</Link></li>
                            <li><Link href="/electric/electric1">계장제어</Link></li>
                            <li><Link href="/electric/electric2">수배전반</Link></li>
                        </ul>
                    </li>
                    <li>
                        <button class="btn" @click="move('/ict/ict0')">ICT사업부</button>
                        <button class="op-bt"><i class="xi-angle-down"></i></button>
                        <ul class="nav-s">
                            <li><Link href="/ict/ict0">스마트팜</Link></li>
                            <li><Link href="/ict/ict1">빌딩제어&출입통제</Link></li>
                            <li><Link href="/ict/ict2">스마트기저귀커버</Link></li>
                        </ul>
                    </li>
                    <li>
                        <button class="btn" @click="move('/manufacture/manufacture0')">제조(R&D)사업부</button>
                        <button class="op-bt"><i class="xi-angle-down"></i></button>
                        <ul class="nav-s">
                            <li><Link href="/manufacture/manufacture0">장갑</Link></li>
                            <li><Link href="/manufacture/manufacture1">컴퓨터</Link></li>
                            <li><Link href="/manufacture/manufacture2">방송통신음향장비</Link></li>
                        </ul>
                    </li>
                    <li>
                        <a target="_blank" href="https://blog.naver.com/PostList.nhn?blogId=kumhatec&from=postList&categoryNo=14&parentCategoryNo=14">시공사례</a>
                        <button class="op-bt"><i class="xi-angle-down"></i></button>
                        <ul class="nav-s">
                            <li>
                                <a target="_blank" href="https://blog.naver.com/PostList.nhn?blogId=kumhatec&from=postList&categoryNo=14&parentCategoryNo=14">시공사례</a>
                            </li>
                        </ul>
                    </li>
                    <div class="m-bottom mb">
                        <div>
                            <div class="i-wrap">
                                <i class="xi-call"></i>
                            </div>
                            <div class="w-wrap">
                                <h4>문의전화</h4>
                                <p>1600-8054<span>(평일 09:00 ~ 18:00)</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="i-wrap">
                                <i class="xi-mail"></i>
                            </div>
                            <div class="w-wrap">
                                <h4>이메일</h4>
                                <p>kumha777@nate.com</p>
                            </div>
                        </div>
                    </div>
                    <button class="close mb"><i class="xi-close"></i></button>
                </ul>
            </div>
            <div class="hd-bg">

            </div>
        </div>
    </header>
</template>
<script>
import {Link} from '@inertiajs/inertia-vue';
import {Inertia} from '@inertiajs/inertia';
export default {
    components: {Link},
    data() {
        return {
            user: this.$page.props.user,
            form: this.$inertia.form({})
        }
    },
    methods: {
        move(link){
            if($(window).width() > 800){
                this.form.get(link);
            }
        }
    },
    mounted() {
        $(window).resize(function () {
            if (window.innerWidth > 768) {
                let $nav = $(".nav-b"),
                    $header = $(".header");

                $nav.hover(function () {
                        $header.addClass("hv");
                    }, function () {
                        $header.removeClass("hv")
                    }
                )
            } else {
                let $mb_bt = $(".mb-bt"),
                    $close = $(".close"),
                    $nav_b = $(".nav-b");

                $mb_bt.click(function () {
                    $("html").css("overflow", "hidden");
                    $nav_b.addClass("op");
                    $close.click(function () {
                        $nav_b.removeClass("op");
                        $("html").css("overflow", "visible");
                    })
                })

                let $op_bt = $(".op-bt");

                $op_bt.click(function () {
                    $(this).parent("li").toggleClass("op").siblings("li").removeClass("op");

                })

            }
        }).resize();

        if($(window).width() < 800){
            $("header .header ul.nav-b > li > button").click(function(e){
                $("header .header ul.nav-b > li").removeClass("op");
                $(this).parents("li").addClass("op");
            })
        }

        $("a").click(function(){
            $("header .header ul.nav-b").removeClass("op");
        })

        Inertia.on('start', (event) => {
            $("html").css("overflow", "visible");
        })
    }
}
</script>
