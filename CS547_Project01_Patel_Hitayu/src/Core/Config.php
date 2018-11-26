<?php
namespace AztecGameStudios\Core;

use AztecGameStudios\Exceptions\NotFoundException;

class Config {
    private $data;
    private static $instance;

    public function __construct() {
        $json = \file_get_contents(__DIR__ . '\..\..\config\app.json');
        $this->data = json_decode($json, true);
    }

    public function get($key) {
        if(!isset($this->data[$key])) {
            throw new NotFoundException('key $key not in config');
        }
        return $this->data[$key];
    }

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }
}
?>