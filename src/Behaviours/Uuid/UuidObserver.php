<?php

namespace DraperStudio\Database\Behaviours\Uuid;

use Illuminate\Database\Eloquent\Model;

class UuidObserver
{
    public function creating(Model $model)
    {
        $model->generateUuid();
    }
}
