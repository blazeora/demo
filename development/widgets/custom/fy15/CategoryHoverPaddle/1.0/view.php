<div id="rn_CategoryPaddleCategories" class="col-md-4">
	<div class="list-group">
		<?php
			$i == 1;
            $limitParent = $this->data['attrs']['limit_parents'];
			foreach ($this->data['categories'] as $item) {
		?>
        <? if($i < $limitParent):?>
			<div id="rn_HoverCategories" data-id="<?= $item['id']; ?>" class="rn_HoverCategories">
            	 <?php
					//Lower case everything
					$string = strtolower($item["label"]);
					//Make alphanumeric (removes all other characters)
					$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
					//Clean up multiple dashes or whitespaces
					$string = preg_replace("/[\s-]+/", " ", $string);
					//Convert whitespaces and underscore to dash
					$string = preg_replace("/[\s_]/", "-", $string);
				?>
				<img src="/euf/assets/themes/fy15/images/categories/<?= $string; ?>.png" alt="icon" class="hover-list-group-item">
				<a href="/app/answers/list/c/<?= $item['id']; ?>,<?= $item['id']; ?>/" data-id="<?= $item['id']; ?>" class="list-group-item" style="text-align: center; font-size: 20px;"><?= $item["label"] ?></a>
				<?php
				//	foreach ($this->data['categories'] as $item) {
				?>		
				<div class="rn_CategoryHoverPaddleSubItem hidden" data-id="<?= $item['id']; ?>">
					<h3 id="CategoryHoverPaddleheader" ><?= $item["label"]; ?></h3>
					<div class="rn_CategoryPaddleSubItemCategories" style="height:71%; margin-left:7%; margin-top:7%;">
						<?php
							foreach ($item["subItems"] as $sitem) {
						?>
								<ul style="list-style-type: none; margin-bottom: 1%;">
									<li><a href="/app/answers/list/c/<?= $item["id"]; ?>,<?= $sitem["id"]; ?>" style="color:#4c4c4c">
										<?= $sitem["label"]; ?>
									</a></li>
								</ul>		
						<?php		
							}
						?>
					</div>
				</div>
					<?php
					endif;
					$i++; 
					?>
			</div>
		<?php
			}
		?>
	</div>
</div>



<!--<a href="#" class="list-group-item active"><span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span> Shipping & Delivery</a>-->																										