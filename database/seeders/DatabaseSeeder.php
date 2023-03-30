<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CicloSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(AsignaturaSeeder::class);
        $this->call(GradoSeeder::class);


        /* \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
            'name' => 'Filiberto Martinez',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]); */
    }
}
