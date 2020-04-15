<?php

namespace Staudenmeir\EloquentJsonRelations\Relations\Postgres;

use Illuminate\Database\Eloquent\Relations\HasManyThrough as Base;

class HasManyThrough extends Base
{
    use HasOneOrManyThrough;
}
