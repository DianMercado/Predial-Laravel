<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Diana Mercado',
            'email'=>'mercadodiana38@gmail.com',
            'password'=>('12345678')
        ])->assignRole('admin');

        User::factory(1)->create();    }
}
