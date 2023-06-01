<?php

// Model deals with database
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Publisher extends Model{

use HasFactory;
public $timestamps = false; 
protected $primaryKey = 'publisherId'; 

// name of table

protected $table = 'publisher';

// column sa table
protected $fillable = [
'publisherName', 'location', 'contact_number'
];  
}