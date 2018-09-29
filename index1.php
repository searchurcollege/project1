<?php
    include('connection/dbconnect.php');
 ?>
<html>
<head>
<?php 
include('connection/header.php');
?>


	 <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
	 <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 200,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
				
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1861;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    
     <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 057 css*/
        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 073 css*/
        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
        .jssora073:hover {opacity:.8;}
        .jssora073.jssora073dn {opacity:.4;}
        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
    </style>
	
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118318912-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118318912-1');
</script>
</head>
<body>

 	<script type="text/javascript">
	

(function(factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD
		define(['jquery'], factory);
	} else if (typeof module === 'object' && typeof module.exports === 'object') {
		// CommonJS
		module.exports = factory(require('jquery'));
	} else {
		// Global jQuery
		factory(jQuery);
	}
} (function($) {

	var menuTrees = [],
		IE = !!window.createPopup, // detect it for the iframe shim
		mouse = false, // optimize for touch by default - we will detect for mouse input
		touchEvents = 'ontouchstart' in window, // we use this just to choose between toucn and pointer events, not for touch screen detection
		mouseDetectionEnabled = false,
		requestAnimationFrame = window.requestAnimationFrame || function(callback) { return setTimeout(callback, 1000 / 60); },
		cancelAnimationFrame = window.cancelAnimationFrame || function(id) { clearTimeout(id); };

	// Handle detection for mouse input (i.e. desktop browsers, tablets with a mouse, etc.)
	function initMouseDetection(disable) {
		var eNS = '.smartmenus_mouse';
		if (!mouseDetectionEnabled && !disable) {
			// if we get two consecutive mousemoves within 2 pixels from each other and within 300ms, we assume a real mouse/cursor is present
			// in practice, this seems like impossible to trick unintentianally with a real mouse and a pretty safe detection on touch devices (even with older browsers that do not support touch events)
			var firstTime = true,
				lastMove = null;
			$(document).bind(getEventsNS([
				['mousemove', function(e) {
					var thisMove = { x: e.pageX, y: e.pageY, timeStamp: new Date().getTime() };
					if (lastMove) {
						var deltaX = Math.abs(lastMove.x - thisMove.x),
							deltaY = Math.abs(lastMove.y - thisMove.y);
	 					if ((deltaX > 0 || deltaY > 0) && deltaX <= 2 && deltaY <= 2 && thisMove.timeStamp - lastMove.timeStamp <= 300) {
							mouse = true;
							// if this is the first check after page load, check if we are not over some item by chance and call the mouseenter handler if yes
							if (firstTime) {
								var $a = $(e.target).closest('a');
								if ($a.is('a')) {
									$.each(menuTrees, function() {
										if ($.contains(this.$root[0], $a[0])) {
											this.itemEnter({ currentTarget: $a[0] });
											return false;
										}
									});
								}
								firstTime = false;
							}
						}
					}
					lastMove = thisMove;
				}],
				[touchEvents ? 'touchstart' : 'pointerover pointermove pointerout MSPointerOver MSPointerMove MSPointerOut', function(e) {
					if (isTouchEvent(e.originalEvent)) {
						mouse = false;
					}
				}]
			], eNS));
			mouseDetectionEnabled = true;
		} else if (mouseDetectionEnabled && disable) {
			$(document).unbind(eNS);
			mouseDetectionEnabled = false;
		}
	}

	function isTouchEvent(e) {
		return !/^(4|mouse)$/.test(e.pointerType);
	}

	// returns a jQuery bind() ready object
	function getEventsNS(defArr, eNS) {
		if (!eNS) {
			eNS = '';
		}
		var obj = {};
		$.each(defArr, function(index, value) {
			obj[value[0].split(' ').join(eNS + ' ') + eNS] = value[1];
		});
		return obj;
	}

	$.SmartMenus = function(elm, options) {
		this.$root = $(elm);
		this.opts = options;
		this.rootId = ''; // internal
		this.accessIdPrefix = '';
		this.$subArrow = null;
		this.activatedItems = []; // stores last activated A's for each level
		this.visibleSubMenus = []; // stores visible sub menus UL's (might be in no particular order)
		this.showTimeout = 0;
		this.hideTimeout = 0;
		this.scrollTimeout = 0;
		this.clickActivated = false;
		this.focusActivated = false;
		this.zIndexInc = 0;
		this.idInc = 0;
		this.$firstLink = null; // we'll use these for some tests
		this.$firstSub = null; // at runtime so we'll cache them
		this.disabled = false;
		this.$disableOverlay = null;
		this.$touchScrollingSub = null;
		this.cssTransforms3d = 'perspective' in elm.style || 'webkitPerspective' in elm.style;
		this.wasCollapsible = false;
		this.init();
	};


	$.extend($.SmartMenus, {
		hideAll: function() {
			$.each(menuTrees, function() {
				this.menuHideAll();
			});
		},
		destroy: function() {
			while (menuTrees.length) {
				menuTrees[0].destroy();
			}
			initMouseDetection(true);
		},
		prototype: {
			init: function(refresh) {
				var self = this;

				if (!refresh) {
					menuTrees.push(this);

					this.rootId = (new Date().getTime() + Math.random() + '').replace(/\D/g, '');
					this.accessIdPrefix = 'sm-' + this.rootId + '-';

					if (this.$root.hasClass('sm-rtl')) {
						this.opts.rightToLeftSubMenus = true;
					}

					// init root (main menu)
					var eNS = '.smartmenus';
					this.$root
						.data('smartmenus', this)
						.attr('data-smartmenus-id', this.rootId)
						.dataSM('level', 1)
						.bind(getEventsNS([
							['mouseover focusin', $.proxy(this.rootOver, this)],
							['mouseout focusout', $.proxy(this.rootOut, this)],
							['keydown', $.proxy(this.rootKeyDown, this)]
						], eNS))
						.delegate('a', getEventsNS([
							['mouseenter', $.proxy(this.itemEnter, this)],
							['mouseleave', $.proxy(this.itemLeave, this)],
							['mousedown', $.proxy(this.itemDown, this)],
							['focus', $.proxy(this.itemFocus, this)],
							['blur', $.proxy(this.itemBlur, this)],
							['click', $.proxy(this.itemClick, this)]
						], eNS));

					// hide menus on tap or click outside the root UL
					eNS += this.rootId;
					if (this.opts.hideOnClick) {
						$(document).bind(getEventsNS([
							['touchstart', $.proxy(this.docTouchStart, this)],
							['touchmove', $.proxy(this.docTouchMove, this)],
							['touchend', $.proxy(this.docTouchEnd, this)],
							// for Opera Mobile < 11.5, webOS browser, etc. we'll check click too
							['click', $.proxy(this.docClick, this)]
						], eNS));
					}
					// hide sub menus on resize
					$(window).bind(getEventsNS([['resize orientationchange', $.proxy(this.winResize, this)]], eNS));

					if (this.opts.subIndicators) {
						this.$subArrow = $('<span/>').addClass('sub-arrow');
						if (this.opts.subIndicatorsText) {
							this.$subArrow.html(this.opts.subIndicatorsText);
						}
					}

					// make sure mouse detection is enabled
					initMouseDetection();
				}

				// init sub menus
				this.$firstSub = this.$root.find('ul').each(function() { self.menuInit($(this)); }).eq(0);

				this.$firstLink = this.$root.find('a').eq(0);

				// find current item
				if (this.opts.markCurrentItem) {
					var reDefaultDoc = /(index|default)\.[^#\?\/]*/i,
						reHash = /#.*/,
						locHref = window.location.href.replace(reDefaultDoc, ''),
						locHrefNoHash = locHref.replace(reHash, '');
					this.$root.find('a').each(function() {
						var href = this.href.replace(reDefaultDoc, ''),
							$this = $(this);
						if (href == locHref || href == locHrefNoHash) {
							$this.addClass('current');
							if (self.opts.markCurrentTree) {
								$this.parentsUntil('[data-smartmenus-id]', 'ul').each(function() {
									$(this).dataSM('parent-a').addClass('current');
								});
							}
						}
					});
				}

				// save initial state
				this.wasCollapsible = this.isCollapsible();
			},
			destroy: function(refresh) {
				if (!refresh) {
					var eNS = '.smartmenus';
					this.$root
						.removeData('smartmenus')
						.removeAttr('data-smartmenus-id')
						.removeDataSM('level')
						.unbind(eNS)
						.undelegate(eNS);
					eNS += this.rootId;
					$(document).unbind(eNS);
					$(window).unbind(eNS);
					if (this.opts.subIndicators) {
						this.$subArrow = null;
					}
				}
				this.menuHideAll();
				var self = this;
				this.$root.find('ul').each(function() {
						var $this = $(this);
						if ($this.dataSM('scroll-arrows')) {
							$this.dataSM('scroll-arrows').remove();
						}
						if ($this.dataSM('shown-before')) {
							if (self.opts.subMenusMinWidth || self.opts.subMenusMaxWidth) {
								$this.css({ width: '', minWidth: '', maxWidth: '' }).removeClass('sm-nowrap');
							}
							if ($this.dataSM('scroll-arrows')) {
								$this.dataSM('scroll-arrows').remove();
							}
							$this.css({ zIndex: '', top: '', left: '', marginLeft: '', marginTop: '', display: '' });
						}
						if (($this.attr('id') || '').indexOf(self.accessIdPrefix) == 0) {
							$this.removeAttr('id');
						}
					})
					.removeDataSM('in-mega')
					.removeDataSM('shown-before')
					.removeDataSM('ie-shim')
					.removeDataSM('scroll-arrows')
					.removeDataSM('parent-a')
					.removeDataSM('level')
					.removeDataSM('beforefirstshowfired')
					.removeAttr('role')
					.removeAttr('aria-hidden')
					.removeAttr('aria-labelledby')
					.removeAttr('aria-expanded');
				this.$root.find('a.has-submenu').each(function() {
						var $this = $(this);
						if ($this.attr('id').indexOf(self.accessIdPrefix) == 0) {
							$this.removeAttr('id');
						}
					})
					.removeClass('has-submenu')
					.removeDataSM('sub')
					.removeAttr('aria-haspopup')
					.removeAttr('aria-controls')
					.removeAttr('aria-expanded')
					.closest('li').removeDataSM('sub');
				if (this.opts.subIndicators) {
					this.$root.find('span.sub-arrow').remove();
				}
				if (this.opts.markCurrentItem) {
					this.$root.find('a.current').removeClass('current');
				}
				if (!refresh) {
					this.$root = null;
					this.$firstLink = null;
					this.$firstSub = null;
					if (this.$disableOverlay) {
						this.$disableOverlay.remove();
						this.$disableOverlay = null;
					}
					menuTrees.splice($.inArray(this, menuTrees), 1);
				}
			},
			disable: function(noOverlay) {
				if (!this.disabled) {
					this.menuHideAll();
					// display overlay over the menu to prevent interaction
					if (!noOverlay && !this.opts.isPopup && this.$root.is(':visible')) {
						var pos = this.$root.offset();
						this.$disableOverlay = $('<div class="sm-jquery-disable-overlay"/>').css({
							position: 'absolute',
							top: pos.top,
							left: pos.left,
							width: this.$root.outerWidth(),
							height: this.$root.outerHeight(),
							zIndex: this.getStartZIndex(true),
							opacity: 0
						}).appendTo(document.body);
					}
					this.disabled = true;
				}
			},
			docClick: function(e) {
				if (this.$touchScrollingSub) {
					this.$touchScrollingSub = null;
					return;
				}
				// hide on any click outside the menu or on a menu link
				if (this.visibleSubMenus.length && !$.contains(this.$root[0], e.target) || $(e.target).is('a')) {
					this.menuHideAll();
				}
			},
			docTouchEnd: function(e) {
				if (!this.lastTouch) {
					return;
				}
				if (this.visibleSubMenus.length && (this.lastTouch.x2 === undefined || this.lastTouch.x1 == this.lastTouch.x2) && (this.lastTouch.y2 === undefined || this.lastTouch.y1 == this.lastTouch.y2) && (!this.lastTouch.target || !$.contains(this.$root[0], this.lastTouch.target))) {
					if (this.hideTimeout) {
						clearTimeout(this.hideTimeout);
						this.hideTimeout = 0;
					}
					// hide with a delay to prevent triggering accidental unwanted click on some page element
					var self = this;
					this.hideTimeout = setTimeout(function() { self.menuHideAll(); }, 350);
				}
				this.lastTouch = null;
			},
			docTouchMove: function(e) {
				if (!this.lastTouch) {
					return;
				}
				var touchPoint = e.originalEvent.touches[0];
				this.lastTouch.x2 = touchPoint.pageX;
				this.lastTouch.y2 = touchPoint.pageY;
			},
			docTouchStart: function(e) {
				var touchPoint = e.originalEvent.touches[0];
				this.lastTouch = { x1: touchPoint.pageX, y1: touchPoint.pageY, target: touchPoint.target };
			},
			enable: function() {
				if (this.disabled) {
					if (this.$disableOverlay) {
						this.$disableOverlay.remove();
						this.$disableOverlay = null;
					}
					this.disabled = false;
				}
			},
			getClosestMenu: function(elm) {
				var $closestMenu = $(elm).closest('ul');
				while ($closestMenu.dataSM('in-mega')) {
					$closestMenu = $closestMenu.parent().closest('ul');
				}
				return $closestMenu[0] || null;
			},
			getHeight: function($elm) {
				return this.getOffset($elm, true);
			},
			// returns precise width/height float values
			getOffset: function($elm, height) {
				var old;
				if ($elm.css('display') == 'none') {
					old = { position: $elm[0].style.position, visibility: $elm[0].style.visibility };
					$elm.css({ position: 'absolute', visibility: 'hidden' }).show();
				}
				var box = $elm[0].getBoundingClientRect && $elm[0].getBoundingClientRect(),
					val = box && (height ? box.height || box.bottom - box.top : box.width || box.right - box.left);
				if (!val && val !== 0) {
					val = height ? $elm[0].offsetHeight : $elm[0].offsetWidth;
				}
				if (old) {
					$elm.hide().css(old);
				}
				return val;
			},
			getStartZIndex: function(root) {
				var zIndex = parseInt(this[root ? '$root' : '$firstSub'].css('z-index'));
				if (!root && isNaN(zIndex)) {
					zIndex = parseInt(this.$root.css('z-index'));
				}
				return !isNaN(zIndex) ? zIndex : 1;
			},
			getTouchPoint: function(e) {
				return e.touches && e.touches[0] || e.changedTouches && e.changedTouches[0] || e;
			},
			getViewport: function(height) {
				var name = height ? 'Height' : 'Width',
					val = document.documentElement['client' + name],
					val2 = window['inner' + name];
				if (val2) {
					val = Math.min(val, val2);
				}
				return val;
			},
			getViewportHeight: function() {
				return this.getViewport(true);
			},
			getViewportWidth: function() {
				return this.getViewport();
			},
			getWidth: function($elm) {
				return this.getOffset($elm);
			},
			handleEvents: function() {
				return !this.disabled && this.isCSSOn();
			},
			handleItemEvents: function($a) {
				return this.handleEvents() && !this.isLinkInMegaMenu($a);
			},
			isCollapsible: function() {
				return this.$firstSub.css('position') == 'static';
			},
			isCSSOn: function() {
				return this.$firstLink.css('display') == 'block';
			},
			isFixed: function() {
				var isFixed = this.$root.css('position') == 'fixed';
				if (!isFixed) {
					this.$root.parentsUntil('body').each(function() {
						if ($(this).css('position') == 'fixed') {
							isFixed = true;
							return false;
						}
					});
				}
				return isFixed;
			},
			isLinkInMegaMenu: function($a) {
				return $(this.getClosestMenu($a[0])).hasClass('mega-menu');
			},
			isTouchMode: function() {
				return !mouse || this.opts.noMouseOver || this.isCollapsible();
			},
			itemActivate: function($a, focus) {
				var $ul = $a.closest('ul'),
					level = $ul.dataSM('level');
				// if for some reason the parent item is not activated (e.g. this is an API call to activate the item), activate all parent items first
				if (level > 1 && (!this.activatedItems[level - 2] || this.activatedItems[level - 2][0] != $ul.dataSM('parent-a')[0])) {
					var self = this;
					$($ul.parentsUntil('[data-smartmenus-id]', 'ul').get().reverse()).add($ul).each(function() {
						self.itemActivate($(this).dataSM('parent-a'));
					});
				}
				// hide any visible deeper level sub menus
				if (!this.isCollapsible() || focus) {
					this.menuHideSubMenus(!this.activatedItems[level - 1] || this.activatedItems[level - 1][0] != $a[0] ? level - 1 : level);
				}
				// save new active item for this level
				this.activatedItems[level - 1] = $a;
				if (this.$root.triggerHandler('activate.smapi', $a[0]) === false) {
					return;
				}
				// show the sub menu if this item has one
				var $sub = $a.dataSM('sub');
				if ($sub && (this.isTouchMode() || (!this.opts.showOnClick || this.clickActivated))) {
					this.menuShow($sub);
				}
			},
			itemBlur: function(e) {
				var $a = $(e.currentTarget);
				if (!this.handleItemEvents($a)) {
					return;
				}
				this.$root.triggerHandler('blur.smapi', $a[0]);
			},
			itemClick: function(e) {
				var $a = $(e.currentTarget);
				if (!this.handleItemEvents($a)) {
					return;
				}
				if (this.$touchScrollingSub && this.$touchScrollingSub[0] == $a.closest('ul')[0]) {
					this.$touchScrollingSub = null;
					e.stopPropagation();
					return false;
				}
				if (this.$root.triggerHandler('click.smapi', $a[0]) === false) {
					return false;
				}
				var subArrowClicked = $(e.target).is('span.sub-arrow'),
					$sub = $a.dataSM('sub'),
					firstLevelSub = $sub ? $sub.dataSM('level') == 2 : false;
				// if the sub is not visible
				if ($sub && !$sub.is(':visible')) {
					if (this.opts.showOnClick && firstLevelSub) {
						this.clickActivated = true;
					}
					// try to activate the item and show the sub
					this.itemActivate($a);
					// if "itemActivate" showed the sub, prevent the click so that the link is not loaded
					// if it couldn't show it, then the sub menus are disabled with an !important declaration (e.g. via mobile styles) so let the link get loaded
					if ($sub.is(':visible')) {
						this.focusActivated = true;
						return false;
					}
				} else if (this.isCollapsible() && subArrowClicked) {
					this.itemActivate($a);
					this.menuHide($sub);
					return false;
				}
				if (this.opts.showOnClick && firstLevelSub || $a.hasClass('disabled') || this.$root.triggerHandler('select.smapi', $a[0]) === false) {
					return false;
				}
			},
			itemDown: function(e) {
				var $a = $(e.currentTarget);
				if (!this.handleItemEvents($a)) {
					return;
				}
				$a.dataSM('mousedown', true);
			},
			itemEnter: function(e) {
				var $a = $(e.currentTarget);
				if (!this.handleItemEvents($a)) {
					return;
				}
				if (!this.isTouchMode()) {
					if (this.showTimeout) {
						clearTimeout(this.showTimeout);
						this.showTimeout = 0;
					}
					var self = this;
					this.showTimeout = setTimeout(function() { self.itemActivate($a); }, this.opts.showOnClick && $a.closest('ul').dataSM('level') == 1 ? 1 : this.opts.showTimeout);
				}
				this.$root.triggerHandler('mouseenter.smapi', $a[0]);
			},
			itemFocus: function(e) {
				var $a = $(e.currentTarget);
				if (!this.handleItemEvents($a)) {
					return;
				}
				// fix (the mousedown check): in some browsers a tap/click produces consecutive focus + click events so we don't need to activate the item on focus
				if (this.focusActivated && (!this.isTouchMode() || !$a.dataSM('mousedown')) && (!this.activatedItems.length || this.activatedItems[this.activatedItems.length - 1][0] != $a[0])) {
					this.itemActivate($a, true);
				}
				this.$root.triggerHandler('focus.smapi', $a[0]);
			},
			itemLeave: function(e) {
				var $a = $(e.currentTarget);
				if (!this.handleItemEvents($a)) {
					return;
				}
				if (!this.isTouchMode()) {
					$a[0].blur();
					if (this.showTimeout) {
						clearTimeout(this.showTimeout);
						this.showTimeout = 0;
					}
				}
				$a.removeDataSM('mousedown');
				this.$root.triggerHandler('mouseleave.smapi', $a[0]);
			},
			menuHide: function($sub) {
				if (this.$root.triggerHandler('beforehide.smapi', $sub[0]) === false) {
					return;
				}
				$sub.stop(true, true);
				if ($sub.css('display') != 'none') {
					var complete = function() {
						// unset z-index
						$sub.css('z-index', '');
					};
					// if sub is collapsible (mobile view)
					if (this.isCollapsible()) {
						if (this.opts.collapsibleHideFunction) {
							this.opts.collapsibleHideFunction.call(this, $sub, complete);
						} else {
							$sub.hide(this.opts.collapsibleHideDuration, complete);
						}
					} else {
						if (this.opts.hideFunction) {
							this.opts.hideFunction.call(this, $sub, complete);
						} else {
							$sub.hide(this.opts.hideDuration, complete);
						}
					}
					// remove IE iframe shim
					if ($sub.dataSM('ie-shim')) {
						$sub.dataSM('ie-shim').remove().css({ '-webkit-transform': '', transform: '' });
					}
					// deactivate scrolling if it is activated for this sub
					if ($sub.dataSM('scroll')) {
						this.menuScrollStop($sub);
						$sub.css({ 'touch-action': '', '-ms-touch-action': '', '-webkit-transform': '', transform: '' })
							.unbind('.smartmenus_scroll').removeDataSM('scroll').dataSM('scroll-arrows').hide();
					}
					// unhighlight parent item + accessibility
					$sub.dataSM('parent-a').removeClass('highlighted').attr('aria-expanded', 'false');
					$sub.attr({
						'aria-expanded': 'false',
						'aria-hidden': 'true'
					});
					var level = $sub.dataSM('level');
					this.activatedItems.splice(level - 1, 1);
					this.visibleSubMenus.splice($.inArray($sub, this.visibleSubMenus), 1);
					this.$root.triggerHandler('hide.smapi', $sub[0]);
				}
			},
			menuHideAll: function() {
				if (this.showTimeout) {
					clearTimeout(this.showTimeout);
					this.showTimeout = 0;
				}
				// hide all subs
				// if it's a popup, this.visibleSubMenus[0] is the root UL
				var level = this.opts.isPopup ? 1 : 0;
				for (var i = this.visibleSubMenus.length - 1; i >= level; i--) {
					this.menuHide(this.visibleSubMenus[i]);
				}
				// hide root if it's popup
				if (this.opts.isPopup) {
					this.$root.stop(true, true);
					if (this.$root.is(':visible')) {
						if (this.opts.hideFunction) {
							this.opts.hideFunction.call(this, this.$root);
						} else {
							this.$root.hide(this.opts.hideDuration);
						}
						// remove IE iframe shim
						if (this.$root.dataSM('ie-shim')) {
							this.$root.dataSM('ie-shim').remove();
						}
					}
				}
				this.activatedItems = [];
				this.visibleSubMenus = [];
				this.clickActivated = false;
				this.focusActivated = false;
				// reset z-index increment
				this.zIndexInc = 0;
				this.$root.triggerHandler('hideAll.smapi');
			},
			menuHideSubMenus: function(level) {
				for (var i = this.activatedItems.length - 1; i >= level; i--) {
					var $sub = this.activatedItems[i].dataSM('sub');
					if ($sub) {
						this.menuHide($sub);
					}
				}
			},
			menuIframeShim: function($ul) {
				// create iframe shim for the menu
				if (IE && this.opts.overlapControlsInIE && !$ul.dataSM('ie-shim')) {
					$ul.dataSM('ie-shim', $('<iframe/>').attr({ src: 'javascript:0', tabindex: -9 })
						.css({ position: 'absolute', top: 'auto', left: '0', opacity: 0, border: '0' })
					);
				}
			},
			menuInit: function($ul) {
				if (!$ul.dataSM('in-mega')) {
					// mark UL's in mega drop downs (if any) so we can neglect them
					if ($ul.hasClass('mega-menu')) {
						$ul.find('ul').dataSM('in-mega', true);
					}
					// get level (much faster than, for example, using parentsUntil)
					var level = 2,
						par = $ul[0];
					while ((par = par.parentNode.parentNode) != this.$root[0]) {
						level++;
					}
					// cache stuff for quick access
					var $a = $ul.prevAll('a').eq(-1);
					// if the link is nested (e.g. in a heading)
					if (!$a.length) {
						$a = $ul.prevAll().find('a').eq(-1);
					}
					$a.addClass('has-submenu').dataSM('sub', $ul);
					$ul.dataSM('parent-a', $a)
						.dataSM('level', level)
						.parent().dataSM('sub', $ul);
					// accessibility
					var aId = $a.attr('id') || this.accessIdPrefix + (++this.idInc),
						ulId = $ul.attr('id') || this.accessIdPrefix + (++this.idInc);
					$a.attr({
						id: aId,
						'aria-haspopup': 'true',
						'aria-controls': ulId,
						'aria-expanded': 'false'
					});
					$ul.attr({
						id: ulId,
						'role': 'group',
						'aria-hidden': 'true',
						'aria-labelledby': aId,
						'aria-expanded': 'false'
					});
					// add sub indicator to parent item
					if (this.opts.subIndicators) {
						$a[this.opts.subIndicatorsPos](this.$subArrow.clone());
					}
				}
			},
			menuPosition: function($sub) {
				var $a = $sub.dataSM('parent-a'),
					$li = $a.closest('li'),
					$ul = $li.parent(),
					level = $sub.dataSM('level'),
					subW = this.getWidth($sub),
					subH = this.getHeight($sub),
					itemOffset = $a.offset(),
					itemX = itemOffset.left,
					itemY = itemOffset.top,
					itemW = this.getWidth($a),
					itemH = this.getHeight($a),
					$win = $(window),
					winX = $win.scrollLeft(),
					winY = $win.scrollTop(),
					winW = this.getViewportWidth(),
					winH = this.getViewportHeight(),
					horizontalParent = $ul.parent().is('[data-sm-horizontal-sub]') || level == 2 && !$ul.hasClass('sm-vertical'),
					rightToLeft = this.opts.rightToLeftSubMenus && !$li.is('[data-sm-reverse]') || !this.opts.rightToLeftSubMenus && $li.is('[data-sm-reverse]'),
					subOffsetX = level == 2 ? this.opts.mainMenuSubOffsetX : this.opts.subMenusSubOffsetX,
					subOffsetY = level == 2 ? this.opts.mainMenuSubOffsetY : this.opts.subMenusSubOffsetY,
					x, y;
				if (horizontalParent) {
					x = rightToLeft ? itemW - subW - subOffsetX : subOffsetX;
					y = this.opts.bottomToTopSubMenus ? -subH - subOffsetY : itemH + subOffsetY;
				} else {
					x = rightToLeft ? subOffsetX - subW : itemW - subOffsetX;
					y = this.opts.bottomToTopSubMenus ? itemH - subOffsetY - subH : subOffsetY;
				}
				if (this.opts.keepInViewport) {
					var absX = itemX + x,
						absY = itemY + y;
					if (rightToLeft && absX < winX) {
						x = horizontalParent ? winX - absX + x : itemW - subOffsetX;
					} else if (!rightToLeft && absX + subW > winX + winW) {
						x = horizontalParent ? winX + winW - subW - absX + x : subOffsetX - subW;
					}
					if (!horizontalParent) {
						if (subH < winH && absY + subH > winY + winH) {
							y += winY + winH - subH - absY;
						} else if (subH >= winH || absY < winY) {
							y += winY - absY;
						}
					}
					// do we need scrolling?
					// 0.49 used for better precision when dealing with float values
					if (horizontalParent && (absY + subH > winY + winH + 0.49 || absY < winY) || !horizontalParent && subH > winH + 0.49) {
						var self = this;
						if (!$sub.dataSM('scroll-arrows')) {
							$sub.dataSM('scroll-arrows', $([$('<span class="scroll-up"><span class="scroll-up-arrow"></span></span>')[0], $('<span class="scroll-down"><span class="scroll-down-arrow"></span></span>')[0]])
								.bind({
									mouseenter: function() {
										$sub.dataSM('scroll').up = $(this).hasClass('scroll-up');
										self.menuScroll($sub);
									},
									mouseleave: function(e) {
										self.menuScrollStop($sub);
										self.menuScrollOut($sub, e);
									},
									'mousewheel DOMMouseScroll': function(e) { e.preventDefault(); }
								})
								.insertAfter($sub)
							);
						}
						// bind scroll events and save scroll data for this sub
						var eNS = '.smartmenus_scroll';
						$sub.dataSM('scroll', {
								y: this.cssTransforms3d ? 0 : y - itemH,
								step: 1,
								// cache stuff for faster recalcs later
								itemH: itemH,
								subH: subH,
								arrowDownH: this.getHeight($sub.dataSM('scroll-arrows').eq(1))
							})
							.bind(getEventsNS([
								['mouseover', function(e) { self.menuScrollOver($sub, e); }],
								['mouseout', function(e) { self.menuScrollOut($sub, e); }],
								['mousewheel DOMMouseScroll', function(e) { self.menuScrollMousewheel($sub, e); }]
							], eNS))
							.dataSM('scroll-arrows').css({ top: 'auto', left: '0', marginLeft: x + (parseInt($sub.css('border-left-width')) || 0), width: subW - (parseInt($sub.css('border-left-width')) || 0) - (parseInt($sub.css('border-right-width')) || 0), zIndex: $sub.css('z-index') })
								.eq(horizontalParent && this.opts.bottomToTopSubMenus ? 0 : 1).show();
						// when a menu tree is fixed positioned we allow scrolling via touch too
						// since there is no other way to access such long sub menus if no mouse is present
						if (this.isFixed()) {
							$sub.css({ 'touch-action': 'none', '-ms-touch-action': 'none' })
								.bind(getEventsNS([
									[touchEvents ? 'touchstart touchmove touchend' : 'pointerdown pointermove pointerup MSPointerDown MSPointerMove MSPointerUp', function(e) {
										self.menuScrollTouch($sub, e);
									}]
								], eNS));
						}
					}
				}
				$sub.css({ top: 'auto', left: '0', marginLeft: x, marginTop: y - itemH });
				// IE iframe shim
				this.menuIframeShim($sub);
				if ($sub.dataSM('ie-shim')) {
					$sub.dataSM('ie-shim').css({ zIndex: $sub.css('z-index'), width: subW, height: subH, marginLeft: x, marginTop: y - itemH });
				}
			},
			menuScroll: function($sub, once, step) {
				var data = $sub.dataSM('scroll'),
					$arrows = $sub.dataSM('scroll-arrows'),
					end = data.up ? data.upEnd : data.downEnd,
					diff;
				if (!once && data.momentum) {
					data.momentum *= 0.92;
					diff = data.momentum;
					if (diff < 0.5) {
						this.menuScrollStop($sub);
						return;
					}
				} else {
					diff = step || (once || !this.opts.scrollAccelerate ? this.opts.scrollStep : Math.floor(data.step));
				}
				// hide any visible deeper level sub menus
				var level = $sub.dataSM('level');
				if (this.activatedItems[level - 1] && this.activatedItems[level - 1].dataSM('sub') && this.activatedItems[level - 1].dataSM('sub').is(':visible')) {
					this.menuHideSubMenus(level - 1);
				}
				data.y = data.up && end <= data.y || !data.up && end >= data.y ? data.y : (Math.abs(end - data.y) > diff ? data.y + (data.up ? diff : -diff) : end);
				$sub.add($sub.dataSM('ie-shim')).css(this.cssTransforms3d ? { '-webkit-transform': 'translate3d(0, ' + data.y + 'px, 0)', transform: 'translate3d(0, ' + data.y + 'px, 0)' } : { marginTop: data.y });
				// show opposite arrow if appropriate
				if (mouse && (data.up && data.y > data.downEnd || !data.up && data.y < data.upEnd)) {
					$arrows.eq(data.up ? 1 : 0).show();
				}
				// if we've reached the end
				if (data.y == end) {
					if (mouse) {
						$arrows.eq(data.up ? 0 : 1).hide();
					}
					this.menuScrollStop($sub);
				} else if (!once) {
					if (this.opts.scrollAccelerate && data.step < this.opts.scrollStep) {
						data.step += 0.2;
					}
					var self = this;
					this.scrollTimeout = requestAnimationFrame(function() { self.menuScroll($sub); });
				}
			},
			menuScrollMousewheel: function($sub, e) {
				if (this.getClosestMenu(e.target) == $sub[0]) {
					e = e.originalEvent;
					var up = (e.wheelDelta || -e.detail) > 0;
					if ($sub.dataSM('scroll-arrows').eq(up ? 0 : 1).is(':visible')) {
						$sub.dataSM('scroll').up = up;
						this.menuScroll($sub, true);
					}
				}
				e.preventDefault();
			},
			menuScrollOut: function($sub, e) {
				if (mouse) {
					if (!/^scroll-(up|down)/.test((e.relatedTarget || '').className) && ($sub[0] != e.relatedTarget && !$.contains($sub[0], e.relatedTarget) || this.getClosestMenu(e.relatedTarget) != $sub[0])) {
						$sub.dataSM('scroll-arrows').css('visibility', 'hidden');
					}
				}
			},
			menuScrollOver: function($sub, e) {
				if (mouse) {
					if (!/^scroll-(up|down)/.test(e.target.className) && this.getClosestMenu(e.target) == $sub[0]) {
						this.menuScrollRefreshData($sub);
						var data = $sub.dataSM('scroll'),
							upEnd = $(window).scrollTop() - $sub.dataSM('parent-a').offset().top - data.itemH;
						$sub.dataSM('scroll-arrows').eq(0).css('margin-top', upEnd).end()
							.eq(1).css('margin-top', upEnd + this.getViewportHeight() - data.arrowDownH).end()
							.css('visibility', 'visible');
					}
				}
			},
			menuScrollRefreshData: function($sub) {
				var data = $sub.dataSM('scroll'),
					upEnd = $(window).scrollTop() - $sub.dataSM('parent-a').offset().top - data.itemH;
				if (this.cssTransforms3d) {
					upEnd = -(parseFloat($sub.css('margin-top')) - upEnd);
				}
				$.extend(data, {
					upEnd: upEnd,
					downEnd: upEnd + this.getViewportHeight() - data.subH
				});
			},
			menuScrollStop: function($sub) {
				if (this.scrollTimeout) {
					cancelAnimationFrame(this.scrollTimeout);
					this.scrollTimeout = 0;
					$sub.dataSM('scroll').step = 1;
					return true;
				}
			},
			menuScrollTouch: function($sub, e) {
				e = e.originalEvent;
				if (isTouchEvent(e)) {
					var touchPoint = this.getTouchPoint(e);
					// neglect event if we touched a visible deeper level sub menu
					if (this.getClosestMenu(touchPoint.target) == $sub[0]) {
						var data = $sub.dataSM('scroll');
						if (/(start|down)$/i.test(e.type)) {
							if (this.menuScrollStop($sub)) {
								// if we were scrolling, just stop and don't activate any link on the first touch
								e.preventDefault();
								this.$touchScrollingSub = $sub;
							} else {
								this.$touchScrollingSub = null;
							}
							// update scroll data since the user might have zoomed, etc.
							this.menuScrollRefreshData($sub);
							// extend it with the touch properties
							$.extend(data, {
								touchStartY: touchPoint.pageY,
								touchStartTime: e.timeStamp
							});
						} else if (/move$/i.test(e.type)) {
							var prevY = data.touchY !== undefined ? data.touchY : data.touchStartY;
							if (prevY !== undefined && prevY != touchPoint.pageY) {
								this.$touchScrollingSub = $sub;
								var up = prevY < touchPoint.pageY;
								// changed direction? reset...
								if (data.up !== undefined && data.up != up) {
									$.extend(data, {
										touchStartY: touchPoint.pageY,
										touchStartTime: e.timeStamp
									});
								}
								$.extend(data, {
									up: up,
									touchY: touchPoint.pageY
								});
								this.menuScroll($sub, true, Math.abs(touchPoint.pageY - prevY));
							}
							e.preventDefault();
						} else { // touchend/pointerup
							if (data.touchY !== undefined) {
								if (data.momentum = Math.pow(Math.abs(touchPoint.pageY - data.touchStartY) / (e.timeStamp - data.touchStartTime), 2) * 15) {
									this.menuScrollStop($sub);
									this.menuScroll($sub);
									e.preventDefault();
								}
								delete data.touchY;
							}
						}
					}
				}
			},
			menuShow: function($sub) {
				if (!$sub.dataSM('beforefirstshowfired')) {
					$sub.dataSM('beforefirstshowfired', true);
					if (this.$root.triggerHandler('beforefirstshow.smapi', $sub[0]) === false) {
						return;
					}
				}
				if (this.$root.triggerHandler('beforeshow.smapi', $sub[0]) === false) {
					return;
				}
				$sub.dataSM('shown-before', true)
					.stop(true, true);
				if (!$sub.is(':visible')) {
					// highlight parent item
					var $a = $sub.dataSM('parent-a');
					if (this.opts.keepHighlighted || this.isCollapsible()) {
						$a.addClass('highlighted');
					}
					if (this.isCollapsible()) {
						$sub.removeClass('sm-nowrap').css({ zIndex: '', width: 'auto', minWidth: '', maxWidth: '', top: '', left: '', marginLeft: '', marginTop: '' });
					} else {
						// set z-index
						$sub.css('z-index', this.zIndexInc = (this.zIndexInc || this.getStartZIndex()) + 1);
						// min/max-width fix - no way to rely purely on CSS as all UL's are nested
						if (this.opts.subMenusMinWidth || this.opts.subMenusMaxWidth) {
							$sub.css({ width: 'auto', minWidth: '', maxWidth: '' }).addClass('sm-nowrap');
							if (this.opts.subMenusMinWidth) {
							 	$sub.css('min-width', this.opts.subMenusMinWidth);
							}
							if (this.opts.subMenusMaxWidth) {
							 	var noMaxWidth = this.getWidth($sub);
							 	$sub.css('max-width', this.opts.subMenusMaxWidth);
								if (noMaxWidth > this.getWidth($sub)) {
									$sub.removeClass('sm-nowrap').css('width', this.opts.subMenusMaxWidth);
								}
							}
						}
						this.menuPosition($sub);
						// insert IE iframe shim
						if ($sub.dataSM('ie-shim')) {
							$sub.dataSM('ie-shim').insertBefore($sub);
						}
					}
					var complete = function() {
						// fix: "overflow: hidden;" is not reset on animation complete in jQuery < 1.9.0 in Chrome when global "box-sizing: border-box;" is used
						$sub.css('overflow', '');
					};
					// if sub is collapsible (mobile view)
					if (this.isCollapsible()) {
						if (this.opts.collapsibleShowFunction) {
							this.opts.collapsibleShowFunction.call(this, $sub, complete);
						} else {
							$sub.show(this.opts.collapsibleShowDuration, complete);
						}
					} else {
						if (this.opts.showFunction) {
							this.opts.showFunction.call(this, $sub, complete);
						} else {
							$sub.show(this.opts.showDuration, complete);
						}
					}
					// accessibility
					$a.attr('aria-expanded', 'true');
					$sub.attr({
						'aria-expanded': 'true',
						'aria-hidden': 'false'
					});
					// store sub menu in visible array
					this.visibleSubMenus.push($sub);
					this.$root.triggerHandler('show.smapi', $sub[0]);
				}
			},
			popupHide: function(noHideTimeout) {
				if (this.hideTimeout) {
					clearTimeout(this.hideTimeout);
					this.hideTimeout = 0;
				}
				var self = this;
				this.hideTimeout = setTimeout(function() {
					self.menuHideAll();
				}, noHideTimeout ? 1 : this.opts.hideTimeout);
			},
			popupShow: function(left, top) {
				if (!this.opts.isPopup) {
					alert('SmartMenus jQuery Error:\n\nIf you want to show this menu via the "popupShow" method, set the isPopup:true option.');
					return;
				}
				if (this.hideTimeout) {
					clearTimeout(this.hideTimeout);
					this.hideTimeout = 0;
				}
				this.$root.dataSM('shown-before', true)
					.stop(true, true);
				if (!this.$root.is(':visible')) {
					this.$root.css({ left: left, top: top });
					// IE iframe shim
					this.menuIframeShim(this.$root);
					if (this.$root.dataSM('ie-shim')) {
						this.$root.dataSM('ie-shim').css({ zIndex: this.$root.css('z-index'), width: this.getWidth(this.$root), height: this.getHeight(this.$root), left: left, top: top }).insertBefore(this.$root);
					}
					// show menu
					var self = this,
						complete = function() {
							self.$root.css('overflow', '');
						};
					if (this.opts.showFunction) {
						this.opts.showFunction.call(this, this.$root, complete);
					} else {
						this.$root.show(this.opts.showDuration, complete);
					}
					this.visibleSubMenus[0] = this.$root;
				}
			},
			refresh: function() {
				this.destroy(true);
				this.init(true);
			},
			rootKeyDown: function(e) {
				if (!this.handleEvents()) {
					return;
				}
				switch (e.keyCode) {
					case 27: // reset on Esc
						var $activeTopItem = this.activatedItems[0];
						if ($activeTopItem) {
							this.menuHideAll();
							$activeTopItem[0].focus();
							var $sub = $activeTopItem.dataSM('sub');
							if ($sub) {
								this.menuHide($sub);
							}
						}
						break;
					case 32: // activate item's sub on Space
						var $target = $(e.target);
						if ($target.is('a') && this.handleItemEvents($target)) {
							var $sub = $target.dataSM('sub');
							if ($sub && !$sub.is(':visible')) {
								this.itemClick({ currentTarget: e.target });
								e.preventDefault();
							}
						}
						break;
				}
			},
			rootOut: function(e) {
				if (!this.handleEvents() || this.isTouchMode() || e.target == this.$root[0]) {
					return;
				}
				if (this.hideTimeout) {
					clearTimeout(this.hideTimeout);
					this.hideTimeout = 0;
				}
				if (!this.opts.showOnClick || !this.opts.hideOnClick) {
					var self = this;
					this.hideTimeout = setTimeout(function() { self.menuHideAll(); }, this.opts.hideTimeout);
				}
			},
			rootOver: function(e) {
				if (!this.handleEvents() || this.isTouchMode() || e.target == this.$root[0]) {
					return;
				}
				if (this.hideTimeout) {
					clearTimeout(this.hideTimeout);
					this.hideTimeout = 0;
				}
			},
			winResize: function(e) {
				if (!this.handleEvents()) {
					// we still need to resize the disable overlay if it's visible
					if (this.$disableOverlay) {
						var pos = this.$root.offset();
	 					this.$disableOverlay.css({
							top: pos.top,
							left: pos.left,
							width: this.$root.outerWidth(),
							height: this.$root.outerHeight()
						});
					}
					return;
				}
				// hide sub menus on resize - on mobile do it only on orientation change
				if (!('onorientationchange' in window) || e.type == 'orientationchange') {
					var isCollapsible = this.isCollapsible();
					// if it was collapsible before resize and still is, don't do it
					if (!(this.wasCollapsible && isCollapsible)) { 
						if (this.activatedItems.length) {
							this.activatedItems[this.activatedItems.length - 1][0].blur();
						}
						this.menuHideAll();
					}
					this.wasCollapsible = isCollapsible;
				}
			}
		}
	});

	$.fn.dataSM = function(key, val) {
		if (val) {
			return this.data(key + '_smartmenus', val);
		}
		return this.data(key + '_smartmenus');
	};

	$.fn.removeDataSM = function(key) {
		return this.removeData(key + '_smartmenus');
	};

	$.fn.smartmenus = function(options) {
		if (typeof options == 'string') {
			var args = arguments,
				method = options;
			Array.prototype.shift.call(args);
			return this.each(function() {
				var smartmenus = $(this).data('smartmenus');
				if (smartmenus && smartmenus[method]) {
					smartmenus[method].apply(smartmenus, args);
				}
			});
		}
		// [data-sm-options] attribute on the root UL
		var dataOpts = this.data('sm-options') || null;
		if (dataOpts) {
			try {
				dataOpts = eval('(' + dataOpts + ')');
			} catch(e) {
				dataOpts = null;
				alert('ERROR\n\nSmartMenus jQuery init:\nInvalid "data-sm-options" attribute value syntax.');
			};
		}
		return this.each(function() {
			new $.SmartMenus(this, $.extend({}, $.fn.smartmenus.defaults, options, dataOpts));
		});
	};

	// default settings
	$.fn.smartmenus.defaults = {
		isPopup:		false,		// is this a popup menu (can be shown via the popupShow/popupHide methods) or a permanent menu bar
		mainMenuSubOffsetX:	0,		// pixels offset from default position
		mainMenuSubOffsetY:	0,		// pixels offset from default position
		subMenusSubOffsetX:	0,		// pixels offset from default position
		subMenusSubOffsetY:	0,		// pixels offset from default position
		subMenusMinWidth:	'10em',		// min-width for the sub menus (any CSS unit) - if set, the fixed width set in CSS will be ignored
		subMenusMaxWidth:	'20em',		// max-width for the sub menus (any CSS unit) - if set, the fixed width set in CSS will be ignored
		subIndicators: 		true,		// create sub menu indicators - creates a SPAN and inserts it in the A
		subIndicatorsPos: 	'prepend',	// position of the SPAN relative to the menu item content ('prepend', 'append')
		subIndicatorsText:	'+',		// [optionally] add text in the SPAN (e.g. '+') (you may want to check the CSS for the sub indicators too)
		scrollStep: 		30,		// pixels step when scrolling long sub menus that do not fit in the viewport height
		scrollAccelerate:	true,		// accelerate scrolling or use a fixed step
		showTimeout:		250,		// timeout before showing the sub menus
		hideTimeout:		500,		// timeout before hiding the sub menus
		showDuration:		0,		// duration for show animation - set to 0 for no animation - matters only if showFunction:null
		showFunction:		null,		// custom function to use when showing a sub menu (the default is the jQuery 'show')
							// don't forget to call complete() at the end of whatever you do
							// e.g.: function($ul, complete) { $ul.fadeIn(250, complete); }
		hideDuration:		0,		// duration for hide animation - set to 0 for no animation - matters only if hideFunction:null
		hideFunction:		function($ul, complete) { $ul.fadeOut(200, complete); },	// custom function to use when hiding a sub menu (the default is the jQuery 'hide')
							// don't forget to call complete() at the end of whatever you do
							// e.g.: function($ul, complete) { $ul.fadeOut(250, complete); }
		collapsibleShowDuration:0,		// duration for show animation for collapsible sub menus - matters only if collapsibleShowFunction:null
		collapsibleShowFunction:function($ul, complete) { $ul.slideDown(200, complete); },	// custom function to use when showing a collapsible sub menu
							// (i.e. when mobile styles are used to make the sub menus collapsible)
		collapsibleHideDuration:0,		// duration for hide animation for collapsible sub menus - matters only if collapsibleHideFunction:null
		collapsibleHideFunction:function($ul, complete) { $ul.slideUp(200, complete); },	// custom function to use when hiding a collapsible sub menu
							// (i.e. when mobile styles are used to make the sub menus collapsible)
		showOnClick:		false,		// show the first-level sub menus onclick instead of onmouseover (i.e. mimic desktop app menus) (matters only for mouse input)
		hideOnClick:		true,		// hide the sub menus on click/tap anywhere on the page
		noMouseOver:		false,		// disable sub menus activation onmouseover (i.e. behave like in touch mode - use just mouse clicks) (matters only for mouse input)
		keepInViewport:		true,		// reposition the sub menus if needed to make sure they always appear inside the viewport
		keepHighlighted:	true,		// keep all ancestor items of the current sub menu highlighted (adds the 'highlighted' class to the A's)
		markCurrentItem:	false,		// automatically add the 'current' class to the A element of the item linking to the current URL
		markCurrentTree:	true,		// add the 'current' class also to the A elements of all ancestor items of the current item
		rightToLeftSubMenus:	false,		// right to left display of the sub menus (check the CSS for the sub indicators' position)
		bottomToTopSubMenus:	false,		// bottom to top display of the sub menus
		overlapControlsInIE:	true		// make sure sub menus appear on top of special OS controls in IE (i.e. SELECT, OBJECT, EMBED, etc.)
	};

	return $;
}));


