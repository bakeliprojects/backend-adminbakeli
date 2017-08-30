<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vc
 * @package App\Models
 * @version August 26, 2017, 9:50 am UTC
 */
class vc extends Model
{
    use SoftDeletes;

    public $table = 'vcs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [ 'image', 'nom', 'prenom', 'disponiblite', 'cour', 'education', 'technologie', 'language','motivation'];



    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
