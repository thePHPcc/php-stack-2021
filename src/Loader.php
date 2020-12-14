<?php

class Loader {

    private string $base;

    public function __construct(string $base) {
	$this->base = $base;
    }
    
    public function load(string $file): string {
	return file_get_contents($this->base. '/' . $file);
    }
}