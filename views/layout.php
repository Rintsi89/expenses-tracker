<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <header>
      <a href='/expenses-tracker'>Home</a>
      <a href='/expenses-tracker/?controller=Income&action=showForm'>Add income</a>
      <a href='/expenses-tracker/?controller=Expense&action=showForm'>Add expense</a>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>
      Copyright
    </footer>
  <body>
<html>