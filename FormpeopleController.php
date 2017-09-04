<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formpeople;
use Illuminate\Support\Facades\Input;

class FormpeopleController extends Controller
{

    public function __construct(Formpeople $formpeople)
    {
        $this->formpeople = $formpeople;
    }

    public function index(Request $request)
    {
        if(Input::get('save')) {
           $validator=$this->formpeople->rules($request);
           if(!$validator->fails()) {
              $method='insert';
              $query_string='insert into formpeoples(name, last_name, code, email, address) values("'.$request->input('name').'",
              "'.$request->input('last_name').'", '.$request->input('code').', "'.$request->input('email').'", "'.$request->input('address').'")';
              $results=$this->formpeople->make($request, $method, $query_string);
              return redirect('/formpeople');
           }
           else {
              Input::flash();
              if($validator->messages()->has('name')) {$message_array['name']='<li>'.$validator->messages()->first('name').'</li>';}
              if($validator->messages()->has('last_name')) {$message_array['last_name']='<li>'.$validator->messages()->first('last_name').'</li>';}
              if($validator->messages()->has('code')) {$message_array['code']='<li><span style="color:red;">'.$validator->messages()->first('code').'</span></li>';}
              if($validator->messages()->has('email')) {$message_array['email']='<li><span style="color:red;">'.$validator->messages()->first('email').'</span></li>';}
              if($validator->messages()->has('address')) {$message_array['address']='<li>'.$validator->messages()->first('address').'</li>';}
              $method='select';
              $query_string='select name, last_name, code, email, address from formpeoples';
              $results=$this->formpeople->make($request, $method, $query_string);
              return view('formpeople/formpeople', ['results'=>$results, 'message_array'=>$message_array]);
           }
        }
        else {
           $method='select';
           $query_string='select name, last_name, code, email, address from formpeoples';
           $results=$this->formpeople->make($request, $method, $query_string);
           return view('formpeople/formpeople', ['results'=>$results]);
        }
    }
}
