<?php

class Wiki {
    private $id;
    private $title;
    private $content;
    private $authorId;
    private $categoryId;
    private $imageFilename;
    private $createdAt;

    public function __construct($title, $content, $authorId, $categoryId, $imageFilename = null) {
        $this->title = $title;
        $this->content = $content;
        $this->authorId = $authorId;
        $this->categoryId = $categoryId;
        $this->imageFilename = $imageFilename;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthorId() {
        return $this->authorId;
    }

    public function getCategoryId() {
        return $this->categoryId;
    }

    public function getImageFilename() {
        return $this->imageFilename;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }
}
