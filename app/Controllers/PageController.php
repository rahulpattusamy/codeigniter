<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PageController extends BaseController
{
    public function index($num)

    {
    echo "<h1>This is the number: $num</h1>";
    }
}
