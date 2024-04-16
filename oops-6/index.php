<?php


require_once 'JsonFileReader.php';

$jsonFileReader = new JsonFileReader();
try {
    $data = $jsonFileReader->readFileAsArray('itemData.json');
    print_r($data);
} catch (JsonException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
} catch (Error $e) {
    echo $e->getMessage();
} catch (Throwable $e) {
    echo $e->getMessage();
}