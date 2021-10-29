<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Food
 * @package App\Models
 * @version October 28, 2021, 10:26 pm UTC
 *
 * @property string $name
 * @property string $price
 * @property string $ratings
 * @property string $baker
 */
class Food extends Model
{

    use HasFactory;

    public $table = 'foods_api';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'price',
        'ratings',
        'baker'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'price' => 'string',
        'ratings' => 'string',
        'baker' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'ratings' => 'required|string|max:255',
        'baker' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
