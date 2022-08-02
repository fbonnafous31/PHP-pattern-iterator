<?php

    use App\CsvIterator;

    require_once (__DIR__ . '/libraries/autoload.php');

    $csv = new CsvIterator(__DIR__ . '/datas/cats.csv');

    foreach ($csv as $key => $row) {
        print_r($row);
        //echo $row[0];
        echo '<br>';
    }

?>