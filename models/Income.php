<?php

require_once('Transaction.php');

class Income extends Transaction {

    public static function getAll() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM incomes');

        foreach($req->fetchAll() as $expense) {
            $list[] = new Income($expense['id'], $expense['income_category_id'], $expense['date'], $expense['amount'], $expense['comment']);
        }

        return $list;
    } 
}