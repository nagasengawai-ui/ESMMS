<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Define fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
        'site_id',
        'status',
        'start_date',
        'end_date',
    ];

    // Define relationship with Site
    public function site() {
        return $this->belongsTo(Site::class);
    }

    // Define additional methods as needed for multi-site management
}