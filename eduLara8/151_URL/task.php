<?php
//Создание URL
//1. Переделайте ссылки для редактирования пользователей, с учетом полученных знаний.
<td><a href="{{ url("/delete?id={$contact->id}") }}" class="link-danger">Delete</td>
<td><a href="{{ url("/edit?id={$contact->id}") }}" class="link-warning">Edit</td>


//Доступ к текущему URL
//2. Получите доступ к различным частям URL при помощи экземлпяра класса и через фасад URL.
//url помогает при переезде с одного домена на другой 
echo url()->current(); //http://test.com 

echo url()->full(); //http://test.com/?page=1 

echo url()->previous();  //http://test.com/?page=2

URL::current(); //http://test.com 

//URL для именованных маршрутов
//2. Переделайте роуты в проекте на именнованные, а ссылки сгенерируйте при помощи помщника route. Поменяйте url
//в роуте и убедитесь, что работа приложения не нарушилась.
//route облегчает изменение url в процессе разработки
Route::controller(ContactController::class)->group(function () {
  Route::get('/', 'result')->name('result');
  Route::get('/addcontacts', 'form')->name('form');
  Route::get('/delete', 'delete')->name('delete');
  Route::get('/edit', 'edit')->name('edit');
});

td><a href="{{ route('delete')."?id={$contact->id}" }}" class="link-danger">Delete</td>
<td><a href="{{ route('edit')."?id={$contact->id}" }}" class="link-warning">Edit</td>

//3. Создайте роут типа /user/{id}/name/{name}/salary/{salary}
 Route::get('/user/{id}/name/{name}/salary/{salary}', 'params')->name('params');
//4. Передайте черз роут произвольные данные и выведите роут с данными на экран.
public function params($id, $name, $salary) {
  return route('params', ['id' => $id, 'name' => $name, 'salary' => $salary]);
}

//Модели Eloquent
//5. Из телефонной книги выведите на экран пользователя с id=11.
не понял как это работает, у меня выводится все данные модели в гет строку.

//Подписанные URL
//6. При помощи миграций создайте таблицу. Наполните ее данными изпользуя фабрики.
//7. Создайте роут, контроллер и модель для ранее созданной таблицы.
subscribers: id, login, email, created_ad, modifated_ad

php artisan make:model Subscriber -mfsc 

//8. Сгенерируйте временную ссылку, перейдя по которой произойдет удаление пользователя из базы данных подписчиков.
//реализовал логику в замыкании роута, для упрощения и тренировки.
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\Subscriber;

Route::get('/link', function() {
  return "<a href=".URL::temporarySignedRoute('unsubscribe', now()->addMinutes(1), ['user' => 6]).">Link unsubscribe</a>";
});


Route::get('/unsubscribe/{user}', function (Request $request, $id) {
    if (! $request->hasValidSignature()) {
        abort(401);
    } else {
      Subscriber::find($id)->delete();
    }
})->name('unsubscribe');


//9. Используйте для верификации не экземпляр входящего запроса, а посредник.
Route::get('/unsubscribe/{user}', function ($id) {

      Subscriber::find($id)->delete();

})->name('unsubscribe')->middleware('signed');

//Ответ на недействительные подписанные маршруты
//10. Реализуйте вывод собственной страницы 403.
/var/www/test.com/app/Exceptions/Handler.php
public function register() {

    $this->renderable(function (InvalidSignatureException $e) {
      return response()->view('error.link-expired', [], 403);
    });

    $this->reportable(function (Throwable $e) {
      //
    });

  }

}

/var/www/test.com/resources/views/error/link-expired.blade.php
<x-layout>
<p>My 403</p>
</x-layout>

//URL для действий контроллера
//Вывел из контроллера, но не понял как это применяется.

//Значения по умолчанию
//пропустил


























