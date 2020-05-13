<?php
namespace Custom\Widgets\Branding;

use \RightNow\Connect\v1_2 as RNCPHP;

class BrandingCustomLogo extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$Configuration = RNCPHP\FY15\Configuration::fetch(1);
		$logo_file_name = $Configuration->logo_path;
		
		$this->data["logo_file_name"] = $logo_file_name;
		
    	return parent::getData();
    }
}