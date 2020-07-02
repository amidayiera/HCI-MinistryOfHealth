<?php

namespace Facade\Ignition\SolutionProviders;

use Facade\Ignition\Solutions\SuggestUsingCorrectDbNameSolution;
use Facade\IgnitionContracts\HasSolutionsForThrowable;
use Illuminate\Support\Facades\DB;
use Throwable;

class DefaultDbNameSolutionProvider implements HasSolutionsForThrowable
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
    const MYSQL_UNKNOWN_DATABASE_CODE = 1049;

>>>>>>> eventsResources
=======
    const MYSQL_UNKNOWN_DATABASE_CODE = 1049;

>>>>>>> eventsResources
    public function canSolve(Throwable $throwable): bool
    {
        if ($this->canTryDatabaseConnection()) {
            try {
                DB::connection()->select('SELECT 1');
            } catch (\Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
                return in_array(env('DB_DATABASE'), ['homestead', 'laravel']);
=======
                if ($this->isUnknownDatabaseCode($e->getCode())) {
                    return in_array(env('DB_DATABASE'), ['homestead', 'laravel']);
                }
>>>>>>> eventsResources
=======
                if ($this->isUnknownDatabaseCode($e->getCode())) {
                    return in_array(env('DB_DATABASE'), ['homestead', 'laravel']);
                }
>>>>>>> eventsResources
            }
        }

        return false;
    }

    public function getSolutions(Throwable $throwable): array
    {
        return [new SuggestUsingCorrectDbNameSolution()];
    }

    protected function canTryDatabaseConnection()
    {
        return version_compare(app()->version(), '5.6.28', '>');
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> eventsResources

    protected function isUnknownDatabaseCode($code): bool
    {
        return $code === static::MYSQL_UNKNOWN_DATABASE_CODE;
    }
<<<<<<< HEAD
>>>>>>> eventsResources
=======
>>>>>>> eventsResources
}