(function(factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD
		define(['jquery', 'jquery.smartmenus'], factory);
	} else if (typeof module === 'object' && typeof module.exports === 'object') {
		// CommonJS
		module.exports = factory(require('jquery'));
	} else {
		// Global jQuery
		factory(jQuery);
	}
} (function($) {

	$.extend($.SmartMenus.Bootstrap = {}, {
		keydownFix: false,
		init: function() {
			// init all navbars that don't have the "data-sm-skip" attribute set
			var $navbars = $('ul.navbar-nav:not([data-sm-skip])');
			$navbars.each(function() {
				var $this = $(this),
					obj = $this.data('smartmenus');
				// if this navbar is not initialized
				if (!obj) {
					$this.smartmenus({

							// these are some good default options that should work for all
							// you can, of course, tweak these as you like
							subMenusSubOffsetX: 2,
							subMenusSubOffsetY: -6,
							subIndicators: false,
							collapsibleShowFunction: null,
							collapsibleHideFunction: null,
							rightToLeftSubMenus: $this.hasClass('navbar-right'),
							bottomToTopSubMenus: $this.closest('.navbar').hasClass('navbar-fixed-bottom')
						})
						.bind({
							// set/unset proper Bootstrap classes for some menu elements
							'show.smapi': function(e, menu) {
								var $menu = $(menu),
									$scrollArrows = $menu.dataSM('scroll-arrows');
								if ($scrollArrows) {
									// they inherit border-color from body, so we can use its background-color too
									$scrollArrows.css('background-color', $(document.body).css('background-color'));
								}
								$menu.parent().addClass('open');
							},
							'hide.smapi': function(e, menu) {
								$(menu).parent().removeClass('open');
							}
						});

					function onInit() {
						// set Bootstrap's "active" class to SmartMenus "current" items (should someone decide to enable markCurrentItem: true)
						$this.find('a.current').parent().addClass('active');
						// remove any Bootstrap required attributes that might cause conflicting issues with the SmartMenus script
						$this.find('a.has-submenu').each(function() {
							var $this = $(this);
							if ($this.is('[data-toggle="dropdown"]')) {
								$this.dataSM('bs-data-toggle-dropdown', true).removeAttr('data-toggle');
							}
							if ($this.is('[role="button"]')) {
								$this.dataSM('bs-role-button', true).removeAttr('role');
							}
						});
					}

					onInit();

					function onBeforeDestroy() {
						$this.find('a.current').parent().removeClass('active');
						$this.find('a.has-submenu').each(function() {
							var $this = $(this);
							if ($this.dataSM('bs-data-toggle-dropdown')) {
								$this.attr('data-toggle', 'dropdown').removeDataSM('bs-data-toggle-dropdown');
							}
							if ($this.dataSM('bs-role-button')) {
								$this.attr('role', 'button').removeDataSM('bs-role-button');
							}
						});
					}

					obj = $this.data('smartmenus');

					// custom "isCollapsible" method for Bootstrap
					obj.isCollapsible = function() {
						return !/^(left|right)$/.test(this.$firstLink.parent().css('float'));
					};

					// custom "refresh" method for Bootstrap
					obj.refresh = function() {
						$.SmartMenus.prototype.refresh.call(this);
						onInit();
						// update collapsible detection
						detectCollapsible(true);
					};


					// custom "destroy" method for Bootstrap
					obj.destroy = function(refresh) {
						onBeforeDestroy();
						$.SmartMenus.prototype.destroy.call(this, refresh);
					};

					// keep Bootstrap's default behavior for parent items when the "data-sm-skip-collapsible-behavior" attribute is set to the ul.navbar-nav
					// i.e. use the whole item area just as a sub menu toggle and don't customize the carets
					if ($this.is('[data-sm-skip-collapsible-behavior]')) {
						$this.bind({
							// click the parent item to toggle the sub menus (and reset deeper levels and other branches on click)
							'click.smapi': function(e, item) {
								if (obj.isCollapsible()) {
									var $item = $(item),
										$sub = $item.parent().dataSM('sub');
									if ($sub && $sub.dataSM('shown-before') && $sub.is(':visible')) {
										obj.itemActivate($item);
										obj.menuHide($sub);
										return false;
									}
								}
							}
						});
					}

					// onresize detect when the navbar becomes collapsible and add it the "sm-collapsible" class
					var winW;
					function detectCollapsible(force) {
						var newW = obj.getViewportWidth();
						if (newW != winW || force) {
							var $carets = $this.find('.caret');
							if (obj.isCollapsible()) {
								$this.addClass('sm-collapsible');
								// set "navbar-toggle" class to carets (so they look like a button) if the "data-sm-skip-collapsible-behavior" attribute is not set to the ul.navbar-nav
								if (!$this.is('[data-sm-skip-collapsible-behavior]')) {
									$carets.addClass('navbar-toggle sub-arrow');
								}
							} else {
								$this.removeClass('sm-collapsible');
								if (!$this.is('[data-sm-skip-collapsible-behavior]')) {
									$carets.removeClass('navbar-toggle sub-arrow');
								}
							}
							winW = newW;
						}
					}
					detectCollapsible();
					$(window).bind('resize.smartmenus' + obj.rootId, detectCollapsible);
				}
			});
			// keydown fix for Bootstrap 3.3.5+ conflict
			if ($navbars.length && !$.SmartMenus.Bootstrap.keydownFix) {
				// unhook BS keydown handler for all dropdowns
				$(document).off('keydown.bs.dropdown.data-api', '.dropdown-menu');
				// restore BS keydown handler for dropdowns that are not inside SmartMenus navbars
				if ($.fn.dropdown && $.fn.dropdown.Constructor) {
					$(document).on('keydown.bs.dropdown.data-api', '.dropdown-menu:not([id^="sm-"])', $.fn.dropdown.Constructor.prototype.keydown);
				}
				$.SmartMenus.Bootstrap.keydownFix = true;
			}
		}
	});

	// init ondomready
	$($.SmartMenus.Bootstrap.init);

	return $;
}));
	</script>
    
    	</script>
    
    <style>
    section.study-section {
    width: 100%;
    position: relative;
    background: #596F7C;
    height: auto;
    padding: 70px;
}

