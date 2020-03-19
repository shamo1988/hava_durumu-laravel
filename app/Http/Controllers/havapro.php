<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class havapro extends Controller
{
    public function index(){

        App::setLocale("az");

return view('index');
 
    }
    public function indexaz(){

        App::setLocale("az");

return view('index');
 
    }

    public function indexen(){

        App::setLocale("en");

return view('index');
 
    }
    public function indexru(){

        App::setLocale("ru");

return view('index');
 
    }
    public function ajax(){
        return view('hava.ajax');
         
            }
            public function postajax(Request $request)
            
            {
                if($request->ajax()){
                    $id = $request->data;
                    $locale=$request->datadil;
                    if($locale=='/en'){
                        App::setLocale("en");
                        }
                        else if($locale=='/ru'){
                            App::setLocale("ru");
                        }
                            else if($locale=='/'){
                                App::setLocale("az");
                            }
                            else if($locale=='/az'){
                                App::setLocale("az");
                            }

                    $data = view ('hava.ajax', compact('id'))->render() ;
                    return response()->json( $data );
                    
                  }

                 
                    }
}
