<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class QueryMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:cqrs:query';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new query';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Query';

    public function handle()
    {
        parent::handle();

        $this->call('make:cqrs:query-handler', [
            'name' => $this->argument('name')."Handler"
        ]);
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/query.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return  $rootNamespace.'\Domain\Query';
    }
}
