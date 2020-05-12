<!---- Homepage used with the FY17 Template ---->
<?php if (($this->data["template"] == 1)|| ($this->data["template"] == 2)): ?>
	<style>.rn_NavigationArea{display:none;height:0}</style>
	<div id="rn_Search">
		<h3>#rn:msg:SEARCH_CMD#</h3>
		<form onsubmit="return false;">
			<div class="input-group">
				<rn:widget path="custom/fy15/KeywordText" report_id="176" label_text="" initial_focus="true"/>
				<div class="input-group-btn">
					<rn:widget path="custom/fy15/SearchButton" report_id="176" report_page_url="/app/answers/list"/>
				</div>
			</div>
		</form>
	</div>
	<div style="clear:both;"></div>
		<rn:widget path="custom/fy15/VisualProductCategorySelector" image_path="/euf/assets/themes/fy17/images/products" maximum_items="4" landing_page_url="/app/products/overview/"/>
	<div style="clear:both;"></div>
		<rn:widget path="custom/fy15/HomePagePopularAnswers" image_path="/euf/assets/themes/fy17/images/products" />

	<div style="clear:both;"></div>
	<div id="rn_CategoryPaddle" >
		<h3>#rn:msg:FEATURED_SUPPORT_CATEGORIES_Test_LBL#</h3>
		<rn:widget path="custom/fy15/PaddleWidget" limit_parents="4"  prod_cat="categories" show_community_posts="true"/>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>				
<?php endif; ?>

<!---- Homepage used with the FY16 Template ---->
<?php if (($this->data["template"] == 3)|| ($this->data["template"] == 4)): ?>
	<div id="rn_Search">
		<h3>#rn:msg:SEARCH_CMD#</h3>
		<form onsubmit="return false;">
			<div class="input-group">
				<rn:widget path="custom/fy15/KeywordText" report_id="176" label_text="" initial_focus="true"/>
				<div class="input-group-btn">
					<rn:widget path="custom/fy15/SearchButton" report_id="176" report_page_url="/app/answers/list"/>
				</div>
			</div>
		</form>
	</div>
	<div id="rn_CategoryPaddle">
		<h3>#rn:msg:FEATURED_SUPPORT_CATEGORIES_LBL#</h3>
		<rn:widget path="custom/fy15/CategoryPaddle" />
		<div class="clearfix"></div>
	</div>
<?php endif; ?>


<!---- Homepage used with the REFERENCE IMPLEMENATION ---->
<?php if (($this->data["template"] == 5) || ($this->data["template"] == 6)): ?>
</div>
<div class="rn_Hero">
    <div class="rn_HeroInner">
        <div class="rn_HeroCopy">
            <h1>#rn:msg:WERE_HERE_TO_HELP_LBL#</h1>
        </div>
        <div class="rn_SearchControls">
            <h1 class="rn_ScreenReaderOnly">#rn:msg:SEARCH_CMD#</h1>
            <form method="get" action="/app/results">
                <rn:container source_id="KFSearch">
                    <div class="rn_SearchInput">
                        <rn:widget path="searchsource/SourceSearchField" initial_focus="true"/>
                    </div>
                    <rn:widget path="searchsource/SourceSearchButton" search_results_url="/app/results"/>
                </rn:container>
            </form>
        </div>
    </div>
</div>

<div class="rn_PageContent rn_Home">
    <div class="rn_Container">
        <rn:widget path="navigation/VisualProductCategorySelector" numbered_pagination="true"/>
    </div>

    <div class="rn_PopularKB">
        <div class="rn_Container">
            <h2>#rn:msg:POPULAR_PUBLISHED_ANSWERS_LBL#</h2>
            <rn:widget path="reports/TopAnswers" show_excerpt="true" limit="5"/>
            <span class="rn_AnswersLink">
                <a href="/app/answers/list#rn:session#">#rn:msg:SHOW_MORE_PUBLISHED_ANSWERS_LBL#</a>
            </span>
        </div>
    </div>

    <div class="rn_PopularSocial">
        <div class="rn_Container">
            <h2>#rn:msg:RECENT_COMMUNITY_DISCUSSIONS_LBL#</h2>
            <rn:widget path="discussion/RecentlyAnsweredQuestions" show_excerpt="true" maximum_questions="5"/>
            <span class="rn_DiscussionsLink">
                <a href="/app/social/questions/list/kw/*#rn:session#">#rn:msg:SHOW_MORE_COMMUNITY_DISCUSSIONS_LBL#</a>
            </span>
        </div>
    </div>
</div>
<div class="rn_Container">
<?php endif; ?>