<?php
namespace Custom\Widgets\fy15;
use \RightNow\Connect\v1_2 as RNCPHP;

class AnswerRightChanneling extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$Configuration = RNCPHP\FY15\Configuration::fetch(1);
		$community_enabled = $Configuration->community_enabled;
		$this->data["community_enabled"] = $community_enabled;
		
		$aid = $this->data['attrs']['answer_id'];
		try{
			$answer = RNCPHP\Answer::fetch($aid);
			$this->data["show_chat_as_channel"] = $answer->CustomFields->c->show_chat_as_channel;
			$this->data["show_phone_as_channel"] = $answer->CustomFields->c->show_phone_as_channel;
			$this->data["show_email_as_channel"] = $answer->CustomFields->c->show_email_as_channel;
			$this->data["show_community_as_channel"] = $answer->CustomFields->c->show_community_as_channel;
		}catch (Exception $err ){
			echo $err->getMessage();
		}
        return parent::getData();

    }
}