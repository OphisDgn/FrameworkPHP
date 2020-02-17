<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array ([
          'nom' => 'JavaScript',
          'description' => 'Langage de script Javascript',
          'src' => 'js.png',
        ],[
          'nom' => 'HTML/CSS',
          'description' => 'Langage de developpement web',
          'src' => 'html_css.png',
        ],[
          'nom' => 'Php',
          'description' => 'Langage de developpement Php',
          'src' => 'php.png',
        ],[
          'nom' => 'Python',
          'description' => 'Langage de developpement Python',
          'src' => 'python.png',
        ],[
          'nom' => 'Java',
          'description' => 'Langage de developpement objet',
          'src' => 'java.png',
        ]);
        
        App\Skill::insert($data);
    }
}
