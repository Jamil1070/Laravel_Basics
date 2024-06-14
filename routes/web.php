<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('content.index');
});

Route::get('/item/{id}', function ($id) {
    $data = [];

    // Voorbeeldgegevens op basis van id's
    switch ($id) {
        case 1:
            $data = [
                'Naam' => 'Zoekertje 1',
                'Beschrijving' => 'Dit is de beschrijving voor Zoekertje 1.'
            ];
            break;
        case 2:
            $data = [
                'Naam' => 'Zoekertje 2',
                'Beschrijving' => 'Dit is de beschrijving voor Zoekertje 2.'
            ];
            break;
        case 3:
            $data = [
                'Naam' => 'Zoekertje 3',
                'Beschrijving' => 'Dit is de beschrijving voor Zoekertje 3.'
            ];
            break;
        default:
            // Standaardgegevens als id niet overeenkomt
            $data = [
                'Naam' => 'Zoekertje',
                'Beschrijving' => 'Er is geen beschrijving beschikbaar voor dit zoekertje.'
            ];
    }

    return view('content.item', ['id' => $id, 'data' => $data]);
})->name('item.detail');
Route::prefix('admin')->group(function () {
    // Admin index pagina
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    // Route voor bewerken van een item
    Route::get('/edit/{id}', function ($id) {
        return view('admin.edit', ['id' => $id]);
    })->name('admin.edit');

    // Route voor maken van een item
    Route::get('/create', function () {
        return view('admin.create');
    })->name('admin.create');

    // Post route voor het opslaan van een bewerkt item
    Route::post('/edit/{id}', function (Request $request, $id) {
        // Logica voor het opslaan van bewerkt item

        // Tijdelijk de data in de request injecteren en doorsturen naar de admin-indexpagina
        return redirect()->route('admin.index')->with('data', $request->all());
    })->name('admin.edit.post');

    // Post route voor het maken van een nieuw item
    Route::post('/create', function (Request $request) {
        // Logica voor het maken van een nieuw item

        // Tijdelijk de data in de request injecteren en doorsturen naar de admin-indexpagina
        return redirect()->route('admin.index')->with('data', $request->all());
    })->name('admin.create.post');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
