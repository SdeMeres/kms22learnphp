<?php

class Job {
    public function work(Logger $logger){
        for($i=0; $i<10; $i++){
            $logger->log($i);
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($text){
        echo $text . "\n";
    }
}

interface Logger {
    public function log($text);
}

// kasutaja kood 
class NothingLogger implements Logger {
    public function log($text){

    }
}

$job = new Job();
$logger = new ConsoleLogger();

$job->work($logger);