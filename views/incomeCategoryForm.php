<h2>ADD INCOME CATEGORY HERE</h2>
<form action="/expenses-tracker/?controller=IncomeCategory&action=addCategory" method="POST">
    <input type="text" minlength="2" name="income_category" />
    <input type="submit" value="Submit" />
</form>
<?php echo $error ?? null; ?>