.thumbnail-section {
    display: block!important;
    width: 100%!important;
    background: #fff!important;
    margin-right: 15px!important;
    margin-left: 15px!important;
    height: auto!important;
    min-height: 245px!important;
    position: relative!important;
    padding: 0px!important;
    overflow: hidden!important;
    border: none!important;
}

@media only screen and (max-width: 600px) {
    
    #onestop{
        font-size: 18px!important;
    }
    </style>
    
<section class="slideshow-container">
        <div class="collage-search" style="margin-top: 100px;">
            <h1 align="center" id="onestop"><mark style="background-color: #FF9934; padding: 10px; color: white; opacity: 0.9; padding-left: 15px; padding-right: 15px; padding-top: 0px; padding-bottom: 3px;"><span class="Solution"><font style="color: #fff">One Stop Solution For Students</font></span></mark></h1><br><br>
        </div>
  <div class="mySlides">
          <img src="http://searchurcollege.com/frontassets/images/slide_new_a.jpg" alt="..." class="home-slides-pic" width="100%">
        </div>
        <div class="mySlides">
          <img src="http://searchurcollege.com/frontassets/images/slide_new_b.jpg" alt="..." class="home-slides-pic" width="100%">
        </div>
        <div class="mySlides">
          <img src="http://searchurcollege.com/frontassets/images/slide_new_c.jpg" alt="..." class="home-slides-pic" width="100%">
        </div>
        <div class="mySlides">
          <img src="http://searchurcollege.com/frontassets/images/slide_new_d.jpg" alt="..." class="home-slides-pic" width="100%">
        </div>
        <div class="dot-section">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
      </section>
	  
      <!-- end slide show banner -->
	 
	 
	 
	 
	 
     <div class="clearfix"></div>
      <section class="free-text">
        <div class="text-center free-text">
          <h3>Tests</h3>
        </div>
        <div class="free-box">
          <ul class="list-unstyled list-inline">
            <li>
              <div class="inside-img">
                <div class="img text-center"></div>
                <h3>Management</h3>
                <div class="link">
                  <ul class="list-inline list-unstyled">
                    <a class="drop" href="https://searchurcollege.com/test/test.php?id=1">Question Banks</a>    
                     <a class="drop" href="https://searchurcollege.com/test/test.php?id=1">Practice Set/</a><a href="https://searchurcollege.com/test/test.php?id=1">Course</a>
                    <!--<a href="http://searchurcollege.com/index.php/test/stream/mocktest">Mock</a>-->
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="inside-img">
                <div class="img text-center"></div>
                <h3>Engineering</h3>
                <div class="link">
                  <ul class="list-inline list-unstyled">
                   <a class="drop" href="https://searchurcollege.com/test/test.php?id=3">Question Banks</a>    
                     <a class="drop" href="https://searchurcollege.com/test/test.php?id=3">Practice Set/</a><a href="https://searchurcollege.com/test/test.php?id=3">Course</a>
                    <!--<a href="http://searchurcollege.com/index.php/test/stream/mocktest">Mock</a>-->
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="inside-img">
                <div class="img text-center"></div>
                <h3>Law</h3>
                <div class="link">
                  <ul class="list-inline list-unstyled">
                    <a class="drop" href="#">Question Banks</a>    
                     <a class="drop" href="#">Practice Set/</a><a href="#">Course</a>
                    <!--<a href="http://searchurcollege.com/index.php/test/stream/mocktest">Mock</a>-->
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="inside-img">
                <div class="img text-center"></div>
                <h3>Medical</h3>
                <div class="link">
                  <ul class="list-inline list-unstyled">
                    <a class="drop" href="https://searchurcollege.com/test/test.php?id=4">Question Banks</a>    
                     <a class="drop" href="https://searchurcollege.com/test/test.php?id=4">Practice Set/</a><a href="https://searchurcollege.com/test/test.php?id=4">Course</a>
                    <!--<a href="http://searchurcollege.com/index.php/test/stream/mocktest">Mock</a>-->
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="inside-img">
                <div class="img text-center"></div>
                <h3>IT & Software</h3>
                <div class="link">
                  <ul class="list-inline list-unstyled">
                    <a class="drop" href="#">Question Banks</a>    
                     <a class="drop" href="#">Practice Set/</a><a href="#">Course</a>
                    <!--<a href="http://searchurcollege.com/index.php/test/stream/mocktest">Mock</a>-->
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="inside-img">
                <div class="img text-center"></div>
                <h3>Design</h3>
                <div class="link">
                  <ul class="list-inline list-unstyled">
                    <a class="drop" href="#">Question Banks</a>    
                     <a class="drop" href="#">Practice Set/</a><a href="#">Course</a>
                    <!--<a href="http://searchurcollege.com/index.php/test/stream/mocktest">Mock</a>-->
                  </ul>
                </div>
              </div>
            </li>
            <li>
                <div class="inside-img">
                
                <!--<div class="img text-center"></div>-->
                      <div class="img text-center"></div>
                <h3>Hotel Management</h3>
                <div class="link">
                  <ul class="list-inline list-unstyled">
                    <a class="drop" href="#">Question Banks</a>    
                     <a class="drop" href="#">Practice Set/</a><a href="#">Course</a>
                    <!--<a href="http://searchurcollege.com/index.php/test/stream/mocktest">Mock</a>-->
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="inside-img">
                <div class="img text-center"></div>
                <h3>Others</h3>
                <div class="link">
                  <ul class="list-inline list-unstyled">
                    <a class="drop" href="#">Question Banks</a>    
                     <a class="drop" href="#">Practice Set/</a><a href="#">Course</a>
                    <!--<a href="http://searchurcollege.com/index.php/test/stream/mocktest">Mock</a>-->
                  </ul>
                </div>
              </div>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </section>


