<?php

namespace DraperStudio\Database\Connectors;

use DraperStudio\Database\Schema\SqlServerBuilder;
use Illuminate\Database\SqlServerConnection as BaseSqlServerConnection;

class SqlServerConnection extends BaseSqlServerConnection
{
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }

        return new SqlServerBuilder($this);
    }
}
