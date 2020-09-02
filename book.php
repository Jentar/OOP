<?php

class Book {

    protected $title;
    protected $inStock = true;
    protected $stockSaldo;

    public function __construct($t) {
        $this->title = $t;
    }

    public function getStocksaldo() {
        return $this->stockSaldo;
    }

    public function setStocksaldo($v) {
        if ($v < 0) {
            throw new Exeption('Value should not be negative');
        } else {
            $this->stockSaldo = $v;
        }
    }
    public function soldOut() {
        $this->inStock = false;
    }

}

$book = new Book('Kalevipoeg');
$book2 = new Book('Rehepapp');

$book2->soldOut();
$book->setStocksaldo(15);
$book2->setStocksaldo(18);


var_dump($book);
var_dump($book2);
var_dump($book->getStocksaldo());