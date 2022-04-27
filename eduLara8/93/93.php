//Сложные условия при выборке через QB в Laravel
<?php
⋕pp.lr.Pm.QB.CC.1
class UserController extends Controller
{ 
    //
    public function show()
    {
        $arrUsers = DB::table('users')
        ->where('salary', '=', 500)
        ->orWhere(function ($query) {
            $query
            ->where('age', '>', 19)
            ->where('age', '<', 29);
        })
        ->get();
        dd($arrUsers);
		//return view('user.show', ['users' => $arrUsers]);
        
    }

}

⋕pp.lr.Pm.QB.CC.2
class UserController extends Controller
{ 
    //
    public function show()
    {
        $arrUsers = DB::table('users')
        ->orWhere(function ($query) {
            $query
            ->where('salary', '>', 400)
            ->where('salary', '<', 800);
        })
        ->orWhere(function ($query) {
            $query
            ->where('age', '>', 20)
            ->where('age', '<', 30);
        })
        ->get();
        dd($arrUsers);
		//return view('user.show', ['users' => $arrUsers]);
        
    }

}


