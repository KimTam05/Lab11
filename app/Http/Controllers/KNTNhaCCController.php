<?php

namespace App\Http\Controllers;

use App\Models\KNTNhaCC;
use Illuminate\Http\Request;

class KNTNhaCCController extends Controller
{
    // List / create / edit
    public function list(){
        // Lấy dữ liệu từ database qua ORM
        $NhaCC_data = KNTNhaCC::paginate(15);
        return view("KNTNhaCC.list",compact("NhaCC_data"));
    }

}
