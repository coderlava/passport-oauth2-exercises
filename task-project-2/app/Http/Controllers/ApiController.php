<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;

class ApiController extends Controller
{

    public function index() {
    	$all_values = Api::all();
        return $all_values;
    }


    public function id($id) {
        $table_id = Api::find($id);
        if(!$table_id){ return view('index'); }
        return $table_id;
    }

    public function names() {
        $name_values =  Api::all('name');
        return $name_values;
    }

    public function name_id($name_id) {
      $id_name_value = Api::find($name_id);
      if(!$id_name_value){ return view('index'); }
      return $id_name_value->name;
  }
}
