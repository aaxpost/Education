<?php
//Данные прошлого запроса
/*
1.Создайте страницу с формой, которая принимает цифровой код подтверждения. После отправки
данные формы должны переадресовываться на страницу контроллер которой проверит, что переданные
данные являются цифрами. После верификации выведите сообщение об этом. При ошибке, данные, которые не прошли проверку, верните на страницу с формой и выведите в поле формы с возможностью редактирования.
*/

Route::get('/', [ContactController::class, 'form']);
Route::post('/result', [ContactController::class, 'verification']);
Route::get('/success', [ContactController::class, 'success']);

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller {
  
  public function form(Request $request) {
      
    return view('contact.form');
    
  }

  public function verification(Request $request) {

    if(preg_match('#^\d{1,}$#s', $request->input('num')) === 1) {
      
      return redirect('/success');
      
    } else {
      
      $request->flash();
      
      return redirect('/');
      
    }
  }

  public function success(Request $request) {
    
    return 'success';
  }
}

/*
2.Создайте страницу с формой, которая принимает логин и цифровой код подтверждения. После отправки данные формы должны переадресовываться на страницу контроллер которой проверит, что переданные данные кода являются цифрами. В cлучае верификации выведите сообщение об этом. В случае ошибки верните логин на страницу формы. Код не должен быть передан.
*/

<x-layout>
    <div class="container">
        <form action="/result" method="POST">
        @csrf
            <div class="form-group">
                <label>login</label><br>
                <input class="form-control" name="login" value="{{ old('login') }}"><br>
                <label>code</label><br>
                <input class="form-control" name="num">
                
            </div>
            <button type="submit" class="btn btn-primary">Enter</button>
        </form>
        @if(isset($num))
        {{ $num }}
        @endif
    </div>
</x-layout>

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller {
  
  
  
  public function form(Request $request) {
    
    echo $request->old('login');
    echo $request->old('num');
      
    return view('contact.form');
    
  }

  public function verification(Request $request) {

    if(preg_match('#^\d{1,}$#s', $request->input('num')) === 1) {
      
      return redirect('/success');
      
    } else {
            
      return redirect('/')->withInput(
        $request->except('num')
      );
      
    }
  }

  public function success(Request $request) {
    
    return 'success';
  }
}
























