# Composer Demo

A simple PHP application on how to use Composer tool.

Steps to setup this project from scratch are as follows:

## Create a project directory.
Run the following command:  
`mkdir composer-demo`

## Run "composer init".
Run the following command:  
`composer init`

## PSR-4 autoloading
Run the following command:  
`composer dump-autoload -o`

Define application namespace by adding the following code snippet in the composer.json file:  
`
"autoload": {  
    "psr-4": {  
        "MyApp\\": "app/"  
    }  
}
`

## Installing dependency
Run the following command:
`composer require nesbot/carbon`
