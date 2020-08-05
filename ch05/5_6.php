<?php
    function page_header4($color, $title) {
        print '<html><head><title>' . $title . '에 오신 것을 환영합니다.</title></head>';
        print '<body bgcolor="#' . $color . '">';
    }
    //  5_7.php
    page_header4('66cc66', '저의 홈페이지');
?>