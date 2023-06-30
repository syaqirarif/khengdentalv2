<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    
    protected $primaryKey = 'docID';

    protected $fillable = [
        'docName',
        'docGender',
        'docIC',
        'docContactNo',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
