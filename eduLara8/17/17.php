⋕pp.lr.Pm.Rt.RC.2
Route::get('/user/all', function () {
    return 'all';
});

Route::get('/user/', function () {
    return 'user';
});

Route::get('/userid/{id?}', function ($id = 'null') {
    return $id;
});

⋕pp.lr.Pm.Rt.RC.3
Route::get('/user/all/desc', function () {
    return 'all desc';
});

Route::get('/user/all', function () {
    return 'all';
});

Route::get('/userid/{name}/{id?}', function ($name, $id = 1) {
    return 'name id';
});

⋕pp.lr.Pm.Rt.RC.4
Route::get('/user/{id}', function ($id) {
    return 'id';
})->where('id', '[0-9]+');

Route::get('/user/{slug}', function ($slug) {
    return 'slug';
})->where('slug', '[a-z0-9_-]+');
