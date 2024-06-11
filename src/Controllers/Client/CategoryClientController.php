<?php 

namespace Vu\Mvcoop\Controllers\Client;

use Vu\Mvcoop\Commons\Controller;
use Vu\Mvcoop\Models\Category;

class CategoryClientController extends Controller
{
    private Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index() {
        // Lấy tất cả các danh mục
        $categoriesForMenu = $this->category->all();

        // Trả về view với dữ liệu categories
        $this->renderViewClient('layouts.partials.header', [
            'categoriesForMenu' => $categoriesForMenu
        ]);
    }

    public function detail($id) {
        $category = $this->category->findByID($id);

        $this->renderViewClient('product-detail', [
            'category' => $category
        ]);
    }
}
