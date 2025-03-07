<?php

// Prgrammer 1 code
class Job {
    public function task(Logger $logger) {
        for ($i=0; $i < 10; $i++) {
            // some task
            $logger->log("Task $i done");
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($text) {
        echo "$text\n";
    }
}

class FileLogger implements Logger {
    public function log($text) {
        $file = fopen("./log.txt", "a");
        fwrite($file, "$text\n");
        fclose($file);
    }
}

class NothingLogger implements Logger {
    public function log($text) {
    }
}

interface Logger {
    public function log($text);
}

// Programmer 2 code

$job = new Job();
$logger = new ConsoleLogger();
$logger = new FileLogger();
$logger = new NothingLogger();
$job->task($logger);