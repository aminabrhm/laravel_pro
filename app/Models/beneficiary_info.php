<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficiary_info extends Model
{
    use HasFactory;

    protected $table = 'beneficiary_infos';
    protected $fillable = ['name', 'gender', 'national_id', 'place_national', 'date_national', 'date_ex_national',
    'place_birth', 'date_birth', 'passport_number', 'passport_place', 'passport_date',
    'license_number', 'license_place', 'date_ex_license', 'job'];
}
