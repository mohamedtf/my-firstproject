<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
protected $fillable = [
    'clientname',
    'clientnumber',
    'studentname',
    'studentlevel',
    'amount',          
    'payment_method', 
    'payment_proof',   
    'payment_date'    
];
}
