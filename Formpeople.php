<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
use DB;

class Formpeople extends Model
{

function rules($request) {
$validator = Validator::make(

    array(
          'name' => $request->input('name'),
          'last_name' => $request->input('last_name'),
          'code' => $request->input('code'),
          'email' => $request->input('email'),
          'address' => $request->input('address')
    ),

    array('name' => 'required',
          'last_name' => 'required',
          'code' => 'integer',
          'email' => 'email',
          'address' => 'required'
    )

);
return $validator;
}

public function make($request, $method, $query_string)
{
$results=DB::$method($query_string);
return $results;
}

}
