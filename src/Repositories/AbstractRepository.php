<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Repositories;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Container\Container;

abstract class AbstractRepository implements Repository
{
    protected $app;

    protected $model;

    public function __construct(Container $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    abstract public function getModelClass();

    public function makeModel()
    {
        return $this->setModel($this->app->make($this->getModelClass()));
    }

    public function setModel($model)
    {
        return $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }
}
