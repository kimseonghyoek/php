<?php
$meal = array('breakfast' => 'Walnut Bun', 'lunch' => 'Cashew Nuts and White Mushroomss', 'snack' => 'Dried Mulberries', 'dinner' => 'Eggplant with Chili Sauce');

print "정렬 전:\n";
foreach ($meal as $key => $value) {
    print "     \$meal: $key $value\n";
}

ksort($meal);

print "정렬 후:\n";
foreach ($meal as $key => $value) {
    print " \$meal: $key $value\n";
}
?>