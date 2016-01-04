[![Build Status](https://travis-ci.org/astorm/pestle.svg?branch=master)](https://travis-ci.org/astorm/pestle)

You probably don't want to be here.  This project is in the very early stages.  Things are broken, everything will change.  Havoc will be wrought, etc.

What is Pestle?
--------------------------------------------------
Pestle is

- A PHP Framework for creating and organizing command line programs
- An experiment in implementing python style module imports in PHP
- A collection of command line programs, with a primary focus on Magento 2 code generation

Pestle grew out of my desire to do something about the growing number of simple PHP scripts in my `~/bin` that didn't have a real home, and my personal frustration with the direction of PHP's namespace system. 

PHP doesn't **need** another command line framework.  Symfony's console does a fine job of being the de-facto framework for building modern PHP command line applications.  Sometimes though, when you start off building something no one needed, you end up with someone nobody realized they wanted. 

How to Use
--------------------------------------------------
The easiest way to get started is to grab the latest build using curl

    curl -LO 'http://alanstorm.com/2016/projects/pestle/pestle.phar
    
You can see a list of commands with the following

    php pestle.phar list 

and get help for a specific command with

    php pestle.phar help generate_module    

If you want to build your own `phar`, we've got a `phing` `build.xml` file setup so all you *should* need to do to build a stand along `pestle.phar` executable is 

- `git checkout git@github.com:astorm/pestle.git`
- composer.phar install
- ./build.sh (which, in turn, calls the `phing` job that builds the `phar`

If you're interested in working on the framework itself, you can use the `runner.php` in the project root.  I personally use it by dropping the folloing in my `~/bin`.

    #File: ~/bin/pestle_dev
    #!/usr/bin/env php
    <?php
    require_once('/Users/alanstorm/Documents/github/astorm/pestle/runner.php');    

Example Command
--------------------------------------------------

Try 

    $ pestle.phar generate_module
    
from a Magento 2 sub-directory to get an idea of what we're doing here.  
