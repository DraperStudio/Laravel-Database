<?php

namespace DraperStudio\Database\Traits\Repositories;

use DraperStudio\Database\Repositories\Criteria\WithLazyRelations;
use DraperStudio\Database\Repositories\Criteria\WithRelations;

trait BuilderTrait
{
    public function getNew(array $attributes = [])
    {
        return $this->getModel()->newInstance($attributes);
    }

    public function with($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        $this->pushCriteria(new WithRelations($relations));

        return $this;
    }

    public function withLazy($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        $this->pushCriteria(new WithLazyRelations($relations));

        return $this;
    }
}
