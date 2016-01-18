<?php

namespace DraperStudio\Database\Traits\Repositories\Decorators\Cache;

use DraperStudio\Database\Repositories\Criteria\Criterion;

trait CriteriaTrait
{
    public function resetScope()
    {
        return $this->repository->resetScope();
    }

    public function skipCriteria($status = true)
    {
        return $this->repository->skipCriteria($status);
    }

    public function getCriteria()
    {
        return $this->repository->getCriteria();
    }

    public function getByCriteria(Criterion $criterion)
    {
        return $this->repository->getByCriteria($criterion);
    }

    public function pushCriteria(Criterion $criterion)
    {
        return $this->repository->pushCriteria($criterion);
    }

    public function applyCriteria()
    {
        return $this->repository->applyCriteria();
    }
}
