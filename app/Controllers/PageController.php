<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PageController extends BaseController
{
    public function index()
    {
     $userid = $this->request->getvar("id");
     $username = $this->request->getvar("name");

    echo "<h1>The user id is $userid  username is $username</h1>";
    }
}
