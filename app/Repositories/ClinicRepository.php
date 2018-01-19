<?php

namespace App\Repositories;

use App\Models\Clinic;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClinicRepository
 * @package App\Repositories
 * @version January 18, 2018, 5:06 am UTC
 *
 * @method Clinic findWithoutFail($id, $columns = ['*'])
 * @method Clinic find($id, $columns = ['*'])
 * @method Clinic first($columns = ['*'])
*/
class ClinicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'number',
        'name',
        'device_count',
        'group_id',
        'date_opened',
        'quickbase_id',
        'quickbase_company'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Clinic::class;
    }
}
