<?php
namespace App;
use App\Task;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable{

    protected $fillable = ['login', 'password', 'ip'];
    protected $hidden   = ['password', 'remember_token'];

    public function tasks(){
        return $this->hasMany(Task::class);
    }
}