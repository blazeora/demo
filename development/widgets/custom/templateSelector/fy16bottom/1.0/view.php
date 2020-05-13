</div>
				<rn:condition hide_on_pages="landing, products/list, products/detail, checkout, payment, payment_confirm,    account/questions/list,public_profile,social/moderate/comment,social/moderate/question,social/moderate/user">
					<div id="rn_Sidebar">
                    	<rn:condition show_on_pages="answers/detail">
                        	<div id="rn_SidebarSearch" class="rn_Card">
                            	<h4>Search</h4>
                                <div class="rn_Padding">
                    				<rn:widget path="search/SimpleSearch" />
                                </div>
                           	</div>
                        </rn:condition>
						<div id="rn_FeaturedAnswer" class="rn_Card">
							<rn:widget path="custom/fy15/FeaturedAnswer" />
						</div>
						<rn:condition hide_on_pages="social/home,social/ask">
						<div id="rn_SidebarNavigation" class="rn_Card">
							<rn:widget path="custom/fy15/SidebarNavigation" show_aaq="true" show_chat="true" show_community="true" show_c2c="true" />
                       </rn:condition>
                       <rn:condition show_on_pages="answers/detail">
                        <div class="rn_Card">
                        	<h4>Answers others found helpful</h4>
                            <div class="rn_Padding" id="rn_helpfulanswers">
                        		<rn:widget path="knowledgebase/RelatedAnswers"  label_title=""/>
                            </div>
                        </div>
                        </rn:condition>
                        <rn:condition show_on_pages="social/questions/detail,community,social/home">
                        	<div class="rn_Card">
								<h4>Ask the Community</h4>
								<div class="rn_Padding" id="rn_helpfulanswers">
									<a href="/app/social/ask">Ask Now</a>
								</div>
							</div>
                        	<div class="rn_Card">
								<h4>Recently Viewed</h4>
								<div class="rn_Padding" id="rn_helpfulanswers">
									<rn:widget path="discussion/RecentlyViewedContent"  label_heading=""/>
								</div>
							</div>
                       		<div class="rn_Card">
								<h4>My Discussions</h4>
								<div class="rn_Padding" style="padding-top:0px!important;">
									<rn:widget path="reports/Multiline" static_filter="User=#rn:profile:socialUserID#" label_caption="" hide_columns="sss_questions.created" per_page="4" report_id="15156"/>
								</div>
							</div>
                       
                        </rn:condition>	
                        <rn:condition show_on_pages="social/home,community">
                        	<div class="rn_Card">
								<h4>Twitter Talk</h4>
								<rn:widget path="utils/TwitterPosts"
								 twitter_account="OracleServCloud"/>
							</div>
                        </rn:condition>		
                        <div id="rn_OracleLogo">
                            <rn:widget path="utils/OracleLogo" />
                        </div>	
                   </div>
				</rn:condition>	
                <rn:condition show_on_pages="public_profile">
                	<rn:widget path="custom/fy15/CommunitySidebar" />
                </rn:condition>
			</div>
		</div>       
		<rn:widget path="custom/fy15/SpacesFooter" />
		<rn:widget path="custom/fy15/LoginModal" />
		<rn:widget path="custom/fy15/CoBrowsePremium" />
		<rn:widget path="chat/ProactiveChat" initiate_by_event="true" min_agents_avail="0" />
		<div id="SpacContainerDiv" style="position: absolute; z-index: 10000;"><div id="SpacDiv"></div></div>
	</div>