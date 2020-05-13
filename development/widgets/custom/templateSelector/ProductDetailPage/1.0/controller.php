<?php
namespace Custom\Widgets\templateSelector;
use \RightNow\Connect\v1_2 as RNCPHP;
class ProductDetailPage extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$Configuration = RNCPHP\FY15\Configuration::fetch(1);
		$cp_template = $Configuration->cp_template;
		
		$this->data["template"] = $cp_template;
        return parent::getData();

    }
}