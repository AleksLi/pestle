<?php
namespace Pulsestorm\Magento2\Cli\Generate\Layout_Xml;
use function Pulsestorm\Pestle\Importer\pestle_import;
pestle_import('Pulsestorm\Pestle\Library\inputOrIndex');
pestle_import('Pulsestorm\Pestle\Library\writeStringToFile');
pestle_import('Pulsestorm\Pestle\Library\output');

/**
* One Line Description
*
* @command generate_layout_xml
*/
function pestle_cli($argv)
{
    output("Hello");
}