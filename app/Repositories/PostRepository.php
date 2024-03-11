<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\BaseRepository;

class PostRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'type_of_post'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Post::class;
    }
}
