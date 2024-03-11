<?php

namespace App\Repositories;

use App\Models\Roksana_Apu;
use App\Repositories\BaseRepository;

class Roksana_ApuRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'designation',
        'Emplyee_Id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Roksana_Apu::class;
    }
}
