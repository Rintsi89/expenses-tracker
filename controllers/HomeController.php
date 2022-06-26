<?php

  class HomeController {
    public function home() {

      $expenses = Expense::getAll();
      $incomes = Income::getAll();
      require_once('views/home.php');
    }

    public function error() {
        require_once('views/error.php');
      }
  }