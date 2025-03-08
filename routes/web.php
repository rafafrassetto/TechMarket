// routes/web.php
use Illuminate\Support\Facades\Route;

Route::get('/musica', function () {
return view('musica.index');
})->name('musica.index');

Route::get('/planilhas', function () {
return view('planilhas.index');
})->name('planilhas.index');