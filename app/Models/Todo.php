<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Step;

class Todo extends Model
{
  protected $fillable = ['title', 'completed','user_id', 'description']; 

  public function steps()
  {
     
  return $this ->hasMany(Step::class);
  }


 // public function getRouteName()
  //{
  //    return 'title';
 // }

public function user()
{
  return $this ->belongsTo(User::class);
} 
    use HasFactory;
}
