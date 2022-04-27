<?php
/*
1. Создайте три метода связанные ссылками. Пусть первый метод записывает данные в сессию при помощи метода flash. Убедитесть, что второй метод выводит сообщение, а в третьем методе данные удалены.
*/

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller {

  public function page(Request $request) {
    $request->session()->flash('status', 'Task was successful!');
    
    if (session()->get('status') !== null) {
      echo session()->get('status');
    }
    
    return '<a href = "/result1">result1</a>';
    
  }
  
  public function result1(Request $request) {
    //$request->session()->flash('status', 'Task was successful!');
    
    if (session()->get('status') !== null) {
      echo session()->get('status');
    }
    
    return '<a href = "/result2">result2</a>';
    
  }
  
  public function result2(Request $request) {
    //$request->session()->flash('status', 'Task was successful!');
    
    if (session()->get('status') !== null) {
      echo session()->get('status');
    }    
  }
}

/*
2. На второй странице сохраните данные в сессию при помощи метода reflash. Убедитесь, что данные
сессии сохраняются после обновления страницы.
*/

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller {

  public function page(Request $request) {
    $request->session()->flash('status', 'Task was successful!');
    
    if (session()->get('status') !== null) {
      echo session()->get('status');
    }
    
    return '<a href = "/result1">result1</a>';
    
  }
  
  public function result1(Request $request) {
    
    $request->session()->reflash();
    
    if (session()->get('status') !== null) {
      echo session()->get('status');
    }
    
    return '<a href = "/result2">result2</a>';
    
  }
  
  public function result2(Request $request) {
    
    if (session()->get('status') !== null) {
      echo session()->get('status');
    }
    
  }
 
}

/*
3. Сохраните в сессии два различных сообщение. Используя метод keep сохраните для третьего выводе только одно из сообщений.
*/

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller {

  public function page(Request $request) {
    $request->session()->flash('status', 'True');
    $request->session()->flash('message', 'SMS');

    echo session()->get('status');
    echo session()->get('message');

    return '<a href = "/result1">result1</a>';
  }

  public function result1(Request $request) {

    $request->session()->keep(['message']);

    echo session()->get('status');
    echo session()->get('message');

    return '<a href = "/result2">result2</a>';
  }

  public function result2(Request $request) {

    echo session()->get('status');
    echo session()->get('message');
  }

}

/*
4. Выведите сообщение только один раз.
*/

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller {

  public function page(Request $request) {
    $request->session()->flash('status', 'True');
    $request->session()->now('message', 'SMS');

    echo session()->get('status');
    echo session()->get('message');

    return '<a href = "/result1">result1</a>';
  }

  public function result1(Request $request) {

    $request->session()->keep(['message']);

    echo session()->get('status');
    echo session()->get('message');

    return '<a href = "/result2">result2</a>';
  }

  public function result2(Request $request) {

    echo session()->get('status');
    echo session()->get('message');
  }

}
