<section class="study-section">
        <div class="tab-pills">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#study-one">Study In India</a></li>
            <!--<li><a data-toggle="tab" href="#study-two">Study In Abroad</a></li>-->
          </ul>
        </div>
        <div class="tab-content">
        <div id="study-one" class="tab-pane fade in active">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="study-slider">
                <div id="Carousel" class="carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                    <li data-target="#Carousel" data-slide-to="3"></li>
                  </ol>
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="slide-one">
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-3.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>MBA</h3>
                           <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                          <!--<div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-2.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>Engineering</h3>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                         <!-- <div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <!-- end thubmnail section -->
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-1.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>LAW</h3>
                           <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                         <!-- <div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <!-- end thubmnail section -->
                      </div>
                      <!--slide-one-->
                    </div>
                    <!--.item-->
                    <div class="item">
                      <div class="slide-one">
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-4.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>Design</h3>
                           <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                          <!--<div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-5.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>Medical</h3>
                           <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                         <!-- <div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <!-- end thubmnail section -->
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-6.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>MCA</h3>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                         <!-- <div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <!-- end thubmnail section -->
                      </div>
                      <!--slide-one-->
                    </div>
                    <!--.item-->
                    <div class="item">
                      <div class="slide-one">
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-7.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>Hotel Management</h3>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                          <!--<div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-8.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>Media & Journalism</h3>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                         <!-- <div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <!-- end thubmnail section -->
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-9.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>Animation</h3>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                         <!-- <div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <!-- end thubmnail section -->
                      </div>
                      <!--slide-one-->
                    </div>
                    <!--.item-->
                    <div class="item">
                      <div class="slide-one">
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-10.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>Finance & Accounts</h3>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                          <!--<div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-11.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>Degree Courses</h3>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                          <!--<div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <!-- end thubmnail section -->
                        <div class="thumbnail-section">
                          <div class="img-slider">
                            <img src="img/slider-12.jpg" style="width: 100%">
                          </div>
                          <div class="slider-content">
                            <h3>Polytechnic</h3>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                          </div>
                          <!--<div class="view-btn">
                            <button class="btn btn-link">View Details</button>
                          </div>-->
                        </div>
                        <!-- end thubmnail section -->
                      </div>
                      <!--slide-one-->
                    </div>
                    <!--.item-->
                  </div>
                  <!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control"><img src="img/left-Arrow.png"></a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control"><img src="img/right-Arrow.png"></a>
                </div>
                <!--.Carousel-->
              </div>
            </div>
          </div>
          <!-- end study slider -->
        </div>
        <!--<div id="study-two" class="tab-pane fade">
          <div class="tab-content">
            <div id="study-one" class="tab-pane fade active in">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="study-slider">
                    <div id="Carousel-two" class="carousel slide">
                      <ol class="carousel-indicators">
                        <li data-target="#Carousel-two" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel-two" data-slide-to="1"></li>
                        <li data-target="#Carousel-two" data-slide-to="2"></li>
                        <li data-target="#Carousel-two" data-slide-to="3"></li>
                      </ol>
                      -- Carousel items --
                      <div class="carousel-inner">
                        <div class="item active">
                          <div class="slide-one">
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-13.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>USA</h3>
                                --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-14.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>Australia</h3>
                                 --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            -- end thubmnail section --
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-15.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>New Zealand</h3>
                                --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            -- end thubmnail section --
                          </div>
                          --slide-one--
                        </div>
                        --.item--
                        <div class="item">
                          <div class="slide-one">
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-16.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>Singapore</h3>
                               --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                             --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-17.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>Canada</h3>
                                --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            -- end thubmnail section --
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-18.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>United Kingdom</h3>
                                 --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            -- end thubmnail section --
                          </div>
                          --slide-one--
                        </div>
                        --.item--
                        <div class="item">
                          <div class="slide-one">
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-19.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>Spain</h3>
                                 --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-20.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>Georgia</h3>
                                 --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            -- end thubmnail section --
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-21.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>Germany</h3>
                                 --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            -- end thubmnail section --
                          </div>
                          --slide-one--
                        </div>
                        --.item--
                        <div class="item">
                          <div class="slide-one">
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-22.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>Netherlands</h3>
                                 --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-23.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>United Arab Emirates</h3>
                                --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            -- end thubmnail section --
                            <div class="thumbnail-section">
                              <div class="img-slider">
                                <img src="img/slider-24.jpg" style="width: 100%">
                              </div>
                              <div class="slider-content">
                                <h3>France</h3>
                                 --<p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>--
                              </div>
                              --<div class="view-btn">
                                <button class="btn btn-link">View Details</button>
                              </div>--
                            </div>
                            -- end thubmnail section --
                          </div>
                          --slide-one--
                        </div>
                        --.item--
                      </div>
                      --.carousel-inner--
                      <a data-slide="prev" href="#Carousel-two" class="left carousel-control"><img src="img/left-Arrow.png"></a>
                      <a data-slide="next" href="#Carousel-two" class="right carousel-control"><img src="img/right-Arrow.png"></a>
                    </div>
                    <!--.Carousel-->
                  </div>
                </div>
              </div>
              <!-- end study slider -->
            </div>
            <!--<div id="study-two" class="tab-pane fade">
              <h3>Menu 1</h3>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>-->
          </div>
        </div>
        <!-- end study-two -->
      </section>
      <!-- end study section -->

