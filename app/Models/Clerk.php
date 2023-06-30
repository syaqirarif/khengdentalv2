<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clerk extends Model
{
    protected $table = 'clerks';
    
    protected $primaryKey = 'clerkID';

    protected $fillable = [
        'clerkName',
        'clerkGender',
        'clerkIC',
        'clerkContactNo',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
