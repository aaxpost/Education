//9.1, 9.2
/var/www/test.com/resources/views/page/show.blade.php
<ul>
	@foreach ($links as $elem)
	<li><a href="{{ $elem['href'] }}">{{ $elem['text'] }}</a></li>
	@endforeach
</ul>

/var/www/test.com/app/Http/Controllers/PageController.php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class PageController extends Controller
{

    public function show()
    {
        return view('page.show', ['links' => [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ]]);
    }
}

//9.6
/var/www/test.com/resources/views/page/show.blade.php
<table border = "1">
	<tr>
	<th>#</th>
	<th>Имя</th>
	<th>Фамилия</th>
	<th>Зарплата</th>
	</tr>
	@foreach ($employees as $elem)
	<tr>
		@if ($elem['salary'] > 2000)
			<td>{{ $loop->iteration }}</td>
			<td>{{ $elem['name'] }}</td>
			<td>{{ $elem['surname'] }}</td>
			<td>{{ $elem['salary'] }}</td>
		@endif
    </tr>
	@endforeach
</table>

//9.8
<table border = "1">
	<tr>
	<th>Имя</th>
	<th>Фамилия</th>
	<th>Статус</th>
	</tr>
	@foreach ($users as $elem)
	<tr>
		<td>{{ $elem['name'] }}</td>
		<td>{{ $elem['surname'] }}</td>
		@if($elem['banned'] === true)
		<td><font color="red">забанен</font></td>
		@else
		<td><font color="green">активен</font></td>
		@endif
    </tr>
	@endforeach
</table>


//9.9 9.10
<form>
	@foreach ($strings as $dataForm)
	<input value = {{ $dataForm }}><br>
	@endforeach
	<select>
	@foreach ($strings as $dataForm)
	<option>{{ $dataForm }}</option>
	@endforeach
	<select>
</form>

//9.11
/var/www/test.com/app/Http/Controllers/PageController.php
<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class PageController extends Controller
{

    public function show()
    {
        $arrMonth = range(1,date('t'));
        $today = date('j');
        return view('page.show', ['days' => ['dayMonth'=>$arrMonth,
'today'=>$today]]);
    }
}

/var/www/test.com/resources/views/page/show.blade.php
<!DOCTYPE html>
<html>
	<head>
		<title>My view</title>
	</head>
	<body>
	<ul>
		@foreach ($days['dayMonth'] as $day)
		@if($day == $days['today'])
			<li class = "active">{{ $day }}</li>
		@endif
		<li>{{ $day }}</li>
		@endforeach
</ul>
	</body>
</html>






































