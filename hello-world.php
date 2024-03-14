<?php

// Define a namespace for our program
namespace MyProgram;

// Define a custom exception class
class HelloWorldException extends \Exception {}

// Define a helper class for formatting messages
class MessageFormatter {
    public static function format($message) {
        return strtoupper($message);
    }
}

// Define a class representing the main program
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
    // Create an instance of the HelloWorld class
    $helloWorld = new HelloWorld("Hello, World");

    // Display the message
    $helloWorld->display();
} catch (HelloWorldException $e) {
    echo "Error: " . $e->getMessage();
}
