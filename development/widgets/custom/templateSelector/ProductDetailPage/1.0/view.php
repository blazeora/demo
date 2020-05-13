<!---- Homepage used with the FY17 / FY16 Template ---->
<?php if (($this->data["template"] == 1)|| ($this->data["template"] == 2) || ($this->data["template"] == 3) || ($this->data["template"] == 4)): ?>
   <div class="rn_Centered">   
    <h1 id="rn_SupportHeader"><rn:widget path="custom/fy15/ProductInfo" product_field="LookupName" /> Support</h1>
	<div class="rn_container" id="rn_BreadCrumb"><a href="/app/products/list">Products</a> > <rn:widget path="custom/fy15/ProductInfo" product_field="LookupName"/></div>	
        <div id="rn_productimagewrapper">
        	<rn:widget path="output/ProductCategoryImageDisplay" label_default_image_alt_text="" image_path="/euf/assets/themes/fy17/images/products">
            <h3><rn:widget path="custom/fy15/ProductInfo" product_field="LookupName" /></h3>
            <br/>
            <div class="rn_ProductSubscription">
            <rn:widget path="notifications/DiscussionSubscriptionIcon" subscription_type="Product" label_subscribe="#rn:msg:SUBSCRIBE_TO_DISCUSSIONS_LBL#" label_unsubscribe="#rn:msg:SUBSCRIBED_TO_DISCUSSIONS_LBL#" label_subscribe_title="#rn:astr:Click to receive email notification when a discussion is added or updated for this category.#" label_unsubscribe_title="#rn:astr:You are already subscribed to receive email notifications for all discussions for this product. Click to unsubscribe.#"/>
        </div>
        	<a href="/app/answers/detail/a_id/114" class="rn_registerproduct">Register Mine</a>
        </div>
        <div id="rn_ProductDetailsInfo">
            <div id="rn_productdetail_search">
                    <h1>#rn:msg:SEARCH_CMD#</h1>
                    <rn:widget path="search/SimpleSearch" label_button=""/>
                </div>
				<h3><rn:widget path="custom/fy15/ProductInfo" product_field="LookupName" /> Popular Answers</h3>
                <rn:widget path="reports/TopAnswers" show_excerpt="true" limit="5" product_filter_id="#rn:url_param_value:p#"/>
                <div id="rn_CategoryPaddle">
					<rn:widget path="custom/fy15/PaddleWidget"  product_id="#rn:url_param_value:p#" prod_cat="categories"  limit_parents="4" show_community_posts="true"/>
				</div>
        	</div>
    	</div>
    	<div class="clearfix"></div>
<?php endif; ?>
<?php if (($this->data["template"] == 5)|| ($this->data["template"] == 6)): ?>
</div>
<div class="rn_Hero rn_Product">
    <div class="rn_HeroInner">
        <rn:widget path="navigation/ProductCategoryBreadcrumb" display_first_item="false"/>
        <div class="rn_ProductHero">
            <h1>
                <rn:condition url_parameter_check="p != null">
                    <rn:field name="ServiceProduct.Name"/>
                <rn:condition_else/>
                    #rn:msg:PRODUCT_NOT_FOUND_LBL#
                </rn:condition>
            </h1>
            <rn:widget path="output/ProductCategoryImageDisplay" label_default_image_alt_text="" label_image_alt_text="">
        </div>
        <div class="rn_ProductSubscription">
            <rn:widget path="notifications/DiscussionSubscriptionIcon" subscription_type="Product" label_subscribe="#rn:msg:SUBSCRIBE_TO_DISCUSSIONS_LBL#" label_unsubscribe="#rn:msg:SUBSCRIBED_TO_DISCUSSIONS_LBL#" label_subscribe_title="#rn:msg:RECEIVE_NOTIF_DISC_ADD_DATE_TH_PRODUCT_MSG#" label_unsubscribe_title="#rn:msg:ALREADY_SUB_RECV_NOTIF_SSS_UNSUBSCRIBE_MSG#"/>
        </div>
    </div>
</div>

<div class="rn_PageContent rn_Product">
    <div class="rn_Container">
        <rn:widget path="navigation/VisualProductCategorySelector" show_sub_items_for="#rn:url_param_value:p#" numbered_pagination="true"/>
    </div>

    <div class="rn_PopularKB">
        <div class="rn_Container">
            <div class="rn_HeaderContainer">
                <h2>#rn:msg:POPULAR_PUBLISHED_ANSWERS_LBL#</h2>
                <rn:widget path="knowledgebase/RssIcon" />
            </div>
            <rn:widget path="reports/TopAnswers" show_excerpt="true" per_page="10" product_filter_id="#rn:url_param_value:p#"/>
            <a class="rn_AnswersLink" href="/app/answers/list/p/#rn:url_param_value:p#/#rn:session#">#rn:msg:SHOW_MORE_PUBLISHED_ANSWERS_FOR_LBL# <rn:field name="ServiceProduct.Name"/></a>
        </div>
    </div>

    <div class="rn_PopularSocial">
        <div class="rn_Container">
            <div class="rn_HeaderContainer">
                <h2>#rn:msg:RECENT_COMMUNITY_DISCUSSIONS_LBL#</h2>
                <rn:widget path="knowledgebase/RssIcon" feed_title="#rn:msg:COMMUNITY_RSS_FEED_LBL#" object_type="SocialQuestion" prodcat_type="Product"/>
            </div>
            <rn:widget path="discussion/RecentlyAnsweredQuestions" product_filter="#rn:url_param_value:p#"/>
            <a class="rn_DiscussionsLink" href="/app/social/questions/list/kw/*/p/#rn:url_param_value:p#/#rn:session#">#rn:msg:SHOW_MORE_COMMUNITY_DISCUSSIONS_FOR_LBL# <rn:field name="ServiceProduct.Name"/></a>
        </div>
    </div>
</div>

<?php endif; ?>


