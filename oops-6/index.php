<?php


require_once 'JsonFileReader.php';

$jsonFileReader = new JsonFileReader();
try {
    $data = $jsonFileReader->readFileAsArray('itemDatas.json');
    print_r($data);
} catch (FileNotFoundException $e) {
    echo $e->getMessage();
    echo PHP_EOL;
    echo $e->getTraceAsString();
    echo PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
} catch (Error $e) {
    echo $e->getMessage();
} catch (Throwable $e) {
    echo $e->getMessage();
} finally {
    /**
     * Closing DB Connections
     * Closing File Resources
     * Closing Network Connections
     * Logging the error/exceptions to log files
     */
    echo "Finally block\n";
}