<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome2',[
        "title" => "Home"
    ]);
});

Route::get('/contacts', function(){
    $contacts = [
        1 => ['name'=>'Akbar', 'phone'=>'0823xxxx'],
        2 => ['name'=>'Ramadhani', 'phone'=>'3092xxxx'],
        3 => ['name'=>'Firdaus', 'phone'=>'6778xxxx'],
    ];
    return view('contacts.index2', ['contacts'=>$contacts]);
})->name('contacts.index');
Route::get('/contacts/create', function(){
    return "<h1>Add New Contact</h1>";
})->name('contacts.create');
Route::get('/contacts/{id}', function ($id){
    return "Contact ".$id;
})->name('contacts.show');

function getContacts(){
    return [
        1 => ['name'=>'Akbar', 'phone'=>'0823xxxxxxxx', 'email'=>'akbar@gmail.com'],
        2 => ['name'=>'Ramadhani', 'phone'=>'0823xxxxxxxx', 'email'=>'ramadhani@gmail.com'],
        3 => ['name'=>'Firdaus', 'phone'=>'0823xxxxxxxx', 'email'=>'firdaus@gmail.com'],
    ];
}
Route::get('/contacts3', function(){
    $contacts = getContacts();
    // Menampilkan halaman indeks kontak dengan menggunakan view bernama "contacts.index3" dan meneruskan data kontak yang telah diambil dari sumber tersebut ke dalam view tersebut.
    return view('contacts.index3', ['contacts'=>$contacts, "title"=>"Contacts"]);
    // return view('contacts.index3', ['contacts'=>getContacts()]);
})->name('contacts.index3');

Route::get('/contacts/{id}', function ($id){
    // manggil function getContacts()
    $contacts = getContacts();
    // Memeriksa apakah kontak dengan ID yang diminta tersedia dalam data kontak. Jika tidak, maka akan menampilkan halaman 404 (not found) dengan menggunakan fungsi abort_unless.
    abort_unless(isset($contacts[$id]), 404);
    $contact = $contacts[$id];
    // Menampilkan halaman detail kontak dengan menggunakan view bernama "contacts.shows" dan meneruskan data kontak yang dipilih ke dalam view tersebut.
    return view('contacts.shows',["title"=>"details"])->with('contact',$contact);
})->name('contacts.shows');

