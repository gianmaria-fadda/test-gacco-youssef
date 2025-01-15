<?php
class Book {
    public $title, $author, $price, $year;

    public function __construct($title, $author, $price, $year) {
        $this->$title = $title;
        $this->$author = $author;
        $this->$price = $price;
        $this->$year = $year;
    }
}

$book1 = new Book("Il Signore degli Anelli", "Tolkien", 29.99, 1954);
echo "Libro: $book1->title, Autore: $book1->author";

