<?php

namespace base;

class ErrorHandler {
    public function __construct() {
        if(DEBUG){
            error_reporting(-1);  
        }
        else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }   
    
     public function exceptionHandler($ex) {
        $this->logErrors($ex->getMessage(), $ex->getFile(), $ex->getLine());
        $this->displayErrors('Исключение', $ex->getMessage(), $ex->getFile(), $ex->getLine(), $ex->getCode());
    }
    
    private function logErrors($message = '', $file = '', $line = '') {
        error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} |
        Файл: {$file} | Строка: {$line}\n------------------\n", 3,
                ROOT . '/tmp/errors.log');
    }
    
    protected function displayErrors($errno, $errmessage, $errfile, $errline, $response = 404) {
        http_response_code($response);
        if($response == 404 && !DEBUG) {
            require WWW . '/errors/404.php';
            die;
        }
        if(DEBUG){
            require WWW . '/errors/dev.php';
        }else {
            require WWW . '/errors/prod.php';
        }
        die;
    }
}
