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

namespace Artisanry\Database\Migrations;

use Artisanry\Database\Schema\Blueprint;

abstract class Migration
{
    protected $connection;

    protected $schema;

    public function __construct()
    {
        $this->schema = \DB::getSchemaBuilder();

        $this->schema->blueprintResolver(function ($table, $callback) {
            return new Blueprint($table, $callback);
        });
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
