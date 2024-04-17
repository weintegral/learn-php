<?php

require_once 'FileNotFoundException.php';

class JsonFileReader
{
    public function readFileAsArray(string $fileName)
    {
        if(!file_exists($fileName)) {
            throw new FileNotFoundException("{$fileName} file not found");
        }
        $json = file_get_contents($fileName);
        return json_decode($json, true);
    }
}