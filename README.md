Qui verranno effettuati esercizi di prova da parte di Gianmaria e Youssef:

 - Ci siamo fatti generare da Chat Gpt un esercizio in Php errato, andremo a correggerlo

<h1>Primo Esercizio</h1>

<h2>1)          Errato</h2>

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

<h2>1)          Corretto</h2>

<?php
class Book {
    public $title, $author, $price, $year;

    public function __construct($title, $author, $price, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->year = $year;
    }
}

$book1 = new Book("Il Signore degli Anelli", "Tolkien", 29.99, 1954);
echo "Libro: $book1->title, Autore: $book1->author, Prezzo: $book1->price, Anno: $book1->year";

<h2>Come esce in pagina l'esercizio completato</h2>

<img src="https://github.com/user-attachments/assets/49eaeae3-526c-4492-be18-6fec487c285e" alt="Es.1">

<br>

<h1>Secondo Esercizio</h1>

<h2>2)          Errato</h2>

<br>

const todos = [
    { id: 1, description: "Fare la spesa", completed: false },
    { id: 2, description: "Pulire la casa", completed: false }
];

function addTodo(todo) {
    todos.push(todo)
}

addTodo({ id: 3, descrizione: "Studiare JavaScript", completato: false });

console.log(todos);

<br>

<h2>2)          Corretto</h2>

<br>

const todos = [
    { id: 1, description: "Fare la spesa", completed: false },
    { id: 2, description: "Pulire la casa", completed: false }
];

function addTodo(todo) {
    todos.push(todo)
}

addTodo({ id: 3, description: "Studiare JavaScript", completed: false });

console.log(todos);

<br>

<h2>Come esce in pagina l'esercizio completato</h2>

<img src="https://github.com/user-attachments/assets/2579d728-324e-44f0-9201-14e411553bbd" alt="Es.2">
