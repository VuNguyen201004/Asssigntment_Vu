<?php 

namespace Vu\Mvcoop\Controllers\Client;

use Vu\Mvcoop\Commons\Controller;
use Vu\Mvcoop\Models\Product;

class HomeController extends Controller
{
    private Product $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function index() {
        $name = 'Vux';
        $products = $this->product->all();

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }
    

}