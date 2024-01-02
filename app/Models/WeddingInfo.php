<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'uid', 'qr_code_img', 'from_side', 'groom_img', 'groom_first_name', 'groom_middle_name', 'groom_last_name', 'bride_img', 'bride_first_name', 'bride_middle_name', 'bride_last_name', 'groom_father_first_name', 'groom_father_middle_name', 'groom_father_last_name', 'groom_mother_first_name', 'groom_mother_middle_name', 'groom_mother_last_name', 'bride_father_first_name', 'bride_father_middle_name', 'bride_father_last_name', 'bride_mother_first_name', 'bride_mother_middle_name', 'bride_mother_last_name', 'bride_sister_name', 'groom_sister_name', 'bride_brother_name', 'groom_brother_name', 'add_start_date', 'add_end_date', 'haldi_date', 'wedding_date', 'reception_date', 'haldi_function_address', 'wedding_address', 'reception_function_address', 'status', 'lang', 'created_at', 'updated_at'
    ];
}
