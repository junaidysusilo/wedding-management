<?php

namespace App\Models;

use App\Models\Bride;
use App\Models\Groom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tenant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bride()
    {
        return $this->hasOne(Bride::class);
    }

    public function groom()
    {
        return $this->hasOne(Groom::class);
    }
}
