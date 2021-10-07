<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dette extends Model
{
    use HasFactory;

    /** The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'montant_dette', 'user_id', 'out_in'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
