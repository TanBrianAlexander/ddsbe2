<?php
    namespace App;
    use Illuminate\Database\Eloquent\Model;
     
    
    class User extends Model{
    // name of table
         protected $table = 'tbl_user';
    // column sa table
         protected $fillable = [
            'username', 'password'
    ];
 }