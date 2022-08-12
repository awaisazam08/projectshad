<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentsController extends Controller
{
    public function getAllStudents()
    {
        echo student::all();
    }

    public function deleteStudent($id)
    {
        $data = student::find($id);
        $data->delete();
    }

    public function getFromTwoTables()
    {

        $users = student::join('monthincome', 'students.id', '=', 'monthincome.stu_id')
        ->get(['students.*', 'monthincome.*']);       

        echo $users;
    }
}
