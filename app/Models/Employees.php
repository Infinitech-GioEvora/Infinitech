<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
        "lastname",
        "firstname",
        "middlename",
        "position",
        "employeeID",
        "phone",
        "email",
        "facebook",
        "telegram",
        "wechat",
        "viber",
        "whatsapp",
        "profile",
        "qrcode",
    ];
}
