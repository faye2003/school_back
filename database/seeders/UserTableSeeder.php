<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions =
            [
                array("name" => "liste-option" , "display_name" => "Voir la liste des options"),
                array("name" => "creation-option" , "display_name" => "Creer une option"),
                array("name" => "modification-option" , "display_name" => "Editer un option"),
                array("name" => "suppression-option" , "display_name" => "Supprimer un option"),

                array("name" => "liste-role" , "display_name" => "Voir la liste des roles"),
                array("name" => "creation-role" , "display_name" => "Créer un role"),
                array("name" => "modification-role" , "display_name" => "Editer un role"),
                array("name" => "suppression-role" , "display_name" => "Supprimer un role"),
            ];
        foreach ($permissions as $permission)
        {
            if (Permission::where('name', $permission['name'])->first()==null)
            {
                Permission::create(['name' => $permission['name'], 'display_name' => $permission['display_name']]);
            }
        }
        
        $role = Role::where('name', 'super-admin')->first();
        if ($role == null) {
            $role = Role::create(['name' => 'super-admin']);
        }
        $role->syncPermissions(Permission::all());
        $users = array();
        array_push($users,array("name" => "Memoire", "email" => "root@memoire.edu.sn", "image" =>('css/img/grad.jpeg'), "password" => "rootM@2022"));

        foreach ($users as $user) {
            $newuser = User::where('email', $user['email'])->first();
            if (!isset($newuser)) {
                $newuser = new User();
                $newuser->name = $user['name'];
                $newuser->active = 1;
                $newuser->image = $user['image'];
            }
            $newuser->email = $user['email'];
            if(!isset($newuser->id)){
                $newuser->password = bcrypt($user['password']);
            }
            $newuser->save();
            if (!isset($newuser->id)) {
                $bewuser->id = DB::select('SELECT id FROM users ORDER BY id  DESC LIMIT 1')[0]->id;
            }
            $newuser->syncRoles($role);
        }

    }
}
