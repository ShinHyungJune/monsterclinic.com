<template>
    <footer class="footer">
        <div class="footer">
            <p>
                <span>임체명: (주)금하테크</span>
                <span>대표자명: 한청우</span>
                <span>사업자등록번호: 366-86-00296</span>
            </p>
            <p>
                <span>주소: 나주시 동수농공단지길 137-9</span>
                <span>지점: 광주광역시 서구 금호월드 5층 543호</span>
                <span>Tel: 1600-8054</span>
                <span>Fax: 062-443-3300</span>
                <span>kumha777@nate.com</span>
            </p>
            <p>
                COPYRIGHTⓒ KUMHATECH. ALL RIGHTS RESERVED.
            </p>
        </div>
        <button class="btn_gotop">
            <i class="xi-angle-up"></i>
        </button>
    </footer>
</template>
<script>
import {Link} from '@inertiajs/inertia-vue';
export default {
    components: {Link},
    data(){
        return {

        }
    },
    mounted() {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 300){
                $('.btn_gotop').show();
            } else{
                $('.btn_gotop').hide();
            }
        });
        $('.btn_gotop').click(function(){
            $('html, body').animate({scrollTop:0},400);
            return false;
        });
    }
}
</script>
