<?php 

interface Logger {

}

class LogToFile {
    public function execute($message) {
        var_dump('log to file');
    }
}
class LogToDatabase {
    public function execute($message) {
        var_dump('log to database');
    }
}


?>