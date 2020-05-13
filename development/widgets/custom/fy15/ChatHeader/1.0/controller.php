<?php
namespace Custom\Widgets\fy15;

use \RightNow\Connect\v1_2 as RNCPHP;

class ChatHeader extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$Configuration = RNCPHP\FY15\Configuration::fetch(1);
		$virtual_assistant = $Configuration->virtual_assistant;
		
		$this->data["virtual_assistant"] = $virtual_assistant;
		
    	return parent::getData();
    }
}