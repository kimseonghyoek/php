<?php
$flavors = array('Japenese' => array('hot' => '와사비', 'salty' => '간장 소스'), 'Chinese' => array('hot' => '머스터드', 'pepper-salty' => '허브잎'));

//$culture는 키, $culture_flavor는 값(배열)이다.
foreach ($flavors as $culture => $culture_flavor) {
    //$flavors는 키, $example은 값이다.
    foreach ($culture_flavor as $flavors => $example) {
        print "$culture $flavor 요리의 재료는 $example 입니다";
    }
}
?>