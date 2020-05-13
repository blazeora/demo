<!-- IF FY17 is selected Template ----->
<?php if ($this->data["template"] == 1): ?>
	<rn:widget path="custom/templateSelector/fy17top" />
<?php endif; ?>


<!-- IF FY17 Branded is selected Template ----->
<?php if ($this->data["template"] == 2): ?>
	<rn:widget path="custom/templateSelector/fy17brandedtop" />	
<?php endif; ?>


<!-- IF FY16 is selected Template ----->
<?php if ($this->data["template"] == 3): ?>
	<rn:widget path="custom/templateSelector/fy16top" />
<?php endif; ?>

<!-- IF FY16 Branded is selected Template ----->
<?php if ($this->data["template"] == 4): ?>
	<rn:widget path="custom/templateSelector/fy16brandedtop" />
<?php endif; ?>


<!-- IF Reference Implementation is selected Template ----->
<?php if ($this->data["template"] == 5): ?>
	<rn:widget path="custom/templateSelector/refimptop" />
<?php endif; ?>


<!-- IF Reference Implementation BRANDED is selected Template ----->
<?php if ($this->data["template"] == 6): ?>
	<rn:widget path="custom/templateSelector/refimpbrandedtop" />
<?php endif; ?>