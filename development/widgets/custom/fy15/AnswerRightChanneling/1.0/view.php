<!--- Written by Jesse Chase (jesse.chase@oracle.com)

	This uses custom fields on the answer table. When they are set, they will dispaly channels below the answer detail information. Built for "Right Channeling"
-->
<div id="rn_<?= $this->instanceID ?>" class="<?= $this->classList ?>">
<?php 
	if  (($this->data["show_chat_as_channel"] == 1)  || 
		($this->data["show_phone_as_channel"] == 1)  || 
		($this->data["show_email_as_channel"] == 1)  || 
		($this->data["show_community_as_channel"] == 1)): 
?>
		<h3><?=$this->data['attrs']['heading_label'];?></h3>
<?php endif;?>		
		<?php if ($this->data["show_chat_as_channel"] == 1): ?>
			<a class="rightchannel" href="/app/chat/chat_launch">
				<div class="rightchannelpadding">
					<img src="/euf/assets/images/chatrightchannel.png" alt=""><br/>
					<strong>Chat with an Agent</strong>
				</div>
			</a>
		<?php endif;?>
		<?php if ($this->data["show_phone_as_channel"] == 1): ?>
			<a class="rightchannel" >
				<div class="rightchannelpadding">
					<img src="/euf/assets/images/phonerightchannel.png" alt=""><br/>
					<strong>Speak with an Agent</strong>
				</div>
			</a>
		<?php endif;?>
		<?php if ($this->data["show_email_as_channel"] == 1): ?>
			<a class="rightchannel" href="/app/ask">
				<div class="rightchannelpadding">
					<img src="/euf/assets/images/emailrightchannel.png" alt=""><br/>
					<strong>Open a Ticket</strong>
				</div>
			</a>
		<?php endif;?>

		<?php if (($this->data["show_community_as_channel"] == 1) && ($this->data["community_enabled"])): ?>
			<a class="rightchannel" href="/app/social/home">
				<div class="rightchannelpadding">
					<img src="/euf/assets/images/communityrightchannel.png" alt=""><br/>
					<strong>Ask our Community</strong>
				</div>
			</a>
		<?php endif;?>

		<div class="clearfix"></div>
	</div>

