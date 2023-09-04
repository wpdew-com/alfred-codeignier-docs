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