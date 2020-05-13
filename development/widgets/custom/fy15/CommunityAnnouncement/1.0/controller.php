<?php
namespace Custom\Widgets\fy15;
use \RightNow\Connect\v1_2 as RNCPHP;

class CommunityAnnouncement extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$featured_answer_id = 183;
		try {
			$answer = RNCPHP\Answer::fetch($featured_answer_id);
			$this->data["answer"] = $answer;
		} catch (RNCPHP\ConnectAPIError $err) {
			$this->data["answer"]->Solution = "Please provide an valid answer ID in the quick settings sidebar.";
			$this->data["answer"]->Summary = "Answer not found.";
		}
        return parent::getData();

    }
}