<?php
namespace Custom\Widgets\fy15;

class CategoryHoverPaddle extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$Categories = $this->CI->model('Prodcat')->getHierarchy(HM_CATEGORIES, 2);
		$this->data["categories"] = $Categories->result;
		
    	return parent::getData();
    }
}