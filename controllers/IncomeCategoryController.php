<?php

class IncomeCategoryController {
    public function showForm() {
        require_once('views/incomeCategoryForm.php');
    }

    public function addCategory() {

        if (isset($_POST['income_category']) && ctype_alnum($_POST['income_category'])) {    
            $category = $_POST['income_category'];
            $model = new IncomeCategory();
            $model->insertCategory($category);
        } else {
            $error = "Please insert valid category name";
            require_once('views/incomeCategoryForm.php');
        }

    }
}

