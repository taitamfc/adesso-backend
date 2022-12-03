<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingNotification extends Model
{
    use HasFactory;

    protected $table = 'setting_notifications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'user_id', 'by_phone', 'type_notifi_by_phone', 'number_phone', 'by_email', 'type_notifi_by_email', 'email'
    ];
}
