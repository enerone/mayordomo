<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['notification_type', 'text', 'step', 'crop_id'];
}
