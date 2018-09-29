<?php
    include('connection/dbconnect.php');
 ?>
<html>
<head>
<?php
    include('connection/dbconnect.php');
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
        include('connection/header3.php');
    else
        include('connection/header1.php');
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
                <button class="btn btn-primary" onClick="document.getElementById('id01').style.display='block'">Get Advice <i class="fa fa-caret-right" aria-hidden="true"></i></button>
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
              <h2 class="ttimer count-title count-number" data-to="14000" data-speed="1500"><span class="count-title">14000+</span></h2>
              <p class="count-text ">Tests</p>
            </div>
          </li>
          <li>
            <div class="counter">
              <h2 class="timer count-title count-number" data-to="20000" data-speed="1500"></h2>
              <p class="count-text ">COlleges</p>
            </div>
          </li>
          <li>
            <div class="counter">
              <h2 class="timer count-title count-number" data-to="50000" data-speed="1500"></h2>
              <p class="count-text ">Applicant</p>
            </div>
          </li>
          <li>
            <div class="counter">
              <h2 class="timer count-title count-number" data-to="10000" data-speed="1500"></h2>
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



<div id="id01" class="modal">
    <form id="regForm" accept-charset="UTF-8" enctype="multipart/form-data" method="post">
  <h1><font color="#000000">Get In Touch:</font></h1><br>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
  
  	<font color="#000000"><select name="stream" id="stream">
	
							<option>Please select Stream.</option>
							<option>Business & Management Studies</option>
							<option>Engineering</option>
							<option>Design</option>
							<option>Hospitality & Travel</option>
							<option>Law</option>
							<option>Animation</option>
							<option>Mass Communication & Media</option>
							<option>IT & Software</option>
							<option>Humanities & Social Sciences</option>
							<option>Arts ( Fine / Visual / Performing )</option>
							<option>Science</option>
							<option>Architecture & Planning</option>
							<option>Accounting & Commerce</option>
							<option>Banking, Finance & Insurance</option>
							<option>Aviation</option>
							<option>Teaching & Education</option>
							<option>Nursing</option>
							<option>Medicine & Health Sciences</option>
							<option>Beauty & Fitness</option>
							
					  </select> </font> <br><br>
					  
	<font color="#000000"><select name="course1" id="course1">
	
							<option>Please select Course.</option>
							<option>BBA</option>
							<option>Distance BBA</option>
							<option>Part-Time BBA</option>
							<option>MBA</option>
							<option>Distance MBA</option>
							<option>Part-Time MBA</option>
							<option>PGDM</option>
							<option>Distance PGDM</option>
							<option>Part-Time PGDM</option>
							<option>B.E./ B.Tech</option>
							<option>M.E./ M.Tech</option>
							<option>Ph.D</option>
							<option>Diploma Courses</option>
							<option>Distance Diploma Courses</option>
							<option>BA LLB</option>
							<option>BBA LLB</option>
							<option>LLB</option>
							<option>LLM</option>
							<option>Communication Design</option>
							<option>Fashion Design</option>
							<option>Industrial/ Product Design</option>
							<option>Interior Design</option>
							<option>Diploma in Hotal Management</option>
							<option>B.Sc. in Hotel Management</option>
							<option>Others</option>
							
					  </select> </font> <br><br>
					  
    <font color="#000000"><select name="mostudy" id="mostudy">
	
							<option>Please select Mode of Study.</option>
							<option>Full Time</option>
							<option>Part Time</option>
							<option>Distance / Correspondence</option>
							<option>Online</option>
							<option>Virtual Classroom</option>
							<option>On Job (Apprenticeship)</option>
							
							
					  </select> </font> <br><br>
					  
					  <font color="#000000">
                                             <input list="cityuwant" name="cityuwant">  
                                               <datalist name="cityuwant" id="cityuwant">
					  
							<option>Please select Preference City.</option>
							<option value="achalpur">Achalpur (Maharashtra)</option>
							<option>Achhnera (Uttar Pradesh))</option>
							<option>Adalaj (Gujarat)</option>
							<option>Adilabad (Telangana)</option>
							<option>Adityapur (Jharkhand)</option>
							<option>Adoni (Andhra Pradesh)</option>
							<option>Adoor (Kerala)</option>
							<option>Adra (West Bengal))</option>
							<option>Adyar (Karnataka)</option>
							<option>Afzalpur (Karnataka)</option>
							<option>Agartala (Tripura)</option>
							<option>Agra (Uttar Pradesh)</option>
							<option>Ahmedabad (Gujarat)</option>
							<option>Ahmednagar (Maharashtra)</option>
							<option>Aizawl (Mizoram)</option>
							<option>Ajmer (Rajasthan)</option>
							<option>Akola (Maharashtra)</option>
							<option>Akot (Maharashtra)</option>
							<option>Alappuzha (Kerala)</option>
							<option>Aligarh (Uttar Pradesh)</option>
							<option>AlipurdUrban Agglomerationr (West Bengal)</option>
							<option>Alirajpur (Madhya Pradesh)</option>
							<option>Allahabad (Uttar Pradesh)</option>
							<option>Alwar (Rajasthan)</option>
							<option>Amalapuram (Andhra Pradesh)</option>
							<option>Amalner (Maharashtra)</option>
							<option>Ambejogai (Maharashtra)</option>
							<option>Ambikapur (Chhattisgarh)</option>
							<option>Amravati (Maharashtra)</option>
							<option>Amreli (Gujarat)</option>
							<option>Amritsar (Punjab)</option>
							<option>Amroha (Uttar Pradesh)</option>
							<option>Anakapalle (Andhra Pradesh)</option>
							<option>Anand (Gujarat)</option>
							<option>Anantapur (Andhra Pradesh)</option>
							<option>Anantnag (Jammu and Kashmir)</option>
							<option>Anjangaon (Maharashtra)</option>
							<option>Anjar (Gujarat)</option>
							<option>Ankleshwar (Gujarat)</option>
							<option>Arakkonam (Tamil Nadu)</option>
							<option>Arambagh (West Bengal)</option>
							<option>Araria (Bihar)</option>
							<option>Arrah (Bihar)</option>
							<option>Arsikere (Karnataka)</option>
							<option>Aruppukkottai (Tamil Nadu)</option>
							<option>Arvi (Maharashtra)</option>
							<option>Arwal (Bihar)</option>
							<option>Asansol (West Bengal)</option>
							<option>Asarganj (Bihar)</option>
							<option>Ashok Nagar (Madhya Pradesh)</option>
							<option>Athni (Karnataka)</option>
							<option>Attingal (Kerala)</option>
							<option>Aurangabad (Maharashtra)</option>
							<option>Aurangabad (Bihar)</option>
							<option>Azamgarh (Uttar Pradesh)</option>
							<option>Bagaha (Bihar)</option>
							<option>Bageshwar (Uttarakhand)</option>
							<option>Bahadurgarh (Haryana)</option>
							<option>Baharampur (West Bengal)</option>
							<option>Bahraich (Uttar Pradesh)</option>
							<option>Balaghat (Madhya Pradesh)</option>
							<option>Balangir (Odisha)</option>
							<option>Baleshwar Town (Odisha)</option>
							<option>Ballari (Karnataka)</option>
							<option>Balurghat (West Bengal)</option>
							<option>Bankura (West Bengal)</option>
							<option>Bapatla (Andhra Pradesh)</option>
							<option>Baramula (Jammu and Kashmir)</option>
							<option>Barbil (Odisha)</option>
							<option>Bargarh (Odisha)</option>
							<option>Barh (Bihar)</option>
							<option>Baripada Town (Odisha)</option>
							<option>Barmer (Rajasthan)</option>
							<option>Barnala (Punjab)</option>
							<option>Barpeta (Assam)</option>
							<option>Batala (Punjab)</option>
							<option>Bathinda (Punjab)</option>
							<option>Begusarai (Bihar)</option>
							<option>Belagavi (Karnataka)</option>
							<option>Bellampalle (Telangana)</option>
							<option>Belonia (Tripura)</option>
							<option>Bengaluru (Karnataka)</option>
							<option>Bettiah (Bihar)</option>
							<option>BhabUrban Agglomeration (Bihar)</option>
							<option>Bhadrachalam (Telangana)</option>
							<option>Bhadrak (Odisha)</option>
							<option>Bhagalpur (Bihar)</option>
							<option>Bhainsa (Telangana)</option>
							<option>Bharatpur (Rajasthan)</option>
							<option>Bharuch (Gujarat)</option>
							<option>Bhatapara (Chhattisgarh)</option>
							<option>Bhavnagar (Gujarat)</option>
							<option>Bhawanipatna (Odisha)</option>
							<option>Bheemunipatnam (Andhra Pradesh)</option>
							<option>Bhilai Nagar (Chhattisgarh)</option>
							<option>Bhilwara (Rajasthan)</option>
							<option>Bhimavaram (Andhra Pradesh)</option>
							<option>Bhiwandi (Maharashtra)</option>
							<option>Bhiwani (Haryana)</option>
							<option>Bhongir (Telangana)</option>
							<option>Bhopal (Madhya Pradesh)</option>
							<option>Bhubaneswar (Odisha)</option>
							<option>Bhuj (Gujarat)</option>
							<option>Bikaner (Rajasthan)</option>
							<option>Bilaspur (Chhattisgarh)</option>
							<option>Bobbili (Andhra Pradesh)</option>
							<option>Bodhan (Telangana)</option>
							<option>Bokaro Steel City (Jharkhand)</option>
							<option>Bongaigaon City (Assam)</option>
							<option>Brahmapur (Odisha)</option>
							<option>Buxar (Bihar)</option>
							<option>Byasanagar (Odisha)</option>
							<option>Chaibasa (Jharkhand)</option>
							<option>Chalakudy (Kerala)</option>
							<option>Chandausi (Uttar Pradesh)</option>
							<option>Chandigarh (Chandigarh)</option>
							<option>Changanassery (Kerala)</option>
							<option>Charkhi Dadri (Haryana)</option>
							<option>Chatra (Jharkhand)</option>
							<option>Chennai (Tamil Nadu)</option>
							<option>Cherthala (Kerala)</option>
							<option>Chhapra (Bihar)</option>
							<option>Chhapra (Gujarat)</option>
							<option>Chikkamagaluru (Karnataka)</option>
							<option>Chilakaluripet (Andhra Pradesh)</option>
							<option>Chirala (Andhra Pradesh)</option>
							<option>Chirkunda (Jharkhand)</option>
							<option>Chirmiri (Chhattisgarh)</option>
							<option>Chittoor (Andhra Pradesh)</option>
							<option>Chittur-Thathamangalam (Kerala)</option>
							<option>Coimbatore (Tamil Nadu)</option>
							<option>Cuttack (Odisha)</option>
							<option>Dalli-Rajhara (Chhattisgarh)</option>
							<option>Darbhanga (Bihar)</option>
							<option>Darjiling (West Bengal)</option>
							<option>Davanagere (Karnataka)</option>
							<option>Deesa (Gujarat)</option>
							<option>Dehradun (Uttarakhand)</option>
							<option> Dehri-on-Sone (Bihar)</option>
							<option>Delhi (Delhi)</option>
							<option>Deoghar (Jharkhand)</option>
							<option>Dhamtari (Chhattisgarh)</option>
							<option>Dhanbad (Jharkhand)</option>
							<option>Dharmanagar (Tripura)</option>
							<option>Dharmavaram (Andhra Pradesh)</option>
							<option>Dhenkanal (Odisha)</option>
							<option>Dhoraji (Gujarat)</option>
							<option>Dhubri (Assam)</option>
							<option>Dhule (Maharashtra)</option>
							<option>Dhuri (Punjab)</option>
							<option>Dibrugarh (Assam)</option>
							<option>Dimapur (Nagaland)</option>
							<option>Diphu (Assam)</option>
							<option>Dumka (Jharkhand)</option>
							<option>Dumraon (Bihar)</option>
							<option>Durg (Chhattisgarh)</option>
							<option>Eluru (Andhra Pradesh)</option>
							<option>English Bazar (West Bengal)</option>
							<option>Erode (Tamil Nadu)</option>
							<option>Etawah (Uttar Pradesh)</option>
							<option>Faridabad (Haryana)</option>
							<option>Faridkot (Punjab)</option>
							<option>Farooqnagar (Telangana)</option>
							<option>Fatehabad (Haryana)</option>
							<option>Fatehpur Sikri (Uttar Pradesh)</option>
							<option>Fazilka (Punjab)</option>
							<option>Firozabad (Uttar Pradesh)</option>
							<option>Firozpur (Punjab)</option>
							<option>Firozpur Cantt. (Punjab)</option>
							<option>Forbesganj (Bihar)</option>
							<option>Gadwal (Telangana)</option>
							<option>Gangarampur (West Bengal)</option>
							<option>Ganjbasoda (Madhya Pradesh)</option>
							<option>Gaya (Bihar)</option>
							<option>Giridih (Jharkhand)</option>
							<option>Goalpara (Assam)</option>
							<option>Gobichettipalayam (Tamil Nadu)</option>
							<option>Gobindgarh (Punjab)</option>
							<option>Godhra (Gujarat)</option>
							<option>Gohana (Haryana)</option>
							<option>Gokak (Karnataka)</option>
							<option>Gooty (Andhra Pradesh)</option>
							<option>Gopalganj (Bihar)</option>
							<option>Gudivada (Andhra Pradesh)</option>
							<option>Gudur (Andhra Pradesh)</option>
							<option>Gumia (Jharkhand)</option>
							<option>Guntakal (Andhra Pradesh)</option>
							<option>Guntur (Andhra Pradesh)</option>
							<option>Gurdaspur (Punjab)</option>
							<option>Gurgaon (Haryana)</option>
							<option>Guruvayoor (Kerala)</option>
							<option>Guwahati (Assam)</option>
							<option>Gwalior (Madhya Pradesh)</option>
							<option>Habra (West Bengal)</option>
							<option>Hajipur (Bihar)</option>
							<option>Haldwani-cum-Kathgodam (Uttarakhand)</option>
							<option>Hansi (Haryana)</option>
							<option>Hapur (Uttar Pradesh)</option>
							<option>Hardoi  (Uttar Pradesh)</option>
							<option>Hardwar (Uttarakhand)</option>
							<option>Hazaribag (Jharkhand)</option>
							<option>Hindupur (Andhra Pradesh)</option>
							<option>Hisar (Haryana)</option>
							<option>Hoshiarpur (Punjab)</option>
							<option>Hubli-Dharwad (Karnataka)</option>
							<option>Hugli-Chinsurah (West Bengal)</option>
							<option>Hyderabad (Telangana)</option>
							<option>Ichalkaranji (Maharashtra)</option>
							<option>Imphal (Manipur)</option>
							<option>Indore (Madhya Pradesh)</option>
							<option>Itarsi (Madhya Pradesh)</option>
							<option>Jabalpur (Madhya Pradesh)</option>
							<option>Jagdalpur (Chhattisgarh)</option>
							<option>Jaggaiahpet (Andhra Pradesh)</option>
							<option>Jagraon (Punjab)</option>
							<option>Jagtial (Telangana)</option>
							<option>Jaipur (Rajasthan)</option>
							<option>Jalandhar (Punjab)</option>
							<option>Jalandhar Cantt. (Punjab)</option>
							<option>Jalpaiguri (West Bengal)</option>
							<option>Jamalpur (Bihar)</option>
							<option>Jammalamadugu (Andhra Pradesh)</option>
							<option>Jammu (Jammu and Kashmir)</option>
							<option>Jamnagar (Gujarat)</option>
							<option>Jamshedpur (Jharkhand)</option>
							<option>Jamui (Bihar)</option>
							<option>Jangaon (Telangana)</option>
							<option>Jatani (Odisha)</option>
							<option>Jehanabad (Bihar)</option>
							<option>Jhansi (Uttar Pradesh)</option>
							<option>Jhargram (West Bengal)</option>
							<option>Jharsuguda (Odisha)</option>
							<option>Jhumri Tilaiya (Jharkhand)</option>
							<option>Jind (Haryana)</option>
							<option>Jodhpur (Rajasthan)</option>
							<option>Jorhat (Assam)</option>
							<option>Kadapa (Andhra Pradesh)</option>
							<option>Kadi (Gujarat)</option>
							<option>Kadiri (Andhra Pradesh)</option>
							<option>Kagaznagar (Telangana)</option>
							<option>Kailasahar (Tripura)</option>
							<option>Kaithal (Haryana)</option>
							<option>Kakinada (Andhra Pradesh)</option>
							<option>Kalimpong (West Bengal)</option>
							<option>Kalpi (Uttar Pradesh)</option>
							<option>Kalyan-Dombivali (Maharashtra)</option>
							<option>Kamareddy (Telangana)</option>
							<option>Kancheepuram (Tamil Nadu)</option>
							<option>Kandukur (Andhra Pradesh)</option>
							<option>Kanhangad (Kerala)</option>
							<option>Kannur (Kerala)</option>
							<option>Kanpur (Uttar Pradesh)</option>
							<option>Kapadvanj (Gujarat)</option>
							<option>Kapurthala (Punjab)</option>
							<option>Karaikal (Puducherry)</option>
							<option>Karimganj (Assam)</option>
							<option>Karimnagar (Telangana)</option>
							<option>Karjat (Maharashtra)</option>
							<option>Karnal (Haryana)</option>
							<option>Karur (Tamil Nadu)</option>
							<option>Karwar (Karnataka)</option>
							<option>Kasaragod (Kerala)</option>
							<option>Kashipur (Uttarakhand)</option>
							<option>KathUrban Agglomeration (Jammu and Kashmir)</option>
							<option>Katihar (Bihar)</option>
							<option>Kavali (Andhra Pradesh)</option>
							<option>Kayamkulam (Kerala)</option>
							<option>Kendrapara (Odisha)</option>
							<option>Kendujhar (Odisha)</option>
							<option>Keshod (Gujarat)</option>
							<option>Khair (Uttar Pradesh)</option>
							<option>Khambhat (Gujarat)</option>
							<option>Khammam (Telangana)</option>
							<option>Khanna (Punjab)</option>
							<option>Kharagpur (West Bengal)</option>
							<option>Kharar (Punjab)</option>
							<option>Khowai (Tripura)</option>
							<option>Kishanganj (Bihar)</option>
							<option>Kochi (Kerala)</option>
							<option>Kodungallur (Kerala)</option>
							<option>Kohima (Nagaland)</option>
							<option>Kolar (Karnataka)</option>
							<option>Kolkata (West Bengal)</option>
							<option>Kollam (Kerala)</option>
							<option>Koratla (Telangana)</option>
							<option>Korba (Chhattisgarh)</option>
							<option>Kot Kapura (Punjab)</option>
							<option>Kothagudem (Telangana)</option>
							<option>Kottayam (Kerala)</option>
							<option>Kovvur (Andhra Pradesh)</option>
							<option>Koyilandy (Kerala)</option>
							<option>Kozhikode (Kerala)</option>
							<option>Kunnamkulam (Kerala)</option>
							<option>Kurnool (Andhra Pradesh)</option>
							<option>Kyathampalle (Telangana)</option>
							<option>Lachhmangarh (Rajasthan)</option>
							<option>Ladnu (Rajasthan)</option>
							<option>Ladwa (Haryana)</option>
							<option>Lahar (Madhya Pradesh)</option>
							<option>Laharpur (Uttar Pradesh)</option>
							<option>Lakheri (Rajasthan)</option>
							<option>Lakhimpur (Uttar Pradesh)</option>
							<option>Lakhisarai (Bihar)</option>
							<option>Lakshmeshwar (Karnataka)</option>
							<option>Lal Gopalganj Nindaura (Uttar Pradesh)</option>
							<option>Lalganj (Bihar)</option>
							<option>Lalganj (Uttar Pradesh)</option>
							<option>Lalgudi (Tamil Nadu)</option>
							<option>Lalitpur (Uttar Pradesh)</option>
							<option>Lalsot (Rajasthan)</option>
							<option>Lanka (Assam)</option>
							<option>Lar (Uttar Pradesh)</option>
							<option>Lathi (Gujarat)</option>
							<option>Latur (Maharashtra)</option>
							<option>Lilong (Manipur)</option>
							<option>Limbdi (Gujarat)</option>
							<option>Lingsugur (Karnataka)</option>
							<option>Loha (Maharashtra)</option>
							<option>Lohardaga (Jharkhand)</option>
							<option>Lonar (Maharashtra)</option>
							<option>Lonavla (Maharashtra)</option>
							<option>Longowal (Punjab)</option>
							<option>Loni (Uttar Pradesh)</option>
							<option>Losal (Rajasthan)</option>
							<option>Lucknow (Uttar Pradesh)</option>
							<option>Ludhiana (Punjab)</option>
							<option>Lumding (Assam)</option>
							<option>Lunawada (Gujarat)</option>
							<option>Lunglei (Mizoram)</option>
							<option>Macherla (Andhra Pradesh)</option>
							<option>Machilipatnam (Andhra Pradesh)</option>
							<option>Madanapalle (Andhra Pradesh)</option>
							<option>Maddur (Karnataka)</option>
							<option>Madhepura (Bihar)</option>
							<option>Madhubani (Bihar)</option>
							<option>Madhugiri (Karnataka)</option>
							<option>Madhupur (Jharkhand)</option>
							<option>Madikeri (Karnataka)</option>
							<option>Madurai (Tamil Nadu)</option>
							<option>Magadi (Karnataka)</option>
							<option>Mahad (Maharashtra)</option>
							<option>Mahalingapura (Karnataka)</option>
							<option>Maharajganj (Bihar)</option>
							<option>Maharajpur (Madhya Pradesh)</option>
							<option>Mahasamund (Chhattisgarh)</option>
							<option>Mahbubnagar (Telangana)</option>
							<option>Mahe (Puducherry)</option>
							<option>Mahemdabad (Gujarat)</option>
							<option>Mahendragarh (Haryana)</option>
							<option>Mahesana (Gujarat)</option>
							<option>Mahidpur (Madhya Pradesh)</option>
							<option>Mahnar Bazar (Bihar)</option>
							<option>Mahuva (Gujarat)</option>
							<option>Maihar (Madhya Pradesh)</option>
							<option>Mainaguri (West Bengal)</option>
							<option>Makhdumpur (Bihar)</option>
							<option>Makrana (Rajasthan)</option>
							<option>Malaj Khand (Madhya Pradesh)</option>
							<option>Malappuram (Kerala)</option>
							<option>Malavalli (Karnataka)</option>
							<option>Malda (West Bengal)</option>
							<option>Malegaon (Maharashtra)</option>
							<option>Malerkotla (Punjab)</option>
							<option>Malkangiri (Odisha)</option>
							<option>Malkapur (Maharashtra)</option>
							<option>Malout (Punjab)</option>
							<option>Malpura (Rajasthan)</option>
							<option>Malur (Karnataka)</option>
							<option>Manachanallur (Tamil Nadu)</option>
							<option>Manasa (Madhya Pradesh)</option>
							<option>Manavadar (Gujarat)</option>
							<option>Manawar (Madhya Pradesh)</option>
							<option>Mancherial (Telangana)</option>
							<option>Mandalgarh (Rajasthan)</option>
							<option>Mandamarri (Telangana)</option>
							<option>Mandapeta (Andhra Pradesh)</option>
							<option>Mandawa (Rajasthan)</option>
							<option>Mandi (Himachal Pradesh)</option>
							<option>Mandi Dabwali (Haryana)</option>
							<option>Mandideep (Madhya Pradesh)</option>
							<option>Mandla (Madhya Pradesh)</option>
							<option>Mandsaur (Madhya Pradesh)</option>
							<option>Mandvi (Gujarat)</option>
							<option>Mandya (Karnataka)</option>
							<option>Manendragarh (Chhattisgarh)</option>
							<option>Maner (Bihar)</option>
							<option>Mangaldoi (Assam)</option>
							<option>Mangaluru (Karnataka)</option>
							<option>Mangalvedhe (Maharashtra)</option>
							<option>Manglaur (Uttarakhand)</option>
							<option>Mangrol (Gujarat)</option>
							<option>Mangrol (Rajasthan)</option>
							<option>Mangrulpir (Maharashtra)</option>
							<option>Manihari (Bihar)</option>
							<option>Manjlegaon (Maharashtra)</option>
							<option>Mankachar (Assam)</option>
							<option>Manmad (Maharashtra)</option>
							<option>Mansa (Punjab)</option>
							<option>Mansa (Gujarat)</option>
							<option>Manvi (Karnataka)</option>
							<option>Manwath (Maharashtra)</option>
							<option>Mapusa (Goa)</option>
							<option>Margao (Goa)</option>
							<option>Margherita (Assam)</option>
							<option>Marhaura (Bihar)</option>
							<option>Mariani (Assam)</option>
							<option>Marigaon (Assam)</option>
							<option>Markapur (Andhra Pradesh)</option>
							<option>Marmagao (Goa)</option>
							<option>Masaurhi (Bihar)</option>
							<option>Mathabhanga (West Bengal)</option>
							<option>Mathura (Uttar Pradesh)</option>
							<option>Mattannur (Kerala)</option>
							<option>Mauganj (Madhya Pradesh)</option>
							<option>Mavelikkara (Kerala)</option>
							<option>Mavoor (Kerala)</option>
							<option>Mayang Imphal (Manipur)</option>
							<option>Medak (Telangana)</option>
							<option>Medininagar (Daltonganj) (Jharkhand)</option>
							<option>Medinipur (West Bengal)</option>
							<option>Meerut (Uttar Pradesh)</option>
							<option>Mehkar (Maharashtra)</option>
							<option>Memari (West Bengal)</option>
							<option>Merta City (Rajasthan)</option>
							<option>Mhaswad (Maharashtra)</option>
							<option>Mhow Cantonment (Madhya Pradesh)</option>
							<option>Mhowgaon (Madhya Pradesh)</option>
							<option>Mihijam (Jharkhand)</option>
							<option>Mira-Bhayandar (Maharashtra)</option>
							<option>Mirganj (Bihar)</option>
							<option>Miryalaguda (Telangana)</option>
							<option>Modasa (Gujarat)</option>
							<option>Modinagar (Uttar Pradesh)</option>
							<option>Moga (Punjab)</option>
							<option>Mohali (Punjab)</option>
							<option>Mokameh (Bihar)</option>
							<option>Mokokchung (Nagaland)</option>
							<option>Monoharpur (West Bengal)</option>
							<option>Moradabad (Uttar Pradesh)</option>
							<option>Morena (Madhya Pradesh)</option>
							<option>Morinda (Punjab)</option>
							<option>Morshi (Maharashtra)</option>
							<option>Morvi (Gujarat)</option>
							<option>Motihari (Bihar)</option>
							<option>Motipur (Bihar)</option>
							<option>Mount Abu (Rajasthan)</option>
							<option>Mudabidri (Karnataka)</option>
							<option>Mudalagi (Karnataka)</option>
							<option>Muddebihal (Karnataka)</option>
							<option>Mudhol (Karnataka)</option>
							<option>Mukerian (Punjab)</option>
							<option>Mukhed (Maharashtra)</option>
							<option>Muktsar (Punjab)</option>
							<option>Mul (Maharashtra)</option>
							<option>Mulbagal (Karnataka)</option>
							<option>Multai (Madhya Pradesh)</option>
							<option>Mumbai (Maharashtra)</option>
							<option>Mundargi (Karnataka)</option>
							<option>Mundi (Madhya Pradesh)</option>
							<option>Mungeli (Chhattisgarh)</option>
							<option>Munger (Bihar)</option>
							<option>Murliganj (Bihar)</option>
							<option>Murshidabad (West Bengal)</option>
							<option>Murtijapur (Maharashtra)</option>
							<option>Murwara (Katni) (Madhya Pradesh)</option>
							<option>Musabani (Jharkhand)</option>
							<option>Mussoorie (Uttarakhand)</option>
							<option>Muvattupuzha (Kerala)</option>
							<option>Muzaffarpur (Bihar)</option>
							<option>Mysore (Karnatka)</option>
							<option>Nabadwip (West Bengal)</option>
							<option>Nabarangapur (Odisha)</option>
							<option>Nabha (Punjab)</option>
							<option>Nadbai (Rajasthan)</option>
							<option>Nadiad (Gujarat)</option>
							<option>Nagaon (Assam)</option>
							<option>Nagapattinam (Tamil Nadu)</option>
							<option>Nagari (Andhra Pradesh)</option>
							<option>Nagarkurnool (Telangana)</option>
							<option>Nagaur (Rajasthan)</option>
							<option>Nagda (Madhya Pradesh)</option>
							<option>Nagercoil (Tamil Nadu)</option>
							<option>Nagina (Uttar Pradesh)</option>
							<option>Nagla (Uttarakhand)</option>
							<option>Nagpur (Maharashtra)</option>
							<option>Nahan (Himachal Pradesh)</option>
							<option>Naharlagun (Arunachal Pradesh)</option>
							<option>Naidupet (Andhra Pradesh)</option>
							<option>Naihati (West Bengal)</option>
							<option>Naila Janjgir (Chhattisgarh)</option>
							<option>Nainital (Uttarakhand)</option>
							<option>Nainpur (Madhya Pradesh)</option>
							<option>Najibabad (Uttar Pradesh)</option>
							<option>Nakodar (Punjab)</option>
							<option>Nakur (Uttar Pradesh)</option>
							<option>Nalbari (Assam)</option>
							<option>Namagiripettai (Tamil Nadu)</option>
							<option>Namakkal (Tamil Nadu)</option>
							<option>Nanded-Waghala (Maharashtra)</option>
							<option>Nandgaon (Maharashtra)</option>
							<option>Nandivaram-Guduvancheri (Tamil Nadu)</option>
							<option>Nandura (Maharashtra)</option>
							<option>Nandurbar (Maharashtra)</option>
							<option>Nandyal (Andhra Pradesh)</option>
							<option>Nangal (Punjab)</option>
							<option>Nanjangud (Karnataka)</option>
							<option>Nanjikottai (Tamil Nadu)</option>
							<option>Nanpara (Uttar Pradesh)</option>
							<option>Narasapuram (Andhra Pradesh)</option>
							<option>Narasaraopet (Andhra Pradesh)</option>
							<option>Naraura (Uttar Pradesh)</option>
							<option>Narayanpet (Telangana)</option>
							<option>Nargund (Karnataka)</option>
							<option>Narkatiaganj (Bihar)</option>
							<option>Narkhed (Maharashtra)</option>
							<option>Narnaul (Haryana)</option>
							<option>Narsinghgarh (Madhya Pradesh)</option>
							<option>Narsipatnam (Andhra Pradesh)</option>
							<option>Narwana (Haryana)</option>
							<option>Nashik (Maharashtra)</option>
							<option>Nasirabad (Rajasthan)</option>
							<option>Natham (Tamil Nadu)</option>
							<option>Nathdwara (Rajasthan)</option>
							<option>Naugachhia (Bihar)</option>
							<option>Naugawan Sadat (Uttar Pradesh)</option>
							<option>Nautanwa (Uttar Pradesh)</option>
							<option>Navalgund (Karnataka)</option>
							<option>Navsari (Gujarat)</option>
							<option>Nawabganj (Uttar Pradesh)</option>
							<option>Nawada (Bihar)</option>
							<option>Nawanshahr (Punjab)</option>
							<option>Nawapur (Maharashtra)</option>
							<option>Nedumangad (Kerala)</option>
							<option>Neem-Ka-Thana (Rajasthan)</option>
							<option>Neemuch (Madhya Pradesh)</option>
							<option>Nehtaur (Uttar Pradesh)</option>
							<option>Nelamangala (Karnataka)</option>
							<option>Nellikuppam (Tamil Nadu)</option>
							<option>Nellore (Andhra Pradesh)</option>
							<option>Nepanagar (Madhya Pradesh)</option>
							<option>New Delhi (Delhi)</option>
							<option>Neyveli (TS) (Tamil Nadu)</option>
							<option>Neyyattinkara (Kerala)</option>
							<option>Nidadavole (Andhra Pradesh)</option>
							<option>Nilambur (Kerala)</option>
							<option>Nilanga (Maharashtra)</option>
							<option>Nimbahera (Rajasthan)</option>
							<option>Nirmal (Telangana)</option>
							<option>Niwai (Uttar Pradesh)</option>
							<option>Niwari (Madhya Pradesh)</option>
							<option>Nizamabad (Telangana)</option>
							<option>Nohar (Rajasthan)</option>
							<option>Noida (Uttar Pradesh)</option>
							<option>Nokha (Rajasthan)</option>
							<option>Nokha (Bihar)</option>
							<option>Nongstoin (Meghalaya)</option>
							<option>Noorpur (Uttar Pradesh)</option>
							<option>North Lakhimpur (Assam)</option>
							<option>Nowgong (Madhya Pradesh)</option>
							<option>Nowrozabad (Khodargama) (Madhya Pradesh)</option>
							<option>Nuzvid (Andhra Pradesh)</option>
							<option>O' Valley (Tamil Nadu)</option>
							<option>Obra (Uttar Pradesh)</option>
							<option>Oddanchatram (Tamil Nadu)</option>
							<option>Ongole (Andhra Pradesh)</option>
							<option>Orai (Uttar Pradesh)</option>
							<option>Osmanabad (Maharashtra)</option>
							<option>Ottappalam (Kerala)</option>
							<option>Ozar (Maharashtra)</option>
							<option>P.N.Patti (Tamil Nadu)</option>
							<option>Pachora (Maharashtra)</option>
							<option>Pachore (Madhya Pradesh)</option>
							<option>Pacode (Tamil Nadu)</option>
							<option>Padmanabhapuram (Tamil Nadu)</option>
							<option>Padra (Gujarat)</option>
							<option>Padrauna (Uttar Pradesh)</option>
							<option>Paithan (Maharashtra)</option>
							<option>Pakaur (Jharkhand)</option>
							<option>Palacole (Andhra Pradesh)</option>
							<option>Palai (Kerala)</option>
							<option>Palakkad (Kerala)</option>
							<option>Palampur (Himachal Pradesh)</option>
							<option>Palani (Tamil Nadu)</option>
							<option>Palanpur (Gujarat)</option>
							<option>Palasa Kasibugga (Andhra Pradesh)</option>
							<option>Palghar (Maharashtra)</option>
							<option>Pali (Rajasthan)</option>
							<option>Pali (Madhya Pradesh)</option>
							<option>Palia Kalan (Uttar Pradesh)</option>
							<option>Palitana (Gujarat)</option>
							<option>Palladam (Tamil Nadu)</option>
							<option>Pallapatti (Tamil Nadu)</option>
							<option>Pallikonda (Tamil Nadu)</option>
							<option>Palwal (Haryana)</option>
							<option>Palwancha (Telangana)</option>
							<option>Panagar (Madhya Pradesh)</option>
							<option>Panagudi (Tamil Nadu)</option>
							<option>Panaji (Goa)</option>
							<option>Panamattom (Kerala)</option>
							<option>Panchkula (Haryana)</option>
							<option>Panchla (West Bengal)</option>
							<option>Pandharkaoda (Maharashtra)</option>
							<option>Pandharpur (Maharashtra)</option>
							<option>Pandhurna (Madhya Pradesh)</option>
							<option>PandUrban Agglomeration (West Bengal)</option>
							<option>Panipat (Haryana)</option>
							<option>Panna (Madhya Pradesh)</option>
							<option>Panniyannur (Kerala)</option>
							<option>Panruti (Tamil Nadu)</option>
							<option>Panvel (Maharashtra)</option>
							<option>Pappinisseri (Kerala)</option>
							<option>Paradip (Odisha)</option>
							<option>Paramakudi (Tamil Nadu)</option>
							<option>Parangipettai (Tamil Nadu)</option>
							<option>Parasi (Uttar Pradesh)</option>
							<option>Paravoor (Kerala)</option>
							<option>Parbhani (Maharashtra)</option>
							<option>Pardi (Gujarat)</option>
							<option>Parlakhemundi (Odisha)</option>
							<option>Parli (Maharashtra)</option>
							<option>Partur (Maharashtra)</option>
							<option>Parvathipuram (Andhra Pradesh)</option>
							<option>Pasan (Madhya Pradesh)</option>
							<option>Paschim Punropara (West Bengal)</option>
							<option>Pasighat (Arunachal Pradesh)</option>
							<option>Patan (Gujarat)</option>
							<option>Pathanamthitta (Kerala)</option>
							<option>Pathankot (Punjab)</option>
							<option>Pathardi (Maharashtra)</option>
							<option>Pathri (Maharashtra)</option>
							<option>Patiala (Punjab)</option>
							<option>Patna (Bihar)</option>
							<option>Patratu (Jharkhand)</option>
							<option>Pattamundai (Odisha)</option>
							<option>Patti (Punjab)</option>
							<option>Pattran (Punjab)</option>
							<option>Pattukkottai (Tamil Nadu)</option>
							<option>Patur (Maharashtra)</option>
							<option>Pauni (Maharashtra)</option>
							<option>Pauri (Uttarakhand)</option>
							<option>Pavagada (Karnataka)</option>
							<option>Pedana (Andhra Pradesh)</option>
							<option>Peddapuram (Andhra Pradesh)</option>
							<option>Pehowa (Haryana)</option>
							<option>Pen (Maharashtra)</option>
							<option>Perambalur (Tamil Nadu)</option>
							<option>Peravurani (Tamil Nadu)</option>
							<option>Peringathur (Kerala)</option>
							<option>Perinthalmanna (Kerala)</option>
							<option>Periyakulam (Tamil Nadu)</option>
							<option>Periyasemur (Tamil Nadu)</option>
							<option>Pernampattu (Tamil Nadu)</option>
							<option>Perumbavoor (Kerala)</option>
							<option>Petlad (Gujarat)</option>
							<option>Phagwara (Punjab)</option>
							<option>Phalodi (Rajasthan)</option>
							<option>Phaltan (Maharashtra)</option>
							<option>Phillaur (Punjab)</option>
							<option>Phulabani (Odisha)</option>
							<option>Phulera (Rajasthan)</option>
							<option>Phulpur (Uttar Pradesh)</option>
							<option>Phusro (Jharkhand)</option>
							<option>Pihani (Uttar Pradesh)</option>
							<option>Pilani (Rajasthan)</option>
							<option>Pilibanga (Rajasthan)</option>
							<option>Pilibhit (Uttar Pradesh)</option>
							<option>Pilkhuwa (Uttar Pradesh)</option>
							<option>Pindwara (Rajasthan)</option>
							<option>Pinjore (Haryana)</option>
							<option>Pipar City (Rajasthan)</option>
							<option>Pipariya (Madhya Pradesh)</option>
							<option>Piriyapatna (Karnataka)</option>
							<option>Piro (Bihar)</option>
							<option>Pithampur (Madhya Pradesh)</option>
							<option>Pithapuram (Andhra Pradesh)</option>
							<option>Pithoragarh (Uttarakhand)</option>
							<option>Pollachi (Tamil Nadu)</option>
							<option>Polur (Tamil Nadu)</option>
							<option>Pondicherry (Puducherry)</option>
							<option>Ponnani (Kerala)</option>
							<option>Ponneri (Tamil Nadu)</option>
							<option>Ponnur (Andhra Pradesh)</option>
							<option>Porbandar (Gujarat)</option>
							<option>Porsa (Madhya Pradesh)</option>
							<option>Port Blair (Andaman and Nicobar Islands)</option>
							<option>Powayan (Uttar Pradesh)</option>
							<option>Prantij (Rajasthan)</option>
							<option>Pratapgarh (Rajasthan)</option>
							<option>Pratapgarh (Tripura)</option>
							<option>Prithvipur (Madhya Pradesh)</option>
							<option>Proddatur (Andhra Pradesh)</option>
							<option>Pudukkottai (Tamil Nadu)</option>
							<option>Pudukkottai (Tamil Nadu)</option>
							<option>Pudupattinam (Tamil Nadu)</option>
							<option>Pukhrayan (Uttar Pradesh)</option>
							<option>Pulgaon (Maharashtra)</option>
							<option>Puliyankudi (Tamil Nadu)</option>
							<option>Punalur (Kerala)</option>
							<option>Punch (Jammu and Kashmir)</option>
							<option>Pune (Maharashtra)</option>
							<option>Punganur (Andhra Pradesh)</option>
							<option>Punjaipugalur (Tamil Nadu)</option>
							<option>Puranpur (Uttar Pradesh)</option>
							<option>Puri (Odisha)</option>
							<option>Purna (Maharashtra)</option>
							<option>Purnia (Bihar)</option>
							<option>PurqUrban Agglomerationzi (Uttar Pradesh)</option>
							<option>Purulia (West Bengal)</option>
							<option>Purwa (Uttar Pradesh)</option>
							<option>Pusad (Maharashtra)</option>
							<option>Puthuppally (Kerala)</option>
							<option>Puttur (Karnataka)</option>
							<option>Puttur (Andhra Pradesh)</option>
							<option>Qadian (Punjab)</option>
							<option>Raayachuru (Karnataka)</option>
							<option> Rabkavi Banhatti (Karnataka)</option>
							<option>Radhanpur (Gujarat)</option>
							<option>Rae Bareli (Uttar Pradesh)</option>
							<option>Rafiganj (Bihar)</option>
							<option>Raghogarh-Vijaypur (Madhya Pradesh)</option>
							<option>Raghunathganj (West Bengal)</option>
							<option>Raghunathpur (West Bengal)</option>
							<option>Rahatgarh (Madhya Pradesh)</option>
							<option>Rahuri (Maharashtra)</option>
							<option>Raiganj (West Bengal)</option>
							<option>Raigarh (Chhattisgarh)</option>
							<option>Raikot (Punjab)</option>
							<option>Raipur (Chhattisgarh)</option>
							<option>Rairangpur (Odisha)</option>
							<option>Raisen (Madhya Pradesh)</option>
							<option>Raisinghnagar (Rajasthan)</option>
							<option>Rajagangapur (Odisha)</option>
							<option>Rajahmundry (Andhra Pradesh)</option>
							<option>Rajakhera (Rajasthan)</option>
							<option>Rajaldesar (Rajasthan)</option>
							<option>Rajam (Andhra Pradesh)</option>
							<option>Rajampet (Andhra Pradesh)</option>
							<option>Rajapalayam (Tamil Nadu)</option>
							<option>Rajauri (Jammu and Kashmir)</option>
							<option>Rajgarh (Madhya Pradesh)</option>
							<option>Rajgarh (Alwar) (Rajasthan)</option>
							<option>Rajgarh (Churu) (Rajasthan)</option>
							<option>Rajgir (Bihar)</option>
							<option>Rajkot (Gujarat)</option>
							<option>Rajnandgaon (Chhattisgarh)</option>
							<option>Rajpipla (Gujarat)</option>
							<option>Rajpura (Punjab)</option>
							<option>Rajsamand (Rajasthan)</option>
							<option>Rajula (Gujarat)</option>
							<option>Rajura (Maharashtra)</option>
							<option>Ramachandrapuram (Andhra Pradesh)</option>
							<option>Ramagundam (Telangana)</option>
							<option>Ramanagaram (Karnataka)</option>
							<option>Ramanathapuram (Tamil Nadu)</option>
							<option>Ramdurg (Karnataka)</option>
							<option>Rameshwaram (Tamil Nadu)</option>
							<option>Ramganj Mandi (Rajasthan)</option>
							<option>Ramgarh (Jharkhand)</option>
							<option>Ramnagar (Uttarakhand)</option>
							<option>Ramnagar (Bihar)</option>
							<option>Ramngarh (Rajasthan)</option>
							<option>Rampur (Uttar Pradesh)</option>
							<option>Rampur Maniharan (Uttar Pradesh)</option>
							<option>Rampura Phul (Punjab)</option>
							<option>Rampurhat (West Bengal)</option>
							<option>Ramtek (Maharashtra)</option>
							<option>Ranaghat (West Bengal)</option>
							<option>Ranavav (Gujarat)</option>
							<option>Ranchi (Jharkhand)</option>
							<option>Ranebennuru (Karnataka)</option>
							<option>Rangia (Assam)</option>
							<option>Rania (Haryana)</option>
							<option>Ranibennur (Karnataka)</option>
							<option>Ranipet (Tamil Nadu)</option>
							<option>Rapar (Gujarat)</option>
							<option>Rasipuram (Tamil Nadu)</option>
							<option>Rasra (Uttar Pradesh)</option>
							<option>Ratangarh (Rajasthan)</option>
							<option>Rath (Uttar Pradesh)</option>
							<option>Ratia (Haryana)</option>

							<option>Ratlam (Madhya Pradesh)</option>
							<option>Ratnagiri (Maharashtra)</option>
							<option>Rau (Madhya Pradesh)</option>
							<option>Raurkela (Odisha)</option>
							<option>Raver (Maharashtra)</option>
							<option>Rawatbhata (Rajasthan)</option>
							<option>Rawatsar (Rajasthan)</option>
							<option>Raxaul Bazar (Bihar)</option>
							<option>Rayachoti (Andhra Pradesh)</option>
							<option>Rayadurg (Andhra Pradesh)</option>
							<option>Rayagada (Odisha)</option>
							<option>Reengus (Rajasthan)</option>
							<option>Rehli (Madhya Pradesh)</option>
							<option>Renigunta (Andhra Pradesh)</option>
							<option>Renukoot (Uttar Pradesh)</option>
							<option>Reoti (Uttar Pradesh)</option>
							<option>Repalle (Andhra Pradesh)</option>
							<option>Revelganj (Bihar)</option>
							<option>Rewa (Madhya Pradesh)</option>
							<option>Rewari (Haryana)</option>
							<option>Rishikesh (Uttarakhand)</option>
							<option>Risod (Maharashtra)</option>
							<option>Robertsganj (Uttar Pradesh)</option>
							<option>Robertson Pet (Karnataka)</option>
							<option>Rohtak (Haryana)</option>
							<option>Ron (Karnataka)</option>
							<option>Roorkee (Uttarakhand)</option>
							<option>Rosera (Bihar)</option>
							<option>Rudauli (Uttar Pradesh)</option>
							<option>Rudrapur (Uttarakhand)</option>
							<option>Rudrapur (Uttar Pradesh)</option>
							<option>Rupnagar (Punjab)</option>
							<option>Sabalgarh (Madhya Pradesh)</option>
							<option>Sadabad (Uttar Pradesh)</option>
							<option>Sadalagi (Karnataka)</option>
							<option>Sadasivpet (Telangana)</option>
							<option>Sadri (Rajasthan)</option>
							<option>Sadulpur (Rajasthan)</option>
							<option>Sadulshahar (Rajasthan)</option>
							<option>Safidon (Haryana)</option>
							<option>Safipur (Uttar Pradesh)</option>
							<option>Sagar (Madhya Pradesh)</option>
							<option>Sagara (Karnataka)</option>
							<option>Sagwara (Rajasthan)</option>
							<option>Saharanpur (Uttar Pradesh)</option>
							<option>Saharsa (Bihar)</option>
							<option>Sahaspur (Uttar Pradesh)</option>
							<option>Sahaswan (Uttar Pradesh)</option>
							<option>Sahawar (Uttar Pradesh)</option>
							<option>Sahibganj (Jharkhand)</option>
							<option>Sahjanwa (Uttar Pradesh)</option>
							<option>Saidpur (Uttar Pradesh)</option>
							<option>Saiha (Mizoram)</option>
							<option>Sailu (Maharashtra)</option>
							<option>Sainthia (West Bengal)</option>
							<option>Sakaleshapura (Karnataka)</option>
							<option>Sakti (Chhattisgarh)</option>
							<option>Salaya (Gujarat)</option>
							<option>Salem (Tamil Nadu)</option>
							<option>Salur (Andhra Pradesh)</option>
							<option>Samalkha (Haryana)</option>
							<option>Samalkot (Andhra Pradesh)</option>
							<option>Samana (Punjab)</option>
							<option>Samastipur (Bihar)</option>
							<option>Sambalpur (Odisha)</option>
							<option>Sambhal (Uttar Pradesh)</option>
							<option>Sambhar (Rajasthan)</option>
							<option>Samdhan (Uttar Pradesh)</option>
							<option>Samthar (Uttar Pradesh)</option>
							<option>Sanand (Gujarat)</option>
							<option>Sanawad (Madhya Pradesh)</option>
							<option>Sanchore (Rajasthan)</option>
							<option>Sandi (Uttar Pradesh)</option>
							<option>Sandila (Uttar Pradesh)</option>
							<option>Sanduru (Karnataka)</option>
							<option>Sangamner (Maharashtra)</option>
							<option>Sangareddy (Telangana)</option>
							<option>Sangaria (Rajasthan)</option>
							<option>Sangli (Maharashtra)</option>
							<option>Sangole (Maharashtra)</option>
							<option>Sangrur (Punjab)</option>
							<option>Sankarankovil (Tamil Nadu)</option>
							<option>Sankari (Tamil Nadu)</option>
							<option>Sankeshwara (Karnataka)</option>
							<option>Santipur (West Bengal)</option>
							<option>Sarangpur (Madhya Pradesh)</option>
							<option>Sardarshahar (Rajasthan)</option>
							<option>Sardhana (Uttar Pradesh)</option>
							<option>Sarni (Madhya Pradesh)</option>
							<option>Sarsod (Haryana)</option>
							<option>Sasaram (Bihar)</option>
							<option>Sasvad (Maharashtra)</option>
							<option>Satana (Maharashtra)</option>
							<option>Satara (Maharashtra)</option>
							<option>Sathyamangalam (Tamil Nadu)</option>
							<option>Satna (Madhya Pradesh)</option>
							<option>Sattenapalle (Andhra Pradesh)</option>
							<option>Sattur (Tamil Nadu)</option>
							<option>Saunda (Jharkhand)</option>
							<option>Saundatti-Yellamma (Karnataka)</option>
							<option>Sausar (Madhya Pradesh)</option>
							<option>Savanur (Karnataka)</option>
							<option>Savarkundla (Gujarat)</option>
							<option>Savner (Maharashtra)</option>
							<option>Sawai Madhopur (Rajasthan)</option>
							<option>Sawantwadi (Maharashtra)</option>
							<option>Sedam (Karnataka)</option>
							<option>Sehore (Madhya Pradesh)</option>
							<option>Sendhwa (Madhya Pradesh)</option>
							<option>Seohara (Uttar Pradesh)</option>
							<option>Seoni (Madhya Pradesh)</option>
							<option>Seoni-Malwa (Madhya Pradesh)</option>
							<option>Shahabad (Karnataka)</option>
							<option>Shahabad, Hardoi (Uttar Pradesh)</option>
							<option>Shahabad, Rampur (Uttar Pradesh)</option>
							<option>Shahade (Maharashtra)</option>
							<option>Shahbad (Haryana)</option>
							<option>Shahdol (Madhya Pradesh)</option>
							<option>Shahganj (Uttar Pradesh)</option>
							<option>Shahjahanpur (Uttar Pradesh)</option>
							<option>Shahpur (Karnataka)</option>
							<option>Shahpura (Rajasthan)</option>
							<option>Shajapur (Madhya Pradesh)</option>
							<option>Shamgarh (Madhya Pradesh)</option>
							<option>Shamli (Uttar Pradesh)</option>
							<option>Shamsabad, Agra (Uttar Pradesh)</option>
							<option>Shamsabad, Farrukhabad (Uttar Pradesh)</option>
							<option>Shegaon (Maharashtra)</option>
							<option>Sheikhpura (Bihar)</option>
							<option>Shendurjana (Maharashtra)</option>
							<option>Shenkottai (Tamil Nadu)</option>
							<option>Sheoganj (Rajasthan)</option>
							<option>Sheohar (Bihar)</option>
							<option>Sheopur (Madhya Pradesh)</option>
							<option>Sherghati (Bihar)</option>
							<option>Sherkot (Uttar Pradesh)</option>
							<option>Shiggaon (Karnataka)</option>
							<option>Shikaripur (Karnataka)</option>
							<option>Shikarpur, Bulandshahr (Uttar Pradesh)</option>
							<option>Shikohabad (Uttar Pradesh)</option>
							<option>Shillong (Meghalaya)</option>
							<option>Shimla (Himachal Pradesh)</option>
							<option>Shirdi (Maharashtra)</option>
							<option>Shirpur-Warwade (Maharashtra)</option>
							<option>Shirur (Maharashtra)</option>
							<option> Shishgarh (Uttar Pradesh)</option>
							<option>Shivamogga (Karnataka)</option>
							<option>Shivpuri (Madhya Pradesh)</option>
							<option>Sholavandan (Tamil Nadu)</option>
							<option>Sholingur (Tamil Nadu)</option>
							<option>Shoranur (Kerala)</option>
							<option>Shrigonda (Maharashtra)</option>
							<option>Shrirampur (Maharashtra)</option>
							<option>Shrirangapattana (Karnataka)</option>
							<option>Shujalpur (Madhya Pradesh)</option>
							<option>Siana (Uttar Pradesh)</option>
							<option>Sibsagar (Assam)</option>
							<option>Siddipet (Telangana)</option>
							<option>Sidhi (Madhya Pradesh)</option>
							<option>Sidhpur (Gujarat)</option>
							<option>Sidlaghatta (Karnataka)</option>
							<option>Sihor (Gujarat)</option>
							<option>Sihora (Madhya Pradesh)</option>
							<option>Sikanderpur (Uttar Pradesh)</option>
							<option>Sikandra Rao (Uttar Pradesh)</option>
							<option>Sikandrabad (Uttar Pradesh)</option>
							<option>Sikar (Rajasthan)</option>
							<option>Silao (Bihar)</option>
							<option>Silapathar (Assam)</option>
							<option>Silchar (Assam)</option>
							<option>Siliguri (West Bengal)</option>
							<option>Sillod (Maharashtra)</option>
							<option>Silvassa (Dadra and Nagar Haveli)</option>
							<option>Simdega (Jharkhand)</option>
							<option>Sindagi (Karnataka)</option>
							<option>Sindhagi (Karnataka)</option>
							<option>Sindhnur (Karnataka)</option>
							<option>Singrauli (Madhya Pradesh)</option>
							<option>Sinnar (Maharashtra)</option>
							<option>Sira (Karnataka)</option>
							<option>Sircilla (Telangana)</option>
							<option>Sirhind Fatehgarh Sahib (Punjab)</option>
							<option>Sirkali (Tamil Nadu)</option>
							<option>Sirohi (Rajasthan)</option>
							<option>Sironj (Madhya Pradesh)</option>
							<option>Sirsa (Haryana)</option>
							<option>Sirsaganj (Uttar Pradesh)</option>
							<option>Sirsi (Karnataka)</option>
							<option>Sirsi (Uttar Pradesh)</option>
							<option>Siruguppa (Karnataka)</option>
							<option>Sitamarhi (Bihar)</option>
							<option>Sitapur (Uttar Pradesh)</option>
							<option>Sitarganj (Uttarakhand)</option>
							<option>Sivaganga (Tamil Nadu)</option>
							<option>Sivagiri (Tamil Nadu)</option>
							<option>Sivakasi (Tamil Nadu)</option>
							<option>Siwan (Bihar)</option>
							<option>Sohagpur (Madhya Pradesh)</option>
							<option>Sohna (Haryana)</option>
							<option>Sojat (Rajasthan)</option>
							<option>Solan (Himachal Pradesh)</option>
							<option>Solapur (Maharashtra)</option>
							<option>Sonamukhi (West Bengal)</option>
							<option>Sonepur (Bihar)</option>
							<option>Songadh (Gujarat)</option>
							<option>Sonipat (Haryana)</option>
							<option>Sopore (Jammu and Kashmir)</option>
							<option>Soro (Odisha)</option>
							<option>Soron (Uttar Pradesh)</option>
							<option>Soyagaon (Maharashtra)</option>
							<option>Sri Madhopur (Rajasthan)</option>
							<option>Srikakulam (Andhra Pradesh)</option>
							<option>Srikalahasti (Andhra Pradesh)</option>
							<option>Srinagar (Jammu and Kashmir)</option>
							<option>Srinagar (Uttarakhand)</option>
							<option>Srinivaspur (Karnataka)</option>
							<option>Srirampore (West Bengal)</option>
							<option>Srisailam Township (Andhra Pradesh)</option>
							<option>Srivilliputhur (Tamil Nadu)</option>
							<option>Sugauli (Bihar)</option>
							<option>Sujangarh (Rajasthan)</option>
							<option>Sujanpur (Punjab)</option>
							<option>Sullurpeta (Andhra Pradesh)</option>
							<option>Sultanganj (Bihar)</option>
							<option>Sultanpur (Uttar Pradesh)</option>
							<option>Sumerpur (Rajasthan)</option>
							<option>Sumerpur (Uttar Pradesh)</option>
							<option>Sunabeda (Odisha)</option>
							<option>Sunam (Punjab)</option>
							<option>Sundargarh (Odisha)</option>
							<option>Sundarnagar (Himachal Pradesh)</option>
							<option>Supaul (Bihar)</option>
							<option>Surandai (Tamil Nadu)</option>
							<option>Surapura (Karnataka)</option>
							<option>Surat (Gujarat)</option>
							<option>Suratgarh (Rajasthan)</option>
							<option>Surban Agglomerationr (Uttar Pradesh)</option>
							<option>Suri (West Bengal)</option>
							<option>Suriyampalayam (Tamil Nadu)</option>
							<option>Suryapet (Telangana)</option>
							<option>Tadepalligudem (Andhra Pradesh)</option>
							<option>Tadpatri (Andhra Pradesh)</option>
							<option>Takhatgarh (Rajasthan)</option>
							<option>Taki (West Bengal)</option>
							<option>Talaja (Gujarat)</option>
							<option>Talcher (Odisha)</option>
							<option>Talegaon Dabhade (Maharashtra)</option>
							<option>Talikota (Karnataka)</option>
							<option>Taliparamba (Kerala)</option>
							<option>Talode (Maharashtra)</option>
							<option>Talwara (Punjab)</option>
							<option>Tamluk (West Bengal)</option>
							<option>Tanda (Uttar Pradesh)</option>
							<option>Tandur (Telangana)</option>
							<option>Tanuku (Andhra Pradesh)</option>
							<option>Tarakeswar (West Bengal)</option>
							<option>Tarana (Madhya Pradesh)</option>
							<option>Taranagar (Rajasthan)</option>
							<option>Taraori (Haryana)</option>
							<option>Tarbha (Odisha)</option>
							<option>Tarikere (Karnataka)</option>
							<option>Tarn Taran (Punjab)</option>
							<option>Tasgaon (Maharashtra)</option>
							<option>Tehri (Uttarakhand)</option>
							<option>Tekkalakote (Karnataka)</option>
							<option>Tenali (Andhra Pradesh)</option>
							<option>Tenkasi (Tamil Nadu)</option>
							<option>Tenu dam-cum-Kathhara (Jharkhand)</option>
							<option>Terdal (Karnataka)</option>
							<option>Tezpur (Assam)</option>
							<option>Thakurdwara (Uttar Pradesh)</option>
							<option>Thammampatti (Tamil Nadu)</option>
							<option>Thana Bhawan (Uttar Pradesh)</option>
							<option>Thane (Maharashtra)</option>
							<option>Thanesar (Haryana)</option>
							<option>Thangadh (Gujarat)</option>
							<option>Thanjavur (Tamil Nadu)</option>
							<option>Tharad (Gujarat)</option>
							<option>Tharamangalam (Tamil Nadu)</option>
							<option>Tharangambadi (Tamil Nadu)</option>
							<option>Theni Allinagaram (Tamil Nadu)</option>
							<option>Thirumangalam (Tamil Nadu)</option>
							<option>Thirupuvanam (Tamil Nadu)</option>
							<option>Thiruthuraipoondi (Tamil Nadu)</option>
							<option>Thiruvalla (Kerala)</option>
							<option>Thiruvallur (Tamil Nadu)</option>
							<option>Thiruvananthapuram (Kerala)</option>
							<option>Thiruvarur (Tamil Nadu)</option>
							<option>Thodupuzha (Kerala)</option>
							<option>Thoubal (Manipur)</option>
							<option>Thrissur (Kerala)</option>
							<option>Thuraiyur (Tamil Nadu)</option>
							<option>Tikamgarh (Madhya Pradesh)</option>
							<option>Tilda Newra (Chhattisgarh)</option>
							<option>Tilhar (Uttar Pradesh)</option>
							<option>Tindivanam (Tamil Nadu)</option>
							<option>Tinsukia (Assam)</option>
							<option>Tiptur (Karnataka)</option>
							<option>Tirora (Maharashtra)</option>
							<option>Tiruchendur (Tamil Nadu)</option>
							<option>Tiruchengode (Tamil Nadu)</option>
							<option>Tiruchirappalli (Tamil Nadu)</option>
							<option>Tirukalukundram (Tamil Nadu)</option>
							<option>Tirukkoyilur (Tamil Nadu)</option>
							<option>Tirunelveli (Tamil Nadu)</option>
							<option>Tirupathur (Tamil Nadu)</option>
							<option>Tirupathur (Tamil Nadu)</option>
							<option>Tirupati (Andhra Pradesh)</option>
							<option>Tiruppur (Tamil Nadu)</option>
							<option>Tirur (Kerala)</option>
							<option>Tiruttani (Tamil Nadu)</option>
							<option>Tiruvannamalai (Tamil Nadu)</option>
							<option>Tiruvethipuram (Tamil Nadu)</option>
							<option>Tiruvuru (Andhra Pradesh)</option>
							<option>Tirwaganj (Uttar Pradesh)</option>
							<option>Titlagarh (Odisha)</option>
							<option>Tittakudi (Tamil Nadu)</option>
							<option>Todabhim (Rajasthan)</option>
							<option>Todaraisingh (Rajasthan)</option>
							<option>Tohana (Haryana)</option>
							<option>Tonk (Rajasthan)</option>
							<option>Tuensang (Nagaland)</option>
							<option>Tuljapur (Maharashtra)</option>
							<option>Tulsipur (Uttar Pradesh)</option>
							<option>Tumkur (Karnataka)</option>
							<option>Tumsar (Maharashtra)</option>
							<option>Tundla (Uttar Pradesh)</option>
							<option>Tuni (Andhra Pradesh)</option>
							<option>Tura (Meghalaya)</option>
							<option>Uchgaon (Maharashtra)</option>
							<option>Udaipur (Rajasthan)</option>
							<option>Udaipur (Tripura)</option>
							<option>Udaipurwati (Rajasthan)</option>
							<option>Udgir (Maharashtra)</option>
							<option>Udhagamandalam (Tamil Nadu)</option>
							<option>Udhampur (Jammu and Kashmir)</option>
							<option>Udumalaipettai (Tamil Nadu)</option>
							<option>Udupi (Karnataka)</option>
							<option>Ujhani (Uttar Pradesh)</option>
							<option>Ujjain (Madhya Pradesh)</option>
							<option>Umarga (Maharashtra)</option>
							<option>Umaria (Madhya Pradesh)</option>
							<option>Umarkhed (Maharashtra)</option>
							<option>Umbergaon (Gujarat)</option>
							<option>Umred (Maharashtra)</option>
							<option>Umreth (Gujarat)</option>
							<option>Una (Gujarat)</option>
							<option>Unjha (Gujarat)</option>
							<option>Unnamalaikadai (Tamil Nadu)</option>
							<option>Unnao (Uttar Pradesh)</option>
							<option>Upleta (Gujarat)</option>
							<option>Uran (Maharashtra)</option>
							<option>Uran Islampur (Maharashtra)</option>
							<option>Uravakonda (Andhra Pradesh)</option>
							<option>Urmar Tanda (Punjab)</option>
							<option>Usilampatti (Tamil Nadu)</option>
							<option> Uthamapalayam (Tamil Nadu)</option>
							<option>Uthiramerur (Tamil Nadu)</option>
							<option>Utraula (Uttar Pradesh)</option>
							<option>Vadakkuvalliyur (Tamil Nadu)</option>
							<option>Vadalur (Tamil Nadu)</option>
							<option>Vadgaon Kasba (Maharashtra)</option>
							<option>Vadipatti (Tamil Nadu)</option>
							<option>Vadnagar (Gujarat)</option>
							<option>Vadodara (Gujarat)</option>
							<option>Vaijapur (Maharashtra)</option>
							<option>Vaikom (Kerala)</option>
							<option>Valparai (Tamil Nadu)</option>
							<option>Valsad (Gujarat)</option>
							<option>Vandavasi (Tamil Nadu)</option>
							<option>Vaniyambadi (Tamil Nadu)</option>
							<option>Vapi (Gujarat)</option>
							<option>Varanasi (Uttar Pradesh)</option>
							<option>Varkala (Kerala)</option>
							<option>Vasai-Virar (Maharashtra)</option>
							<option>Vatakara (Kerala)</option>
							<option>Vedaranyam (Tamil Nadu)</option>
							<option>Vellakoil (Tamil Nadu)</option>
							<option>Vellore (Tamil Nadu)</option>
							<option>Venkatagiri (Andhra Pradesh)</option>
							<option>Veraval (Gujarat)</option>
							<option>Vidisha (Madhya Pradesh)</option>
							<option>Vijainagar, Ajmer (Rajasthan)</option>
							<option>Vijapur (Gujarat)</option>
							<option>Vijayapura (Karnataka)</option>
							<option>Vijayawada (Andhra Pradesh)</option>
							<option>Vijaypur (Madhya Pradesh)</option>
							<option>Vikarabad (Telangana)</option>
							<option>Vikramasingapuram (Tamil Nadu)</option>
							<option>Viluppuram (Tamil Nadu)</option>
							<option>Vinukonda (Andhra Pradesh)</option>
							<option>Viramgam (Gujarat)</option>
							<option>Virudhachalam (Tamil Nadu)</option>
							<option>Virudhunagar (Tamil Nadu)</option>
							<option>Visakhapatnam (Andhra Pradesh)</option>
							<option>Visnagar (Gujarat)</option>
							<option>Viswanatham (Tamil Nadu)</option>
							<option>Vita (Maharashtra)</option>
							<option>Vizianagaram (Andhra Pradesh)</option>
							<option>Vrindavan (Uttar Pradesh)</option>
							<option>Vyara (Gujarat)</option>
							<option>Wadgaon Road (Maharashtra)</option>
							<option>Wadhwan (Gujarat)</option>
							<option>Wadi (Karnataka)</option>
							<option>Wai (Maharashtra)</option>
							<option>Wanaparthy (Telangana)</option>
							<option>Wani (Maharashtra)</option>
							<option>Wankaner (Gujarat)</option>
							<option> Wara Seoni (Madhya Pradesh)</option>
							<option>Warangal (Telangana)</option>
							<option>Wardha (Maharashtra)</option>
							<option>Warhapur (Uttar Pradesh)</option>
							<option>Warisaliganj (Bihar)</option>
							<option>Warora (Maharashtra)</option>
							<option>Warud (Maharashtra)</option>
							<option>Washim (Maharashtra)</option>
							<option>Wokha (Nagaland)</option>
							<option>Yadgir (Karnataka)</option>
							<option>Yamunanagar (Haryana)</option>
							<option>Yanam (Puducherry)</option>
							<option>Yavatmal (Maharashtra)</option>
							<option>Yawal (Maharashtra)</option>
							<option>Yellandu (Telangana)</option>
							<option>Yemmiganur (Andhra Pradesh)</option>
							<option>Yerraguntla (Andhra Pradesh)</option>
							<option>Yevla (Maharashtra)</option>
							<option>Zaidpur (Uttar Pradesh)</option>
							<option>Zamania (Uttar Pradesh)</option>
							<option>Zira (Punjab)</option>
							<option>Zirakpur (Punjab)</option>
							<option>Zunheboto (Nagaland)</option>
							
					  </select> </font>	  
					  
  </div>
  
  <div class="tab"><font color="#000000" size="+1">Contact Info:</font><br>
  
    <p><font color="#000000"><input placeholder="E-mail..." oninput="this.className = ''" name="email1" id="email1" ></font></p><br>
	
    <p><table width="100%">
		<tr>
			<td width="50%"><font color="#000000"><input placeholder="First Name..." id="fname" oninput="this.className = ''" name="fname"></font></td>
			
			<td width="50%"><font color="#000000"><input placeholder="Last Name..." oninput="this.className = ''" name="lname" id="lname"></font></td>
			
		</tr>
		</table></p><br>
		
	<p><font color="#000000"><input placeholder="Mobile..." oninput="this.className = ''" name="mobile1" id="mobile1" ></font></p><br>
	
	 <font color="#000000">
           <input list="cityulive" name="cityulive">   
             <datalist name="cityulive" id="cityulive">
	 
							<option>Please select Current City.</option>
							<option value="achalpur">Achalpur (Maharashtra)</option>
							<option>Achhnera (Uttar Pradesh))</option>
							<option>Adalaj (Gujarat)</option>
							<option>Adilabad (Telangana)</option>
							<option>Adityapur (Jharkhand)</option>
							<option>Adoni (Andhra Pradesh)</option>
							<option>Adoor (Kerala)</option>
							<option>Adra (West Bengal))</option>
							<option>Adyar (Karnataka)</option>
							<option>Afzalpur (Karnataka)</option>
							<option>Agartala (Tripura)</option>
							<option>Agra (Uttar Pradesh)</option>
							<option>Ahmedabad (Gujarat)</option>
							<option>Ahmednagar (Maharashtra)</option>
							<option>Aizawl (Mizoram)</option>
							<option>Ajmer (Rajasthan)</option>
							<option>Akola (Maharashtra)</option>
							<option>Akot (Maharashtra)</option>
							<option>Alappuzha (Kerala)</option>
							<option>Aligarh (Uttar Pradesh)</option>
							<option>AlipurdUrban Agglomerationr (West Bengal)</option>
							<option>Alirajpur (Madhya Pradesh)</option>
							<option>Allahabad (Uttar Pradesh)</option>
							<option>Alwar (Rajasthan)</option>
							<option>Amalapuram (Andhra Pradesh)</option>
							<option>Amalner (Maharashtra)</option>
							<option>Ambejogai (Maharashtra)</option>
							<option>Ambikapur (Chhattisgarh)</option>
							<option>Amravati (Maharashtra)</option>
							<option>Amreli (Gujarat)</option>
							<option>Amritsar (Punjab)</option>
							<option>Amroha (Uttar Pradesh)</option>
							<option>Anakapalle (Andhra Pradesh)</option>
							<option>Anand (Gujarat)</option>
							<option>Anantapur (Andhra Pradesh)</option>
							<option>Anantnag (Jammu and Kashmir)</option>
							<option>Anjangaon (Maharashtra)</option>
							<option>Anjar (Gujarat)</option>
							<option>Ankleshwar (Gujarat)</option>
							<option>Arakkonam (Tamil Nadu)</option>
							<option>Arambagh (West Bengal)</option>
							<option>Araria (Bihar)</option>
							<option>Arrah (Bihar)</option>
							<option>Arsikere (Karnataka)</option>
							<option>Aruppukkottai (Tamil Nadu)</option>
							<option>Arvi (Maharashtra)</option>
							<option>Arwal (Bihar)</option>
							<option>Asansol (West Bengal)</option>
							<option>Asarganj (Bihar)</option>
							<option>Ashok Nagar (Madhya Pradesh)</option>
							<option>Athni (Karnataka)</option>
							<option>Attingal (Kerala)</option>
							<option>Aurangabad (Maharashtra)</option>
							<option>Aurangabad (Bihar)</option>
							<option>Azamgarh (Uttar Pradesh)</option>
							<option>Bagaha (Bihar)</option>
							<option>Bageshwar (Uttarakhand)</option>
							<option>Bahadurgarh (Haryana)</option>
							<option>Baharampur (West Bengal)</option>
							<option>Bahraich (Uttar Pradesh)</option>
							<option>Balaghat (Madhya Pradesh)</option>
							<option>Balangir (Odisha)</option>
							<option>Baleshwar Town (Odisha)</option>
							<option>Ballari (Karnataka)</option>
							<option>Balurghat (West Bengal)</option>
							<option>Bankura (West Bengal)</option>
							<option>Bapatla (Andhra Pradesh)</option>
							<option>Baramula (Jammu and Kashmir)</option>
							<option>Barbil (Odisha)</option>
							<option>Bargarh (Odisha)</option>
							<option>Barh (Bihar)</option>
							<option>Baripada Town (Odisha)</option>
							<option>Barmer (Rajasthan)</option>
							<option>Barnala (Punjab)</option>
							<option>Barpeta (Assam)</option>
							<option>Batala (Punjab)</option>
							<option>Bathinda (Punjab)</option>
							<option>Begusarai (Bihar)</option>
							<option>Belagavi (Karnataka)</option>
							<option>Bellampalle (Telangana)</option>
							<option>Belonia (Tripura)</option>
							<option>Bengaluru (Karnataka)</option>
							<option>Bettiah (Bihar)</option>
							<option>BhabUrban Agglomeration (Bihar)</option>
							<option>Bhadrachalam (Telangana)</option>
							<option>Bhadrak (Odisha)</option>
							<option>Bhagalpur (Bihar)</option>
							<option>Bhainsa (Telangana)</option>
							<option>Bharatpur (Rajasthan)</option>
							<option>Bharuch (Gujarat)</option>
							<option>Bhatapara (Chhattisgarh)</option>
							<option>Bhavnagar (Gujarat)</option>
							<option>Bhawanipatna (Odisha)</option>
							<option>Bheemunipatnam (Andhra Pradesh)</option>
							<option>Bhilai Nagar (Chhattisgarh)</option>
							<option>Bhilwara (Rajasthan)</option>
							<option>Bhimavaram (Andhra Pradesh)</option>
							<option>Bhiwandi (Maharashtra)</option>
							<option>Bhiwani (Haryana)</option>
							<option>Bhongir (Telangana)</option>
							<option>Bhopal (Madhya Pradesh)</option>
							<option>Bhubaneswar (Odisha)</option>
							<option>Bhuj (Gujarat)</option>
							<option>Bikaner (Rajasthan)</option>
							<option>Bilaspur (Chhattisgarh)</option>
							<option>Bobbili (Andhra Pradesh)</option>
							<option>Bodhan (Telangana)</option>
							<option>Bokaro Steel City (Jharkhand)</option>
							<option>Bongaigaon City (Assam)</option>
							<option>Brahmapur (Odisha)</option>
							<option>Buxar (Bihar)</option>
							<option>Byasanagar (Odisha)</option>
							<option>Chaibasa (Jharkhand)</option>
							<option>Chalakudy (Kerala)</option>
							<option>Chandausi (Uttar Pradesh)</option>
							<option>Chandigarh (Chandigarh)</option>
							<option>Changanassery (Kerala)</option>
							<option>Charkhi Dadri (Haryana)</option>
							<option>Chatra (Jharkhand)</option>
							<option>Chennai (Tamil Nadu)</option>
							<option>Cherthala (Kerala)</option>
							<option>Chhapra (Bihar)</option>
							<option>Chhapra (Gujarat)</option>
							<option>Chikkamagaluru (Karnataka)</option>
							<option>Chilakaluripet (Andhra Pradesh)</option>
							<option>Chirala (Andhra Pradesh)</option>
							<option>Chirkunda (Jharkhand)</option>
							<option>Chirmiri (Chhattisgarh)</option>
							<option>Chittoor (Andhra Pradesh)</option>
							<option>Chittur-Thathamangalam (Kerala)</option>
							<option>Coimbatore (Tamil Nadu)</option>
							<option>Cuttack (Odisha)</option>
							<option>Dalli-Rajhara (Chhattisgarh)</option>
							<option>Darbhanga (Bihar)</option>
							<option>Darjiling (West Bengal)</option>
							<option>Davanagere (Karnataka)</option>
							<option>Deesa (Gujarat)</option>
							<option>Dehradun (Uttarakhand)</option>
							<option> Dehri-on-Sone (Bihar)</option>
							<option>Delhi (Delhi)</option>
							<option>Deoghar (Jharkhand)</option>
							<option>Dhamtari (Chhattisgarh)</option>
							<option>Dhanbad (Jharkhand)</option>
							<option>Dharmanagar (Tripura)</option>
							<option>Dharmavaram (Andhra Pradesh)</option>
							<option>Dhenkanal (Odisha)</option>
							<option>Dhoraji (Gujarat)</option>
							<option>Dhubri (Assam)</option>
							<option>Dhule (Maharashtra)</option>
							<option>Dhuri (Punjab)</option>
							<option>Dibrugarh (Assam)</option>
							<option>Dimapur (Nagaland)</option>
							<option>Diphu (Assam)</option>
							<option>Dumka (Jharkhand)</option>
							<option>Dumraon (Bihar)</option>
							<option>Durg (Chhattisgarh)</option>
							<option>Eluru (Andhra Pradesh)</option>
							<option>English Bazar (West Bengal)</option>
							<option>Erode (Tamil Nadu)</option>
							<option>Etawah (Uttar Pradesh)</option>
							<option>Faridabad (Haryana)</option>
							<option>Faridkot (Punjab)</option>
							<option>Farooqnagar (Telangana)</option>
							<option>Fatehabad (Haryana)</option>
							<option>Fatehpur Sikri (Uttar Pradesh)</option>
							<option>Fazilka (Punjab)</option>
							<option>Firozabad (Uttar Pradesh)</option>
							<option>Firozpur (Punjab)</option>
							<option>Firozpur Cantt. (Punjab)</option>
							<option>Forbesganj (Bihar)</option>
							<option>Gadwal (Telangana)</option>
							<option>Gangarampur (West Bengal)</option>
							<option>Ganjbasoda (Madhya Pradesh)</option>
							<option>Gaya (Bihar)</option>
							<option>Giridih (Jharkhand)</option>
							<option>Goalpara (Assam)</option>
							<option>Gobichettipalayam (Tamil Nadu)</option>
							<option>Gobindgarh (Punjab)</option>
							<option>Godhra (Gujarat)</option>
							<option>Gohana (Haryana)</option>
							<option>Gokak (Karnataka)</option>
							<option>Gooty (Andhra Pradesh)</option>
							<option>Gopalganj (Bihar)</option>
							<option>Gudivada (Andhra Pradesh)</option>
							<option>Gudur (Andhra Pradesh)</option>
							<option>Gumia (Jharkhand)</option>
							<option>Guntakal (Andhra Pradesh)</option>
							<option>Guntur (Andhra Pradesh)</option>
							<option>Gurdaspur (Punjab)</option>
							<option>Gurgaon (Haryana)</option>
							<option>Guruvayoor (Kerala)</option>
							<option>Guwahati (Assam)</option>
							<option>Gwalior (Madhya Pradesh)</option>
							<option>Habra (West Bengal)</option>
							<option>Hajipur (Bihar)</option>
							<option>Haldwani-cum-Kathgodam (Uttarakhand)</option>
							<option>Hansi (Haryana)</option>
							<option>Hapur (Uttar Pradesh)</option>
							<option>Hardoi  (Uttar Pradesh)</option>
							<option>Hardwar (Uttarakhand)</option>
							<option>Hazaribag (Jharkhand)</option>
							<option>Hindupur (Andhra Pradesh)</option>
							<option>Hisar (Haryana)</option>
							<option>Hoshiarpur (Punjab)</option>
							<option>Hubli-Dharwad (Karnataka)</option>
							<option>Hugli-Chinsurah (West Bengal)</option>
							<option>Hyderabad (Telangana)</option>
							<option>Ichalkaranji (Maharashtra)</option>
							<option>Imphal (Manipur)</option>
							<option>Indore (Madhya Pradesh)</option>
							<option>Itarsi (Madhya Pradesh)</option>
							<option>Jabalpur (Madhya Pradesh)</option>
							<option>Jagdalpur (Chhattisgarh)</option>
							<option>Jaggaiahpet (Andhra Pradesh)</option>
							<option>Jagraon (Punjab)</option>
							<option>Jagtial (Telangana)</option>
							<option>Jaipur (Rajasthan)</option>
							<option>Jalandhar (Punjab)</option>
							<option>Jalandhar Cantt. (Punjab)</option>
							<option>Jalpaiguri (West Bengal)</option>
							<option>Jamalpur (Bihar)</option>
							<option>Jammalamadugu (Andhra Pradesh)</option>
							<option>Jammu (Jammu and Kashmir)</option>
							<option>Jamnagar (Gujarat)</option>
							<option>Jamshedpur (Jharkhand)</option>
							<option>Jamui (Bihar)</option>
							<option>Jangaon (Telangana)</option>
							<option>Jatani (Odisha)</option>
							<option>Jehanabad (Bihar)</option>
							<option>Jhansi (Uttar Pradesh)</option>
							<option>Jhargram (West Bengal)</option>
							<option>Jharsuguda (Odisha)</option>
							<option>Jhumri Tilaiya (Jharkhand)</option>
							<option>Jind (Haryana)</option>
							<option>Jodhpur (Rajasthan)</option>
							<option>Jorhat (Assam)</option>
							<option>Kadapa (Andhra Pradesh)</option>
							<option>Kadi (Gujarat)</option>
							<option>Kadiri (Andhra Pradesh)</option>
							<option>Kagaznagar (Telangana)</option>
							<option>Kailasahar (Tripura)</option>
							<option>Kaithal (Haryana)</option>
							<option>Kakinada (Andhra Pradesh)</option>
							<option>Kalimpong (West Bengal)</option>
							<option>Kalpi (Uttar Pradesh)</option>
							<option>Kalyan-Dombivali (Maharashtra)</option>
							<option>Kamareddy (Telangana)</option>
							<option>Kancheepuram (Tamil Nadu)</option>
							<option>Kandukur (Andhra Pradesh)</option>
							<option>Kanhangad (Kerala)</option>
							<option>Kannur (Kerala)</option>
							<option>Kanpur (Uttar Pradesh)</option>
							<option>Kapadvanj (Gujarat)</option>
							<option>Kapurthala (Punjab)</option>
							<option>Karaikal (Puducherry)</option>
							<option>Karimganj (Assam)</option>
							<option>Karimnagar (Telangana)</option>
							<option>Karjat (Maharashtra)</option>
							<option>Karnal (Haryana)</option>
							<option>Karur (Tamil Nadu)</option>
							<option>Karwar (Karnataka)</option>
							<option>Kasaragod (Kerala)</option>
							<option>Kashipur (Uttarakhand)</option>
							<option>KathUrban Agglomeration (Jammu and Kashmir)</option>
							<option>Katihar (Bihar)</option>
							<option>Kavali (Andhra Pradesh)</option>
							<option>Kayamkulam (Kerala)</option>
							<option>Kendrapara (Odisha)</option>
							<option>Kendujhar (Odisha)</option>
							<option>Keshod (Gujarat)</option>
							<option>Khair (Uttar Pradesh)</option>
							<option>Khambhat (Gujarat)</option>
							<option>Khammam (Telangana)</option>
							<option>Khanna (Punjab)</option>
							<option>Kharagpur (West Bengal)</option>
							<option>Kharar (Punjab)</option>
							<option>Khowai (Tripura)</option>
							<option>Kishanganj (Bihar)</option>
							<option>Kochi (Kerala)</option>
							<option>Kodungallur (Kerala)</option>
							<option>Kohima (Nagaland)</option>
							<option>Kolar (Karnataka)</option>
							<option>Kolkata (West Bengal)</option>
							<option>Kollam (Kerala)</option>
							<option>Koratla (Telangana)</option>
							<option>Korba (Chhattisgarh)</option>
							<option>Kot Kapura (Punjab)</option>
							<option>Kothagudem (Telangana)</option>
							<option>Kottayam (Kerala)</option>
							<option>Kovvur (Andhra Pradesh)</option>
							<option>Koyilandy (Kerala)</option>
							<option>Kozhikode (Kerala)</option>
							<option>Kunnamkulam (Kerala)</option>
							<option>Kurnool (Andhra Pradesh)</option>
							<option>Kyathampalle (Telangana)</option>
							<option>Lachhmangarh (Rajasthan)</option>
							<option>Ladnu (Rajasthan)</option>
							<option>Ladwa (Haryana)</option>
							<option>Lahar (Madhya Pradesh)</option>
							<option>Laharpur (Uttar Pradesh)</option>
							<option>Lakheri (Rajasthan)</option>
							<option>Lakhimpur (Uttar Pradesh)</option>
							<option>Lakhisarai (Bihar)</option>
							<option>Lakshmeshwar (Karnataka)</option>
							<option>Lal Gopalganj Nindaura (Uttar Pradesh)</option>
							<option>Lalganj (Bihar)</option>
							<option>Lalganj (Uttar Pradesh)</option>
							<option>Lalgudi (Tamil Nadu)</option>
							<option>Lalitpur (Uttar Pradesh)</option>
							<option>Lalsot (Rajasthan)</option>
							<option>Lanka (Assam)</option>
							<option>Lar (Uttar Pradesh)</option>
							<option>Lathi (Gujarat)</option>
							<option>Latur (Maharashtra)</option>
							<option>Lilong (Manipur)</option>
							<option>Limbdi (Gujarat)</option>
							<option>Lingsugur (Karnataka)</option>
							<option>Loha (Maharashtra)</option>
							<option>Lohardaga (Jharkhand)</option>
							<option>Lonar (Maharashtra)</option>
							<option>Lonavla (Maharashtra)</option>
							<option>Longowal (Punjab)</option>
							<option>Loni (Uttar Pradesh)</option>
							<option>Losal (Rajasthan)</option>
							<option>Lucknow (Uttar Pradesh)</option>
							<option>Ludhiana (Punjab)</option>
							<option>Lumding (Assam)</option>
							<option>Lunawada (Gujarat)</option>
							<option>Lunglei (Mizoram)</option>
							<option>Macherla (Andhra Pradesh)</option>
							<option>Machilipatnam (Andhra Pradesh)</option>
							<option>Madanapalle (Andhra Pradesh)</option>
							<option>Maddur (Karnataka)</option>
							<option>Madhepura (Bihar)</option>
							<option>Madhubani (Bihar)</option>
							<option>Madhugiri (Karnataka)</option>
							<option>Madhupur (Jharkhand)</option>
							<option>Madikeri (Karnataka)</option>
							<option>Madurai (Tamil Nadu)</option>
							<option>Magadi (Karnataka)</option>
							<option>Mahad (Maharashtra)</option>
							<option>Mahalingapura (Karnataka)</option>
							<option>Maharajganj (Bihar)</option>
							<option>Maharajpur (Madhya Pradesh)</option>
							<option>Mahasamund (Chhattisgarh)</option>
							<option>Mahbubnagar (Telangana)</option>
							<option>Mahe (Puducherry)</option>
							<option>Mahemdabad (Gujarat)</option>
							<option>Mahendragarh (Haryana)</option>
							<option>Mahesana (Gujarat)</option>
							<option>Mahidpur (Madhya Pradesh)</option>
							<option>Mahnar Bazar (Bihar)</option>
							<option>Mahuva (Gujarat)</option>
							<option>Maihar (Madhya Pradesh)</option>
							<option>Mainaguri (West Bengal)</option>
							<option>Makhdumpur (Bihar)</option>
							<option>Makrana (Rajasthan)</option>
							<option>Malaj Khand (Madhya Pradesh)</option>
							<option>Malappuram (Kerala)</option>
							<option>Malavalli (Karnataka)</option>
							<option>Malda (West Bengal)</option>
							<option>Malegaon (Maharashtra)</option>
							<option>Malerkotla (Punjab)</option>
							<option>Malkangiri (Odisha)</option>
							<option>Malkapur (Maharashtra)</option>
							<option>Malout (Punjab)</option>
							<option>Malpura (Rajasthan)</option>
							<option>Malur (Karnataka)</option>
							<option>Manachanallur (Tamil Nadu)</option>
							<option>Manasa (Madhya Pradesh)</option>
							<option>Manavadar (Gujarat)</option>
							<option>Manawar (Madhya Pradesh)</option>
							<option>Mancherial (Telangana)</option>
							<option>Mandalgarh (Rajasthan)</option>
							<option>Mandamarri (Telangana)</option>
							<option>Mandapeta (Andhra Pradesh)</option>
							<option>Mandawa (Rajasthan)</option>
							<option>Mandi (Himachal Pradesh)</option>
							<option>Mandi Dabwali (Haryana)</option>
							<option>Mandideep (Madhya Pradesh)</option>
							<option>Mandla (Madhya Pradesh)</option>
							<option>Mandsaur (Madhya Pradesh)</option>
							<option>Mandvi (Gujarat)</option>
							<option>Mandya (Karnataka)</option>
							<option>Manendragarh (Chhattisgarh)</option>
							<option>Maner (Bihar)</option>
							<option>Mangaldoi (Assam)</option>
							<option>Mangaluru (Karnataka)</option>
							<option>Mangalvedhe (Maharashtra)</option>
							<option>Manglaur (Uttarakhand)</option>
							<option>Mangrol (Gujarat)</option>
							<option>Mangrol (Rajasthan)</option>
							<option>Mangrulpir (Maharashtra)</option>
							<option>Manihari (Bihar)</option>
							<option>Manjlegaon (Maharashtra)</option>
							<option>Mankachar (Assam)</option>
							<option>Manmad (Maharashtra)</option>
							<option>Mansa (Punjab)</option>
							<option>Mansa (Gujarat)</option>
							<option>Manvi (Karnataka)</option>
							<option>Manwath (Maharashtra)</option>
							<option>Mapusa (Goa)</option>
							<option>Margao (Goa)</option>
							<option>Margherita (Assam)</option>
							<option>Marhaura (Bihar)</option>
							<option>Mariani (Assam)</option>
							<option>Marigaon (Assam)</option>
							<option>Markapur (Andhra Pradesh)</option>
							<option>Marmagao (Goa)</option>
							<option>Masaurhi (Bihar)</option>
							<option>Mathabhanga (West Bengal)</option>
							<option>Mathura (Uttar Pradesh)</option>
							<option>Mattannur (Kerala)</option>
							<option>Mauganj (Madhya Pradesh)</option>
							<option>Mavelikkara (Kerala)</option>
							<option>Mavoor (Kerala)</option>
							<option>Mayang Imphal (Manipur)</option>
							<option>Medak (Telangana)</option>
							<option>Medininagar (Daltonganj) (Jharkhand)</option>
							<option>Medinipur (West Bengal)</option>
							<option>Meerut (Uttar Pradesh)</option>
							<option>Mehkar (Maharashtra)</option>
							<option>Memari (West Bengal)</option>
							<option>Merta City (Rajasthan)</option>
							<option>Mhaswad (Maharashtra)</option>
							<option>Mhow Cantonment (Madhya Pradesh)</option>
							<option>Mhowgaon (Madhya Pradesh)</option>
							<option>Mihijam (Jharkhand)</option>
							<option>Mira-Bhayandar (Maharashtra)</option>
							<option>Mirganj (Bihar)</option>
							<option>Miryalaguda (Telangana)</option>
							<option>Modasa (Gujarat)</option>
							<option>Modinagar (Uttar Pradesh)</option>
							<option>Moga (Punjab)</option>
							<option>Mohali (Punjab)</option>
							<option>Mokameh (Bihar)</option>
							<option>Mokokchung (Nagaland)</option>
							<option>Monoharpur (West Bengal)</option>
							<option>Moradabad (Uttar Pradesh)</option>
							<option>Morena (Madhya Pradesh)</option>
							<option>Morinda (Punjab)</option>
							<option>Morshi (Maharashtra)</option>
							<option>Morvi (Gujarat)</option>
							<option>Motihari (Bihar)</option>
							<option>Motipur (Bihar)</option>
							<option>Mount Abu (Rajasthan)</option>
							<option>Mudabidri (Karnataka)</option>
							<option>Mudalagi (Karnataka)</option>
							<option>Muddebihal (Karnataka)</option>
							<option>Mudhol (Karnataka)</option>
							<option>Mukerian (Punjab)</option>
							<option>Mukhed (Maharashtra)</option>
							<option>Muktsar (Punjab)</option>
							<option>Mul (Maharashtra)</option>
							<option>Mulbagal (Karnataka)</option>
							<option>Multai (Madhya Pradesh)</option>
							<option>Mumbai (Maharashtra)</option>
							<option>Mundargi (Karnataka)</option>
							<option>Mundi (Madhya Pradesh)</option>
							<option>Mungeli (Chhattisgarh)</option>
							<option>Munger (Bihar)</option>
							<option>Murliganj (Bihar)</option>
							<option>Murshidabad (West Bengal)</option>
							<option>Murtijapur (Maharashtra)</option>
							<option>Murwara (Katni) (Madhya Pradesh)</option>
							<option>Musabani (Jharkhand)</option>
							<option>Mussoorie (Uttarakhand)</option>
							<option>Muvattupuzha (Kerala)</option>
							<option>Muzaffarpur (Bihar)</option>
							<option>Mysore (Karnatka)</option>
							<option>Nabadwip (West Bengal)</option>
							<option>Nabarangapur (Odisha)</option>
							<option>Nabha (Punjab)</option>
							<option>Nadbai (Rajasthan)</option>
							<option>Nadiad (Gujarat)</option>
							<option>Nagaon (Assam)</option>
							<option>Nagapattinam (Tamil Nadu)</option>
							<option>Nagari (Andhra Pradesh)</option>
							<option>Nagarkurnool (Telangana)</option>
							<option>Nagaur (Rajasthan)</option>
							<option>Nagda (Madhya Pradesh)</option>
							<option>Nagercoil (Tamil Nadu)</option>
							<option>Nagina (Uttar Pradesh)</option>
							<option>Nagla (Uttarakhand)</option>
							<option>Nagpur (Maharashtra)</option>
							<option>Nahan (Himachal Pradesh)</option>
							<option>Naharlagun (Arunachal Pradesh)</option>
							<option>Naidupet (Andhra Pradesh)</option>
							<option>Naihati (West Bengal)</option>
							<option>Naila Janjgir (Chhattisgarh)</option>
							<option>Nainital (Uttarakhand)</option>
							<option>Nainpur (Madhya Pradesh)</option>
							<option>Najibabad (Uttar Pradesh)</option>
							<option>Nakodar (Punjab)</option>
							<option>Nakur (Uttar Pradesh)</option>
							<option>Nalbari (Assam)</option>
							<option>Namagiripettai (Tamil Nadu)</option>
							<option>Namakkal (Tamil Nadu)</option>
							<option>Nanded-Waghala (Maharashtra)</option>
							<option>Nandgaon (Maharashtra)</option>
							<option>Nandivaram-Guduvancheri (Tamil Nadu)</option>
							<option>Nandura (Maharashtra)</option>
							<option>Nandurbar (Maharashtra)</option>
							<option>Nandyal (Andhra Pradesh)</option>
							<option>Nangal (Punjab)</option>
							<option>Nanjangud (Karnataka)</option>
							<option>Nanjikottai (Tamil Nadu)</option>
							<option>Nanpara (Uttar Pradesh)</option>
							<option>Narasapuram (Andhra Pradesh)</option>
							<option>Narasaraopet (Andhra Pradesh)</option>
							<option>Naraura (Uttar Pradesh)</option>
							<option>Narayanpet (Telangana)</option>
							<option>Nargund (Karnataka)</option>
							<option>Narkatiaganj (Bihar)</option>
							<option>Narkhed (Maharashtra)</option>
							<option>Narnaul (Haryana)</option>
							<option>Narsinghgarh (Madhya Pradesh)</option>
							<option>Narsipatnam (Andhra Pradesh)</option>
							<option>Narwana (Haryana)</option>
							<option>Nashik (Maharashtra)</option>
							<option>Nasirabad (Rajasthan)</option>
							<option>Natham (Tamil Nadu)</option>
							<option>Nathdwara (Rajasthan)</option>
							<option>Naugachhia (Bihar)</option>
							<option>Naugawan Sadat (Uttar Pradesh)</option>
							<option>Nautanwa (Uttar Pradesh)</option>
							<option>Navalgund (Karnataka)</option>
							<option>Navsari (Gujarat)</option>
							<option>Nawabganj (Uttar Pradesh)</option>
							<option>Nawada (Bihar)</option>
							<option>Nawanshahr (Punjab)</option>
							<option>Nawapur (Maharashtra)</option>
							<option>Nedumangad (Kerala)</option>
							<option>Neem-Ka-Thana (Rajasthan)</option>
							<option>Neemuch (Madhya Pradesh)</option>
							<option>Nehtaur (Uttar Pradesh)</option>
							<option>Nelamangala (Karnataka)</option>
							<option>Nellikuppam (Tamil Nadu)</option>
							<option>Nellore (Andhra Pradesh)</option>
							<option>Nepanagar (Madhya Pradesh)</option>
							<option>New Delhi (Delhi)</option>
							<option>Neyveli (TS) (Tamil Nadu)</option>
							<option>Neyyattinkara (Kerala)</option>
							<option>Nidadavole (Andhra Pradesh)</option>
							<option>Nilambur (Kerala)</option>
							<option>Nilanga (Maharashtra)</option>
							<option>Nimbahera (Rajasthan)</option>
							<option>Nirmal (Telangana)</option>
							<option>Niwai (Uttar Pradesh)</option>
							<option>Niwari (Madhya Pradesh)</option>
							<option>Nizamabad (Telangana)</option>
							<option>Nohar (Rajasthan)</option>
							<option>Noida (Uttar Pradesh)</option>
							<option>Nokha (Rajasthan)</option>
							<option>Nokha (Bihar)</option>
							<option>Nongstoin (Meghalaya)</option>
							<option>Noorpur (Uttar Pradesh)</option>
							<option>North Lakhimpur (Assam)</option>
							<option>Nowgong (Madhya Pradesh)</option>
							<option>Nowrozabad (Khodargama) (Madhya Pradesh)</option>
							<option>Nuzvid (Andhra Pradesh)</option>
							<option>O' Valley (Tamil Nadu)</option>
							<option>Obra (Uttar Pradesh)</option>
							<option>Oddanchatram (Tamil Nadu)</option>
							<option>Ongole (Andhra Pradesh)</option>
							<option>Orai (Uttar Pradesh)</option>
							<option>Osmanabad (Maharashtra)</option>
							<option>Ottappalam (Kerala)</option>
							<option>Ozar (Maharashtra)</option>
							<option>P.N.Patti (Tamil Nadu)</option>
							<option>Pachora (Maharashtra)</option>
							<option>Pachore (Madhya Pradesh)</option>
							<option>Pacode (Tamil Nadu)</option>
							<option>Padmanabhapuram (Tamil Nadu)</option>
							<option>Padra (Gujarat)</option>
							<option>Padrauna (Uttar Pradesh)</option>
							<option>Paithan (Maharashtra)</option>
							<option>Pakaur (Jharkhand)</option>
							<option>Palacole (Andhra Pradesh)</option>
							<option>Palai (Kerala)</option>
							<option>Palakkad (Kerala)</option>
							<option>Palampur (Himachal Pradesh)</option>
							<option>Palani (Tamil Nadu)</option>
							<option>Palanpur (Gujarat)</option>
							<option>Palasa Kasibugga (Andhra Pradesh)</option>
							<option>Palghar (Maharashtra)</option>
							<option>Pali (Rajasthan)</option>
							<option>Pali (Madhya Pradesh)</option>
							<option>Palia Kalan (Uttar Pradesh)</option>
							<option>Palitana (Gujarat)</option>
							<option>Palladam (Tamil Nadu)</option>
							<option>Pallapatti (Tamil Nadu)</option>
							<option>Pallikonda (Tamil Nadu)</option>
							<option>Palwal (Haryana)</option>
							<option>Palwancha (Telangana)</option>
							<option>Panagar (Madhya Pradesh)</option>
							<option>Panagudi (Tamil Nadu)</option>
							<option>Panaji (Goa)</option>
							<option>Panamattom (Kerala)</option>
							<option>Panchkula (Haryana)</option>
							<option>Panchla (West Bengal)</option>
							<option>Pandharkaoda (Maharashtra)</option>
							<option>Pandharpur (Maharashtra)</option>
							<option>Pandhurna (Madhya Pradesh)</option>
							<option>PandUrban Agglomeration (West Bengal)</option>
							<option>Panipat (Haryana)</option>
							<option>Panna (Madhya Pradesh)</option>
							<option>Panniyannur (Kerala)</option>
							<option>Panruti (Tamil Nadu)</option>
							<option>Panvel (Maharashtra)</option>
							<option>Pappinisseri (Kerala)</option>
							<option>Paradip (Odisha)</option>
							<option>Paramakudi (Tamil Nadu)</option>
							<option>Parangipettai (Tamil Nadu)</option>
							<option>Parasi (Uttar Pradesh)</option>
							<option>Paravoor (Kerala)</option>
							<option>Parbhani (Maharashtra)</option>
							<option>Pardi (Gujarat)</option>
							<option>Parlakhemundi (Odisha)</option>
							<option>Parli (Maharashtra)</option>
							<option>Partur (Maharashtra)</option>
							<option>Parvathipuram (Andhra Pradesh)</option>
							<option>Pasan (Madhya Pradesh)</option>
							<option>Paschim Punropara (West Bengal)</option>
							<option>Pasighat (Arunachal Pradesh)</option>
							<option>Patan (Gujarat)</option>
							<option>Pathanamthitta (Kerala)</option>
							<option>Pathankot (Punjab)</option>
							<option>Pathardi (Maharashtra)</option>
							<option>Pathri (Maharashtra)</option>
							<option>Patiala (Punjab)</option>
							<option>Patna (Bihar)</option>
							<option>Patratu (Jharkhand)</option>
							<option>Pattamundai (Odisha)</option>
							<option>Patti (Punjab)</option>
							<option>Pattran (Punjab)</option>
							<option>Pattukkottai (Tamil Nadu)</option>
							<option>Patur (Maharashtra)</option>
							<option>Pauni (Maharashtra)</option>
							<option>Pauri (Uttarakhand)</option>
							<option>Pavagada (Karnataka)</option>
							<option>Pedana (Andhra Pradesh)</option>
							<option>Peddapuram (Andhra Pradesh)</option>
							<option>Pehowa (Haryana)</option>
							<option>Pen (Maharashtra)</option>
							<option>Perambalur (Tamil Nadu)</option>
							<option>Peravurani (Tamil Nadu)</option>
							<option>Peringathur (Kerala)</option>
							<option>Perinthalmanna (Kerala)</option>
							<option>Periyakulam (Tamil Nadu)</option>
							<option>Periyasemur (Tamil Nadu)</option>
							<option>Pernampattu (Tamil Nadu)</option>
							<option>Perumbavoor (Kerala)</option>
							<option>Petlad (Gujarat)</option>
							<option>Phagwara (Punjab)</option>
							<option>Phalodi (Rajasthan)</option>
							<option>Phaltan (Maharashtra)</option>
							<option>Phillaur (Punjab)</option>
							<option>Phulabani (Odisha)</option>
							<option>Phulera (Rajasthan)</option>
							<option>Phulpur (Uttar Pradesh)</option>
							<option>Phusro (Jharkhand)</option>
							<option>Pihani (Uttar Pradesh)</option>
							<option>Pilani (Rajasthan)</option>
							<option>Pilibanga (Rajasthan)</option>
							<option>Pilibhit (Uttar Pradesh)</option>
							<option>Pilkhuwa (Uttar Pradesh)</option>
							<option>Pindwara (Rajasthan)</option>
							<option>Pinjore (Haryana)</option>
							<option>Pipar City (Rajasthan)</option>
							<option>Pipariya (Madhya Pradesh)</option>
							<option>Piriyapatna (Karnataka)</option>
							<option>Piro (Bihar)</option>
							<option>Pithampur (Madhya Pradesh)</option>
							<option>Pithapuram (Andhra Pradesh)</option>
							<option>Pithoragarh (Uttarakhand)</option>
							<option>Pollachi (Tamil Nadu)</option>
							<option>Polur (Tamil Nadu)</option>
							<option>Pondicherry (Puducherry)</option>
							<option>Ponnani (Kerala)</option>
							<option>Ponneri (Tamil Nadu)</option>
							<option>Ponnur (Andhra Pradesh)</option>
							<option>Porbandar (Gujarat)</option>
							<option>Porsa (Madhya Pradesh)</option>
							<option>Port Blair (Andaman and Nicobar Islands)</option>
							<option>Powayan (Uttar Pradesh)</option>
							<option>Prantij (Rajasthan)</option>
							<option>Pratapgarh (Rajasthan)</option>
							<option>Pratapgarh (Tripura)</option>
							<option>Prithvipur (Madhya Pradesh)</option>
							<option>Proddatur (Andhra Pradesh)</option>
							<option>Pudukkottai (Tamil Nadu)</option>
							<option>Pudukkottai (Tamil Nadu)</option>
							<option>Pudupattinam (Tamil Nadu)</option>
							<option>Pukhrayan (Uttar Pradesh)</option>
							<option>Pulgaon (Maharashtra)</option>
							<option>Puliyankudi (Tamil Nadu)</option>
							<option>Punalur (Kerala)</option>
							<option>Punch (Jammu and Kashmir)</option>
							<option>Pune (Maharashtra)</option>
							<option>Punganur (Andhra Pradesh)</option>
							<option>Punjaipugalur (Tamil Nadu)</option>
							<option>Puranpur (Uttar Pradesh)</option>
							<option>Puri (Odisha)</option>
							<option>Purna (Maharashtra)</option>
							<option>Purnia (Bihar)</option>
							<option>PurqUrban Agglomerationzi (Uttar Pradesh)</option>
							<option>Purulia (West Bengal)</option>
							<option>Purwa (Uttar Pradesh)</option>
							<option>Pusad (Maharashtra)</option>
							<option>Puthuppally (Kerala)</option>
							<option>Puttur (Karnataka)</option>
							<option>Puttur (Andhra Pradesh)</option>
							<option>Qadian (Punjab)</option>
							<option>Raayachuru (Karnataka)</option>
							<option> Rabkavi Banhatti (Karnataka)</option>
							<option>Radhanpur (Gujarat)</option>
							<option>Rae Bareli (Uttar Pradesh)</option>
							<option>Rafiganj (Bihar)</option>
							<option>Raghogarh-Vijaypur (Madhya Pradesh)</option>
							<option>Raghunathganj (West Bengal)</option>
							<option>Raghunathpur (West Bengal)</option>
							<option>Rahatgarh (Madhya Pradesh)</option>
							<option>Rahuri (Maharashtra)</option>
							<option>Raiganj (West Bengal)</option>
							<option>Raigarh (Chhattisgarh)</option>
							<option>Raikot (Punjab)</option>
							<option>Raipur (Chhattisgarh)</option>
							<option>Rairangpur (Odisha)</option>
							<option>Raisen (Madhya Pradesh)</option>
							<option>Raisinghnagar (Rajasthan)</option>
							<option>Rajagangapur (Odisha)</option>
							<option>Rajahmundry (Andhra Pradesh)</option>
							<option>Rajakhera (Rajasthan)</option>
							<option>Rajaldesar (Rajasthan)</option>
							<option>Rajam (Andhra Pradesh)</option>
							<option>Rajampet (Andhra Pradesh)</option>
							<option>Rajapalayam (Tamil Nadu)</option>
							<option>Rajauri (Jammu and Kashmir)</option>
							<option>Rajgarh (Madhya Pradesh)</option>
							<option>Rajgarh (Alwar) (Rajasthan)</option>
							<option>Rajgarh (Churu) (Rajasthan)</option>
							<option>Rajgir (Bihar)</option>
							<option>Rajkot (Gujarat)</option>
							<option>Rajnandgaon (Chhattisgarh)</option>
							<option>Rajpipla (Gujarat)</option>
							<option>Rajpura (Punjab)</option>
							<option>Rajsamand (Rajasthan)</option>
							<option>Rajula (Gujarat)</option>
							<option>Rajura (Maharashtra)</option>
							<option>Ramachandrapuram (Andhra Pradesh)</option>
							<option>Ramagundam (Telangana)</option>
							<option>Ramanagaram (Karnataka)</option>
							<option>Ramanathapuram (Tamil Nadu)</option>
							<option>Ramdurg (Karnataka)</option>
							<option>Rameshwaram (Tamil Nadu)</option>
							<option>Ramganj Mandi (Rajasthan)</option>
							<option>Ramgarh (Jharkhand)</option>
							<option>Ramnagar (Uttarakhand)</option>
							<option>Ramnagar (Bihar)</option>
							<option>Ramngarh (Rajasthan)</option>
							<option>Rampur (Uttar Pradesh)</option>
							<option>Rampur Maniharan (Uttar Pradesh)</option>
							<option>Rampura Phul (Punjab)</option>
							<option>Rampurhat (West Bengal)</option>
							<option>Ramtek (Maharashtra)</option>
							<option>Ranaghat (West Bengal)</option>
							<option>Ranavav (Gujarat)</option>
							<option>Ranchi (Jharkhand)</option>
							<option>Ranebennuru (Karnataka)</option>
							<option>Rangia (Assam)</option>
							<option>Rania (Haryana)</option>
							<option>Ranibennur (Karnataka)</option>
							<option>Ranipet (Tamil Nadu)</option>
							<option>Rapar (Gujarat)</option>
							<option>Rasipuram (Tamil Nadu)</option>
							<option>Rasra (Uttar Pradesh)</option>
							<option>Ratangarh (Rajasthan)</option>
							<option>Rath (Uttar Pradesh)</option>
							<option>Ratia (Haryana)</option>
							<option>Ratlam (Madhya Pradesh)</option>
							<option>Ratnagiri (Maharashtra)</option>
							<option>Rau (Madhya Pradesh)</option>
							<option>Raurkela (Odisha)</option>
							<option>Raver (Maharashtra)</option>
							<option>Rawatbhata (Rajasthan)</option>
							<option>Rawatsar (Rajasthan)</option>
							<option>Raxaul Bazar (Bihar)</option>
							<option>Rayachoti (Andhra Pradesh)</option>
							<option>Rayadurg (Andhra Pradesh)</option>
							<option>Rayagada (Odisha)</option>
							<option>Reengus (Rajasthan)</option>
							<option>Rehli (Madhya Pradesh)</option>
							<option>Renigunta (Andhra Pradesh)</option>
							<option>Renukoot (Uttar Pradesh)</option>
							<option>Reoti (Uttar Pradesh)</option>
							<option>Repalle (Andhra Pradesh)</option>
							<option>Revelganj (Bihar)</option>
							<option>Rewa (Madhya Pradesh)</option>
							<option>Rewari (Haryana)</option>
							<option>Rishikesh (Uttarakhand)</option>
							<option>Risod (Maharashtra)</option>
							<option>Robertsganj (Uttar Pradesh)</option>
							<option>Robertson Pet (Karnataka)</option>
							<option>Rohtak (Haryana)</option>
							<option>Ron (Karnataka)</option>
							<option>Roorkee (Uttarakhand)</option>
							<option>Rosera (Bihar)</option>
							<option>Rudauli (Uttar Pradesh)</option>
							<option>Rudrapur (Uttarakhand)</option>
							<option>Rudrapur (Uttar Pradesh)</option>
							<option>Rupnagar (Punjab)</option>
							<option>Sabalgarh (Madhya Pradesh)</option>
							<option>Sadabad (Uttar Pradesh)</option>
							<option>Sadalagi (Karnataka)</option>
							<option>Sadasivpet (Telangana)</option>
							<option>Sadri (Rajasthan)</option>
							<option>Sadulpur (Rajasthan)</option>
							<option>Sadulshahar (Rajasthan)</option>
							<option>Safidon (Haryana)</option>
							<option>Safipur (Uttar Pradesh)</option>
							<option>Sagar (Madhya Pradesh)</option>
							<option>Sagara (Karnataka)</option>
							<option>Sagwara (Rajasthan)</option>
							<option>Saharanpur (Uttar Pradesh)</option>
							<option>Saharsa (Bihar)</option>
							<option>Sahaspur (Uttar Pradesh)</option>
							<option>Sahaswan (Uttar Pradesh)</option>
							<option>Sahawar (Uttar Pradesh)</option>
							<option>Sahibganj (Jharkhand)</option>
							<option>Sahjanwa (Uttar Pradesh)</option>
							<option>Saidpur (Uttar Pradesh)</option>
							<option>Saiha (Mizoram)</option>
							<option>Sailu (Maharashtra)</option>
							<option>Sainthia (West Bengal)</option>
							<option>Sakaleshapura (Karnataka)</option>
							<option>Sakti (Chhattisgarh)</option>
							<option>Salaya (Gujarat)</option>
							<option>Salem (Tamil Nadu)</option>
							<option>Salur (Andhra Pradesh)</option>
							<option>Samalkha (Haryana)</option>
							<option>Samalkot (Andhra Pradesh)</option>
							<option>Samana (Punjab)</option>
							<option>Samastipur (Bihar)</option>
							<option>Sambalpur (Odisha)</option>
							<option>Sambhal (Uttar Pradesh)</option>
							<option>Sambhar (Rajasthan)</option>
							<option>Samdhan (Uttar Pradesh)</option>
							<option>Samthar (Uttar Pradesh)</option>
							<option>Sanand (Gujarat)</option>
							<option>Sanawad (Madhya Pradesh)</option>
							<option>Sanchore (Rajasthan)</option>
							<option>Sandi (Uttar Pradesh)</option>
							<option>Sandila (Uttar Pradesh)</option>
							<option>Sanduru (Karnataka)</option>
							<option>Sangamner (Maharashtra)</option>
							<option>Sangareddy (Telangana)</option>
							<option>Sangaria (Rajasthan)</option>
							<option>Sangli (Maharashtra)</option>
							<option>Sangole (Maharashtra)</option>
							<option>Sangrur (Punjab)</option>
							<option>Sankarankovil (Tamil Nadu)</option>
							<option>Sankari (Tamil Nadu)</option>
							<option>Sankeshwara (Karnataka)</option>
							<option>Santipur (West Bengal)</option>
							<option>Sarangpur (Madhya Pradesh)</option>
							<option>Sardarshahar (Rajasthan)</option>
							<option>Sardhana (Uttar Pradesh)</option>
							<option>Sarni (Madhya Pradesh)</option>
							<option>Sarsod (Haryana)</option>
							<option>Sasaram (Bihar)</option>
							<option>Sasvad (Maharashtra)</option>
							<option>Satana (Maharashtra)</option>
							<option>Satara (Maharashtra)</option>
							<option>Sathyamangalam (Tamil Nadu)</option>
							<option>Satna (Madhya Pradesh)</option>
							<option>Sattenapalle (Andhra Pradesh)</option>
							<option>Sattur (Tamil Nadu)</option>
							<option>Saunda (Jharkhand)</option>
							<option>Saundatti-Yellamma (Karnataka)</option>
							<option>Sausar (Madhya Pradesh)</option>
							<option>Savanur (Karnataka)</option>
							<option>Savarkundla (Gujarat)</option>
							<option>Savner (Maharashtra)</option>
							<option>Sawai Madhopur (Rajasthan)</option>
							<option>Sawantwadi (Maharashtra)</option>
							<option>Sedam (Karnataka)</option>
							<option>Sehore (Madhya Pradesh)</option>
							<option>Sendhwa (Madhya Pradesh)</option>
							<option>Seohara (Uttar Pradesh)</option>
							<option>Seoni (Madhya Pradesh)</option>
							<option>Seoni-Malwa (Madhya Pradesh)</option>
							<option>Shahabad (Karnataka)</option>
							<option>Shahabad, Hardoi (Uttar Pradesh)</option>
							<option>Shahabad, Rampur (Uttar Pradesh)</option>
							<option>Shahade (Maharashtra)</option>
							<option>Shahbad (Haryana)</option>
							<option>Shahdol (Madhya Pradesh)</option>
							<option>Shahganj (Uttar Pradesh)</option>
							<option>Shahjahanpur (Uttar Pradesh)</option>
							<option>Shahpur (Karnataka)</option>
							<option>Shahpura (Rajasthan)</option>
							<option>Shajapur (Madhya Pradesh)</option>
							<option>Shamgarh (Madhya Pradesh)</option>
							<option>Shamli (Uttar Pradesh)</option>
							<option>Shamsabad, Agra (Uttar Pradesh)</option>
							<option>Shamsabad, Farrukhabad (Uttar Pradesh)</option>
							<option>Shegaon (Maharashtra)</option>
							<option>Sheikhpura (Bihar)</option>
							<option>Shendurjana (Maharashtra)</option>
							<option>Shenkottai (Tamil Nadu)</option>
							<option>Sheoganj (Rajasthan)</option>
							<option>Sheohar (Bihar)</option>
							<option>Sheopur (Madhya Pradesh)</option>
							<option>Sherghati (Bihar)</option>
							<option>Sherkot (Uttar Pradesh)</option>
							<option>Shiggaon (Karnataka)</option>
							<option>Shikaripur (Karnataka)</option>
							<option>Shikarpur, Bulandshahr (Uttar Pradesh)</option>
							<option>Shikohabad (Uttar Pradesh)</option>
							<option>Shillong (Meghalaya)</option>
							<option>Shimla (Himachal Pradesh)</option>
							<option>Shirdi (Maharashtra)</option>
							<option>Shirpur-Warwade (Maharashtra)</option>
							<option>Shirur (Maharashtra)</option>
							<option> Shishgarh (Uttar Pradesh)</option>
							<option>Shivamogga (Karnataka)</option>
							<option>Shivpuri (Madhya Pradesh)</option>
							<option>Sholavandan (Tamil Nadu)</option>
							<option>Sholingur (Tamil Nadu)</option>
							<option>Shoranur (Kerala)</option>
							<option>Shrigonda (Maharashtra)</option>
							<option>Shrirampur (Maharashtra)</option>
							<option>Shrirangapattana (Karnataka)</option>
							<option>Shujalpur (Madhya Pradesh)</option>
							<option>Siana (Uttar Pradesh)</option>
							<option>Sibsagar (Assam)</option>
							<option>Siddipet (Telangana)</option>
							<option>Sidhi (Madhya Pradesh)</option>
							<option>Sidhpur (Gujarat)</option>
							<option>Sidlaghatta (Karnataka)</option>
							<option>Sihor (Gujarat)</option>
							<option>Sihora (Madhya Pradesh)</option>
							<option>Sikanderpur (Uttar Pradesh)</option>
							<option>Sikandra Rao (Uttar Pradesh)</option>
							<option>Sikandrabad (Uttar Pradesh)</option>
							<option>Sikar (Rajasthan)</option>
							<option>Silao (Bihar)</option>
							<option>Silapathar (Assam)</option>
							<option>Silchar (Assam)</option>
							<option>Siliguri (West Bengal)</option>
							<option>Sillod (Maharashtra)</option>
							<option>Silvassa (Dadra and Nagar Haveli)</option>
							<option>Simdega (Jharkhand)</option>
							<option>Sindagi (Karnataka)</option>
							<option>Sindhagi (Karnataka)</option>
							<option>Sindhnur (Karnataka)</option>
							<option>Singrauli (Madhya Pradesh)</option>
							<option>Sinnar (Maharashtra)</option>
							<option>Sira (Karnataka)</option>
							<option>Sircilla (Telangana)</option>
							<option>Sirhind Fatehgarh Sahib (Punjab)</option>
							<option>Sirkali (Tamil Nadu)</option>
							<option>Sirohi (Rajasthan)</option>
							<option>Sironj (Madhya Pradesh)</option>
							<option>Sirsa (Haryana)</option>
							<option>Sirsaganj (Uttar Pradesh)</option>
							<option>Sirsi (Karnataka)</option>
							<option>Sirsi (Uttar Pradesh)</option>
							<option>Siruguppa (Karnataka)</option>
							<option>Sitamarhi (Bihar)</option>
							<option>Sitapur (Uttar Pradesh)</option>
							<option>Sitarganj (Uttarakhand)</option>
							<option>Sivaganga (Tamil Nadu)</option>
							<option>Sivagiri (Tamil Nadu)</option>
							<option>Sivakasi (Tamil Nadu)</option>
							<option>Siwan (Bihar)</option>
							<option>Sohagpur (Madhya Pradesh)</option>
							<option>Sohna (Haryana)</option>
							<option>Sojat (Rajasthan)</option>
							<option>Solan (Himachal Pradesh)</option>
							<option>Solapur (Maharashtra)</option>
							<option>Sonamukhi (West Bengal)</option>
							<option>Sonepur (Bihar)</option>
							<option>Songadh (Gujarat)</option>
							<option>Sonipat (Haryana)</option>
							<option>Sopore (Jammu and Kashmir)</option>
							<option>Soro (Odisha)</option>
							<option>Soron (Uttar Pradesh)</option>
							<option>Soyagaon (Maharashtra)</option>
							<option>Sri Madhopur (Rajasthan)</option>
							<option>Srikakulam (Andhra Pradesh)</option>
							<option>Srikalahasti (Andhra Pradesh)</option>
							<option>Srinagar (Jammu and Kashmir)</option>
							<option>Srinagar (Uttarakhand)</option>
							<option>Srinivaspur (Karnataka)</option>
							<option>Srirampore (West Bengal)</option>
							<option>Srisailam Township (Andhra Pradesh)</option>
							<option>Srivilliputhur (Tamil Nadu)</option>
							<option>Sugauli (Bihar)</option>
							<option>Sujangarh (Rajasthan)</option>
							<option>Sujanpur (Punjab)</option>
							<option>Sullurpeta (Andhra Pradesh)</option>
							<option>Sultanganj (Bihar)</option>
							<option>Sultanpur (Uttar Pradesh)</option>
							<option>Sumerpur (Rajasthan)</option>
							<option>Sumerpur (Uttar Pradesh)</option>
							<option>Sunabeda (Odisha)</option>
							<option>Sunam (Punjab)</option>
							<option>Sundargarh (Odisha)</option>
							<option>Sundarnagar (Himachal Pradesh)</option>
							<option>Supaul (Bihar)</option>
							<option>Surandai (Tamil Nadu)</option>
							<option>Surapura (Karnataka)</option>
							<option>Surat (Gujarat)</option>
							<option>Suratgarh (Rajasthan)</option>
							<option>Surban Agglomerationr (Uttar Pradesh)</option>
							<option>Suri (West Bengal)</option>
							<option>Suriyampalayam (Tamil Nadu)</option>
							<option>Suryapet (Telangana)</option>
							<option>Tadepalligudem (Andhra Pradesh)</option>
							<option>Tadpatri (Andhra Pradesh)</option>
							<option>Takhatgarh (Rajasthan)</option>
							<option>Taki (West Bengal)</option>
							<option>Talaja (Gujarat)</option>
							<option>Talcher (Odisha)</option>
							<option>Talegaon Dabhade (Maharashtra)</option>
							<option>Talikota (Karnataka)</option>
							<option>Taliparamba (Kerala)</option>
							<option>Talode (Maharashtra)</option>
							<option>Talwara (Punjab)</option>
							<option>Tamluk (West Bengal)</option>
							<option>Tanda (Uttar Pradesh)</option>
							<option>Tandur (Telangana)</option>
							<option>Tanuku (Andhra Pradesh)</option>
							<option>Tarakeswar (West Bengal)</option>
							<option>Tarana (Madhya Pradesh)</option>
							<option>Taranagar (Rajasthan)</option>
							<option>Taraori (Haryana)</option>
							<option>Tarbha (Odisha)</option>
							<option>Tarikere (Karnataka)</option>
							<option>Tarn Taran (Punjab)</option>
							<option>Tasgaon (Maharashtra)</option>
							<option>Tehri (Uttarakhand)</option>
							<option>Tekkalakote (Karnataka)</option>
							<option>Tenali (Andhra Pradesh)</option>
							<option>Tenkasi (Tamil Nadu)</option>
							<option>Tenu dam-cum-Kathhara (Jharkhand)</option>
							<option>Terdal (Karnataka)</option>
							<option>Tezpur (Assam)</option>
							<option>Thakurdwara (Uttar Pradesh)</option>
							<option>Thammampatti (Tamil Nadu)</option>
							<option>Thana Bhawan (Uttar Pradesh)</option>
							<option>Thane (Maharashtra)</option>
							<option>Thanesar (Haryana)</option>
							<option>Thangadh (Gujarat)</option>
							<option>Thanjavur (Tamil Nadu)</option>
							<option>Tharad (Gujarat)</option>
							<option>Tharamangalam (Tamil Nadu)</option>
							<option>Tharangambadi (Tamil Nadu)</option>
							<option>Theni Allinagaram (Tamil Nadu)</option>
							<option>Thirumangalam (Tamil Nadu)</option>
							<option>Thirupuvanam (Tamil Nadu)</option>
							<option>Thiruthuraipoondi (Tamil Nadu)</option>
							<option>Thiruvalla (Kerala)</option>
							<option>Thiruvallur (Tamil Nadu)</option>
							<option>Thiruvananthapuram (Kerala)</option>
							<option>Thiruvarur (Tamil Nadu)</option>
							<option>Thodupuzha (Kerala)</option>
							<option>Thoubal (Manipur)</option>
							<option>Thrissur (Kerala)</option>
							<option>Thuraiyur (Tamil Nadu)</option>
							<option>Tikamgarh (Madhya Pradesh)</option>
							<option>Tilda Newra (Chhattisgarh)</option>
							<option>Tilhar (Uttar Pradesh)</option>
							<option>Tindivanam (Tamil Nadu)</option>
							<option>Tinsukia (Assam)</option>
							<option>Tiptur (Karnataka)</option>
							<option>Tirora (Maharashtra)</option>
							<option>Tiruchendur (Tamil Nadu)</option>
							<option>Tiruchengode (Tamil Nadu)</option>
							<option>Tiruchirappalli (Tamil Nadu)</option>
							<option>Tirukalukundram (Tamil Nadu)</option>
							<option>Tirukkoyilur (Tamil Nadu)</option>
							<option>Tirunelveli (Tamil Nadu)</option>
							<option>Tirupathur (Tamil Nadu)</option>
							<option>Tirupathur (Tamil Nadu)</option>
							<option>Tirupati (Andhra Pradesh)</option>
							<option>Tiruppur (Tamil Nadu)</option>
							<option>Tirur (Kerala)</option>
							<option>Tiruttani (Tamil Nadu)</option>
							<option>Tiruvannamalai (Tamil Nadu)</option>
							<option>Tiruvethipuram (Tamil Nadu)</option>
							<option>Tiruvuru (Andhra Pradesh)</option>
							<option>Tirwaganj (Uttar Pradesh)</option>
							<option>Titlagarh (Odisha)</option>
							<option>Tittakudi (Tamil Nadu)</option>
							<option>Todabhim (Rajasthan)</option>
							<option>Todaraisingh (Rajasthan)</option>
							<option>Tohana (Haryana)</option>
							<option>Tonk (Rajasthan)</option>
							<option>Tuensang (Nagaland)</option>
							<option>Tuljapur (Maharashtra)</option>
							<option>Tulsipur (Uttar Pradesh)</option>
							<option>Tumkur (Karnataka)</option>
							<option>Tumsar (Maharashtra)</option>
							<option>Tundla (Uttar Pradesh)</option>
							<option>Tuni (Andhra Pradesh)</option>
							<option>Tura (Meghalaya)</option>
							<option>Uchgaon (Maharashtra)</option>
							<option>Udaipur (Rajasthan)</option>
							<option>Udaipur (Tripura)</option>
							<option>Udaipurwati (Rajasthan)</option>
							<option>Udgir (Maharashtra)</option>
							<option>Udhagamandalam (Tamil Nadu)</option>
							<option>Udhampur (Jammu and Kashmir)</option>
							<option>Udumalaipettai (Tamil Nadu)</option>
							<option>Udupi (Karnataka)</option>
							<option>Ujhani (Uttar Pradesh)</option>
							<option>Ujjain (Madhya Pradesh)</option>
							<option>Umarga (Maharashtra)</option>
							<option>Umaria (Madhya Pradesh)</option>
							<option>Umarkhed (Maharashtra)</option>
							<option>Umbergaon (Gujarat)</option>
							<option>Umred (Maharashtra)</option>
							<option>Umreth (Gujarat)</option>
							<option>Una (Gujarat)</option>
							<option>Unjha (Gujarat)</option>
							<option>Unnamalaikadai (Tamil Nadu)</option>
							<option>Unnao (Uttar Pradesh)</option>
							<option>Upleta (Gujarat)</option>
							<option>Uran (Maharashtra)</option>
							<option>Uran Islampur (Maharashtra)</option>
							<option>Uravakonda (Andhra Pradesh)</option>
							<option>Urmar Tanda (Punjab)</option>
							<option>Usilampatti (Tamil Nadu)</option>
							<option> Uthamapalayam (Tamil Nadu)</option>
							<option>Uthiramerur (Tamil Nadu)</option>
							<option>Utraula (Uttar Pradesh)</option>
							<option>Vadakkuvalliyur (Tamil Nadu)</option>
							<option>Vadalur (Tamil Nadu)</option>
							<option>Vadgaon Kasba (Maharashtra)</option>
							<option>Vadipatti (Tamil Nadu)</option>
							<option>Vadnagar (Gujarat)</option>
							<option>Vadodara (Gujarat)</option>
							<option>Vaijapur (Maharashtra)</option>
							<option>Vaikom (Kerala)</option>
							<option>Valparai (Tamil Nadu)</option>
							<option>Valsad (Gujarat)</option>
							<option>Vandavasi (Tamil Nadu)</option>
							<option>Vaniyambadi (Tamil Nadu)</option>
							<option>Vapi (Gujarat)</option>
							<option>Varanasi (Uttar Pradesh)</option>
							<option>Varkala (Kerala)</option>
							<option>Vasai-Virar (Maharashtra)</option>
							<option>Vatakara (Kerala)</option>
							<option>Vedaranyam (Tamil Nadu)</option>
							<option>Vellakoil (Tamil Nadu)</option>
							<option>Vellore (Tamil Nadu)</option>
							<option>Venkatagiri (Andhra Pradesh)</option>
							<option>Veraval (Gujarat)</option>
							<option>Vidisha (Madhya Pradesh)</option>
							<option>Vijainagar, Ajmer (Rajasthan)</option>
							<option>Vijapur (Gujarat)</option>
							<option>Vijayapura (Karnataka)</option>
							<option>Vijayawada (Andhra Pradesh)</option>
							<option>Vijaypur (Madhya Pradesh)</option>
							<option>Vikarabad (Telangana)</option>
							<option>Vikramasingapuram (Tamil Nadu)</option>
							<option>Viluppuram (Tamil Nadu)</option>
							<option>Vinukonda (Andhra Pradesh)</option>
							<option>Viramgam (Gujarat)</option>
							<option>Virudhachalam (Tamil Nadu)</option>
							<option>Virudhunagar (Tamil Nadu)</option>
							<option>Visakhapatnam (Andhra Pradesh)</option>
							<option>Visnagar (Gujarat)</option>
							<option>Viswanatham (Tamil Nadu)</option>
							<option>Vita (Maharashtra)</option>
							<option>Vizianagaram (Andhra Pradesh)</option>
							<option>Vrindavan (Uttar Pradesh)</option>
							<option>Vyara (Gujarat)</option>
							<option>Wadgaon Road (Maharashtra)</option>
							<option>Wadhwan (Gujarat)</option>
							<option>Wadi (Karnataka)</option>
							<option>Wai (Maharashtra)</option>
							<option>Wanaparthy (Telangana)</option>
							<option>Wani (Maharashtra)</option>
							<option>Wankaner (Gujarat)</option>
							<option> Wara Seoni (Madhya Pradesh)</option>
							<option>Warangal (Telangana)</option>
							<option>Wardha (Maharashtra)</option>
							<option>Warhapur (Uttar Pradesh)</option>
							<option>Warisaliganj (Bihar)</option>
							<option>Warora (Maharashtra)</option>
							<option>Warud (Maharashtra)</option>
							<option>Washim (Maharashtra)</option>
							<option>Wokha (Nagaland)</option>
							<option>Yadgir (Karnataka)</option>
							<option>Yamunanagar (Haryana)</option>
							<option>Yanam (Puducherry)</option>
							<option>Yavatmal (Maharashtra)</option>
							<option>Yawal (Maharashtra)</option>
							<option>Yellandu (Telangana)</option>
							<option>Yemmiganur (Andhra Pradesh)</option>
							<option>Yerraguntla (Andhra Pradesh)</option>
							<option>Yevla (Maharashtra)</option>
							<option>Zaidpur (Uttar Pradesh)</option>
							<option>Zamania (Uttar Pradesh)</option>
							<option>Zira (Punjab)</option>
							<option>Zirakpur (Punjab)</option>
							<option>Zunheboto (Nagaland)</option>

					  </datalist> </font> <br>
					  
					    <br>		
  </div>
  
  <br>
 
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onClick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onClick="nextPrev(1)" >Next</button>
	<button type="button" id="submit1" name="submit" style="display:none;" onClick="updateTxt()" >Submit Now</button>
    </div>
  </div>
  
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
   <!-- <span class="step"></span>
    <span class="step"></span> -->
  </div>
</form>

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

 
</body>
</html>