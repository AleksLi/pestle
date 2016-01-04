<?php
namespace Pulsestorm\Magento2\Cli\Generate\Psr_Log_Level;
use function Pulsestorm\Pestle\Importer\pestle_import;
pestle_import('Pulsestorm\Pestle\Library\output');
pestle_import('Pulsestorm\Pestle\Library\getZendPsrLogLevelMap');

/**
* For conversion of Zend Log Level into PSR Log Level
* 
* This command generates a list of Magento 1 log levels, 
* and their PSR log level equivalents.
*
* @command generate_psr_log_level
*/
function pestle_cli($argv)
{   
    $map = getZendPsrLogLevelMap();
    foreach($map as $key=>$value)
    {
        output($key . "\t\t" . $value);
    }
}