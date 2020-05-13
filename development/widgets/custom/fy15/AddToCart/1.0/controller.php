<?php
namespace Custom\Widgets\fy15;

use \RightNow\Connect\v1_2 as RNCPHP;

class AddToCart extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$p_id = (int) getUrlParm("p_id");
		$ShoppingCartItem = RNCPHP\FY15\ShoppingCart::find("product=" . $p_id);

		$this->data["items"] = $ShoppingCartItem;

        return parent::getData();
    }
}