<?php

namespace App\Repositories;

use App\Models\Website;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class WebsiteRepository
 * @package App\Repositories
 * @version January 18, 2018, 5:06 am UTC
 *
 * @method Website findWithoutFail($id, $columns = ['*'])
 * @method Website find($id, $columns = ['*'])
 * @method Website first($columns = ['*'])
*/
class WebsiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'website',
        'clinic_id',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Website::class;
    }
}
