<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachments extends Model
{
    use HasFactory;

    protected $table = 'attachments';
    protected $fillable =['image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6',
    'image_7', 'image_8', 'image_9', 'image_10', 'image_11','image_12', 'image_13', 
    'image_14', 'image_15', 'image_16', 'take_image'];
}
