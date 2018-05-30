<?php
use App\Subscriber;
use Illuminate\Http\Request;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('documentation', 'HomeController@index');
Route::post('/', function(Request $request) {
    try {
        $sub = Subscriber::firstOrCreate([
            'name' => $request->name,
            'email' => $request->email
        ]);
    } catch(\Exception $e) {
        dd($e->getMessage());
    }
    return back();
});
