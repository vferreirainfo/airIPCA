// Ajaxify
// v1.0.1 - 30 September, 2012
// https://github.com/browserstate/ajaxify
(function(window,undefined){
	
	// Prepare our Variables
	var
		History = window.History,
		$ = window.jQuery,
		document = window.document;

	// Check to see if History.js is enabled for our Browser
	if ( !History.enabled ) {
		return false;
	}

	// Wait for Document
	$(function(){
		// Prepare Variables
		var
			/* Application Specific Variables */
			contentSelector = '#content',
			$content = $(contentSelector).filter(':first'),
			contentNode = $content.get(0),
			$menu = $('.navbar-vertical').filter(':first'),
			activeClass = 'current-menu-item current_page_item current-menu-ancestor current-menu-parent',
			activeSelector = '.current-menu-item,.current_page_item,.current-menu-ancestor,.current-menu-parent',
			menuChildrenSelector = '> li,> ul > li,> ul > li > ul,>ul > li > ul > li',
			completedEventName = 'statechangecomplete',
			/* Application Generic Variables */
			$window = $(window),
			$body = $(document.body),
			rootUrl = History.getRootUrl(),
			tmq_siteURL = "http://" + top.location.host.toString(),
			scrollOptions = {
				duration: 800,
				easing:'swing'
			};
		
		// Ensure Content
		if ( $content.length === 0 ) {
			$content = $body;
		}
		
		// Internal Helper
		$.expr[':'].internal = function(obj, index, meta, stack){
			// Prepare
			var
				$this = $(obj),
				url = $this.attr('href')||'',
				isInternalLink;
			
			// Check link
			isInternalLink = url.substring(0,rootUrl.length) === rootUrl || url.indexOf(':') === -1;
			
			// Ignore or Keep
			return isInternalLink;
		};
		
		// HTML Helper
		var documentHtml = function(html){
			// Prepare
			var result = String(html)
				.replace(/<\!DOCTYPE[^>]*>/i, '')
				.replace(/<(html|head|body|title|meta)([\s\>])/gi,'<div class="document-$1"$2')
				.replace(/<\/(html|head|body|title|meta)\>/gi,'</div>')
			;
			
			// Return
			return $.trim(result);
		};
		
		// Ajaxify Helper
		$.fn.ajaxify = function(){
			// Prepare
			var $this = $(this);
			
			// Ajaxify
			// $this.find('a:internal:not(.no-ajaxy)').click(function(event){
			//var tmq_siteURL = "http://" + top.location.host.toString();
			var $ajaxable_elements = '.navbar-vertical';
			if ( tmq_ajax_data['tmq_ajax_footer'] == 'on' ) { 
				$ajaxable_elements += ',footer';
			}
			if ( tmq_ajax_data['tmq_ajax_paginations'] == 'on' ) { 
				$ajaxable_elements += ',.page-numbers';
			}
			if ( tmq_ajax_data['tmq_ajax_blog_posts'] == 'on' ) { 
				$ajaxable_elements += ',.news-item';
			}
			if ( tmq_ajax_data['tmq_ajax_portfolio'] == 'on' ) { 
				$ajaxable_elements += ',.portfolio-box';
			}
			if ( tmq_ajax_data['tmq_ajax_breadcrumb'] == 'on' ) { 
				$ajaxable_elements += ',.breadcrumb';
			}
			jQuery($ajaxable_elements).find('a[href^="'+tmq_siteURL+'"], a[href^="/"], a[href^="./"], a[href^="../"], a[href^="#"]').click(function(event){
				// Prepare
				if ( $(this).hasClass('zoom') ) {
					return true;
				}
				
				var
					$this = $(this),
					url = $this.attr('href'),
					title = $this.attr('title')||null;
				
				// Continue as normal for cmd clicks etc
				if ( event.which == 2 || event.metaKey || event.ctrlKey ) { return true; }
				
				// Ajaxify this link
				History.pushState(null,title,url);
				event.preventDefault();
				return false;
			});
			
			// Chain
			return $this;
		};
		
		// Ajaxify our Internal Links
		$body.ajaxify();
		
		// Hook into State Changes
		$window.bind('statechange',function(){
			// Prepare Variables
			var
				State = History.getState(),
				url = State.url,
				relativeUrl = url.replace(rootUrl,'');

			// Set Loading
			$body.addClass('loading');

			// Start Fade Out
			// Animating to opacity to 0 still keeps the element's height intact
			// Which prevents that annoying pop bang issue when loading in new content
			//$content.animate({opacity:0},800);
			var $tmq_current_menu_top = jQuery('header').css('left');
			var $tmq_current_top_line = jQuery('.top-line').css('margin-top');
			
			jQuery('.tmq_loading_container').fadeIn();
			jQuery('#content').animate({'opacity': 0}, 500, 'linear');
			jQuery('header').animate({'opacity': 0}, 500, 'linear', function() {
				jQuery('.top-line').animate({'margin-top': -45}, 200, 'linear' );
			});
			
			// Ajax Request the Traditional Page
			$.ajax({
				url: url,
				success: function(data, textStatus, jqXHR){
					// Prepare
					var
						$data = $(documentHtml(data)),
						$dataBody = $data.find('.document-body:first'),
						$dataContent = $dataBody.find(contentSelector).filter(':first'),
						$menuChildren, contentHtml, $scripts;
					
					// Fetch the scripts
					$scripts = $dataContent.find('script');
					if ( $scripts.length ) {
						$scripts.detach();
					}

					// Fetch the content
					contentHtml = $dataContent.html()||$data.html();
					if ( !contentHtml ) {
						document.location.href = url;
						return false;
					}

					// Update the menu
					$menuChildren = $menu.find(menuChildrenSelector);
					$menuChildren.filter(activeSelector).removeClass(activeClass);
					$menuChildren = $menuChildren.has('a[href^="'+relativeUrl+'"],a[href^="/'+relativeUrl+'"],a[href^="'+url+'"]');
					if ( $menuChildren.length === 1 ) { $menuChildren.addClass(activeClass);}
					// $menuChildren.each(function() {
						// //if ($(this).find('a:first').attr('href') == url ) {
							// $(this).addClass(activeClass);
						// //}
					// });

					// Update the content
					$content.stop(true,true);
					$content.html(contentHtml).ajaxify(); //.css('opacity',1).show(); /* you could fade in here if you'd like */
					jQuery('.tmq_loading_container').fadeOut();
					jQuery('header').animate({'opacity': 1}, 0, 'linear' );
					jQuery('.top-line').animate({'margin-top': $tmq_current_top_line}, 200, 'linear', function() {
						jQuery('#content').animate({'opacity': 1}, 500, 'linear', function() { 
							try {
								tmq_init_scripts();
								init_flexslider();
								init_magnificPopup();
								init_staff();
								init_headscroll();
								init_Ajax();
								tmq_waypoints();
								// init_ToggleBar(); // We don't need this
								jQuery('.navbar-vertical').removeClass('active');
								if ( tmq_ajax_data['tmq_ajax_scroll'] == 'on' ) { 
									htmBody = $('html, body');
									htmBody.animate({scrollTop: 0});
								}								
							} catch(err) {
								console.log(err);
							}
						});
					});						

					// Update the title
					document.title = $data.find('.document-title:first').text();
					try {
						document.getElementsByTagName('title')[0].innerHTML = document.title.replace('<','&lt;').replace('>','&gt;').replace(' & ',' &amp; ');
					}
					catch ( Exception ) { }
					
					// Add the scripts
					$scripts.each(function(){
						var $script = $(this), scriptText = $script.text(), scriptNode = document.createElement('script');
						if ( $script.attr('src') ) {
							if ( !$script[0].async ) { scriptNode.async = false; }
							scriptNode.src = $script.attr('src');
						}
    						scriptNode.appendChild(document.createTextNode(scriptText));
						contentNode.appendChild(scriptNode);
					});

					// Complete the change
					if ( $body.ScrollTo||false ) { $body.ScrollTo(scrollOptions); } /* http://balupton.com/projects/jquery-scrollto */
					$body.removeClass('loading');
					$window.trigger(completedEventName);
	
					// Inform Google Analytics of the change
					if ( typeof window._gaq !== 'undefined' ) {
						window._gaq.push(['_trackPageview', relativeUrl]);
					}

					// Inform ReInvigorate of a state change
					if ( typeof window.reinvigorate !== 'undefined' && typeof window.reinvigorate.ajax_track !== 'undefined' ) {
						reinvigorate.ajax_track(url);
						// ^ we use the full url here as that is what reinvigorate supports
					}
				},
				error: function(jqXHR, textStatus, errorThrown){
					document.location.href = url;
					return false;
				}
			}); // end ajax

		}); // end onStateChange

	}); // end onDomLoad

})(window); // end closure