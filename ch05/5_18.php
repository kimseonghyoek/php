<?php
    function restairant_check($meal, $tax, $tip) {
        $tax_amount = $meal *($tax / 100);
        $tip_amount = $meal *($tip / 100);
        $total_amount = $meal + $tax_amount + $tip_amount;
    
        return $total_amount;
    }

    function can_pay_cash($cash_on_hand, $amount) {
        if ($amount > $cash_on_hand) {
            return false;
        } else {
            return true;
        }
    }

    $total = restairant_check(15.22, 8.25, 15);
    if (can_pay_cash(20, $total)) {
        print "현금으로 낼 수 있어";
    } else {
        print "신용카드를 써야겠네.";
    }
?>