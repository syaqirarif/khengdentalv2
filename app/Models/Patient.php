<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    
    protected $primaryKey = 'patID';

    protected $fillable = [
        'patName',
        'patGender',
        'patIC',
        'patContactNo',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
