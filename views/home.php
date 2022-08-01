<?php if($incomes) { ?>
    <h2>Incomes</h2>
    <table>
        <?php foreach($incomes as $income) { ?>
            <tr>
                <td><?= $income['income_category_id']; ?></td>
                <td><?= $income['date']; ?></td>
                <td><?= $income['amount'] .' €'; ?></td>
                <td><?= $income['comment']; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>

<?php if($expenses) { ?>
    <h2>Expenses</h2>
    <table>
        <?php foreach($expenses as $expense) { ?>
            <tr>
                <td><?= $expense['expense_category_id']; ?></td>
                <td><?= $expense['date']; ?></td>
                <td><?= $expense['amount'] . ' €'; ?></td>
                <td><?= $expense['comment']; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>
