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

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface UuidTrait
{
    public function findByUuid($uuid, $columns = ['*']);

    public function requireByUuid($uuid, $columns = ['*']);

    public function updateByUuid($uuid, array $data);

    public function deleteByUuid($uuid);
}
