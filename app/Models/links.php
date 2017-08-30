<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class links
 * @package App\Models
 * @version August 25, 2017, 6:06 pm UTC
 */
class links extends Model
{
    use SoftDeletes;

    public $table = 'links';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'prev'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'prev' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
