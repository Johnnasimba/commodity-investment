<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    protected $table = 'details';
    protected $fillable = array('id', 'date_of_birth', 'gander', 'country','address', 'first_phone_number', 'second_phone_number','second_email', 'annual_income', 'source_of_funds', 'occupation');
}
