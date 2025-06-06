<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Luthfi',
            'email'    => 'admin@example.com',
            'password' => Hash::make('12345678'),
        ]);

    }
}
