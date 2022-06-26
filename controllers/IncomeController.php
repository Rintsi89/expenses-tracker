<?php

require_once('TransactionController.php');

class IncomeController extends TransactionController {
    public function showForm() {
        require_once('views/incomeForm.php');
    }
}