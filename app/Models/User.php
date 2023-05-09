<?php

// Model deals with database
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class User extends Model{
public $timestamps = false; 
protected $primaryKey = 'id'; 

// name of table

protected $table = 'students';

// column sa table
protected $fillable = [
'firstname', 'lastname'
];  
}