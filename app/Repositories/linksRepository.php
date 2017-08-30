<?php

namespace App\Repositories;

use App\Models\links;
use InfyOm\Generator\Common\BaseRepository;

class linksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'prev'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return links::class;
    }
}
