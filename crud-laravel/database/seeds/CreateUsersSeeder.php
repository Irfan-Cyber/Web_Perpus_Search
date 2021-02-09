<<?php
  
  use Illuminate\Database\Seeder;
  use App\User;
     
  class CreateUsersSeeder extends Seeder
  {
      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
          $user = [
              [
                 'name'=>'SIAPA',
                 'email'=>'perpustakan@ittelokom-pwt.ac.id',
                  
                 'password'=> bcrypt('123456'),
              ],
              [
                 'name'=>'User',
                 'email'=>'perpustakan@ittelokom-pwt.ac.id',
                  
                 'password'=> bcrypt('123456'),
              ],
          ];
    
          foreach ($user as $key => $value) {
              User::create($value);
          }
      }
  }
