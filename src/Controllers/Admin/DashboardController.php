<?php
namespace Vu\Mvcoop\Controllers\Admin;

use Vu\Mvcoop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}

