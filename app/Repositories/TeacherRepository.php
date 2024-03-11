<?php

namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\BaseRepository;

class TeacherRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name_en',
        'name_bn'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Teacher::class;
    }
}