<div class="clearfix"></div>
      <section class="exam-section">
        <div class="text-center free-text">
          <h3>EXAMS</h3>
        </div>
        <div class="exam-tab">
          <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#exam-one">MBA</a></li>
            <li><a data-toggle="pill" href="#exam-two">LAW</a></li>
            <li><a data-toggle="pill" href="#exam-three">Engineering</a></li>
			<li><a data-toggle="pill" href="#exam-four">Design</a></li>
			<li><a data-toggle="pill" href="#exam-five">Medical</a></li>
			<!--<li><a data-toggle="pill" href="#exam-six">Others</a></li>-->
          </ul>
          <div class="tab-content">
            <div id="exam-one" class="tab-pane fade in active">
              <div class="exam-circle">
                <ul class="list-unstyled list-inline">
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/cat-details">cat</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/mat-details">mat</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/cmat-details">cmat</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/xat-details">xat</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/atma-details">atma</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
			   <div class="view-more">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                  <a href="http://searchurcollege.com/exams/mba-exams"><button class="btn btn-primary">View More Details &nbsp; <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>
                </div>
              </div>
            </div>
          </div>
              <!-- end exam circle -->
            </div>
            <div id="exam-two" class="tab-pane fade">
              <div class="exam-circle">
                <ul class="list-unstyled list-inline">
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/clat-details">clat</a></p>
                      </div>
                    </div>
                   <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/ailet-details">ailet</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/lsat-details">lsat</a></p>
                      </div>
                    </div>
                   <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/aclat-details">aclat</a></p>
                      </div>
                    </div>
                   <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/amuee-details">amuee</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
			   <div class="view-more">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                  <a href="http://searchurcollege.com/exams/law-exams"><button class="btn btn-primary">View More Details &nbsp; <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>
                </div>
              </div>
            </div>
          </div>
              <!-- end exam circle -->
            </div>
            <div id="exam-three" class="tab-pane fade">
              <div class="exam-circle">
                <ul class="list-unstyled list-inline">
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p align="center"><a href="http://searchurcollege.com/exams/jeemain-details">jee <br>main</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p align="center"><a href="http://searchurcollege.com/exams/jeeadv-details">jee<br>Advance</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/bitsat-details">bitsat</a></p>
                      </div>
                    </div>
                   <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/viteee-details">viteee</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/srmjeee-details">srmjeee</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
			   <div class="view-more">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                  <a href="http://searchurcollege.com/exams/engineering-exams"><button class="btn btn-primary">View More Details &nbsp; <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>
                </div>
              </div>
            </div>
          </div>
			 <!-- end exam circle -->
            </div>
            <div id="exam-four" class="tab-pane fade">
              <div class="exam-circle">
                <ul class="list-unstyled list-inline">
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/ceed-details">CEED</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/nidee-details">NIDEE</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/niftee-details">NIFTEE</a></p>
                      </div>
                    </div>
                   <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/uceed-details">UCEED</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/aicet-details">AICET</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
			   <div class="view-more">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                  <a href="http://searchurcollege.com/exams/design-exams"><button class="btn btn-primary">View More Details &nbsp; <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>
                </div>
              </div>
            </div>
          </div>
			  
               <!-- end exam circle -->
            </div>
            <div id="exam-five" class="tab-pane fade">
              <div class="exam-circle">
                <ul class="list-unstyled list-inline">
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/aiims-details">AIIMS</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/neet-details">NEET</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/jipmer-details">JIPMER</a></p>
                      </div>
                    </div>
                   <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/niper-details">NIPER</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                  <li>
                    <div class="over-circle">
                      <div class="circle-img">
                        <p><a href="http://searchurcollege.com/exams/afmc-details">AFMC</a></p>
                      </div>
                    </div>
                    <!--<p>Exam Date</p>
                    <h3>26<span class="th">th</span>April</h3>-->
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
			   <div class="view-more">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                  <a href="http://searchurcollege.com/exams/medical-exams"><button class="btn btn-primary">View More Details &nbsp; <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>
                </div>
              </div>
            </div>
          </div>
			  
              <!-- end exam circle -->
            </div>
    
      </section>
      <!-- end exam section -->
      
      
      <div class="clearfix"></div>
      <section class="feature-collage">
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="collage-slider">
              <div class="text-center free-text">
                <h3>Featured Colleges</h3>
              </div>
              
              <!--<section class="feature-collage">
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="collage-slider">
              <div class="text-center free-text">
                <h3>Featured Colleges</h3>
              </div>
              <div class="collage-slider">
                <div id="Carousel1" class="carousel slide">
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="slide-two">
                        <div class="thumbnail-section-one">
                          <div class="img-slider-one">
                            <img src="img/logo.3.png" style="max-width: 100%" alt="logo2">
                          </div>
                          <div class="slider-content-one">
                            <h3>Jaipuria School of Business </h3>
                            <div class="star">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            </div>
                          </div>
                        </div>
                        <!-- end thubmnail section -->
                        <!--<div class="thumbnail-section-one">
                          <div class="img-slider-one">
                            <img src="img/logo.2.png" style="max-width: 100%" alt="logo3">
                          </div>
                          <div class="slider-content-one">
                            <h3>Bharat Institute of Technology </h3>
                            <div class="star">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            </div>
                          </div>
                        </div>
                        <!-- end thubmnail section -->
                      <!--</div>-->
                      <!--slide-one-->
                    <!--</div>
                    <div class="item">
                      <div class="slide-two">
                        <div class="thumbnail-section-one">
                          <div class="img-slider-one">
                            <img src="img/logo.3.png" style="max-width: 100%" alt="logo2">
                          </div>
                          <div class="slider-content-one">
                            <h3>Jaipuria School of Business </h3>
                            <div class="star">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            </div>
                          </div>
                        </div>
                        <!-- end thubmnail section -->
                        <!--<div class="thumbnail-section-one">
                          <div class="img-slider-one">
                            <img src="img/logo.2.png" style="max-width: 100%" alt="logo3">
                          </div>
                          <div class="slider-content-one">
                            <h3>Bharat Institute of Technology </h3>
                            <div class="star">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            </div>
                          </div>
                        </div>
                        <!-- end thubmnail section -->
                      <!--</div>-->
                      <!--slide-one-->
                    <!--</div>-->
                    <!--.item-->
                  <!--</div>-->
                  <!--.carousel-inner-->
                  <!--<a data-slide="prev" href="#Carousel1" class="left carousel-control"><img src="img/Black-Arrow.png"></a>
                  <a data-slide="next" href="#Carousel1" class="right carousel-control"><img src="img/Black-right-Arrow.png"></a>
                </div>
                <!--.Carousel-->
              <!--</div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="have-question">
              <div class="text-center free-text">
                <h3>Have a Question ?</h3>
              </div>
              <div class="question-panel">
                <p>You have any Question <span class="color-red">*</span></p>
                <form>
                  <div class="form-group">
                    <textarea class="form-control" rows="4" id="have-question" placeholder="Need guidance on career and education?  Ask our experts" style="resize: none;"></textarea>
                  </div>
                   <a href="#" class="btn btn-primary" onClick="document.getElementById('id01').style.display='block'" >Ask Now</a>
                </form>
                <img src="img/image-2-png.png" style="max-width: 100% heigth: 55vh;">
              </div>
              <!-- end question panel -->
            <!--</div>
            <!-- end have question -->
          <!--</div>
        </div>
      </section>-->
              
              
              <?php include('featured-colleges.php'); ?>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="have-question">
              <div class="text-center free-text">
                <h3>Have a Question ?</h3>
              </div>
              <div class="question-panel">
                <p>You have any Question <span class="color-red">*</span></p>
                <form>
                  <div class="form-group">
                    <textarea class="form-control" rows="4" id="have-question" placeholder="Need guidance on career and education?  Ask our experts" style="resize: none;"></textarea>
                  </div>
                   <a href="#" class="btn btn-primary" style.display='block' data-toggle="modal" data-target="#id01" >Ask Now</a>
                </form>
                <img src="img/image-2-png.png" style="max-width: 100%; heigth: 55vh;" >
              </div>
              <!-- end question panel -->
            </div>
            <!-- end have question -->
          </div>
        </div>
      </section>
      <!--start feature-college -->
      
