<?php

class Category {
    private $id;
    private $name;

    public function __construct($id,$name ) {
        $this->id = $id;
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
