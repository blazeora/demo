<?php
namespace Custom\Widgets\fy15;

use \RightNow\Connect\v1_2 as RNCPHP;

class CategoryDescription extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		
		$ServiceCategory = RNCPHP\ServiceCategory::fetch($this->data["attrs"]["category_id"]);

		$this->data["category"] = $ServiceCategory;
		
    	return parent::getData();
    }
}