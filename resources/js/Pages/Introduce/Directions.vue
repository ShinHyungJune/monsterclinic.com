<template>
    <main id="main" class="kh directions">
        <section class="top">
            <h2>회사소개</h2>
            <p>금하테크는 최고의 품질과 서비스로 고객만족을 추구합니다.</p>
            <div class="tab">
                <div class="container">
                    <ul>
                        <li><Link href="/introduce/greeting">대표 인사말</Link></li>
                        <li><Link href="/introduce/organization">조직도</Link></li>
                        <li><Link href="/introduce/present">인증현황</Link></li>
                        <li><Link href="/introduce/result">사업실적</Link></li>
                        <li class="now"><Link href="/introduce/directions">오시는 길</Link></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="banner">
            <span>회사소개</span>
            <h3>오시는 길</h3>
        </section>

        <section class="section1">
            <div class="container2">
                <p class="point"><span>축적된 기술과 노하우</span>로 믿을 수 있는 기업으로 최고의 서비스를 제공해 드리겠습니다. </p>
                <ul class="data">
                    <li>
                        <div class="icon-wrap">
                            <i class="xi-call"></i>
                        </div>
                        <span>문의전화</span>
                        <p>1600-8054</p>
                    </li>
                    <li>
                        <div class="icon-wrap">
                            <i class="xi-alarm"></i>
                        </div>
                        <span>운영시간</span>
                        <p>평일 09:00 ~ 18:00<br>
                            점심 12:00 ~ 13:00</p>
                    </li>
                    <li>
                        <div class="icon-wrap">
                            <i class="xi-mail"></i>
                        </div>
                        <span>이메일</span>
                        <p>kumha777@nate.com</p>
                    </li>
                </ul>
                <div class="map-wrap">
                    <div class="map">
                        <div class="img-wrap">
                            <div id="map"></div>
                        </div>
                        <div class="address">
                            <div class="icon-wrap">
                                <i class="xi-maker"></i>
                            </div>
                            <span>본사 :</span>
                            <p>전라남도 나주시 동수농공단지길 137-9 (동수동)</p>
                        </div>
                    </div>
                    <div class="map">
                        <div class="img-wrap">
                            <div id="map02"></div>
                        </div>
                        <div class="address">
                            <div class="icon-wrap">
                                <i class="xi-maker"></i>
                            </div>
                            <span>지점 :</span>
                            <p>광주광역시 서구 군분2로 금호월드 5층 543호</p>
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

        }
    },

    methods: {

    },

    mounted() {
        var mapContainer = document.getElementById('map'), // 지도를 표시할 div
            mapOption = {
                center : new daum.maps.LatLng(36.633535, 127.425882), // 지도의 중심좌표
                level : 4
                // 지도의 확대 레벨
            };

        var mapContainer02 = document.getElementById('map02'), // 지도를 표시할 div
            mapOption02 = {
                center : new daum.maps.LatLng(36.633535, 127.425882), // 지도의 중심좌표
                level : 4
                // 지도의 확대 레벨
            };

        // 지도를 생성합니다
        var map = new daum.maps.Map(mapContainer, mapOption);
        var map02 = new daum.maps.Map(mapContainer02, mapOption02);

        // 주소-좌표 변환 객체를 생성합니다
        var geocoder = new daum.maps.services.Geocoder();

        var myAddress = ["전남 나주시 동수농공단지길 137-9"];
        var myAddress02 = ["광주 서구 군분2로 54"];

        function myMarker(number, address, link) {
            // 주소로 좌표를 검색합니다
            geocoder
                .addressSearch(
                    //'주소',
                    address,
                    function(result, status) {
                        // 정상적으로 검색이 완료됐으면
                        if (status === daum.maps.services.Status.OK) {

                            var coords = new daum.maps.LatLng(
                                result[0].y, result[0].x);

                            // 결과값으로 받은 위치를 마커로 표시합니다
                            var marker = new daum.maps.Marker({
                                map : map,
                                position : coords
                            });

                            // 마커 이벤트 등록
                            kakao.maps.event.addListener(marker, 'click', function() {
                                window.open(link);
                            });

                            // 인포윈도우로 장소에 대한 설명을 표시합니다
                            var infowindow = new daum.maps.InfoWindow(
                                    {
                                        content : '<a href="' + link + '" target="_blank" style="width:100%; padding:4px 10px; font-weight:600; text-align:center; white-space: nowrap; font-size:12px;">' + address + '</a>'
                                    });
                            infowindow.open(map, marker);

                            // 커스텀 오버레이에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
                            var content = '<div class="customoverlay">'

                                + '</div>';

                            // 커스텀 오버레이가 표시될 위치입니다
                            var position = new daum.maps.LatLng(
                                result[0].y, result[0].x);

                            // 커스텀 오버레이를 생성합니다
                            var customOverlay = new daum.maps.CustomOverlay(
                                {
                                    map : map,
                                    position : position,
                                    content : content,
                                    yAnchor : 1
                                });

                            // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
                            map.setCenter(coords);
                        }
                    });
        }
        function myMarker02(number, address, link) {
            // 주소로 좌표를 검색합니다
            geocoder
                .addressSearch(
                    //'주소',
                    address,
                    function(result, status) {
                        // 정상적으로 검색이 완료됐으면
                        if (status === daum.maps.services.Status.OK) {

                            var coords = new daum.maps.LatLng(
                                result[0].y, result[0].x);

                            // 결과값으로 받은 위치를 마커로 표시합니다
                            var marker = new daum.maps.Marker({
                                map : map02,
                                position : coords
                            })

                            // 마커 이벤트 등록
                            kakao.maps.event.addListener(marker, 'click', function() {
                                window.open(link);
                            });

                            // 인포윈도우로 장소에 대한 설명을 표시합니다
                            var infowindow = new daum.maps.InfoWindow(
                                    {
                                        content : '<a href="' + link + '" target="_blank" style="width:100%; padding:4px 10px; font-weight:600; text-align:center; white-space: nowrap; font-size:12px;">' + address + '</a>'
                                    });
                            infowindow.open(map02, marker);

                            // 커스텀 오버레이에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
                            var content = '<div class="customoverlay">'

                                + '</div>';

                            // 커스텀 오버레이가 표시될 위치입니다
                            var position = new daum.maps.LatLng(
                                result[0].y, result[0].x);

                            // 커스텀 오버레이를 생성합니다
                            var customOverlay = new daum.maps.CustomOverlay(
                                {
                                    map : map02,
                                    position : position,
                                    content : content,
                                    yAnchor : 1
                                });

                            // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
                            map02.setCenter(coords);
                        }
                    });
        }

        for (let i = 0; i < myAddress.length; i++) {
            myMarker(i + 1, myAddress[i], "https://map.kakao.com/?map_type=TYPE_MAP&target=car&rt=%2C%2C426682%2C413892&rt1=&rt2=%EC%A0%84%EB%82%A8+%EB%82%98%EC%A3%BC%EC%8B%9C+%EB%8F%99%EC%88%98%EB%86%8D%EA%B3%B5%EB%8B%A8%EC%A7%80%EA%B8%B8+137-9&rtIds=%2CN29437081&rtTypes=%2CADDRESS");
        }

        for (let i = 0; i < myAddress.length; i++) {
            myMarker02(i + 1, myAddress02[i], "https://map.kakao.com/?map_type=TYPE_MAP&target=car&rt=%2C%2C472902%2C461042&rt1=&rt2=%EA%B4%91%EC%A3%BC+%EC%84%9C%EA%B5%AC+%EA%B5%B0%EB%B6%842%EB%A1%9C&rtIds=%2CL29140000003160002&rtTypes=%2CADDRESS");
        }

    }
}
</script>

