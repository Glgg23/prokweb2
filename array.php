<?php

$animals = ["kucing","ayam","banteng","ikan"];
echo 'Ini hewan dengan index 1 : ' .$animals[1];
echo "<br>";
echo 'Ini hewan dengan index 3 : ' .$animals[3];
echo '<br>';
//mencetak seluruh data array gunakan looping foreach
foreach ($animals as $animal) {
    echo '<li>'.$animal.'</li>';
}
