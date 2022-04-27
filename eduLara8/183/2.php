<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Pagination\Cursor;
use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller {

  public function set(Request $request) {
    if($request->cookie('count1') !==0) {
      $count = $request->cookie('count1');
      
      echo $count+1;
      return response('count1')
            ->cookie('count1', $count + 1, 10);
     
    
    } else {
      echo 1;
      return response('count1')
              ->cookie('count1', 1, 10);
      
    }


    

  }

  public function read(Request $request) {
    echo $request->cookie('count1');
    return response('count1')
              ->cookie('count1', 3, 10);
    
    
  }

}

