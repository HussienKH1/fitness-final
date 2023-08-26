<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    const TABLE = 'Trainers';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'email',
        'job',
        'facebook',
        'linkedin',
        'instagram',
        'picture',
    ];

    public function traineremail (): string {
        return $this -> email;
    }
}
