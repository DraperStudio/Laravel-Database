<?php

namespace DraperStudio\Database\Traits\Models;

use Watson\Validating\ValidatingTrait;

trait ValidateableTrait
{
    use ValidatingTrait;

    protected $rules = [];

    protected $rulesets = [];

    public function getMessageBag()
    {
        return $this->getErrors();
    }
}
