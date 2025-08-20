<?php
// database/seeders/AdminSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'inovasidigitalnusantara12@gmail.com'],
            [
                'name' => 'Inovasi Digital Nusantara',
                'password' => Hash::make('ID12Nusantara'), // sandi default
                'role' => 'admin',
            ]
        );
    }
}
