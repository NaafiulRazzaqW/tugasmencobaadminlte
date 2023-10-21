<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard");
    }

    public function profile($id)
    {
        $ppls = [
            "1"=> [
                "nim" => 2321770004,
                "nama"=> "Affansyah Hanan Windharto",
                "kelas"=> "PPLS - A",
            ],
            "2"=> [
                "nim" => 2321771003,
                "nama"=> "Bagus Fary Ananta",
                "kelas"=> "PPLS - A",
            ],
            "3"=> [
                "nim" => 2321770006,
                "nama"=> "Muhammad Naafiul Razzaq Witjaksono",
                "kelas"=> "PPLS - A",
            ],
            "4"=> [
                "nim" => 2321771002,
                "nama"=> "Odan Syaharta",
                "kelas"=> "PPLS - A",
            ],
            "5"=> [
                "nim" => 2321771001,
                "nama"=> "Okan Syahdana",
                "kelas"=> "PPLS - A",
            ],
            "6"=> [
                "nim" => 2321770005,
                "nama"=> "Silva Tria Alfares",
                "kelas"=> "PPLS - A",
            ],
        ];
        return view("profile", ['data' => $ppls[$id]]);
    }

    public function pengalaman(){
        return view('pengalamankuliah');
    }
}

// Nama Lengkap : Affansyah Hanan Windharto
// Kelas : PPLS-1A
// NIM : 2321770004

// Nama Lengkap : Bagus Fary Ananta
// Kelas : PPLS-1A
// NIM : 2321771003

// Nama Lengkap : Muhammad Naafiul Witjaksono
// Kelas : PPLS-1A
// NIM : 2321770006

// Nama Lengkap : Odan Syaharta
// Kelas : PPLS-1A
// NIM : 2321771002

// Nama Lengkap : Okan Syahdana
// Kelas : PPLS-1A
// NIM : 2321771001

// Nama Lengkap : Silva Tria Alfares
// Kelas : PPLS-1A
// NIM : 2321770005
