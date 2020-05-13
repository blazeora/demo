<?php
	if ($this->data["virtual_assistant"]) {
?>
		<rn:widget path="custom/va/VaTriggerMessage" />
<?
	} else {
?>
		<rn:widget path="chat/ChatPostMessage" initial_focus="true" />
<?		
	}
?>
