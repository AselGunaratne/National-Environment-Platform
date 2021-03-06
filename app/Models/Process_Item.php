<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process_Item extends Model
{
    use HasFactory;
    protected $table = 'process_items';

    protected $fillable = [
        'form_type_id',
        'form_id',
        'requst_organization',
        'activity_organization',
        'activity_user_id',
        'remark',
        'prerequisite',
        'prerequsite_id',
        'created_by_user_id',
        'status_id',
    ];

    protected $attributes = [
        'prerequisite' => 0,
        'remark' => 0,
        'status_id' => 1,
        'activity_organization' => 0,
        'requst_organization' => 0,
    ];

    public function form_type()
    {
        return $this->belongsTo('App\Models\Form_Type');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function prerequisite_id()
    {
        return $this->belongsTo('App\Models\Process_Item','prerequsite_id');
    }

    public function Activity_organization()
    {
        return $this->belongsTo('App\Models\Organization','activity_organization');
    }

    public function activity_user()
    {
        return $this->belongsTo('App\Models\User','activity_user_id');
    }

    public function requsting_organization()
    {
        return $this->belongsTo('App\Models\Organization','requst_organization');
    }

    public function created_by_user()
    {
        return $this->belongsTo('App\Models\User','created_by_user_id');
    }
}
