<?php
namespace Custom\Widgets\fy15;

class CategoryAnswers extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {			
		$answerContent = $this->CI->model('Answer')->getPopular(8, null, $this->data['attrs']['category_id']);

		$this->data['results'] = $answerContent->result;
    	return parent::getData();
    }
} 