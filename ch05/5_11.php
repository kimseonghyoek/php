<?php
    function restairant_check($meal, $tax, $tip) {
        $tax_amount = $meal *($tax / 100);
        $tip_amount = $meal *($tip / 100);
        $total_amount = $meal + $tax_amount + $tip_amount;

        return $total_amount;
    }
    //  5_12.php
    // 음식 가격은 $15.22, 부가세는 8.25%, 팁은 15%일 때 총금액 구하기
    $total = restairant_check(15.22, 8.25, 15);

    print '수중에 현금이 총 20$이니까..';
    if ($total > 20) {
        print "신용카드로 결제해야 돼.";
    } else {
        print "현금으로 낼 수 있어!";
    }
?>