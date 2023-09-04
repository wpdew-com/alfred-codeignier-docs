<?php
use Alfred\Workflows\Workflow;

require __DIR__ . '/vendor/autoload.php';

$query = $argv[1];

$workflow = new Workflow;

$results = [
    "items" => [
        [
            "title" => "",
            "subtitle" => "Welcome to CodeIgniter4",
            "arg" => "https://codeigniter.com/user_guide/",
        ],[
            "title" => "Server Requirements",
            "subtitle" => "PHP and Required Extensions",
            "arg" => "https://codeigniter.com/user_guide/intro/requirements.html",
        ],
        [
            "title" => "Installation",
            "subtitle" => "We recommend the Composer installation",
            "arg" => "https://codeigniter.com/user_guide/installation/index.html",
        ],
        [
            "title" => "Composer Installation",
            "subtitle" => "CodeIgniter4 can be installed using Composer",
            "arg" => "https://codeigniter.com/user_guide/installation/installing_composer.html",
        ],
        [
            "title" => "Manual Installation",
            "subtitle" => "CodeIgniter4 can be manually installed by downloading a zipped archive",
            "arg" => "https://codeigniter.com/user_guide/installation/installing_manual.html",
        ],
        [
            "title" => "Application Structure",
            "subtitle" => "To get the most out of CodeIgniter, you need to understand how the application is structured, by default, and what you can change to meet the needs of your application.",
            "arg" => "https://codeigniter.com/user_guide/general/structure.html",
        ],
        [
            "title" => "Models, Views, and Controllers",
            "subtitle" => "What is MVC",
            "arg" => "https://codeigniter.com/user_guide/concepts/mvc.html",
        ],
        [   
            "title" => "Autoloading Files",
            "subtitle" => "CodeIgniter can be told to load a set of classes automatically",
            "arg" => "https://codeigniter.com/user_guide/general/autoloader.html",
        ],
        [
            "title" => "Services",
            "subtitle" => "CodeIgniter4 has a powerful mechanism for loading classes, libraries, and other dependencies",
            "arg" => "https://codeigniter.com/user_guide/general/services.html",
        ],
        [
            "title" => "Factories",
            "subtitle" => "CodeIgniter4 has a powerful mechanism for loading classes, libraries, and other dependencies",
            "arg" => "https://codeigniter.com/user_guide/general/factories.html",
        ],
        [
            "title" => "Working with HTTP Requests",
            "subtitle" => "CodeIgniter4 provides a number of features to simplify working with HTTP requests",
            "arg" => "https://codeigniter.com/user_guide/libraries/requests.html",
        ],
        [
            "title" => "Configuration",
            "subtitle" => "CodeIgniter's system folder contains a config folder with a number of files",
            "arg" => "https://codeigniter.com/user_guide/general/configuration.html",
        ],
        [
            "title" => "CodeIgniter URLs",
            "subtitle" => "CodeIgniter uses a segment-based approach",
            "arg" => "https://codeigniter.com/user_guide/general/urls.html",
        ],
        [
            "title" => "Helper Functions",
            "subtitle" => "What are Helpers?",
            "arg" => "https://codeigniter.com/user_guide/general/helpers.html",
        ],
        [
            "title" => "Global Functions and Constants",
            "subtitle" => "CodeIgniter provides a number of helper functions that are globally available",
            "arg" => "https://codeigniter.com/user_guide/general/common_functions.html",
        ],
        [
            "title" => "Logging Information",
            "subtitle" => "CodeIgniter has a logging class that permits error and debugging messages to be saved as text files",
            "arg" => "https://codeigniter.com/user_guide/general/errors.html",
        ],
        [
            "title" => "Error Handling",
            "subtitle" => "CodeIgniter has a logging class that permits error and debugging messages to be saved as text files",
            "arg" => "https://codeigniter.com/user_guide/general/errors.html",
        ],
        [
            "title" => "Web Page Caching",
            "subtitle" => "CodeIgniter lets you cache your pages in order to achieve maximum performance",
            "arg" => "https://codeigniter.com/user_guide/general/caching.html",
        ],
        [
            "title" => "AJAX Requests",
            "subtitle" => "CodeIgniter provides some features for working with AJAX",
            "arg" => "https://codeigniter.com/user_guide/general/ajax.html",
        ],
        [
            "title" => "Code Modules",
            "subtitle" => "CodeIgniter lets you group related functionality into modules",
            "arg" => "https://codeigniter.com/user_guide/general/modules.html",
        ],
        [
            "title" => "Managing your Applications",
            "subtitle" => "CodeIgniter lets you group related functionality into modules",
            "arg" => "https://codeigniter.com/user_guide/general/managing_apps.html",
        ],
        [
            "title" => "Controllers and Routing",
            "subtitle" => "CodeIgniter uses a segment-based approach",
            "arg" => "https://codeigniter.com/user_guide/incoming/index.html",
        ],
        [
            "title" => "URI Routing",
            "subtitle" => "CodeIgniter uses a segment-based approach",
            "arg" => "https://codeigniter.com/user_guide/incoming/routing.html",
        ],
        [
            "title" => "Controllers",
            "subtitle" => "Controllers are the heart of your application",
            "arg" => "https://codeigniter.com/user_guide/incoming/controllers.html",
        ],
        [
            "title" => "Controller Filters",
            "subtitle" => "CodeIgniter lets you filter input and output of your controllers",
            "arg" => "https://codeigniter.com/user_guide/incoming/filters.html",
        ],
        [
            "title" => "HTTP Messages",
            "subtitle" => "CodeIgniter uses a segment-based approach",
            "arg" => "https://codeigniter.com/user_guide/incoming/messages.html",
        ],
        [
            "title" => "Request Class",
            "subtitle" => "The request class is an object-oriented representation of an HTTP request.",
            "arg" => "https://codeigniter.com/user_guide/libraries/requests.html",
        ],
        [
            "title" => "IncomingRequest Class",
            "subtitle" => "The IncomingRequest class is an object-oriented representation of an HTTP request.",
            "arg" => "https://codeigniter.com/user_guide/incoming/incomingrequest.html",
        ],
        [
            "title" => "Content Negotiation",
            "subtitle" => "Content negotiation is a way to determine what type of content to return to the client",
            "arg" => "https://codeigniter.com/user_guide/incoming/content_negotiation.html",
        ],
        [
            "title" => "HTTP Method Spoofing",
            "subtitle" => "CodeIgniter supports HTTP method spoofing",
            "arg" => "https://codeigniter.com/user_guide/incoming/method_spoofing.html",
        ],
        [
            "title" => "RESTful Resource Handling",
            "subtitle" => "Representational State Transfer (REST) is an architectural style for distributed applications",
            "arg" => "https://codeigniter.com/user_guide/incoming/restful.html",
        ],
        [
            "title" => "Building Responses",
            "subtitle" => "View components are used to build what is returned to the user.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/index.html",
        ],
        [
            "title" => "Views",
            "subtitle" => "A view is simply a web page, or a page fragment, like a header, footer, sidebar, etc.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/views.html",
        ],
        [
            "title" => "View Cells",
            "subtitle" => "View cells are a way to organize your views into smaller, reusable components.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/cells.html",
        ],
        [
            "title" => "View Renderer",
            "subtitle" => "The view renderer class is an object-oriented representation of a view.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/view_renderer.html",
        ],
        [
            "title" => "View Layouts",
            "subtitle" => "Layouts are a way to wrap your view content in a common template.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/view_layouts.html",
        ],
        [
            "title" => "View Parser",
            "subtitle" => "The view parser class is an object-oriented representation of a view.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/view_parser.html",
        ],
        [
            "title" => "View Decorators",
            "subtitle" => "View decorators are a way to modify the output of a view.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/view_decorators.html",
        ],
        [
            "title" => "HTML Table Class",
            "subtitle" => "The HTML Table Class allows you to create tables programmatically.",
            "arg" => "https://codeigniter.com/user_guide/libraries/table.html",
        ],
        [
            "title" => "HTTP Responses",
            "subtitle" => "HTTP responses are the packets of data sent by the server to the client in response to requests.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/responses.html",
        ],
        [
            "title" => "API Response Trait",
            "subtitle" => "The API Response Trait provides a number of methods to help you build API responses.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/api_responses.html",
        ],
        [
            "title" => "Localization",
            "subtitle" => "Localization is the process of translating your application into different languages.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/localization.html",
        ],
        [
            "title" => "Alternate PHP Syntax for View Files",
            "subtitle" => "CodeIgniter supports a more readable syntax for view files.",
            "arg" => "https://codeigniter.com/user_guide/outgoing/alternative_php.html",
        ],
        [
            "title" => "Working with Databases",
            "subtitle" => "CodeIgniter comes with a full-featured and very fast abstracted database class that supports both traditional structures and Query Builder patterns.",
            "arg" => "https://codeigniter.com/user_guide/database/index.html",
        ],
        [
            "title" => "Database Quick Start: Example Code",
            "subtitle" => "This page shows you an example of how to perform a few basic database operations.",
            "arg" => "https://codeigniter.com/user_guide/database/examples.html",
        ],
        [
            "title" => "Database Configuration",
            "subtitle" => "The database configuration for your application is located at application/config/database.php.",
            "arg" => "https://codeigniter.com/user_guide/database/configuration.html",
        ],
        [
            "title" => "Connecting to your Database",
            "subtitle" => "Connecting to a database and selecting a database are two separate steps.",
            "arg" => "https://codeigniter.com/user_guide/database/connecting.html",
        ],
        [
            "title" => "Running Queries",
            "subtitle" => "Once you have connected to your database you can run queries against it.",
            "arg" => "https://codeigniter.com/user_guide/database/queries.html",
        ],
        [
            "title" => "Generating Query Results",
            "subtitle" => "Once you have run a query you will, typically, want to retrieve the results of that query.",
            "arg" => "https://codeigniter.com/user_guide/database/results.html",
        ],
        [
            "title" => "Query Helper Functions",
            "subtitle" => "CodeIgniter provides a \"query builder\" class that provides a set of helpful functions that makes it easier to generate more complex SQL queries.",
            "arg" => "https://codeigniter.com/user_guide/database/helpers.html",
        ],
        [
            "title" => "Query Builder Class",
            "subtitle" => "CodeIgniter gives you access to a Query Builder class. This pattern allows information to be retrieved, inserted, and updated in your database with minimal scripting.",
            "arg" => "https://codeigniter.com/user_guide/database/query_builder.html",
        ],
        [
            "title" => "Transactions",
            "subtitle" => "Transactions are a programming construct that allows you to treat a group of operations as a single unit.",
            "arg" => "https://codeigniter.com/user_guide/database/transactions.html",
        ],
        [
            "title" => "Database Metadata",
            "subtitle" => "CodeIgniter can retrieve information about the databases it is running queries against.",
            "arg" => "https://codeigniter.com/user_guide/database/metadata.html",
        ],
        [
            "title" => "Custom Function Calls",
            "subtitle" => "CodeIgniter lets you call your own custom database functions.",
            "arg" => "https://codeigniter.com/user_guide/database/call_function.html",
        ],
        [
            "title" => "Database Events",
            "subtitle" => "CodeIgniter lets you call your own custom database functions.",
            "arg" => "https://codeigniter.com/user_guide/database/events.html",
        ],
        [
            'title' => 'Database Utilities',
            'subtitle' => 'CodeIgniter comes with a number of utility scripts that help you manage your databases.',
            'arg' => 'https://codeigniter.com/user_guide/database/utilities.html',
        ],
        [
            "title" => "Using CodeIgniter’s Model",
            "subtitle" => "CodeIgniter’s Model class offers a number of advantages over the standard way of interacting with the database.",
            "arg" => "https://codeigniter.com/user_guide/models/model.html",
        ],
        [
            "title" => "Using Entity Classes",
            "subtitle" => "Entity classes are a simple way to organize your models.",
            "arg" => "https://codeigniter.com/user_guide/models/entities.html",
        ],
        [
            "title" => "Database Forge Class",
            "subtitle" => "The Database Forge Class contains functions that help you manage your database.",
            "arg" => "https://codeigniter.com/user_guide/database/forge.html",
        ],
        [
            "title" => "Database Migrations",
            "subtitle" => "Migrations are a convenient way for you to alter your database in a structured and organized manner.",
            "arg" => "https://codeigniter.com/user_guide/dbmgmt/migration.html",
        ],
        [
            "title" => "Database Seeding",
            "subtitle" => "Seeding is the process of populating a database with an initial set of data.",
            "arg" => "https://codeigniter.com/user_guide/dbmgmt/seeds.html",
        ],
        [
            "title" => "Database Commands",
            "subtitle" => "CodeIgniter comes with a number of command line tools that help you build your application.",
            "arg" => "https://codeigniter.com/user_guide/dbmgmt/db_commands.html",
        ],
        [
            "title" => "Introduction to Libraries",
            "subtitle" => "CodeIgniter comes with a set of core Libraries that assist you in performing common tasks.",
            "arg" => "https://codeigniter.com/user_guide/libraries/index.html",
        ],
        [
            "title" => "Caching Driver",
            "subtitle" => "CodeIgniter features wrappers around some of the most popular forms of fast and dynamic caching.",
            "arg" => "https://codeigniter.com/user_guide/libraries/caching.html",
        ],
        [
            "title" => "Cookies",
            "subtitle" => "CodeIgniter comes with helper functions that let you fetch URI information without having to parse the URL.",
            "arg" => "https://codeigniter.com/user_guide/libraries/cookies.html",
        ],[
            "title" => "CURLRequest Class",
            "subtitle" => "The CURLRequest class provides a simple interface for making HTTP requests.",
            "arg" => "https://codeigniter.com/user_guide/libraries/curlrequest.html",
        ],[
            "title" => "Email Class",
            "subtitle" => "CodeIgniter’s robust Email Class supports the following features: Multiple Protocols: Mail, Sendmail, and SMTP ",
            "arg" => "https://codeigniter.com/user_guide/libraries/email.html",
        ],[
            "title" => "Encryption Service",
            "subtitle" => "CodeIgniter’s Encryption class provides two-way data encryption.",
            "arg" => "https://codeigniter.com/user_guide/libraries/encryption.html",
        ],
        [
            "title" => "Working with Files",
            "subtitle" => "CodeIgniter comes with a number of helper functions that let you fetch URI information without having to parse the URL.",
            "arg" => "https://codeigniter.com/user_guide/libraries/files.html",
        ],[
            "title" => "File Collections",
            "subtitle" => "CodeIgniter’s File Collection class provides a simple interface for manipulating groups of files.",
            "arg" => "https://codeigniter.com/user_guide/libraries/file_collection.html",
        ],[
            "title" => "Honeypot Class",
            "subtitle" => "CodeIgniter’s Honeypot class provides a simple way to protect your forms from spam bots without using CAPTCHAs.",
            "arg" => "https://codeigniter.com/user_guide/libraries/honeypot.html",
        ],[
            "title" => "Image Manipulation Class",
            "subtitle" => "CodeIgniter’s Image Manipulation class provides an easy and simple way to manipulate, resize, crop, rotate, and watermark the images.",
            "arg" => "https://codeigniter.com/user_guide/libraries/images.html",
        ],[
            "title" => "Pagination",
            "subtitle" => "CodeIgniter’s Pagination class is very easy to use, and it is 100% customizable, either dynamically or via stored preferences.",
            "arg" => "https://codeigniter.com/user_guide/libraries/pagination.html",
        ],[
            "title" => "Publisher",
            "subtitle" => "CodeIgniter’s Publisher class provides a simple interface for publishing messages to a variety of queues.",
            "arg" => "https://codeigniter.com/user_guide/libraries/publisher.html",
        ],[
            "title" => "Security",
            "subtitle" => "CodeIgniter’s Security class provides a comprehensive set of tools for commonly needed security measures.",
            "arg" => "https://codeigniter.com/user_guide/libraries/security.html",
        ],[
            "title" => "Session Library",
            "subtitle" => "CodeIgniter comes with a full-featured and very fast abstracted database class that supports both traditional structures and Query Builder patterns.",
            "arg" => "https://codeigniter.com/user_guide/libraries/sessions.html",
        ],[
            "title" => "Throttler",
            "subtitle" => "CodeIgniter’s Throttler class provides a simple interface for limiting the number of times that a particular action can be performed within a given time period.",
            "arg" => "https://codeigniter.com/user_guide/libraries/throttler.html",
        ],[
            "title" => "Times and Dates",
            "subtitle" => "CodeIgniter’s Date helper provides some useful functions for working with times and dates.",
            "arg" => "https://codeigniter.com/user_guide/libraries/time.html",
        ],[
            "title" => "Typography",
            "subtitle" => "CodeIgniter’s Typography class provides some useful functions for working with text.",
            "arg" => "https://codeigniter.com/user_guide/libraries/typography.html",
        ],[
            "title" => "Working with Uploaded Files",
            "subtitle" => "CodeIgniter’s Upload class provides an easy way to upload files.",
            "arg" => "https://codeigniter.com/user_guide/libraries/uploaded_files.html",
        ],[
            "title" => "Working with URIs",
            "subtitle" => "CodeIgniter comes with helper functions that let you fetch URI information without having to parse the URL.",
            "arg" => "https://codeigniter.com/user_guide/libraries/uri.html",
        ],[
            "title" => "User Agent Class",
            "subtitle" => "CodeIgniter’s User Agent class provides a simple way to gather information about the user agent (web browser, platform, robot, or mobile device) viewing your site.",
            "arg" => "https://codeigniter.com/user_guide/libraries/user_agent.html",
        ],[
            "title" => "Validation",
            "subtitle" => "CodeIgniter’s Form Validation class is very loosely based on the one found in Laravel, and shares many of the same methods.",
            "arg" => "https://codeigniter.com/user_guide/libraries/validation.html",
        ],[
            "title" => "Helpers",
            "subtitle" => "CodeIgniter comes with a number of helper functions that are globally available.",
            "arg" => "https://codeigniter.com/user_guide/helpers/index.html",
        ],[
            "title" => "Array Helper",
            "subtitle" => "The Array Helper file contains functions that assist in working with arrays.",
            "arg" => "https://codeigniter.com/user_guide/helpers/array_helper.html",
        ],[
            "title" => "Cookie Helper",
            "subtitle" => "The Cookie Helper file contains functions that assist in working with cookies.",
            "arg" => "https://codeigniter.com/user_guide/helpers/cookie_helper.html",
        ],[
            "title" => "Date Helper",
            "subtitle" => "The Date Helper file contains functions that assist in working with dates.",
            "arg" => "https://codeigniter.com/user_guide/helpers/date_helper.html",
        ],[
            "title" => "Filesystem Helper",
            "subtitle" => "The Filesystem Helper file contains functions that assist in working with files.",
            "arg" => "https://codeigniter.com/user_guide/helpers/filesystem_helper.html",
        ],[
            "title" => "Form Helper",
            "subtitle" => "The Form Helper file contains functions that assist in working with forms.",
            "arg" => "https://codeigniter.com/user_guide/helpers/form_helper.html",
        ],[
            "title" => "HTML Helper",
            "subtitle" => "The HTML Helper file contains functions that assist in working with HTML.",
            "arg" => "https://codeigniter.com/user_guide/helpers/html_helper.html",
        ],[
            "title" => "Inflector Helper",
            "subtitle" => "The Inflector Helper file contains functions that permit you to convert words between singular and plural, and to generate URLs.",
            "arg" => "https://codeigniter.com/user_guide/helpers/inflector_helper.html",
        ],[
            "title" => "Number Helper",
            "subtitle" => "The Number Helper file contains functions that assist in working with numbers.",
            "arg" => "https://codeigniter.com/user_guide/helpers/number_helper.html",
        ],[
            "title" => "Security Helper",
            "subtitle" => "The Security Helper file contains functions that assist in working with security.",
            "arg" => "https://codeigniter.com/user_guide/helpers/security_helper.html",
        ],
        [
            "title" => "Test Helper",
            "subtitle" => "The Test Helper file contains functions that assist in working with PHPUnit.",
            "arg" => "https://codeigniter.com/user_guide/helpers/test_helper.html",
        ],
        [
            "title" => "Text Helper",
            "subtitle" => "The Text Helper file contains functions that assist in working with text.",
            "arg" => "https://codeigniter.com/user_guide/helpers/text_helper.html",
        ],
        [
            "title" => "URL Helper",
            "subtitle" => "The URL Helper file contains functions that assist in working with URLs.",
            "arg" => "https://codeigniter.com/user_guide/helpers/url_helper.html",
        ],
        [
            "title" => "XML Helper",
            "subtitle" => "The XML Helper file contains functions that assist in working with XML data.",
            "arg" => "https://codeigniter.com/user_guide/helpers/xml_helper.html",
        ],
        [
            "title" => "Testing",
            "subtitle" => "CodeIgniter comes with a full-featured and very fast abstracted database class that supports both traditional structures and Query Builder patterns.",
            "arg" => "https://codeigniter.com/user_guide/testing/index.html",
        ],
        [
            "title" => "Getting Started",
            "subtitle" => "CodeIgniter’s unit testing class is simple and powerful.",
            "arg" => "https://codeigniter.com/user_guide/testing/overview.html",
        ],[
            "title" => "Testing Your Database",
            "subtitle" => "In order to take advantage of the built-in database tools that CodeIgniter provides for testing, your tests must extend CIUnitTestCase and use the DatabaseTestTrait",
            "arg" => "https://codeigniter.com/user_guide/testing/database.html",
        ],[
            "title" => "Generating Test Data",
            "subtitle" => "CodeIgniter provides a number of ways to generate test data.",
            "arg" => "https://codeigniter.com/user_guide/testing/fabricator.html",
        ],[
            "title" => "Testing Controllers",
            "subtitle" => "CodeIgniter’s unit testing class is simple and powerful.",
            "arg" => "https://codeigniter.com/user_guide/testing/controllers.html",
        ],
        [
            "title" => "HTTP Feature Testing",
            "subtitle" => "CodeIgniter’s HTTP testing class is simple and powerful.",
            "arg" => "https://codeigniter.com/user_guide/testing/feature.html",
        ],
        [
            "title" => "Testing Responses",
            "subtitle" => "CodeIgniter’s unit testing class is simple and powerful.",
            "arg" => "https://codeigniter.com/user_guide/testing/responses.html",
        ],
        [
            "title" => "Benchmarking",
            "subtitle" => "CodeIgniter’s Benchmarking class is simple and powerful.",
            "arg" => "https://codeigniter.com/user_guide/libraries/benchmark.html",
        ],
        [
            "title" => "Debugging Your Application",
            "subtitle" => "CodeIgniter’s Benchmarking class is simple and powerful.",
            "arg" => "https://codeigniter.com/user_guide/general/debugging.html",
        ],
        [
            "title" => "Mocking System Classes",
            "subtitle" => "CodeIgniter’s Benchmarking class is simple and powerful.",
            "arg" => "https://codeigniter.com/user_guide/testing/mocking.html",
        ],
        [
            "title" => "Command Line Usage",
            "subtitle" => "CodeIgniter’s Benchmarking class is simple and powerful.",
            "arg" => "https://codeigniter.com/user_guide/cli/index.html",
        ],
        [
            "title" => "CLI Overview",
            "subtitle" => "CodeIgniter 4 provides built-in command spark and useful commands and library. You can also create spark commands, and run controllers via CLI.",
            "arg" => "https://codeigniter.com/user_guide/cli/cli_overview.html",
        ],
        [
            "title" => "Running Controllers via CLI",
            "subtitle" => "CodeIgniter 4 provides built-in command spark and useful commands and library. You can also create spark commands, and run controllers via CLI.",
            "arg" => "https://codeigniter.com/user_guide/cli/cli_controller.html",
        ],
        [
            "title" => "Spark Commands",
            "subtitle" => "CodeIgniter 4 provides built-in command spark and useful commands and library. You can also create spark commands, and run controllers via CLI.",
            "arg" => "https://codeigniter.com/user_guide/cli/spark_commands.html",
        ],
        [
            "title" => "Creating Spark Commands",
            "subtitle" => "CodeIgniter 4 provides built-in command spark and useful commands and library. You can also create spark commands, and run controllers via CLI.",
            "arg" => "https://codeigniter.com/user_guide/cli/cli_commands.html",
        ],
        [
            "title" => "CLI Generators",
            "subtitle" => "CodeIgniter 4 provides built-in command spark and useful commands and library. You can also create spark commands, and run controllers via CLI.",
            "arg" => "https://codeigniter.com/user_guide/cli/cli_generators.html",
        ],[
            "title" => "CLI Libraries",
            "subtitle" => "CodeIgniter 4 provides built-in command spark and useful commands and library. You can also create spark commands, and run controllers via CLI.",
            "arg" => "https://codeigniter.com/user_guide/cli/cli_library.html",
        ],
        [
            "title" => "CLIRequest Class",
            "subtitle" => "CodeIgniter 4 provides built-in command spark and useful commands and library. You can also create spark commands, and run controllers via CLI.",
            "arg" => "https://codeigniter.com/user_guide/cli/cli_request.html",
        ],
        [
            "title" => "Creating Core System Classes",
            "subtitle" => "Every time CodeIgniter runs there are several base classes that are initialized automatically as part of the core framework. It is possible",
            "arg" => "https://codeigniter.com/user_guide/extending/core_classes.html",
        ],
        [
            "title" => "Replacing Common Functions",
            "subtitle" => "There are quite a few functions necessary to CodeIgniter that need to be loaded early for use in the core classes and thus cannot be placed into a helper.",
            "arg" => "https://codeigniter.com/user_guide/extending/common.html",
        ],[
            "title" => "Events",
            "subtitle" => "CodeIgniter’s Events feature provides a means to tap into and modify the inner workings of the framework without hacking core files. ",
            "arg" => "https://codeigniter.com/user_guide/extending/events.html",
        ],[
            "title" => "Extending the Controller",
            "subtitle" => "CodeIgniter’s core Controller should not be changed, but a default class extension is provided for you at app/Controllers/BaseController.php.",
            "arg" => "https://codeigniter.com/user_guide/extending/basecontroller.html",
        ],[
            "title" => "Authentication",
            "subtitle" => "CodeIgniter provides an official authentication and authorization framework CodeIgniter Shield for CodeIgniter 4,",
            "arg" => "https://codeigniter.com/user_guide/extending/authentication.html",
        ],[
            "title" => "Creating Composer Packages",
            "subtitle" => "You can make the Code Modules you create into Composer packages, or can create a Composer package for CodeIgniter 4.",
            "arg" => "https://codeigniter.com/user_guide/extending/composer_packages.html",
        ]
    ]
];

$noresults = [
    "items" => [
        [
            "title" => "Search term \"".$query."\" in CodeIgniter User Guide",
            "subtitle" => "Search term ".$query." in CodeIgniter User Guide",
            "arg" => "https://codeigniter.com/user_guide/search.html?q=".$query."&check_keywords=yes&area=default",
        ]
    ]
];


$results2 = array();
foreach ($results['items'] as $key => $value) {
    if (stripos($value['title'], $query) !== false) {
        $results2['items'][] = $value;
    }
}

if($query == "") {
    echo json_encode($results);
    exit;
}elseif($query == $query) {
    if(empty($results2['items'])){
        echo json_encode($noresults);
        exit;
    }else{
        echo json_encode($results2);
        exit;
    }
}else{
    echo json_encode($noresults);
    exit;
}


?>