<?php

// Model deals with database
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class User extends Model{
public $timestamps = false; 
protected $primaryKey = 'bookId'; 

// name of table

protected $table = 'book';

// column sa table
protected $fillable = [
'bookName', 'category'
];  
}