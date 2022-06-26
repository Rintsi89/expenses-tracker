<?php

require_once('Transaction.php');

class Expense extends Transaction {

    public static function getAll() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM expenses');

        foreach($req->fetchAll() as $expense) {
            $list[] = new Expense($expense['id'], $expense['expense_category_id'], $expense['date'], $expense['amount'], $expense['comment']);
        }

        return $list;
    } 
}