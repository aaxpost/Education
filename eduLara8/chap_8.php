<?php
//laravel 8.4
//file /var/www/test.com/app/Http/Controllers/PageController.php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class PageController extends Controller
{

    public function show()
    {
        return view('child', ['main'=>'Page PageController', 'title'=>'Title-PageController', 'aside'=>'Sidebar aside']);
    }
}


//file /var/www/test.com/resources/views/elems/footer.blade.php
<footer>
	<p>футер</p>
</footer>

//file /var/www/test.com/resources/views/elems/header.blade.php
<header>
	<p>хедер</p>
</header>



//file /var/www/test.com/resources/views/layouts/app.blade.php
<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
	<body>
        @include('elems.header')
		<aside>
        @section('sidebar')
			base sidebar
            @show
		</aside>
		<main>
			@yield('content')
		</main>
        @include('elems.footer')
	</body>
</html>


//file /var/www/test.com/resources/views/child.blade.php
@extends('layouts.app')

@section('title',  $title )

@section('sidebar')
    @parent

    <p>{{ $aside }}</p>
@endsection

@section('content')
    <p>Это содержимое тела страницы. {{ $main }}</p>
@endsection

//file /var/www/test.com/routes/web.php
<?php
use Illuminate\Support\Facades\Route;
//xaa code
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('child');
});

Route::get('/show/', [PageController::class, 'show']);

