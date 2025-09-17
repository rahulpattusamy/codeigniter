<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentController extends BaseController
{
    public function index()
    {
    echo "<h1>This is get request method</h1>";
    }
     public function post()
    {
    echo "<h1>This is post request method</h1>";
    }
      public function put()
    {
    echo "<h1>This is put request method</h1>";
    
}
}