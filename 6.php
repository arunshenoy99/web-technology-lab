<?php
    echo "<h3>Welcome to my blog</h3>";
    $fname = "counter.txt";
    try {
        if(!file_exists($fname)) {
            throw new Exception("File does not exist");
        }
        $fp = fopen($fname, "r");
        if (!$fp) {
            throw new Exception("Problem opening file");
        }
        $hits = fscanf($fp, "%d");
        if(strlen($hits[0]) == 0) {
            throw new Exception("File has no data");
        }
        $hits[0]++;
        fclose($fp);
        $fp = fopen($fname, "w");
        fwrite($fp, $hits[0]);
        fclose($fp);
        echo "The number of visitors are $hits[0]";
    } catch (Exception $e) {
        $fp = fopen($fname, "w");
        fprintf($fp, "%d", 1);
        fclose($fp);
        echo "You are the first visitor !";
    }
?>