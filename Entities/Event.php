<?php

namespace Modules\EventManager\Entities;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'document_id',
        'document_type',
        'event_type',
        'username',
        'data'
    ];
}
