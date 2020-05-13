<?php
	if ($this->data["logo_file_name"] == "spaces_default") {

	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	
	
	if (strpos($url,'chat_landing') == false) {
		echo '
		<div id="custom-header">
		<img src="/euf/assets/images/header.jpg" />
		</div>
		';
	} 	else{
		echo '
		<div id="custom-header">
		<img src="/euf/assets/images/logo.jpg"  style="margin:0 auto;"/>
		</div>	
		';
	}
?>
		<div id="rn_CustomLogo" style="display: none;"></div>	
        <div id="MobileLogo" ><img src="/euf/assets/images/logo.jpg"  style="margin:0 auto;"/></div>	
<?php
	} else {
?>
		<div id="rn_SpacesLogo" style="display: none;">
			<rn:widget path="custom/fy15/SpacesLogo" />
		</div>
		<div id="rn_CustomLogo">
			<a href="/app/home"><img src="/euf/assets/themes/fy17/images/logos/<?= $this->data['logo_file_name']; ?>" border="0" /></a>
		</div>
<?php
	}
?>