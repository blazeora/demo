<?php
namespace Custom\Widgets\fy15;

use \RightNow\Connect\v1_2 as RNCPHP;

class ChatTranscript extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$Configuration = RNCPHP\FY15\Configuration::fetch(1);
		$chatccform = $Configuration->chat_ccform;
		
		$this->data["chat_ccform"] = $chatccform;
		
    	return parent::getData();
    }
}