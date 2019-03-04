<?php

echo "This is a simple php application";
echo "<br>Welcome to lilly.  Grant is the worst";

$x = 0; 

while($x <= 20) {
    echo "The number is: $x";
    $x++;
    sleep(2);
}

$rs->close();
$connection->close();