<div class="clearfix"></div>
      <section class="education-advice">
        <div class="text-center free-text">
          <h3>Education Advice</h3>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="get-value">
              <div class="get-text">
                <p>Get proper advice for your career from experience industries professionals, faculties, alumni & exam toppers to help you make the right decision to choose your dream college.</p>
                <button class="btn btn-primary" style.display='block' data-toggle="modal" data-target="#id01" >Get Advice <i class="fa fa-caret-right" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="get-img">
              <div class="get-value">
                <img src="img/image-1.png" class="img-reponsive">
              </div>
            </div>
          </div>
        </div>
        <!-- end row -->
      </section>
      <!-- end education-advice -->
      <section class="collage-counter">
        <ul class="list-unstyled">
          <li>
            <div class="counter">
              <h2 class="ttimer count-title count-number" data-to="3000" data-speed="500">3000+</h2>
              <p class="count-text ">Tests</p>
            </div>
          </li> 
          <li>
            <div class="counter">
              <h2 class="ttimer count-title count-number" data-to="45000"  data-speed="500">45000+</h2>
              <p class="count-text ">Practice Question</p>
            </div>
          </li>
          <li>
            <div class="counter">
              <h2 class="ttimer count-title count-number" data-to="10000" data-speed="500">10000+</h2>
              <p class="count-text ">COlleges</p>
            </div>
          </li>
          <li>
            <div class="counter">
              <h2 class="ttimer count-title count-number" data-to="8000" data-speed="500">8000+</h2>
              <p class="count-text ">QUESTION ANSWERED</p>
            </div>
          </li>
        </ul>
      </section>
       <!-- end college counter -->
      
      <!-- start artical panel -->
      <div class="clearfix"></div>
      <section class="article-panel">
      <div class="text-center free-text">
          <h3>Latest News & Articles </h3>
        </div>
        <div class="aricle-overlay">
          <div class="row">
      <?php
      $sql="SELECT id,title , image FROM `tbl_article` ORDER BY id DESC LIMIT 3" ;
      if($sql = $conn->prepare($sql)){
        $sql->execute();
        $sql->store_result();
        $sql->bind_result($id,$title,$img);
         while($sql->fetch()){
        ?>
         <div class="col-sm-4 col-md-4 col-xs-12">
              <div class="overlay-section">
                <div class="image-view">
                  <div class="news-img">
				  				  <table width="100%" border="1">
                          <tr>
                            <td><img class="col-xs-12" src="http://searchurcollege.com//uploads/<?php echo $img; ?>" style="width: 100%; min-height:100px;  alt="articles"></td>
                          </tr>
                        </table>
                  </div>
                  <div class="news-content">
				  <p><br /><font face="Arial, Helvetica, sans-serif" size="-1" color="#FF9900"><?php echo strip_tags($title)?></font></p>
				  <a href="artical.php?Aid=<?php echo $id; ?>"><h5>Read More</h5></a>
                    <!--<h3>Engineering</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesettin </p>-->
                  </div>
                </div>
                <!--<div class="overlay">
                  <div class="text-bg"><button class="btn btn-primary">View Details</button></div>
                </div>-->
              </div>
            </div> 
            <?php 
      }}
      
      
       ?>
       
        
            
           
            
          </div>
        </div>
        <div class="view-more">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="text-center">
               <a href="allartical.php"><button class="btn btn-primary">Articles <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end article panel -->
      <div class="clearfix"></div>
     
      
      

