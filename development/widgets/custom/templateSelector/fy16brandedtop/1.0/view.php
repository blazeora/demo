<link rel="stylesheet" href="/euf/assets/themes/global_branding.css">
	<div id="rn_Window">
		<rn:widget path="custom/Branding/BrandingHeader" />
		<div id="rn_Container" class="rn_ThemeLight">
			<rn:condition hide_on_pages="landing, products/list, products/detail, checkout, payment, payment_confirm">
				<div id="rn_NavigationBar">
					<div>
                    	<a id="togglemenu"href="javascript:void(0)"><img src="images/mobilemenu.png" alt="" />Menu</a>
						<ul id="rn_MainNav">
							<li class="title"><a href="/app/home">#rn:msg:SUPPORT_HOME_TAB_HDG#</a></li>
							<li><a href="/app/answers/list">#rn:msg:ANSWERS_HDG#</a></li>
							<li><a href="/app/ask">#rn:msg:ASK_QUESTION_HDG#</a></li>
							<!-- 
								Uncomment for language selection menu
								<rn:widget path="custom/fy15/LanguageSelector" />
							-->
							<rn:condition config_check="MOD_CHAT_ENABLED == true">
                            	<li class="rn_MobileChatLink"><a href="/app/chat/mobile_chat_launch">#rn:msg:LIVE_CHAT_LBL#</a></li>
								<li class="rn_DesktopChatLink"><a href="/app/chat/chat_launch">#rn:msg:LIVE_CHAT_LBL#</a></li>
							</rn:condition>
						</ul>
						<ul class="right" id="rn_UserMenu_Wrapper">
							<li id="rn_UserMenu" class="dropdown">
								<rn:condition logged_in="true">
									<rn:widget path="custom/fy15/UserMenu" />
								<rn:condition_else />
									<rn:widget path="custom/fy15/LoginButton" />
                                    <rn:widget path="login/LoginDialog" trigger_element="rn_LoginLink" open_login_providers="yahoo"/>
								</rn:condition>
							</li>
						</ul>
					</div>
				</div>				
								
			</rn:condition>
			<div id="rn_Page">
				<rn:condition hide_on_pages="landing, products/list, products/detail, checkout, payment, payment_confirm,  account/questions/list,social/moderate/comment,social/moderate/question,social/moderate/user">
					<div id="rn_PageContent">
				<rn:condition_else />
					<div id="rn_FullPageContent">
				</rn:condition>