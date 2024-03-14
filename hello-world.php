<?php

namespace MyProgram;

class HelloWorldException extends \Exception {}

class MessageFormatter {
    public static function format($message) {
        return strtoupper($message);
    }
}

class HelloWorld {
    private $message;

    public function __construct($message) {
        if (empty($message)) {
            throw new HelloWorldException("Message cannot be empty.");
        }
        $this->message = $message;
    }

    public function display() {
        echo MessageFormatter::format($this->message) . "!";
    }
}

try {
    $helloWorld = new HelloWorld("Hello, World");

    $helloWorld->display();
} catch (HelloWorldException $e) {
    echo "Error: " . $e->getMessage();
}
