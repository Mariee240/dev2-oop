<?php

class Book {
    /* Properties */
    private $title;  /* inside of the class */
    public $author;  /* outside of the class */
    private $publisher;
    private $price;

    public function __construct($new_title, $new_author, $new_publisher, $new_price) {
        $this->title = $new_title;
        $this->author = $new_author;
        $this->publisher = $new_publisher;
        $this->price = $new_price;
    }

    /* Methods = action */
    // public function setTitle($new_title) {
    //     $this->title = $new_title;
    // }

    // public function setPublisher($new_publisher) {
    //     $this->publisher = $new_publisher;
    // }

    // public function setPrice($new_price) {
    // //     $this->price = $new_price;
    // }

    public function getTitle() {  /* var = same as public */ /* function = public by default */
        return $this->title;  /* without $ */
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPublisher() {
        return $this->publisher;  /* $object->member */
    }

    public function getPrice() {
        return $this->price;
    }



//     public function displayAuthor() {
//         return $this->author;
//     }

//     private function displayValues() {
//         echo "Title: ".$this->title."<br>";
//         echo "Publisher: ".$this->publisher."<br>";
//         echo "Price: ".$this->price."<br>";
//     }
}

// $web_development = new Book;  /* $object = new class */
// $web_development->author = "John Doe";
// echo "Author: ".$web_development->displayAuthor()."<br>";

// $web_development->setTitle("Web Development Book");
// $web_development->setPublisher("Kredo 2023");
// $web_development->setPrice("500");

// echo "Title: ".$web_development->getTitle()."<br>";
// echo "Publisher: ".$web_development->getPublisher()."<br>";
// echo "Price: ".$web_development->getPrice()."<br>";


// $web_development = new Book("Web development", "Jane Smith", "Kredo 2023", 30);
// echo $web_development->getTitle();
?>