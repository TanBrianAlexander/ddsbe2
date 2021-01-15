<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
    protected $table = 'tbl_user';
    protected $fillable = [
        'username', 'password', 'job_id'
    ];

    public $timestamps= false;
    protected $primaryKey='ID';
    protected $hidden =["password",];
}