<?php
    $user = 'kim';

    function page_header() {
        print '<html><head><title>저의 홈페이지에 오신 것을 환영합니다.</title></head>';
        print '<body bgcolor = "#a03251">';
    }
    // 5-2 function call
    page_header();
    print "어서오세요, $user 님. ";
    print "</body></html>";
?>