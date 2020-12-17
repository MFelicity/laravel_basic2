<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        $data = [
          'name'=>'Mwendwa',
          'email'=>'mwendwa@gmail.com',
          'password'=> bcrypt('passsword'),
        ];
        user::create($data);
        
        
        //$user           = new User();
        //$user->name     = 'maingi';
        //$user->email    = 'maingi@gmail.com';
        //$user->password = bcrypt('password'); 
        //$user->save(); 

         $user = User::all();
         return $user;

        //User::where ('id',2)->delete();

        /*DB::update(
          'update users set name =? where id = 3', ['Feli'] 
          
         
      ); */
    


        
        //DB::insert('insert into users (name,email,password)values (?,?,?)', ['felicity','felicity@gmail.com','password',]);
        
       //$users = DB::select('select * from users');
       //return $users;

      // DB::update('update users set name =? where id = 1', ["bitfumes"]);

      //DB::delete('delete from users');


        //$users = DB::select('select * from users');
        //return $users;





       return view ('home');
    }
}
