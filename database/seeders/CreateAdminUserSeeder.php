<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$user = User::create([
			'first_name' => 'Hardik', 
			'last_name' => 'Savani', 
			'date_of_birth' => '12 january 2000', 
			'gender' => 'male', 
			'email' => 'admin@gmail.com',
			'phone' => '00000000000',
			'password' => bcrypt('admin^123')
	  ]);
 
	  $role = Role::create(['name' => 'Admin']);
  
	  $permissions = Permission::pluck('id','id')->all();

	  $role->syncPermissions($permissions);
  
	  $user->assignRole([$role->id]);
    }
}
