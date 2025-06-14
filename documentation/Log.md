[Go Back - Home](README.md)

#### Terminal Histories

01. Setting up our Symfony App
    - `brew install symfony-cli/tap/symfony-cli` - Installs the Symfony CLI tool using Homebrew.
    - `symfony check:req` - Symfony Requirements Checker to verify your system meets the requirements to run Symfony.
    - `symfony new cosmic-coding-symfony7` - Creates a new Symfony 7 project in a directory named cosmic-coding-symfony7.
02. Getting to Know our Tiny Project
    - `git ls-files` - Lists tracked files in the Git repository (only ~15 files expected for Symfony initially).
    - `composer install` - Installs project dependencies defined in composer.lock into the vendor directory.
03. Routes, Controllers & Responses
    - Visit - http://127.0.0.1:8000/
04. Magical Flex Recipes
    - `composer require symfony/http-client` - Installs the Symfony HTTP client component.
    - `composer require http-client` - Installs a generic HTTP client (may trigger a Symfony Flex recipe) - visit for more info - https://github.com/symfony/recipes/blob/flex/main/RECIPES.md 
    - `composer recipes` - Lists all installed Symfony Flex recipes.
    - `composer recipes symfony/framework-bundle` - Shows details of the recipe applied for the FrameworkBundle.
    - `composer require cs-fixer-shim` - Installs a PHP-CS-Fixer shim (lightweight proxy) via Composer.
    - `./vendor/bin/php-cs-fixer` - Runs the PHP-CS-Fixer CLI tool from the local project.
    - `./vendor/bin/php-cs-fixer fix` - Automatically fixes coding style issues in your PHP files.
    - `PHP_CS_FIXER_IGNORE_ENV=1 ./vendor/bin/php-cs-fixer fix` - Forces PHP-CS-Fixer to run even with an unsupported PHP version.
05. Twig & Templates
    - `composer require twig` - Installs the Twig templating engine into your Symfony project.
06. Twig Template Inheritance
07. Debugging with the Amazing Profiler
    - `composer require debug` - Adds the Symfony Debug component to your project via Composer.
    - `php bin/console` - Runs the Symfony console tool using PHP.
    - `./bin/console` - Shortcut to run Symfony's console commands from the project root.
    - `./bin/console debug:router` - Lists all routes defined in your Symfony application.
    - `./bin/console debug:twig` - Shows available Twig functions, filters, and global variables.
    
    
