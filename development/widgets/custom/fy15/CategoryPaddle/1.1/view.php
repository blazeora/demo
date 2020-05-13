<div id="rn_CategoryPaddleCategories" class="col-md-4">
	<div class="list-group">
		<?php
			foreach ($this->data['categories'] as $item) {
		?>
				<a href="/app/categories/detail/c/<?= $item['id']; ?>,<?= $item['id']; ?>" data-id="<?= $item['id']; ?>" class="list-group-item"><?= $item["label"] ?></a>
		<?php
			}
		?>
	</div>
</div>
<div id="rn_CategoryPaddleSub" class="col-md-8">
	<?php
		foreach ($this->data['categories'] as $item) {
	?>		
			<div class="rn_CategoryPaddleSubItem" data-id="<?= $item['id']; ?>">
					<h3><?= $item["label"]; ?></h3>
					<p class="lead text-muted">
						<rn:widget path="custom/fy15/CategoryDescription" category_id="#rn:php:$item['id']#" />
					</p>
					<div class="rn_CategoryPaddleSubItemCategories">
						
					</div>
					<div class="rn_CategoryPaddleSubItemAnswers">
						<rn:widget path="custom/fy15/CategoryAnswers" category_id="#rn:php:$item['id']#" />
					</div>
                    <?php
						if ($this->data["community_enabled"]) {
					?>
						<hr/>
						<div class="rn_CategoryCommunityAnswers">
						<h3><?= $item["label"]; ?> Community Posts</h3>
						<rn:widget path="discussion/RecentlyAnsweredQuestions" maximum_questions="3" display_answers="false" category_filter="#rn:php:$item['id']#"/>
						</div>
					<?		
						}
					?>
			</div>
	<?php
		}
	?>
	<!--
	<h3></h3>
	<ul class="media-list">
		<li class="media">
			<a class="pull-left" href="#">
				<img class="media-object" src="images/answer2.png" alt="...">
			</a>
			<div class="media-body">
				<h4 class="media-heading"><a href="#">Where's my order?</a></h4>
				Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
			</div>
		</li>
		
	</ul>
	-->
</div>


<!--<a href="#" class="list-group-item active"><span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span> Shipping & Delivery</a>-->																										