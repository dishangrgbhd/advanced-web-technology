<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;

    protected $table = "tasks";
    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'files_id',
    ];

    public function tasksfiles()
    {
        return $this->belongsTo(tasksfiles::class, 'files_id');//many to one relationship
    }
}
