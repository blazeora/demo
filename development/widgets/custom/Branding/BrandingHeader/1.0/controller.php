<?php
namespace Custom\Widgets\Branding;
use \RightNow\Connect\v1_2 as RNCPHP;

class BrandingHeader extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {

        $Configuration = RNCPHP\FY15\Configuration::fetch(1);
		$my_cart_bar = $Configuration->my_cart_bar;
		
		$this->data["my_cart_bar"] = $my_cart_bar;
		
    	return parent::getData();

    }
}