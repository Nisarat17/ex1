<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{
    public function index(){
     return "สวัสดีจากหน้า user index"
    }
    public function show($id){
        return "เธอคือ id $id";
    }
    public function update($id1){
        return "กำลังupdate id $id1";
    }

}
