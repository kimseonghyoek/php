<?php
$page_title = '영수증';
$hamburger = 4900;
$choco_milkShake = 2000;
$cola = 800;
$hambuger_count = 2;
$food_Total = $hamburger *  $hambuger_count + $choco_milkShake + $cola;
print <<<MENU
<html>
<head><title>$page_title</title></head>
</html>
<ul>
<li>햄버거:$hamburger \ 수량: $hambuger_count
<li>초코 밀크쉐이크: $choco_milkShake \ 수량:1
<li>콜라:$cola \ 수량:1
<li>총액: $food_Total \ 입니다.
<li>이용해 주셔서 감사합니다 :)
</ul>
MENU;
?>