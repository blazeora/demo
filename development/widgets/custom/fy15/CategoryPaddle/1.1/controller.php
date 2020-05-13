<?php
namespace Custom\Widgets\fy15;
use \RightNow\Connect\v1_2 as RNCPHP;

class CategoryPaddle extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$Categories = $this->CI->model('Prodcat')->getHierarchy(HM_CATEGORIES, 2);
		$this->data["categories"] = $Categories->result;
		
		$Configuration = RNCPHP\FY15\Configuration::fetch(1);
		$community_enabled = $Configuration->community_enabled;
		
		$this->data["community_enabled"] = $community_enabled;
		
    	return parent::getData();
    }
}