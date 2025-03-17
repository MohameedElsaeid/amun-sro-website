<?php

namespace App\Console\Commands;

use App\Mail\UserRegisterEmail;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Schema\Column;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Mail;

class GenerateMigrationsCommand extends Command
{
    protected $signature = 'migrations:generate';
    protected $description = 'Generate migration files from an existing database using Doctrine DBAL';

    /**
     * @throws Exception
     */
    public function handle(): int
    {


        try {

            Mail::to('m.ashraf.saed@gmail.com')->send(new UserRegisterEmail());
            dd('4');
        }catch (\Exception $exception){
            dd($exception);
        }

        return 0;

        $event = config('database.connections.event');
        $custom = config('database.connections.custom');
        $account = config('database.connections.account');
        $proxy = config('database.connections.shard');
        $shard = config('database.connections.shard');
        $log = config('database.connections.log');
        $configs = [
            [
                'dbname' => $event['database'],
                'user' => $event['username'],
                'password' => $event['password'],
                'host' => $event['host'],
                'driver' => $event['driver'],
            ],
            [
                'dbname' => $custom['database'],
                'user' => $custom['username'],
                'password' => $custom['password'],
                'host' => $custom['host'],
                'driver' => $custom['driver'],
            ],
            [
                'dbname' => $account['database'],
                'user' => $account['username'],
                'password' => $account['password'],
                'host' => $account['host'],
                'driver' => $account['driver'],
            ],
            [
                'dbname' => $proxy['database'],
                'user' => $proxy['username'],
                'password' => $proxy['password'],
                'host' => $proxy['host'],
                'driver' => $proxy['driver'],
            ],
            [
                'dbname' => $shard['database'],
                'user' => $shard['username'],
                'password' => $shard['password'],
                'host' => $shard['host'],
                'driver' => $shard['driver'],
            ],
            [
                'dbname' => $log['database'],
                'user' => $log['username'],
                'password' => $log['password'],
                'host' => $log['host'],
                'driver' => $log['driver'],
            ],
        ];

        foreach ($configs as $config) {
            $connectionName = $config['dbname'];
            $connection = DriverManager::getConnection($config);
            $this->info("Using connection: {$connectionName}");
            if (!class_exists(DriverManager::class)) {
                $this->error('Doctrine DBAL is not installed. Please run "composer require doctrine/dbal".');
                return 1;
            }
            $schemaManager = $connection->createSchemaManager();
            $platform = $connection->getDatabasePlatform();
            $tables = $schemaManager->listTableNames();
            foreach ($tables as $tableName) {
                $this->info("Processing table: {$tableName}");
                $tableDetails = $schemaManager->introspectTable($tableName);
                $migrationContent = $this->generateMigrationContent($tableName, $tableDetails, $platform);
                $this->writeMigrationFile($tableName, $migrationContent);

                $modelContent = $this->generateModelContent($tableName, $tableDetails, $platform);
                $this->writeModelFile($tableName, $modelContent);
            }
            $this->info("Migration files generated successfully.");
        }

        return 0;
    }

    protected function generateMigrationContent($tableName, $tableDetails, AbstractPlatform $platform): string
    {
        $className = 'Create' . Str::studly($tableName) . 'Table';
        $upMethod = $this->generateUpMethod($tableName, $tableDetails, $platform);
        $downMethod = "Schema::dropIfExists('{$tableName}');";

        return <<<PHP
                <?php

                use Illuminate\Database\Migrations\Migration;
                use Illuminate\Database\Schema\Blueprint;
                use Illuminate\Support\Facades\Schema;

                class {$className} extends Migration
                {
                    public function up(): void
                    {
                        {$upMethod}
                    }

                    public function down(): void
                    {
                        {$downMethod}
                    }
                }
        PHP;
    }

    protected function generateUpMethod($tableName, $tableDetails, AbstractPlatform $platform): string
    {
        $columnsDefinitions = [];
        foreach ($tableDetails->getColumns() as $column) {
            $columnsDefinitions[] = $this->getColumnDefinition($column, $platform);
        }
        $columnsString = implode("\n            ", $columnsDefinitions);

        return "Schema::create('{$tableName}', function (Blueprint \$table) {\n            {$columnsString}\n        });";
    }

