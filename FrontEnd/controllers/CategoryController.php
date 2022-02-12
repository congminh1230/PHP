<?php
require_once('models/Category.php');
require_once('controllers/BaseController.php');
class CategoryController extends BaseController {
    public function getListCategory() {
        $category = new Category();
        $categories = $category->getList();
        $this->view("CategoryList/list.php", [
            'categories' => $categories,
        ]);
    }
}
?>