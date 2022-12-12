<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'admin']);
        

        Permission::create(['name'=>'PayBillsIndex']);
        Permission::create(['name'=>'PayBillsEdit']);
        Permission::create(['name'=>'PayBillsDestroy']);

        Permission::create(['name'=>'DiscountsIndex']);
        Permission::create(['name'=>'DiscountsEdit']);
        Permission::create(['name'=>'DiscountsDestroy']);
        
        Permission::create(['name'=>'UserIndex']);
        Permission::create(['name'=>'UserEdit']);
        Permission::create(['name'=>'UserUpdate']);
        
        Permission::create(['name'=>'GenerarPdf']);
        Permission::create(['name'=>'Iniciar']);


        $role1->permissions()->attach([1,2,3,4,5,6,7,8,9,10,11]);

        

    }
}
