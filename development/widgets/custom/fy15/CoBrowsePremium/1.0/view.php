
<?php
	if ($this->data["cobrowse_premium"]) {
?>
		<rn:condition config_check="MOD_COBROWSE_PREMIUM_ENABLED == true">
			<rn:widget path="utils/CobrowsePremium" />
		</rn:condition>
<?		
	}
?>
