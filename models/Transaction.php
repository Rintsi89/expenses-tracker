<?php

abstract class Transaction {
    public $id;
    public $category_id;
    public $date;
    public $amount;
    public $comment;

    public function __construct($id, $category_id, $date, $amount, $comment) {
        $this->id = $id;
        $this->category_id = $category_id;
        $this->date = $date;
        $this->amount = $amount;
        $this->comment = $comment;
    }

    abstract static function getAll();
}