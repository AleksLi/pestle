<?php
namespace Pulsestorm\Magento2\Cli\Hello_Argument;
use function Pulsestorm\Pestle\Importer\pestle_import;
pestle_import('Pulsestorm\Magento2\Cli\Library\output');

/**
* One Line Description
*
* @command hello_argument
* @argument greeting Please Enter the Greeting [Hello]
* @option explain Should I display the explain text?
* @argument entity Please Enter the Entity [World]
*/
function pestle_cli($argv, $options)
{    
    output($argv['greeting'] . " " . $argv['entity']);
    if($options['explain'])
    {
        output("This command demos automatic arguments");
    }
}
