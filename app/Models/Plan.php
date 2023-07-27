<?php

namespace App\Models;

use App\Casts\PriceCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    const TABLE = 'plans';

    protected $table = self::TABLE;

    protected $fillable =[
        'name',
        'slug',
        'stripe_name',
        'stripe_id',
        'price',
        'abbreviation'
    ];

protected $casts = [
    'price' => PriceCast::class,
];

    public function getRoutekeyName(){
        return 'slug';
    }

    public function name(): string {
        return $this -> name;
    }

    public function slug(): string {
        return $this -> slug;
    }

    public function stripeName(): string {
        return $this -> stripe_name;
    }

    public function abbreviation(){
        return $this->abbreviation  ;  
    }

}
