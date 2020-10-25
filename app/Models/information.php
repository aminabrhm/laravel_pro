<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    use HasFactory;

    protected $table = 'information';
    protected $fillable =['heart_disease', 'diabetes', 'blood_pressure', 'physical_disability',
    'social_status', 'family_number', 'wife_number', 'male_number', 'female_number', 'other_person',
    'primary_school', 'middle_school', 'high_school', 'university', 'graduated', 'who_spend',
    'monthly_salary', 'monthly_salary_s', 'retirment_salary', 'social_security', 'commercial',
    'subsidy', 'other', 'patient_name', 'patient_gender', 'related', 'disease_name', 'disease_date' ];
}
