<?php

class Printer {
    private string $text;
    
    public function __construct(string $text) {
	$this->text = $text;
    }

    public function print(string $content): void {
	print str_replace('%TEXT%', $this->text, $content);
    }
}