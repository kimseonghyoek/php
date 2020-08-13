<?php
    function restaurant_check2($meal, $tax, $tip) {
        $tax_amount = $meal * ($tax / 100);
        $tip_amount = $meal * ($tip / 100);
        $total_notip = $meal + $tax_amount;
        $total_tip = $meal + $tax_amount + $tip_amount;

        return array($total_notip , $total_tip);
    };

    //  5_!4.php
    $total = restaurant_check2(15.22, 8.25, 15);

    if ($total[0] < 20) {
        print'팁을 제외한 총금액이 $20보다 적음';
    }

    if ($totals[1] < 20) {
        print '팁을 포함한 총금액이  $20보다 적음';
    }
?>