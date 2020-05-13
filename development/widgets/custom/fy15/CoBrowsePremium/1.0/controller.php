<?php
namespace Custom\Widgets\fy15;

use \RightNow\Connect\v1_2 as RNCPHP;

class CoBrowsePremium extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$Configuration = RNCPHP\FY15\Configuration::fetch(1);
		$cobrowse_premium = $Configuration->cobrowse_premium;
		
		$this->data["cobrowse_premium"] = $cobrowse_premium;
		
    	return parent::getData();
    }
}