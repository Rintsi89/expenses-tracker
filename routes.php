<?php

function call($controller, $action) {
    require_once('controllers/' . $controller . 'Controller.php');

    // Create a new instance of the needed controller
    switch($controller) {
      case 'Home':
        require_once('models/Expense.php');
        require_once('models/Income.php');
        $controller = new HomeController();
      break;
      case 'Income': 
        require_once('models/Income.php');
        $controller = new IncomeController();
      break;
      case 'Expense': 
        require_once('models/Expense.php');
        $controller = new ExpenseController();
      break;
    }

    // Call the action
    $controller->{ $action }();
  }

  // List of controllers and their methods
  $controllers = array(
    'Home' => ['home', 'error'],
    'Income' => ['showForm'],
    'Expense' => ['showForm']
  );

  // Check that the requested controller and action are allowed
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('Home', 'error');
    }
  } else {
    call('Home', 'error');
  }