<?php

class Category {
    private $id;
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}
