<?php

namespace App\Repositories;

use App\Models\vc;
use InfyOm\Generator\Common\BaseRepository;

class vcRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'nom',
        'prenom',
        'disponiblite',
        'cour',
        'education',
        'technologie',
        'language',
        'motivation'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vc::class;
    }
}
