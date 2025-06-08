<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MessageController;
use App\Http\Controllers\RouteController;
use App\Models\WhatsappMessageConfig;
use App\Models\WhatsappServiceConfig;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index-1');
});


Route::get('index-1', function () {
    return view('index-1');
});

Route::get('index-2', function () {
    return view('index-2');
});

Route::get('index-3', function () {
    return view('index-3');
});

Route::get('index-4', function () {
    return view('index-4');
});


Route::get('index-5', function () {
    return view('index-5');
});

Route::get('index-6', function () {
    return view('index-6');
});

Route::get('/countries', [CountryController::class, 'index'])->name('countries.search');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/send', [MessageController::class, 'saveMessage'])->name('send.message');


// Test Direct Wa 
use Illuminate\Support\Facades\Http;

Route::get('/send-wa', function () {
    // Ambil konfigurasi dari .env
    // $endpoint     = env('WA_ENDPOINT');
    // $apiKey       = env('WA_API_KEY');
    // $recipient    = request('phone'); // kirim ?phone=nomor di URL
    // $messageText  = request('message'); // kirim ?message=isi pesan

    // // Validasi sederhana
    // if (!$recipient || !$messageText) {
    //     return response()->json(['error' => 'Missing phone or message'], 400);
    // }

    $provider = WhatsappServiceConfig::where('slug', 'watzap')->first();
    $setting = WhatsappMessageConfig::where('whatsapp_service_id', $provider->id)->where('type', 'text')->first();

    $response = Http::post($setting->endpoint, [
        'api_key' => $provider->api_key,
        'number_key' => $provider->secret_key,
        'phone_no' => '6282240881144',
        'message' => 'hai',
        'wait_until_send' => "1"
    ]);

    // Tampilkan hasil respons
    return response()->json([
        'status' => $response->successful() ? 'sent' : 'failed',
        'response' => $response->json(),
        'provider' => $provider,
        'setting' => $setting,
    ]);
});


// Route::get('{any}', [RouteController::class, 'index'])->where('any', '.*');