<?php

class IncomeCategory {
    public function insertCategory($name) {
        $db = Db::getInstance();
        $query = $db->prepare('INSERT INTO income_categories (name) VALUES (:name)');
        $query->execute(array(
            'name' => $name
        ));
    }
}