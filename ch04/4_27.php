<?php
$meal = array('breakfast' => 'Walnut Bun', 'lunch' => 'Cashew Nuts and White Mushrooms', 'snack' => 'Dried Mulverries', 'dinner' => 'Eggplant with Chili Sauce');

print "정렬 전:\n";
foreach ($meal as $key => $value) {
    print " \$meal as $key => $value\n";
}

arsort($meal);

print "정렬 후:\n";
foreach ($meal as $key => $value) {
    print " \$meal: $key $value\n";
}
?>