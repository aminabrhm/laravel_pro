<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location_info extends Model
{
    use HasFactory;
    protected $table = 'location_infos';
    protected $fillable =['place', 'description', 'building_num', 'building_type', 'building_ownership', 'building_rent',
    'location_N', 'location_E', 'bedroom', 'kitchen', 'bathroom', 'store', 'driverroom', 'hall', 'dining_room', 'living_room',
    'roof', 'annex', 'outdoor', 'home_status', 'room_number', 'home_status', 'bank_account', 
    'bank_name', 'home_quality', ''];
}
