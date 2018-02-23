**Initiating Project**

`` php artisan init:project <project-name>``

**Module creation**

 `` php artisan make:module ``
 * Then you need to specify the root directory
 * Ex: Root\<module-name>
 
 **Command creation**
 
  `` php artisan make:cqrs:command <command-name> ``
  * As a convention, append Command postfix end of every command (Ex: SampleCommand)
  
  **Command Handler creation**
  
   `` php artisan make:cqrs:command-handler <command-handler-name> ``
   * As a convention, append CommandHandler postfix end of every command handler(Ex: SampleCommandHandler)
   
**Query creation**

`` php artisan make:cqrs:query <cquery-name> ``

* As a convention, append Query postfix end of every query (Ex: SampleQuery)

**Query handler creation**

`` php artisan make:cqrs:query-handler <query-handler-name> ``

* As a convention, append QueryHandler postfix end of every query handler (Ex: SampleQueryHandler)

**Repository creation**

`` php artisan make:repository <repository-name> ``

* As a convention, append Repository postfix end of every repository (Ex: SampleRepository)
