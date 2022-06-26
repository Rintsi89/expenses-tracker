<?php

require_once('TransactionController.php');

class ExpenseController extends TransactionController {
    public function showForm() {
        require_once('views/expenseForm.php');
    }
}