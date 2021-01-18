<?php
use Illuminate\Support\Facades\Route;
use App\Mail\SampleMail;
Route::get('/',function(){
return new SampleMail();
});

?>
