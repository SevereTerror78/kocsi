<?php

    function beolvas($fileName, $swithHeader = true){
        if(!file_exists($fileName))
        {
            echo "$fileName nem található";
            return false;
        }
        
        $csvFile = fopen($fileName, 'r');
        $header = fgetcsv($csvFile);
        if($swithHeader){
            $lines[] = $header;
        }
        else{
            $lines = [];
        }
        while (! feof($csvFile)){
            $line = fgetcsv($csvFile);
            $lines[] = $line;
        }
        

        fclose($csvFile);
        return $lines;
    }
    
    ?>