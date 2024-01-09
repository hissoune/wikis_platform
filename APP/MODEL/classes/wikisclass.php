<?php

class Wiki {
    private $id;
    private $title;
    private $content;
    private $authorId;
    private $categoryId;
    private $imageFilename;
    private $createdAt;
    private $is_archived;

    public function __construct($id,$title, $content, $authorId, $categoryId, $imageFilename = null ,$createdAt,$is_archived) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->authorId = $authorId;
        $this->categoryId = $categoryId;
        $this->imageFilename = $imageFilename;
        $this->createdAt = $createdAt;
        $this->is_archived = $is_archived;
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
    public function getis_archived() {
        return $this->is_archived;
    }
}
