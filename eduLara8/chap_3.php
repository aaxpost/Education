<?php
//file web.php
//3.2
//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PageController;
Route::get('/pages/show', [PageController::class, 'showOne']);
//3.3
Route::get('/pages/all', [PageController::class, 'showAll']);

//file PageController.php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
class PageController extends Controller
{
    //3.2
    public function showOne()
    {
        return 'Действие showOne контроллера Page';
    }
    //3.3
    public function showAll()
    {
        return 'Действие showAll контроллера Page';
    }
}

//3.4
//file web.php
Route::get('/pages/show/{param}', [PageController::class, 'showOne'])->where('param', '\d');
//file PageController.php
public function showOne($param)
    {
        return $param*$param;
    }
    
//3.9
use App\Http\Controllers\Test;
Route::get('/test/sum/{num1}/{num2}', [Test::class, 'sum'])->where(['num1' => '\d', 'num2' => '\d']);

class Test extends Controller
{ 
    public function sum($num1, $num2)
    {
        return $num1 + $num2;
    }  
}

//3.11
//file web.php
use App\Http\Controllers\Employee;
Route::get('/showone/{id}', [Employee::class, 'showOne'])->where('id', '\d');
//3.12 3.13
Route::get('/showfield/{id}/{param}', [Employee::class, 'showField'])->where(['id' => '[1-5]', 'param' => 'name|surname|salary']);

//file Employee.php
namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	
	class Employee extends Controller
	{
		private $employees;
		
		public function __construct()
		{
			$this->employees = [
				1 => [
					'name' => 'user1',
					'surname' => 'surname1',
					'salary' => 1000,
				],
				2 => [
					'name' => 'user2',
					'surname' => 'surname2',
					'salary' => 2000,
				],
				3 => [
					'name' => 'user3',
					'surname' => 'surname3',
					'salary' => 3000,
				],
				4 => [
					'name' => 'user4',
					'surname' => 'surname4',
					'salary' => 4000,
				],
				5 => [
					'name' => 'user5',
					'surname' => 'surname5',
					'salary' => 5000,
				],
			];
		}

        //3.11
        public function showOne($id)
        {
            return $this->employees[$id]['name'].' '.
            $this->employees[$id]['surname'].' '.
            $this->employees[$id]['salary'];
        }

        //3.12
        public function showField($id, $param)
        {
            return $this->employees[$id][$param];
        }
    
    }






