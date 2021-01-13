<?php

namespace Database\Seeders;

use App\Models\Contrat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // administration permission
        Permission::create(['name' => 'Voir les utilisateurs']);
        Permission::create(['name' => 'Ajouter un utilisateur']);
        Permission::create(['name' => 'Editer un utilisateur']);
        Permission::create(['name' => 'Supprimer un utilisateur']);

        // Roles
        Permission::create(['name' => 'Voir les rôles']);
        Permission::create(['name' => 'Ajouter un rôle']);
        Permission::create(['name' => 'Editer un rôle']);
        Permission::create(['name' => 'Supprimer un rôle']);

        // Contrats
        Permission::create(['name' => 'Voir les contrats']);
        Permission::create(['name' => 'Ajoute un contrat']);
        Permission::create(['name' => 'Editer un contrat']);
        Permission::create(['name' => 'Supprimer un contrat']);

        // Acces
        Permission::create(['name' => 'Accès administration']);

        // Déclarations
        Permission::create(['name' => 'Voir les fournisseurs']);
        Permission::create(['name' => 'Voir les déclaration']);
        Permission::create(['name' => 'Editer une déclaration']);

        // Process
        Permission::create(['name' => 'Lancer les déclaration']);
        Permission::create(['name' => 'Editer une période déclaration']);
        Permission::create(['name' => 'Arrêter une déclaration en cours']);
        Permission::create(['name' => 'Cloturer une année de déclaration']);

        // création des roles
        $admin = Role::create(['name' => 'admin']);
        $inedis = Role::create(['name' => 'inedis']);
        $referencia = Role::create(['name' => 'referencia']);
        $fournisseur = Role::create(['name' => 'fournisseur']);

        //Ajout des droits aux roles
        $admin->givePermissionTo(Permission::all());

        $inedis->givePermissionTo('Accès administration');

        $referencia->givePermissionTo('Accès administration');
        $referencia->givePermissionTo('Voir les fournisseurs');
        $referencia->givePermissionTo('Voir les déclaration');

        Contrat::factory()->count(100)->create();
        $ids = range(1, 100);

        \App\Models\User::factory()->count(500)->create()->each(
            function ($user) use ($ids, $fournisseur){
                shuffle($ids);
                $user->contrats()->attach(array_slice($ids, 0, rand(0, 2)));
                $user->assignRole($fournisseur);
            }
        );

        \App\Models\User::factory()->count(10)->create()->each(
            function ($user) use ($inedis, $referencia){
                $user->assignRole($inedis);
                $user->assignRole($referencia);
            }
        );

        $user = \App\Models\User::factory()->create([
            'name' => 'Martin Florian',
            'email' => 'martin.flo6@gmail.com',
            'password' => Hash::make('ksoeqg44'), // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole($admin);
        $user->assignRole($inedis);
        $user->assignRole($referencia);
        $user->assignRole($fournisseur);

    }
}
