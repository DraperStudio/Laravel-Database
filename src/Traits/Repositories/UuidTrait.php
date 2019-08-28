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

namespace Artisanry\Database\Traits\Repositories;

trait UuidTrait
{
    public function findByUuid($uuid, $columns = ['*'])
    {
        return $this->findFirstBy('uuid', $uuid, $columns);
    }

    public function requireByUuid($uuid, $columns = ['*'])
    {
        if (!$record = $this->findByUuid($uuid, $columns)) {
            $this->modelNotFound($this->model);
        }

        return $record;
    }

    public function updateByUuid($uuid, array $data)
    {
        $model = $this->requireByUuid($uuid);

        return $this->updateModel($model, $data);
    }

    public function deleteByUuid($uuid)
    {
        return $this->findByUuid($uuid)->delete();
    }
}
