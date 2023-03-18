<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Absen extends Model
{
    use HasFactory;
    protected $table='absen';
    protected $guarded =[];

    public function student()
    {
        return $this->belongsTo(Student::class, 'nis_id');
    }
}
