<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingGeneral extends Model
{
    protected $fillable =[
        'welcome_msg', 'logo', 'cell', 'moto', 'copyright'
    ];
}
