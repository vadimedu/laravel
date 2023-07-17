<?php

declare(strict_types=1);

namespace App\Queries;

use App\Model\News;
use Illuminate\Database\Eloquent\Builder;

class NewsQueryBuilder extends QueryBuilder
{
    public function getModel(): Builder
    {
        return News::query();
    }
}
