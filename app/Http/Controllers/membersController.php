<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use App\Models\memberincomeModel;
use Illuminate\Support\Facades\DB;

class membersController extends Controller
{

    public function getAllMembers()
    {
        echo member::all();
    }

    public function deleteMember($id)
    {
        $data = member::find($id);
        $data->delete();
    }    

    public function getMembersTables()
    {

        $users = member::join('memberincome', 'members.id', '=', 'memberincome.mem_id')
        ->get(['members.*', 'memberincome.*']);       

        echo $users;
    }
    
    public function addMember($memName, $memEmail, $month, $year, $volume)
    {
        $mem = new member;
        $mem->memName = $memName;
        $mem->memEmail = $memEmail;
        $mem->save();

        $memIncome = new memberincomeModel;

        $memIncome->mem_id = $mem->id;
        $memIncome->month = $month;
        $memIncome->year = $year;
        $memIncome->volume = $volume;
        $memIncome->save();

    }


    public function getTopMembers()
    {
        $products = DB::table('members')
        ->join('memberincome','members.id','=','memberincome.mem_id')
        ->select('members.*', 'memberincome.*')
        ->where('memberincome.month','=','March')
        ->where('memberincome.year','=','2022')
        ->orderBy('memberincome.volume', 'DESC')
        ->limit(5)
        ->get();

        echo $products;

    }    

    public function getPerDetails($id)
    {
        $mem = new member;
        $data = $mem->find($id);
        echo $data;

    } 
    
    public function getIncomeDetails($id)
    {   
        $products = DB::table('memberincome')
        ->select('memberincome.*')
        ->where('memberincome.mem_id','=', $id)
        ->get();

        echo $products;

    }     


    public function gdelIncomeDetails($id)
    {
        $data = memberincomeModel::find($id);
        $data->delete();
    }     

    public function addMemebrIncome($id, $month, $year, $volume)
    {
        $memIncome = new memberincomeModel;

        $memIncome->mem_id = $id;
        $memIncome->month = $month;
        $memIncome->year = $year;
        $memIncome->volume = $volume;
        $memIncome->save();
    }   

    public function editPerDetails($id, $name, $email)
    {
        $data = member::find($id);
        $data->memName = $name;
        $data->memEmail = $email;
        $data->save();

    } 

    public function getMonthYear()
    {   
        $products = DB::table('memberincome')
        ->select('memberincome.year', 'memberincome.month')
        ->distinct()
        ->orderBy('memberincome.year')
        ->get();

        echo $products;

    }  


    public function getTopMembersOnParams($month, $year)
    {
        $products = DB::table('members')
        ->join('memberincome','members.id','=','memberincome.mem_id')
        ->select('members.*', 'memberincome.*')
        ->where('memberincome.month','=', $month)
        ->where('memberincome.year','=', $year)
        ->orderBy('memberincome.volume', 'DESC')
        ->limit(5)
        ->get();

        echo $products;

    } 


}
