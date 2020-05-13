<!-- IF FY17 is selected Template ----->
<?php if ($this->data["template"] == 1): ?>
	<rn:widget path="custom/templateSelector/fy17bottom" />	
<?php endif; ?>

<!-- IF FY17 Branded is selected Template ----->
<?php if ($this->data["template"] == 2): ?>
	<rn:widget path="custom/templateSelector/fy17brandedbottom" />	
<?php endif; ?>

<!-- IF FY16 is selected Template ----->
<?php if ($this->data["template"] == 3): ?>
	<rn:widget path="custom/templateSelector/fy16bottom" />
<?php endif; ?>

<!-- IF FY16 Branded is selected Template ----->
<?php if ($this->data["template"] == 4): ?>
	<rn:widget path="custom/templateSelector/fy16brandedbottom" />
<?php endif; ?>

<!-- IF Reference Implementation is selected Template ----->
<?php if ($this->data["template"] == 5): ?>
	<rn:widget path="custom/templateSelector/refimpbottom" />
<?php endif; ?>

<!-- IF Reference Implementation BRANDED is selected Template ----->
<?php if ($this->data["template"] == 6): ?>
	<rn:widget path="custom/templateSelector/refimpbrandedbottom" />
<?php endif; ?>