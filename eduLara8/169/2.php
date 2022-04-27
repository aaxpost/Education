public function temp(Request $request) {
    
    if(!$request->session()->get('time')) {
    $request->session()->put('time', now());
    }
     
     echo  $request->session()->get('time');
     
  }
  
  public function temp(Request $request) {
    
    echo $request->session()->get('time', function() {
		return now();
	});
    
    if(!$request->session()->get('time')) {
    $request->session()->put('time', now());
    }
     
     //echo  $request->session()->get('time');
     
  }