<?php
    include('footer.php');
?>


<script type="text/javascript"></script>
    




    <div class="clearfix"></div>
    <!-- end main section-->
    <!-- ...........custom js include here.............. -->
    <script type="text/javascript" src="js/SideShow.js"></script>
    <script type="text/javascript" src="js/counter.js"></script>
    <script>
      $(document).ready(function() {
        $('#Carousel,#Carousel,#Carousel-two').carousel({
         interval: false
        });
      });
      
    </script>
    
    
    	<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	
	
<script>
function showUrlInDialog(url){
  var tag = $("<div></div>");
  $.ajax({
    url: url,
    success: function(data) {
      tag.html(data).dialog({modal: true}).dialog('open');
    }
  });
}

</script>



<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #000000;
}

#regForm {
  background-color: #DDDDD3; 
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 40%;
  min-width: 100px;
 
 }

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

select {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
 }

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 100px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}


button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

@media only screen and (max-width: 600px) {
* {
  box-sizing: border-box;
}

body {
  background-color: #000000;
}

#regForm {
  background-color: #DDDDD3; 
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 90%;
  min-width: 100px;
 
 }

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 15px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

select {
  padding: 10px;
  width: 100%;
  font-size: 15px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
 }

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 100px;
  font-size: 15px;
  font-family: Raleway;
  cursor: pointer;
}


button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
}

</style>
<div id="id011" class="modal" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
        <div class="modal-body">
            <div class="row row-eq-height">
        		
                
        		<div id="col2" class="col-md-12" style="background: white; padding: 0px 40px 20px 40px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 style="color: #5D9BD0; text-align: center; margin-bottom: 10px;"><i class="fa fa-user fa-sm"></i> <b>Get In Touch</b></h3>
             
                    <form iid="frmRegister1" action="user_register.php">
                    	 <span class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <textarea  class="form-control" rows="4" cols="50" name="question" form="frmRegister" placeholder="Type Your Question Here"></textarea>
                        </span>

                        <span class="input-group">
                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                            <select id="L1" name="last_qualification" class="form-control" rrequired>
                                <option disabled selected>Last Qualification</option>
                                <?php
                                    include_once('functions.php');
                                    include_once('dbconnect.php');
                                    $result=selectCourse();
                                    while($row=$result->fetch_assoc())
                                    {
                                        $id=$row['id'];
                                        echo '<option value="'.$id.'">'.$row["course_master_name"].'</option>';
                                    }
                                ?>
                            </select>
                        </span>
                        <span class="input-group">
                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                            <input list="course_interested" id="L2" name="course_interested" class="form-control" placeholder="Course Looking for" rrequired />
                            <datalist id="course_interested">
                            </datalist>
                        </span>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control iinput-md" id="first_name" name="first_name" placeholder="First Name" rrequired />
                          <span class="input-group-addon" style="width: 0px;"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control input-md" id="last_name" name="last_name" placeholder="Last Name" rrequired />
                        </div>
                        <span class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" rrequired />
                        </span>
                        <span class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" name="password1" placeholder="Password" rrequired />
                       
                        
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" name="password2" placeholder="Confirm Password" rrequired />
                        </span>
                    </span>
                        <span class="input-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Contact No." rrequired />
                            </div>
                        </span>
                        <div class="input-group" style="margin-top: -10px;">
                            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                            <input id="myInput1" class="autocomplete form-control" type="text" id="city" name="current_location" placeholder="Current Location" rrequired />
                            <!--<input list="current_location" id="cl" name="current_location" class="form-control" placeholder="Current Location" rrequired />
                            <datalist id="current_location">
                                <?php
                                   include('dbconnect.php');
                                   $sql="SELECT * FROM location";
                                   $result=$conn->query($sql);
                                   while($row=$result->fetch_assoc())
                                   {
                                        $id=$row['id'];
                                        echo '<option value="'.$row["location_name"].'">'.$row["location_name"].'</option>';
                                   }
                                ?> 
                            </datalist>-->
                            
                       
                       
                            <span class="input-group-addon"><i class="fa fa-flag-checkered"></i></span>
                            <input id="myInput2" class="autocomplete form-control" type="text" name="preferred_location" placeholder="Preferred Location" rrequired />
                        </div>
                        <center><div style="ppadding: 0px;" class="g-recaptcha pull-right" data-sitekey="6LdkqGsUAAAAAHaGJsKsrkrvewL8eWH2U_xGOttR"></div></center>
                        <div class="col-md-12" style="padding: 0px;">
                        <div class="col-md-5">
                           </b>
                            <br /><a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal"><b></b></a>
                        </div>
                        <div class="col-md-7">
                            <div id="msg">
                                <span id="rsuccess" class="pull-right" style="display: none; color: green; margin-left: 10px; margin-top: 5px;"><i class="fa fa-smile-o" style="font-size:20px"></i> <span id="m1"></span></span>
                                <span id="rerror" class="pull-right" style="display: none; color: red; margin-left: 10px; margin-top: 7px;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span id="m2"></span></span>
                            </div>
                            <button id="sub" type="submit" class="btn btn-primary pull-right">Register</button>
                        </div>
                        <div id="regButton" class="col-md-4" style="display: none; background: #DE4313;">
                        </div>
                        </div>
                        <br /><br />
                    </form>
        		</div>
        		<div id="col3" class="col-md-12" style="display: none; color: black; background: transparent; z-index: 1000; padding: 0px 40px 20px 40px;">
                    <h3 style="color: #5D9BD0; margin-top: 20px;"><b><i class="fas fa-info-circle fa-lg"></i> Thanks for Registering with us</b>
                    <button type="button" id="pclose" class="close">&times;</button>
        
                    <span class="pull-right" ><small><b style="color: #DE4313; font-size: 20px;">3000 <img src="../img/eb.png" height="50" style="position: inline;" /> OFFER</b><b style="color: black; font-size: 22px;"> @ <i class="fa fa-inr"></i> 199/-
                    <br /><small class="pull-right" style="color: green;"><i class="fa fa-bell faa-ring animated"></i> HURRY, <font color="red" size="4"> 2880</font> Premium Accounts are left</small></b></span>
                    <br />
                    </h4>
                    </h3>
                    <br /><h4>Avail more benifits by Upgrading to a <b style="color: #5D9BD0;">Premium Member</b></h4>
                    <br /><br />
                    <table class="table stable-striped">
                            <tr style="background: gray; color: white;"><td width="45%" style="background: #F2F2F2; color: black; border: 0px; text-align: left;"><b>Checkout the benifits</b></td><td><b>Standard</b></td><td style="background: green"><b>Premium</b></td></tr>
                            <tr><td class="first">Top Colleges & Universities</td><td class="second"><img src="../img/tick.png" height="20" /></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                            <tr><td class="first">Eligibility & Admission</td><td class="second"><img src="../img/tick.png" height="20" /></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                            <tr><td class="first">College Rankings</td><td class="second"><img src="../img/tick.png" height="20" /></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                            <tr><td class="first">College Brochures</td><td class="second"><img src="../img/tick.png" height="20" /><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                            <?php
                                $a=5;
                                $c=5;
                                for($i=0;$i<sizeof($a);$i++)
                                {
                                    echo '<tr><td class="first">'.$a[$i].'</td><td class="second"></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>';
                                }
                                //echo '<tr><td colspan="2" class="first">Covering '.$c.' and many more...</td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>';
                                echo '<tr><td class="first">Covering '.$c.' and many more...</td><td class="second"></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>';
                            ?>
                            <tr><td class="first">Last 10 years question banks & solution of CAT, XAT, CMAT & others MBA exams</td><td></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                    <tr><td class="first">More 15000 questions</td><td></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                    <tr><td class="first">Minimum 10 sets of chapter wise practice test for each subject in MBA syllabus</td><td></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                    <tr><td class="first">Unlimited full length practice test</td><td></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                            <!--<tr><td class="first">365 Days Support</td><td></td><td><img src="../img/tick.png" height="20" /></td></tr>
                            <tr><td class="first">Career Guidance</td><td></td><td><img src="../img/tick.png" height="20" /></td></tr>-->
                    </table>
                    <center>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
		var e = new Date().getTime();
		document.getElementById("order_id").value = e;
	};
