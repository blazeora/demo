<ul class="media-list">
	<?php
		$i = 0;
		if (sizeof($this->data['results']) > 0) {
			foreach ($this->data['results'] as $answer) { 
			$i++;
			if($i==5) break;
			?>
            
				<li class="media">
					<div class="media-body">
						<h4 class="media-heading">
							<a href="/app/answers/detail<?=$this->data['attrs']['answers_detail_url'] . "/a_id/$answer->ID" . \RightNow\Utils\Url::sessionParameter();?>"><?=\RightNow\Utils\Text::escapeHtml($answer->Title, false);?></a>
						</h4>
						<?=\RightNow\Utils\Text::escapeHtml($answer->Excerpt, false);?>		
					</div>
				</li>
		<? 
			}
		}
	?>
</ul>