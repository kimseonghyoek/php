<?php
#$comments = 'The Fresh Fish with Rice Noodle was delicious, but i did not like the Beef Tripe.'
//$_POST['comments']의 첫 30바이트를 출력한다.
print substr($_POST['comments'], 0, 30);
// 말 줄임표를 붙인다.
print '...'
?>