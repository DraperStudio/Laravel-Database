<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface AggregateTrait
{
    public function count();

    public function max($column);

    public function min($column);

    public function avg($column);

    public function sum($column);
}
