<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'picture',
        'figma_link',
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'project_service');
    }
}
