<?php

require_once('Transaction.php');

class Income extends Transaction {

    public static function getAll() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM incomes');

        foreach($req->fetchAll() as $income) {
            $list[] = $income;
        }

        return $list;
    } 
}