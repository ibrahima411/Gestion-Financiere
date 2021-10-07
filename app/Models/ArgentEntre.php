<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArgentEntre extends Model
{
    use HasFactory;

    /** The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'montant', 'motif', 'user_id', 'source_id'
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function source()
    {
        return $this->belongsTo(Source::class, 'source_id');
    }
}
