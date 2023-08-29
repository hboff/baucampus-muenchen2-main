<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrteatController;
use App\Http\Controllers\GutachterController;
use Illuminate\Support\Facades\DB;


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

$routes = [
    'schimmelpilz',
    'hauskaufberatung',
    'baubegleitung',
    'bauschaden',
    'energieberatung',
    'immobilienbewertung',
    'kontakt',
    'preise',
    'search',
    'leistungen',
    'impressum',
    'datenschutzerklaerung',
    'detail_post',
    'detail_categories',
    '404',
    '401',
    'ausbildung',
    'inspektion',
    'beratung',
    'bewertung',
    'csr',
];

$domains = [
    
    'baugutachter-muenchen.eu' => [
        'laengengrad' => [10.85, 13.9],
        'breitengrad' => [47.79, 48.9],
        'domainort' => 'München',
    ],
    'bausachverstaendiger-berlin.com' => [
        'laengengrad' => [12.71, 15.2],
        'breitengrad' => [51.68, 53.14],
        'domainort' => 'Berlin',
    ],
    
];


foreach ($domains as $domain => $domainData) {
Route::domain($domain)->group(function () use ($routes, $domainData) {
    Route::get('/', function() use ($domainData) {
        $data = DB::table('city_data')
                    ->whereBetween('laenge', $domainData['laengengrad'])
                    ->whereBetween('breite', $domainData['breitengrad'])
                    ->get();
                    
                    $expert = DB::table('city_data')
                    ->join('gutachter', function($join) {
                        $join->on('city_data.laenge', '>=', 'gutachter.Lon')
                             ->on('city_data.laenge', '<=', 'gutachter.Lon2')
                             ->on('city_data.breite', '>=', 'gutachter.Lat')
                         ->on('city_data.breite', '<=', 'gutachter.Lat2');
                    })
                    ->get();
        View::share('data', $data);
        return view('index', ['expert' => $expert,'domainort' => $domainData['domainort']]);
    });
    Route::get('/baugutachter/{ort}', [OrteatController::class, 'show'], function () use ($domainData) {});

foreach ($routes as $route) {
Route::get($route, function () use ($route, $domainData) {
$data = DB::table('city_data')
->whereBetween('laenge', $domainData['laengengrad'])
->whereBetween('breite', $domainData['breitengrad'])
->get();


//In a SQL join, the two tables being joined are combined based on the values in a specified column or columns. The ON clause in a join specifies the conditions for combining the rows from the two tables.
//
//In the example I provided, the orteat and gutachter tables are joined on the breitengrad column in the orteat table and the Lon and Lon2 columns in the gutachter table. The join is performed using the on method in Laravel's Eloquent ORM, and the conditions are specified as orteat.breitengrad >= gutachter.Lon and orteat.breitengrad <= gutachter.Lon2. This means that only the rows from the orteat table where the breitengrad value falls between the Lon and Lon2 values in the gutachter table will be included in the result set.
//
//The result of the join is a single table that includes all columns from both the orteat and gutachter tables. The columns from the orteat table will have the same values for each row, while the name column from the gutachter table will have different values for each row, depending on the matching breitengrad value.

//HIER DIE WHEREBETWEEEN VON $data in $expert einfügen --> denke ich
$expert = DB::table('city_data')
           ->join('gutachter', function($join) {
               $join->on('city_data.laenge', '>=', 'gutachter.Lon')
                    ->on('city_data.laenge', '<=', 'gutachter.Lon2')
                    ->on('city_data.breite', '>=', 'gutachter.Lat')
                         ->on('city_data.breite', '<=', 'gutachter.Lat2');
           })
           ->get();
                  
return view($route, ['data' => $data, 'expert' => $expert, 'domainort' => $domainData['domainort']]);
});
}
});
}


//Route::get('/', function () {
//    return view('index');
//});
//
//Route::get('/preise', function () {
//    return view('preise');
//});
//
//Route::get('/kontakt', function () {
//    return view('kontakt');
//});
//
//Route::get('/leistungen', function () {
//    return view('leistungen');
//});
//
//Route::get('/search', function () {
//    return view('search');
//});
//
//Route::get('/landingpage', function () {
//    return view('landingpage');
//});
//
//Route::get('/detail_categories', function () {
//    return view('detail_categories');
//});
//
//Route::get('/detail_post', function () {
//    return view('detail_post');
//});
//
//Route::get('/401', function () {
//    return view('401');
//});
//
//Route::get('/404', function () {
//    return view('404');
//});
//
//Route::get('/bauschaden', function () {
//    return view('dienstleistungen.bauschaden');
//});
//
//Route::get('/baubegleitung', function () {
//    return view('dienstleistungen.baubegleitung');
//});
//
//Route::get('/energieberatung', function () {
//    return view('dienstleistungen.energieberatung');
//});
//
//Route::get('/hauskaufberatung', function () {
//    return view('dienstleistungen.hauskaufberatung');
//});
//
//Route::get('/immobilienbewertung', function () {
//    return view('dienstleistungen.immobilienbewertung');
//});
//
//Route::get('/schimmelpilz', function () {
//    return view('dienstleistungen.schimmelpilz');
//});
//
//Route::get('/impressum', function () {
//    return view('legal.impressum');
//});
//
//Route::get('/datenschutz', function () {
//    return view('legal.datenschutz');
//});
//
//Route::get('/ausbildung', function () {
//    return view('leistungen.ausbildung');
//});
//
//Route::get('/beratung', function () {
//    return view('leistungen.beratung');
//});
//
//Route::get('/bewertung', function () {
//    return view('leistungen.bewertungen');
//});
//
//Route::get('/inspektion', function () {
//    return view('leistungen.inspektion');
//});
//
//Route::get('/kunden/civil-engineering-contractors', function () {
//    return view('kunden.civil-engineering-contractors');
//});
//
//Route::get('/kunden/earth-and-mining', function () {
//    return view('kunden.earth-and-mining');
//});
//
//Route::get('/kunden/management-in-the-engineering', function () {
//    return view('kunden.management-in-the-engineering');
//});
//
//Route::get('/kunden/public-document', function () {
//    return view('kunden.public-document');
//});
//
//Route::get('/kunden/surveying-and-mapping', function () {
//    return view('kunden.surveying-and-mapping');
//});
//
//Route::get('/kunden/vac-truck', function () {
//    return view('kunden.vac-truck');
//});
//
//Route::get('/template-strings/changelog', function () {
//    return view('template-strings.changelog');
//});
//
//Route::get('/csr', function () {
//    return view('template-strings.csr');
//});
//
//Route::get('/template-strings/instruction-and-recommendation', function () {
//    return view('template-strings.instruction-and-recommendation');
//});
//
//Route::get('/template-strings/license', function () {
//    return view('template-strings.license');
//});
//
//Route::get('/template-strings/untitled', function () {
//    return view('template-strings.untitled');
//});
//