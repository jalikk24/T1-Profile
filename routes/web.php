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

Route::get('/', function () {
    return view('index');
});

// $projek = ["Inventory Apps", "KangPisman Apps", "Kumang Apps", "River Monitoring Citarum Apps", "Si-KaBaYan", "BUMA Optimus Mine", "Dapur Pasar", "START GPS", "Roll Pocket"];
$projek = [
    "data" => [
        ["judul" => "Inventory Apps", "keterangan" => "Made inventory apps by using Android Native ( Java ) with QRCode Scan for scanning QrCode from the stuff. Implemet UI/UX from designer to an Android Apps, binding data from BE
        "],
        ["judul" => "KangPisman Apps", "keterangan" => "Made a Waste Management apps by using Android Native ( Java ), using push notification and chat with firebase. Implement UI/UX from designer to an Android Apps, binding data from BE"],
        ["judul" => "Kumang Apps", "keterangan" => "Made a Waste Management apps by using Android Native ( Java ). Implement UI/UX from designer to an Android Apps, binding data from BE"],
        ["judul" => "River Monitoring Citarum Apps", "keterangan" => "Made a River Monitoring Apps by using Android Native ( Java ), using Google Maps API for the main feature and using Google Maps feature like marker and radius. Implement UI/UX from designer to an Android Apps, biinding data from BE."],
        ["judul" => "Si-KaBaYan", "keterangan" => "Made a Society service apps by using Chat, Free Call, Video Call feature with Quickblox API and SDK, using Android Native ( Kotlin ), Implement UI/UX from designer to an Android Apps, binding data from BE."],
        ["judul" => "BUMA Optimus Mine", "keterangan" => "Made a Mine Apps with Coal Management inside, using Android Native ( Java ), using ArcGIS and ESRI library into application for ArcGIS Maps needs, add an online and offline mode and synch both data, Implemet UI/UX from designer to an Android Apps, binding data from BE."],
        ["judul" => "Dapur Pasar", "keterangan" => "Made an e commerce app focused by daily kitchen needed, available in Android and Ios with Hybdrid (Ionic)"],
        ["judul" => "START GPS", "keterangan" => "Made a monitoring vehicle by using gps that installed at the vehicle, can track journey history, speed, temperature, an dothers, using Android Native and Google Maps SDK using Java"],
        ["judul" => "Roll Pocket", "keterangan" => "Made a Fintech apps about investation of construction project, available in Android and Ios with Hybrid (Flutter)"],
    ],
];

Route::view('portofolio', 'portofolio', ["projek" => $projek]);

// Route::get('/portofolio', function () {
//     return view('portofolio', ["projek" => $projek]);
// });
