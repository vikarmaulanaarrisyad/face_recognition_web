<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = new Setting();
        $setting->nama_aplikasi = 'Face Recognition Web';
        $setting->singkatan_aplikasi = 'FRW';
        $setting->mahasiswa = 'Muhammad Farhan Al-Farhan';
        $setting->deskripsi_aplikasi = 'Aplikasi Face Recognition Web';

        $setting->save();
    }
}
