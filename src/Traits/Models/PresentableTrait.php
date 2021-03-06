<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Database\Traits\Models;

trait PresentableTrait
{
    protected $presenterInstance;

    public function present()
    {
        if (!$this->presenterInstance) {
            $presenterClass = $this->getPresenterClass();

            $this->presenterInstance = new $presenterClass($this);
        }

        return $this->presenterInstance;
    }

    abstract public function getPresenterClass();
}
