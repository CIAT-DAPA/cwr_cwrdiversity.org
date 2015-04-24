<?php

$number = 0;
$times = 0;
echo "Processing";
while (true) {
    $number = $number + 1;
    if ($number == 99999) {
        $file = fopen("file.txt", "w");
        fwrite($file, $times);
        fclose($file);
        $times = $times + 1;
        echo $times . "<br>";
        $number = 0;
    }
}
?>
