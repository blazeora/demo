<?php if ($this->data["my_cart_bar"] == 1): ?>
	<div id="rn_SpacesHeader">
		<nav id="rn_SpacesHeaderNavigation" class="navbar navbar-inverse" role="navigation">
			<div class="rn_Centered">
				<ul class="nav navbar-nav navbar-left">
					<li ><a id="rn_ShoppingCartDropdownButton" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>
					<li class="mobilehidden"><a href="#"><span class="glyphicon glyphicon-list-alt"></span> My Lists</a></li>
				</ul>
				<div id="rn_ShoppingCartDropdownList" style="display: none;" >
					<rn:widget path="custom/fy15/ShoppingCartDropdown" />				
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="mobilehidden"><a href="#">Corporate Login</a></li>
					<li><a href="/app/home">Help Center</a></li>
				</ul>
			</div>
		</nav>
	</div>
<?php endif; ?>
<rn:widget path="custom/Branding/BrandingCustomLogo" />