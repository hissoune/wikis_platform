<?php

class WikiTag {
    private $wikiId;
    private $tagId;

    public function __construct($wikiId, $tagId) {
        $this->wikiId = $wikiId;
        $this->tagId = $tagId;
    }

    // Getters
    public function getWikiId() {
        return $this->wikiId;
    }

    public function getTagId() {
        return $this->tagId;
    }
}