</script>
                	   <form method="POST" name="customerData" aaction="success.php" action="https://searchurcollege.com/connection/cca/ccavRequestHandler.php">
                            <!--<input type="hhidden" id="na" name="na" />
                            <input type="hhidden" id="ct" name="ct" />
                            <input type="hhidden" id="ph" name="ph" />
                            <input type="hhidden" id="em" name="em" />-->

                            <input type="hidden" name="tid" id="tid" readonly />
                            <input type="hidden" name="merchant_id" value="188437"/>
                            <input type="hidden" name="order_id" value="123654789"/>
                            <input type="hidden" name="amount" value="1"/>
                            <input type="hidden" name="currency" value="INR"/>
                            <input type="hidden" name="redirect_url" value="https://searchurcollege.com/demo/cca/ccavResponseHandler.php"/>
                            <input type="hidden" name="cancel_url" value="https://searchurcollege.com/demo/cca/ccavResponseHandler.php"/>
                            <input type="hidden" name="language" value="EN"/>
                            <input type="hidden" id="na" name="billing_name" />
                            <input type="hidden" id="ct" name="billing_city" />
                            <input type="hidden" id="ph" name="billing_tel" />
        		        	<input type="hidden" id="em" name="billing_email" />

                            <button type="submit" class="btn btn-primary btn-lg">PAY NOW</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
      </div>
    </div>
</div> 


<div id="id01" class="modal" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
        <div class="modal-body">
            <div class="row row-eq-height">
        		
                
        		<div id="col2" class="col-md-12" style="background: white; padding: 0px 40px 20px 40px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 style="color: #5D9BD0; text-align: center; margin-bottom: 10px;"><i class="fa fa-user fa-sm"></i> <b>Get In Touch</b></h3>
             
                    <form iid="frmRegister1" action="thankyou.php"method="post">
                      <span class="input-group">
                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                            <select id="L1" name="last_qualification" class="form-control" rrequired>
                                <option disabled selected>Last Qualification</option>
                                <?php
                                    include_once('functions.php');
                                    include_once('dbconnect.php');
                                    $result=selectCourse();
                                    while($row=$result->fetch_assoc())
                                    {
                                        $id=$row['id'];
                                        echo '<option value="'.$id.'">'.$row["course_master_name"].'</option>';
                                    }
                                ?>
                            </select>
                        </span>
                        <span class="input-group">
                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                            <input list="course_interested" id="L2" name="course_interested" class="form-control" placeholder="Course Looking for" required />
                            <datalist id="course_interested">
                            </datalist>
                        </span>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control iinput-md" id="first_name" name="first_name" placeholder="First Name" required />
                          <span class="input-group-addon" style="width: 0px;"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control input-md" id="last_name" name="last_name" placeholder="Last Name" required />
                        </div>
                        <span class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" required />
                        </span>
                        <span class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" name="password1" placeholder="Password" required />
                       
                        
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" name="password2" placeholder="Confirm Password" required />
                        </span>
                    </span>
                        <span class="input-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Contact No." required />
                            </div>
                        </span>
                        <div class="input-group" style="margin-top: -10px;">
                            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                            <input id="myInput1" class="autocomplete form-control" type="text" id="city" name="current_location" placeholder="Current Location" required />
                            <!--<input list="current_location" id="cl" name="current_location" class="form-control" placeholder="Current Location" rrequired />
                            <datalist id="current_location">
                                <?php
                                   include('dbconnect.php');
                                   $sql="SELECT * FROM location";
                                   $result=$conn->query($sql);
                                   while($row=$result->fetch_assoc())
                                   {
                                        $id=$row['id'];
                                        echo '<option value="'.$row["location_name"].'">'.$row["location_name"].'</option>';
                                   }
                                ?> 
                            </datalist>-->
                            
                       
                       
                            <span class="input-group-addon"><i class="fa fa-flag-checkered"></i></span>
                            <input id="myInput2" class="autocomplete form-control" type="text" name="preferred_location" placeholder="Preferred Location" required />
                        </div>
                        <center><div style="ppadding: 0px;" class="g-recaptcha pull-right" data-sitekey="6LdkqGsUAAAAAHaGJsKsrkrvewL8eWH2U_xGOttR"></div></center>
                        <div class="col-md-12" style="padding: 0px;">
                        <div class="col-md-5">
                           </b>
                            <br /><a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal"><b></b></a>
                        </div>
                        <div class="col-md-7">
                            <div id="msg">
                                <span id="rsuccess" class="pull-right" style="display: none; color: green; margin-left: 10px; margin-top: 5px;"><i class="fa fa-smile-o" style="font-size:20px"></i> <span id="m1"></span></span>
                                <span id="rerror" class="pull-right" style="display: none; color: red; margin-left: 10px; margin-top: 7px;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span id="m2"></span></span>
                            </div>
                            <button id="sub" type="submit" class="btn btn-primary pull-right">SEND</button>
                        </div>
                        <div id="regButton" class="col-md-4" style="display: none; background: #DE4313;">
                        </div>
                        </div>
                        <br /><br />
                    </form>
        		</div>
        		<div id="col3" class="col-md-12" style="display: none; color: black; background: transparent; z-index: 1000; padding: 0px 40px 20px 40px;">
                    <h3 style="color: #5D9BD0; margin-top: 20px;"><b><i class="fas fa-info-circle fa-lg"></i> Thanks for Registering with us</b>
                    <button type="button" id="pclose" class="close">&times;</button>
        
                    <span class="pull-right" ><small><b style="color: #DE4313; font-size: 20px;">3000 <img src="../img/eb.png" height="50" style="position: inline;" /> OFFER</b><b style="color: black; font-size: 22px;"> @ <i class="fa fa-inr"></i> 199/-
                    <br /><small class="pull-right" style="color: green;"><i class="fa fa-bell faa-ring animated"></i> HURRY, <font color="red" size="4"> 2880</font> Premium Accounts are left</small></b></span>
                    <br />
                    </h4>
                    </h3>
                    <br /><h4>Avail more benifits by Upgrading to a <b style="color: #5D9BD0;">Premium Member</b></h4>
                    <br /><br />
                    <table class="table stable-striped">
                            <tr style="background: gray; color: white;"><td width="45%" style="background: #F2F2F2; color: black; border: 0px; text-align: left;"><b>Checkout the benifits</b></td><td><b>Standard</b></td><td style="background: green"><b>Premium</b></td></tr>
                            <tr><td class="first">Top Colleges & Universities</td><td class="second"><img src="../img/tick.png" height="20" /></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                            <tr><td class="first">Eligibility & Admission</td><td class="second"><img src="../img/tick.png" height="20" /></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                            <tr><td class="first">College Rankings</td><td class="second"><img src="../img/tick.png" height="20" /></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                            <tr><td class="first">College Brochures</td><td class="second"><img src="../img/tick.png" height="20" /><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                            <?php
                                $a=5;
                                $c=5;
                                for($i=0;$i<sizeof($a);$i++)
                                {
                                    echo '<tr><td class="first">'.$a[$i].'</td><td class="second"></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>';
                                }
                                //echo '<tr><td colspan="2" class="first">Covering '.$c.' and many more...</td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>';
                                echo '<tr><td class="first">Covering '.$c.' and many more...</td><td class="second"></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>';
                            ?>
                            <tr><td class="first">Last 10 years question banks & solution of CAT, XAT, CMAT & others MBA exams</td><td></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                    <tr><td class="first">More 15000 questions</td><td></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                    <tr><td class="first">Minimum 10 sets of chapter wise practice test for each subject in MBA syllabus</td><td></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                    <tr><td class="first">Unlimited full length practice test</td><td></td><td class="third"><img src="../img/tick2.png" height="20" /></td></tr>
                            <!--<tr><td class="first">365 Days Support</td><td></td><td><img src="../img/tick.png" height="20" /></td></tr>
                            <tr><td class="first">Career Guidance</td><td></td><td><img src="../img/tick.png" height="20" /></td></tr>-->
                    </table>
                    <center>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
		var e = new Date().getTime();
		document.getElementById("order_id").value = e;
	};
</script>
                	   <form method="POST" name="customerData" aaction="success.php" action="https://searchurcollege.com/connection/cca/ccavRequestHandler.php">
                            <!--<input type="hhidden" id="na" name="na" />
                            <input type="hhidden" id="ct" name="ct" />
                            <input type="hhidden" id="ph" name="ph" />
                            <input type="hhidden" id="em" name="em" />-->

                            <input type="hidden" name="tid" id="tid" readonly />
                            <input type="hidden" name="merchant_id" value="188437"/>
                            <input type="hidden" name="order_id" value="123654789"/>
                            <input type="hidden" name="amount" value="1"/>
                            <input type="hidden" name="currency" value="INR"/>
                            <input type="hidden" name="redirect_url" value="https://searchurcollege.com/demo/cca/ccavResponseHandler.php"/>
                            <input type="hidden" name="cancel_url" value="https://searchurcollege.com/demo/cca/ccavResponseHandler.php"/>
                            <input type="hidden" name="language" value="EN"/>
                            <input type="hidden" id="na" name="billing_name" />
                            <input type="hidden" id="ct" name="billing_city" />
                            <input type="hidden" id="ph" name="billing_tel" />
        		        	<input type="hidden" id="em" name="billing_email" />

                            <button type="submit" class="btn btn-primary btn-lg">PAY NOW</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>  
 
 
 
  
  

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    //document.getElementById("prevBtn").style.display = "none";
	$("#prevBtn").hide();
	$("#nextBtn").show();
	$("#submit1").hide();
  } else {
    document.getElementById("prevBtn").style.display = "inline";
	
  }
  if (n == (x.length - 1)) {
    //document.getElementById("nextBtn").innerHTML = "Submit";
	$("#nextBtn").hide();
	$("#submit1").show(); 
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
   function updateTxt()
  {  
    var field1 = document.getElementById('stream').options[document.getElementById('stream').selectedIndex].value; 
    var field2 = document.getElementById('course1').options[document.getElementById('course1').selectedIndex].value;	
	var field3 = document.getElementById('mostudy').options[document.getElementById('mostudy').selectedIndex].value;
	var field4 = document.getElementById('cityuwant').options[document.getElementById('cityuwant').selectedIndex].value;
	var field5 = document.getElementById('email1').value;  
	var field6 = document.getElementById('fname').value;  
        var field7 = document.getElementById('lname').value;
        var field8 = document.getElementById('mobile1').value;
	var field9 = document.getElementById('cityulive').options[document.getElementById('cityulive').selectedIndex].value;
	
    //alert(field1+'&'+field2+'&'+field3+'&'+field4+'&'+field5+'&'+field6+'&'+field7+'&'+field8+'&'+field9);
	var  postData = {field1,field2,field3,field4,field5,field6,field7,field8,field9};
	console.log(postData);
	$.post('index.php/Popup/submitform',postData,function(data){
		if(data.status==101){
			alert("Your Registration Successfully Submit");
			document.getElementById('id01').style.display='none';
			return true;
		} else {
			alert(data.message);
			return false;
		}
		
	});
	
    }  

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#L1').change(function(event) {
          $('#L2').val('');
          id=$('#L1').val();
          $.post(
           'https://searchurcollege.com/connection/info.php?id='+id,
            $(this).serialize(),
            function(data){
              $("#course_interested").html(data);
            }
          );
          return false;
        });   

        //Register User
        $('#frmRegister').submit(function(event) {
        	event.preventDefault();
          alert ("Register");
          $.post(
           'https://searchurcollege.com/connection/user_register.php',
            $(this).serialize(),
            function(data){
                //$('#v3').fadeIn().delay(2000).fadeOut();
                if(data==1 || data.substring(0,3)=="Log")
                {
                    $('#m1').text(data);
                    $("#frmRegister1 input").prop("disabled", true);
                    $("#frmRegister1 select").prop("disabled", true);
                    $('#sub').prop('disabled', true);
                    $('#rsuccess').css('display','block');
                    $('#rsuccess').fadeIn().delay(2000).fadeOut();
                  //  $('#otp').css('display', 'block');
                    $('#otp_box').focus();
                }
                else
                {
                    $('#m2').text(data);
                    $('#rerror').css('display','block');
                    $('#rerror').fadeIn().delay(2000).fadeOut();
                }
          });
          return false;   
        });

        //Verify OTP
       
    $('#pclose').on('click', function () {
        location.reload();
    });
</script>
<script>
$('a, href').click(function(e)
{
    e.preventDefault();
    
});
</script>

 
</body>
</html>