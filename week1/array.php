<?php

$animals = ["k"=>"kucing","a"=>"ayam","b"=>"banteng","i"=>"ikan"];
echo $animals[1];
echo 'Ini hewan  : ' .$animals[b];
echo "<br>"
echo 'Ini hewan  : ' .$animals[i];
echo '<br>';

foreach ($animals as $animal) {
    echo '<li>'.$animal.'</li>';
}