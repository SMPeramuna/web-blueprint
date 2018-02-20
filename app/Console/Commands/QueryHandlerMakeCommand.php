<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class QueryHandlerMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:cqrs:query-handler';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new query handler';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'QueryHandler';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/queryHandler.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return  $rootNamespace.'\Domain\Query\Handlers';
    }
}