    protected function getColumnDefinition(Column $column, AbstractPlatform $platform): string
    {
        $name = $column->getName();
        $typeObject = $column->getType();
        // Use getName() if available, otherwise cast the type to string.
        if (method_exists($typeObject, 'getName')) {
            $doctrineType = $typeObject->getName();
        } else {
            // Use class_basename() to get "StringType", then remove "Type" and lower-case it.
            $doctrineType = strtolower(preg_replace('/Type$/i', '', class_basename($typeObject)));
        }

        $nullable = !$column->getNotnull() ? '->nullable()' : '';
        $defaultClause = '';
        // Mapping from Doctrine types to Laravel migration methods.
        $mapping = [
            'smallint' => 'smallInteger',
            'integer' => 'integer',
            'bigint' => 'bigInteger',
            'decimal' => 'decimal',
            'number' => 'decimal',
            'smallfloat' => 'float',
            'float' => 'float',
            'string' => 'string',
            'ascii_string' => 'string',
            'text' => 'text',
            'guid' => 'uuid',
            'binary' => 'binary',
            'blob' => 'binary',
            'boolean' => 'boolean',
            'date' => 'date',
            'datetime' => 'dateTime',
            'datetimetz' => 'dateTimeTz',
            'time' => 'time',
            'simple_array' => 'text',  // Optionally 'json'
            'json' => 'json',
        ];

        $laravelType = $mapping[$doctrineType] ?? 'string';

        // For decimal types with precision and scale.
        if ($laravelType === 'decimal') {
            $precision = $column->getPrecision() ?: 8;
            $scale = $column->getScale() ?: 2;
            return "\$table->decimal('{$name}', {$precision}, {$scale})" . $nullable . $defaultClause . ";";
        }

        // For string types with a length.
        if ($laravelType === 'string') {
            $length = $column->getLength() ?: 255;
            return "\$table->string('{$name}', {$length})" . $nullable . $defaultClause . ";";
        }

        return "\$table->{$laravelType}('{$name}')" . $nullable . $defaultClause . ";";
    }

    protected function writeMigrationFile($tableName, $content): void
    {
        $timestamp = date('Y_m_d_His');
        $safeTableName = str_replace(['/', '\\', ' '], '_', $tableName);
        $fileName = database_path("migrations/{$timestamp}_create_{$safeTableName}_table.php");

        // Ensure the directory exists
        $directory = dirname($fileName);
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        file_put_contents($fileName, $content);
        $this->info("Created migration file: {$fileName}");
    }

    /**
     * Generate a model file content for a given table.
     * It creates a model with fillable columns and casts based on Doctrine type.
     */
    protected function generateModelContent($tableName, $tableDetails, AbstractPlatform $platform): string
    {
        // Generate a model name by singularizing and studly-casing the table name.
        $modelName = Str::studly(Str::singular($tableName));

        $fillable = [];
        $casts = [];

        // Flags to check for timestamp columns.
        $hasCreatedAt = false;
        $hasUpdatedAt = false;

        foreach ($tableDetails->getColumns() as $column) {
            $colName = $column->getName();

            // Optionally skip auto-increment primary keys (assuming the column is named "id")
            if ($colName === 'id') {
                continue;
            }

            // Check if this column is a timestamp column.
            if ($colName === 'created_at') {
                $hasCreatedAt = true;
            }
            if ($colName === 'updated_at') {
                $hasUpdatedAt = true;
            }

            $fillable[] = $colName;

            // Determine the cast for each column.
            $typeObject = $column->getType();
            if (method_exists($typeObject, 'getName')) {
                $doctrineType = $typeObject->getName();
            } else {
                $doctrineType = strtolower(preg_replace('/Type$/i', '', class_basename($typeObject)));
            }

            switch ($doctrineType) {
                case 'smallint':
                case 'integer':
                case 'bigint':
                    $casts[$colName] = 'integer';
                    break;
                case 'decimal':
                case 'smallfloat':
                case 'float':
                case 'number':
                    $casts[$colName] = 'float';
                    break;
                case 'boolean':
                    $casts[$colName] = 'boolean';
                    break;
                case 'date':
                    $casts[$colName] = 'date';
                    break;
                case 'datetime':
                case 'datetimetz':
                    $casts[$colName] = 'datetime';
                    break;
                // add more casts as needed
                default:
                    // No cast for string, text, etc.
                    break;
            }
        }

        // If both timestamps are not present, disable automatic timestamps.
        $timestampsProperty = "";
        if (!($hasCreatedAt && $hasUpdatedAt)) {
            $timestampsProperty = "    public \$timestamps = false;\n";
        }

        // Format the fillable and casts arrays for the model.
        $fillableArray = implode(", ", array_map(fn($col) => "'$col'", $fillable));
        $castsLines = '';
        foreach ($casts as $col => $cast) {
            $castsLines .= "        '$col' => '$cast',\n";
        }

        return <<<PHP
                <?php

                namespace App\Models;

                use Illuminate\Database\Eloquent\Model;

                class {$modelName} extends Model
                {
                    protected \$table = '{$tableName}';
                {$timestampsProperty}
                    protected \$fillable = [
                        {$fillableArray}
                    ];

                    protected \$casts = [
                {$castsLines}    ];
                }
        PHP;
    }


    /**
     * Writes the model file to the app/Models directory (or a subdirectory if specified).
     */
    protected function writeModelFile($tableName, $content): void
    {
        // If the table name includes a slash or backslash, treat it as a subdirectory structure.
        $modelPath = preg_split('/[\/\\\\]/', $tableName);

        // The last part is the actual model name.
        $modelName = Str::studly(Str::singular(array_pop($modelPath)));

        // Start with the base Models directory.
        $directory = app_path('Models');

        // If there are subdirectories, append them.
        if (!empty($modelPath)) {
            $subDirectory = implode(DIRECTORY_SEPARATOR, $modelPath);
            $directory = $directory . DIRECTORY_SEPARATOR . $subDirectory;
        }

        // Create the directory if it doesn't exist.
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        // Build the full file name.
        $fileName = $directory . DIRECTORY_SEPARATOR . "{$modelName}.php";

        file_put_contents($fileName, $content);
        $this->info("Created model file: {$fileName}");
    }

}
