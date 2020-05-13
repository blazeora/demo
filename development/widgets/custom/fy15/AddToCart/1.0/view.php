<?php /* Author: Steven Bennett, steven.bennett@oracle.com */
	if (sizeof($this->data["items"]) > 0) {
?>
	<div id="rn_ProductInCart">
		<p>This product is already in your cart.</p>
		<a href="/app/products/list">Continue shopping</a> or <a href="/app/checkout"><button>Checkout</button></a>
	</div>
	<div id="rn_ProductQuantity" class="rn_Hidden">
		<label>Quantity:</label>
		<input type="number" value="1" />
		<button id="rn_AddToCart" data-prod-id="<?= getUrlParm("p_id"); ?>">Add to cart</button>		
	</div>

<?php
	} else {
?>
	<div id="rn_ProductInCart" class="rn_Hidden">
		<p>This product is already in your cart.</p>
		<a href="/app/products/list">Continue shopping</a> or <a href="/app/checkout"><button>Checkout</button></a>
	</div>	
	<div id="rn_ProductQuantity">
		<label>Quantity:</label>
		<input type="number" value="1" />
		<button id="rn_AddToCart" data-prod-id="<?= getUrlParm("p_id"); ?>">Add to cart</button>		
	</div>
<?php
	}
?>
