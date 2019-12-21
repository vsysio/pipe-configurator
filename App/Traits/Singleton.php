<?php

trait Singleton {

    public static $instance = NULL;

    protected function __construct() {

    }

    public function getInstance() {
        if (self::$instance == NULL) {
            $me = static::class;
            self::$instance = new $me;
        }
        return self::$instance;
    }
}