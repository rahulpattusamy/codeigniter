<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StudentModel;
class StudentController extends BaseController
{

  private $studentModelobject;

    public function __construct(){
      $this->studentModelobject = new StudentModel;
    }
    public function addStudent(){
       $data = ["username"=>"kaif",
       "email"=>"kaif@gmail.com",
       "password"=>"kaif123"];
       $this->studentModelobject->insert($data);

       echo"<h1>student created succesfully</h1>";
    }
    public function updateStudent(){
         $data = [
       "email"=>"kaif25@gmail.com",
       "password"=>"kaif1234"];
              $this->studentModelobject->update(3,$data);

    }

}