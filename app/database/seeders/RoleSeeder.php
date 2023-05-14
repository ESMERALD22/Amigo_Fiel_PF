<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//importaciones para roles de usuarios
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1= Role::create(['name' => 'Admin']);
        $role2= Role::create(['name' => 'Asociado']);
        $role3= Role::create(['name' => 'Voluntario']);
        $role4= Role::create(['name' => 'Cliente']);

        Permission::create(['name' => 'users.index'])->syncRoles([$role1]);    
        Permission::create(['name' => 'users.edit'])->syncRoles([$role1]);    
        Permission::create(['name' => 'users.create'])->syncRoles([$role1]);   
        Permission::create(['name' => 'users.destroy'])->syncRoles([$role1]);   

        Permission::create(['name' => 'tipoAnimal.index'])->syncRoles([$role1]);    
        Permission::create(['name' => 'tipoAnimal.create'])->syncRoles([$role1]);    
        Permission::create(['name' => 'tipoAnimal.edit'])->syncRoles([$role1]);    
        Permission::create(['name' => 'tipoAnimal.destroy'])->syncRoles([$role1]);


        Permission::create(['name' => 'hogares.index'])->syncRoles([$role1,$role2]);    
        Permission::create(['name' => 'hogares.create'])->syncRoles([$role1,$role2]);    
        Permission::create(['name' => 'hogares.edit'])->syncRoles([$role1,$role2]);    
        Permission::create(['name' => 'hogares.destroy'])->syncRoles([$role1]);


        Permission::create(['name' => 'animales.index'])->syncRoles([$role1,$role2,$role3]);    
        Permission::create(['name' => 'animales.create'])->syncRoles([$role1,$role2]);    
        Permission::create(['name' => 'animales.edit'])->syncRoles([$role1,$role2]);    
        Permission::create(['name' => 'animales.destroy'])->syncRoles([$role1]);
        

        Permission::create(['name' => 'contratos.index'])->syncRoles([$role1,$role2]);    
        Permission::create(['name' => 'contratos.create'])->syncRoles([$role1,$role2]);    
        Permission::create(['name' => 'contratos.edit'])->syncRoles([$role1,$role2]);    
        Permission::create(['name' => 'contratos.destroy'])->syncRoles([$role1]);
        Permission::create(['name' => 'contrato.show'])->syncRoles([$role1,$role2]);
        

        Permission::create(['name' => 'ingresoAnimales.index'])->syncRoles([$role1,$role2,$role3]);    
        Permission::create(['name' => 'ingresoAnimales.create'])->syncRoles([$role1,$role2]);    
        Permission::create(['name' => 'ingresoAnimales.edit'])->syncRoles([$role1,$role2]);    
        Permission::create(['name' => 'ingresoAnimales.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'registrosMedicos.index'])->syncRoles($role1,$role2);    
        Permission::create(['name' => 'registrosMedicos.create'])->syncRoles($role1,$role2);    
        Permission::create(['name' => 'registrosMedicos.edit'])->syncRoles($role1,$role2);    
        Permission::create(['name' => 'registrosMedicos.destroy'])->syncRoles($role1);

        Permission::create(['name' => 'salidaAnimales.index'])->syncRoles($role1,$role2,$role3);    
        Permission::create(['name' => 'salidaAnimales.create'])->syncRoles($role1,$role2);    
        Permission::create(['name' => 'salidaAnimales.edit'])->syncRoles($role1,$role2);    
        Permission::create(['name' => 'salidaAnimales.destroy'])->syncRoles($role1);

        Permission::create(['name' => 'adoptantes.index'])->syncRoles($role1,$role2);    
        Permission::create(['name' => 'adoptantes.create'])->syncRoles($role1,$role2);    
        Permission::create(['name' => 'adoptantes.edit'])->syncRoles($role1,$role2);    
        Permission::create(['name' => 'adoptantes.destroy'])->syncRoles($role1);

        
    }
}
