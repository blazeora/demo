<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php
	if ($this->data["chat_ccform"]):
?>	
		<rn:widget path="custom/fy15/ChatTranscript2" />
<?		
	else:
?>
	<rn:widget path="custom/fy15/ChatTranscript3" />
<?		
	endif;
?>