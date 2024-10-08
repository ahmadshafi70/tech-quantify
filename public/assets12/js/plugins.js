// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

// xs-nav menu
! function(n, e, i, s) {
	n.xs_nav = function(a, t) {
		var o = {
				responsive: !0,
				mobileBreakpoint: 767,
				showDuration: 300,
				hideDuration: 300,
				showDelayDuration: 0,
				hideDelayDuration: 0,
				submenuTrigger: "hover",
				effect: "fade",
				submenuIndicator: !0,
				submenuIndicatorTrigger: !1,
				hideSubWhenGoOut: !0,
				visibleSubmenusOnMobile: !1,
				overlay: !0,
				overlayColor: "rgba(0, 0, 0, 0.7)",
				hidden: !1,
				hiddenOnMobile: !1,
				offCanvasSide: "left",
				offCanvasCloseButton: !0,
				animationOnShow: "",
				animationOnHide: "",
				hideScrollBar: !0,
				onInit: function() {},
				onLandscape: function() {},
				onPortrait: function() {},
				onShowOffCanvas: function() {},
				onHideOffCanvas: function() {}
			},
			r = this,
			u = Number.MAX_VALUE,
			d = 1,
			l = "click.nav touchstart.nav",
			c = "mouseenter focusin",
			f = "mouseleave focusout";
		r.settings = {};
		var a = (n(a), a);
		n(a).find(".nav-search").length > 0 && n(a).find(".nav-search").find("form").prepend("<span class='nav-search-close-button' tabindex='0'>&#10005;</span>"), r.init = function() {
			r.settings = n.extend({}, o, t), r.settings.offCanvasCloseButton && n(a).find(".nav-menus-wrapper").prepend("<span class='nav-menus-wrapper-close-button'>&#10005;</span>"), "right" == r.settings.offCanvasSide && n(a).find(".nav-menus-wrapper").addClass("nav-menus-wrapper-right"), r.settings.hidden && (n(a).addClass("xs_nav-hidden"), r.settings.mobileBreakpoint = 99999), v(), n(a).find(".nav-toggle").on("click touchstart", function(n) {
				n.stopPropagation(), n.preventDefault(), r.showOffcanvas(), t !== s && r.callback("onShowOffCanvas")
			}), n(a).find(".nav-menus-wrapper-close-button").on("click touchstart", function() {
				r.hideOffcanvas(), t !== s && r.callback("onHideOffCanvas")
			}), n(a).find(".nav-search-button, .nav-search-close-button").on("click touchstart keydown", function(e) {
				e.stopPropagation(), e.preventDefault();
				var i = e.keyCode || e.which;
				"click" === e.type || "touchstart" === e.type || "keydown" === e.type && 13 == i ? r.toggleSearch() : 9 == i && n(e.target).blur()
			}), n(e).resize(function() {
				r.initxs_navMode(C()), O(), r.settings.hiddenOnMobile && m()
			}), r.initxs_navMode(C()), r.settings.hiddenOnMobile && m(), r.settings.overlay && n(a).append("<div class='nav-overlay-panel'></div>"), n(a).find(".megamenu-tabs").length > 0 && y(), t !== s && r.callback("onInit")
		};
		var h = function() {
				n(a).find(".nav-submenu").hide(0), n(a).find("li").removeClass("focus")
			},
			v = function() {
				n(a).find("li").each(function() {
					n(this).children(".nav-dropdown,.megamenu-panel").length > 0 && (n(this).children(".nav-dropdown,.megamenu-panel").addClass("nav-submenu"), r.settings.submenuIndicator && n(this).children("a").append("<span class='submenu-indicator'><span class='submenu-indicator-chevron'></span></span>"))
				})
			},
			m = function() {
				n(a).hasClass("xs_nav-portrait") ? n(a).addClass("xs_nav-hidden") : n(a).removeClass("xs_nav-hidden")
			};
		r.showSubmenu = function(e, i) {
			C() > r.settings.mobileBreakpoint && n(a).find(".nav-search").find("form").fadeOut(), "fade" == i ? n(e).children(".nav-submenu").stop(!0, !0).delay(r.settings.showDelayDuration).fadeIn(r.settings.showDuration).removeClass(r.settings.animationOnHide).addClass(r.settings.animationOnShow) : n(e).children(".nav-submenu").stop(!0, !0).delay(r.settings.showDelayDuration).slideDown(r.settings.showDuration).removeClass(r.settings.animationOnHide).addClass(r.settings.animationOnShow), n(e).addClass("focus")
		}, r.hideSubmenu = function(e, i) {
			"fade" == i ? n(e).find(".nav-submenu").stop(!0, !0).delay(r.settings.hideDelayDuration).fadeOut(r.settings.hideDuration).removeClass(r.settings.animationOnShow).addClass(r.settings.animationOnHide) : n(e).find(".nav-submenu").stop(!0, !0).delay(r.settings.hideDelayDuration).slideUp(r.settings.hideDuration).removeClass(r.settings.animationOnShow).addClass(r.settings.animationOnHide), n(e).removeClass("focus").find(".focus").removeClass("focus")
		};
		var p = function() {
				r.settings.hideScrollBar && n("body").addClass("no-scroll"), r.settings.overlay && n(a).find(".nav-overlay-panel").css("background-color", r.settings.overlayColor).fadeIn(300).on("click touchstart", function() {
					r.hideOffcanvas()
				})
			},
			b = function() {
				r.settings.hideScrollBar && n("body").removeClass("no-scroll"), r.settings.overlay && n(a).find(".nav-overlay-panel").fadeOut(400)
			};
		r.showOffcanvas = function() {
			p(), "left" == r.settings.offCanvasSide ? n(a).find(".nav-menus-wrapper").css("transition-property", "left").addClass("nav-menus-wrapper-open") : n(a).find(".nav-menus-wrapper").css("transition-property", "right").addClass("nav-menus-wrapper-open")
		}, r.hideOffcanvas = function() {
			n(a).find(".nav-menus-wrapper").removeClass("nav-menus-wrapper-open").on("webkitTransitionEnd moztransitionend transitionend oTransitionEnd", function() {
				n(a).find(".nav-menus-wrapper").css("transition-property", "none").off()
			}), b()
		}, r.toggleOffcanvas = function() {
			C() <= r.settings.mobileBreakpoint && (n(a).find(".nav-menus-wrapper").hasClass("nav-menus-wrapper-open") ? (r.hideOffcanvas(), t !== s && r.callback("onHideOffCanvas")) : (r.showOffcanvas(), t !== s && r.callback("onShowOffCanvas")))
		}, r.toggleSearch = function() {
			"none" == n(a).find(".nav-search").find("form").css("display") ? (n(a).find(".nav-search").find("form").fadeIn(200), n(a).find(".nav-search").find("input").focus()) : (n(a).find(".nav-search").find("form").fadeOut(200), n(a).find(".nav-search").find("input").blur())
		}, r.initxs_navMode = function(e) {
			r.settings.responsive ? (e <= r.settings.mobileBreakpoint && u > r.settings.mobileBreakpoint && (n(a).addClass("xs_nav-portrait").removeClass("xs_nav-landscape"), S(), t !== s && r.callback("onPortrait")), e > r.settings.mobileBreakpoint && d <= r.settings.mobileBreakpoint && (n(a).addClass("xs_nav-landscape").removeClass("xs_nav-portrait"), k(), b(), r.hideOffcanvas(), t !== s && r.callback("onLandscape")), u = e, d = e) : (n(a).addClass("xs_nav-landscape"), k(), t !== s && r.callback("onLandscape"))
		};
		var g = function() {
				n("html").on("click.body touchstart.body", function(e) {
					0 === n(e.target).closest(".xs_nav").length && (n(a).find(".nav-submenu").fadeOut(), n(a).find(".focus").removeClass("focus"), n(a).find(".nav-search").find("form").fadeOut())
				})
			},
			C = function() {
				return e.innerWidth || i.documentElement.clientWidth || i.body.clientWidth
			},
			w = function(e) {
				"landscape" == e ? n(a).find(".nav-menu").find("li, a").off(l) : n(a).find(".nav-menu").find("li, a").off(c).off(f)
			},
			O = function() {
				if (C() > r.settings.mobileBreakpoint) {
					var e = n(a).outerWidth();
					n(a).find(".nav-menu").children("li").children(".nav-submenu").each(function() {
						n(this).parent().position().left + n(this).outerWidth() > e ? n(this).css("right", 0) : n(this).css("right", "auto")
					})
				}
			},
			y = function() {
				function e(e) {
					var i = n(e).children(".megamenu-tabs-nav").children("li"),
						s = n(e).children(".megamenu-tabs-pane");
					n(i).on("mouseenter.tabs click.tabs touchstart.tabs", function(e) {
						e.stopPropagation(), e.preventDefault(), n(i).removeClass("active"), n(this).addClass("active"), n(s).hide(0).removeClass("active"), n(s[n(this).index()]).show(0).addClass("active")
					})
				}
				if (n(a).find(".megamenu-tabs").length > 0)
					for (var i = n(a).find(".megamenu-tabs"), s = 0; s < i.length; s++) e(i[s])
			},
// 			k = function() {
// 				w("landscape"), h(), navigator.userAgent.match(/Mobi/i) || navigator.maxTouchPoints > 0 || "click" == r.settings.submenuTrigger ? n(a).find(".nav-menu, .nav-dropdown").children("li").children("a").on(l, function(i) {
// 					if (r.hideSubmenu(n(this).parent("li").siblings("li"), r.settings.effect), n(this).closest(".nav-menu").siblings(".nav-menu").find(".nav-submenu").fadeOut(r.settings.hideDuration), n(this).siblings(".nav-submenu").length > 0) {
// 						if (i.stopPropagation(), i.preventDefault(), "none" == n(this).siblings(".nav-submenu").css("display")) return r.showSubmenu(n(this).parent("li"), r.settings.effect), O(), !1;
// 						if (r.hideSubmenu(n(this).parent("li"), r.settings.effect), "_blank" === n(this).attr("target") || "blank" === n(this).attr("target")) e.open(n(this).attr("href"));
// 						else {
// 							if ("#" === n(this).attr("href") || "" === n(this).attr("href") || "javascript:void(0)" === n(this).attr("href")) return !1;
// 							e.location.href = n(this).attr("href");
// 						}
// 					}
// 				}) : n(a).find(".nav-menu").find("li").on(c, function() {
// 					r.showSubmenu(this, r.settings.effect), O()
// 				}).on(f, function() {
// 					r.hideSubmenu(this, r.settings.effect)
// 				}), r.settings.hideSubWhenGoOut && g()
// 			},
			S = function() {
				w("portrait"), h(), r.settings.visibleSubmenusOnMobile ? n(a).find(".nav-submenu").show(0) : (n(a).find(".submenu-indicator").removeClass("submenu-indicator-up"), r.settings.submenuIndicator && r.settings.submenuIndicatorTrigger ? n(a).find(".submenu-indicator").on(l, function(e) {
					return e.stopPropagation(), e.preventDefault(), r.hideSubmenu(n(this).parent("a").parent("li").siblings("li"), "slide"), r.hideSubmenu(n(this).closest(".nav-menu").siblings(".nav-menu").children("li"), "slide"), "none" == n(this).parent("a").siblings(".nav-submenu").css("display") ? (n(this).addClass("submenu-indicator-up"), n(this).parent("a").parent("li").siblings("li").find(".submenu-indicator").removeClass("submenu-indicator-up"), n(this).closest(".nav-menu").siblings(".nav-menu").find(".submenu-indicator").removeClass("submenu-indicator-up"), r.showSubmenu(n(this).parent("a").parent("li"), "slide"), !1) : (n(this).parent("a").parent("li").find(".submenu-indicator").removeClass("submenu-indicator-up"), void r.hideSubmenu(n(this).parent("a").parent("li"), "slide"))
				}) : n(a).find(".nav-menu, .nav-dropdown").children("li").children("a").each(function() {
					n(this).siblings(".nav-submenu").length > 0 && n(this).on(l, function(i) {
						if (i.stopPropagation(), i.preventDefault(), r.hideSubmenu(n(this).parent("li").siblings("li"), r.settings.effect), r.hideSubmenu(n(this).closest(".nav-menu").siblings(".nav-menu").children("li"), "slide"), "none" == n(this).siblings(".nav-submenu").css("display")) return n(this).children(".submenu-indicator").addClass("submenu-indicator-up"), n(this).parent("li").siblings("li").find(".submenu-indicator").removeClass("submenu-indicator-up"), n(this).closest(".nav-menu").siblings(".nav-menu").find(".submenu-indicator").removeClass("submenu-indicator-up"), r.showSubmenu(n(this).parent("li"), "slide"), !1;
						if (n(this).parent("li").find(".submenu-indicator").removeClass("submenu-indicator-up"), r.hideSubmenu(n(this).parent("li"), "slide"), "_blank" === n(this).attr("target") || "blank" === n(this).attr("target")) e.open(n(this).attr("href"));
						else {
							if ("#" === n(this).attr("href") || "" === n(this).attr("href") || "javascript:void(0)" === n(this).attr("href")) return !1;
							e.location.href = n(this).attr("href")
						}
					})
				}))
			};
		r.callback = function(n) {
			t[n] !== s && t[n].call(a)
		}, r.init()
	}, n.fn.xs_nav = function(e) {
		return this.each(function() {
			if (s === n(this).data("xs_nav")) {
				var i = new n.xs_nav(this, e);
				n(this).data("xs_nav", i)
			}
		})
	}
}
(jQuery, window, document);
(function() {
	var a, b, c, d, e, f = function(a, b) {
			return function() {
				return a.apply(b, arguments)
			}
		},
		g = [].indexOf || function(a) {
			for (var b = 0, c = this.length; c > b; b++)
				if (b in this && this[b] === a) return b;
			return -1
		};
	b = function() {
		function a() {}
		return a.prototype.extend = function(a, b) {
			var c, d;
			for (c in b) d = b[c], null == a[c] && (a[c] = d);
			return a
		}, a.prototype.isMobile = function(a) {
			return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)
		}, a.prototype.addEvent = function(a, b, c) {
			return null != a.addEventListener ? a.addEventListener(b, c, !1) : null != a.attachEvent ? a.attachEvent("on" + b, c) : a[b] = c
		}, a.prototype.removeEvent = function(a, b, c) {
			return null != a.removeEventListener ? a.removeEventListener(b, c, !1) : null != a.detachEvent ? a.detachEvent("on" + b, c) : delete a[b]
		}, a.prototype.innerHeight = function() {
			return "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight
		}, a
	}(), c = this.WeakMap || this.MozWeakMap || (c = function() {
		function a() {
			this.keys = [], this.values = []
		}
		return a.prototype.get = function(a) {
			var b, c, d, e, f;
			for (f = this.keys, b = d = 0, e = f.length; e > d; b = ++d)
				if (c = f[b], c === a) return this.values[b]
		}, a.prototype.set = function(a, b) {
			var c, d, e, f, g;
			for (g = this.keys, c = e = 0, f = g.length; f > e; c = ++e)
				if (d = g[c], d === a) return void(this.values[c] = b);
			return this.keys.push(a), this.values.push(b)
		}, a
	}()), a = this.MutationObserver || this.WebkitMutationObserver || this.MozMutationObserver || (a = function() {
		function a() {
			"undefined" != typeof console && null !== console && console.warn("MutationObserver is not supported by your browser."), "undefined" != typeof console && null !== console && console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")
		}
		return a.notSupported = !0, a.prototype.observe = function() {}, a
	}()), d = this.getComputedStyle || function(a) {
		return this.getPropertyValue = function(b) {
			var c;
			return "float" === b && (b = "styleFloat"), e.test(b) && b.replace(e, function(a, b) {
				return b.toUpperCase()
			}), (null != (c = a.currentStyle) ? c[b] : void 0) || null
		}, this
	}, e = /(\-([a-z]){1})/g, this.WOW = function() {
		function e(a) {
			null == a && (a = {}), this.scrollCallback = f(this.scrollCallback, this), this.scrollHandler = f(this.scrollHandler, this), this.start = f(this.start, this), this.scrolled = !0, this.config = this.util().extend(a, this.defaults), this.animationNameCache = new c
		}
		return e.prototype.defaults = {
			boxClass: "wow",
			animateClass: "animated",
			offset: 0,
			mobile: !0,
			live: !0
		}, e.prototype.init = function() {
			var a;
			return this.element = window.document.documentElement, "interactive" === (a = document.readyState) || "complete" === a ? this.start() : this.util().addEvent(document, "DOMContentLoaded", this.start), this.finished = []
		}, e.prototype.start = function() {
			var b, c, d, e;
			if (this.stopped = !1, this.boxes = function() {
					var a, c, d, e;
					for (d = this.element.querySelectorAll("." + this.config.boxClass), e = [], a = 0, c = d.length; c > a; a++) b = d[a], e.push(b);
					return e
				}.call(this), this.all = function() {
					var a, c, d, e;
					for (d = this.boxes, e = [], a = 0, c = d.length; c > a; a++) b = d[a], e.push(b);
					return e
				}.call(this), this.boxes.length)
				if (this.disabled()) this.resetStyle();
				else {
					for (e = this.boxes, c = 0, d = e.length; d > c; c++) b = e[c], this.applyStyle(b, !0);
					this.util().addEvent(window, "scroll", this.scrollHandler), this.util().addEvent(window, "resize", this.scrollHandler), this.interval = setInterval(this.scrollCallback, 50)
				}
			return this.config.live ? new a(function(a) {
				return function(b) {
					var c, d, e, f, g;
					for (g = [], e = 0, f = b.length; f > e; e++) d = b[e], g.push(function() {
						var a, b, e, f;
						for (e = d.addedNodes || [], f = [], a = 0, b = e.length; b > a; a++) c = e[a], f.push(this.doSync(c));
						return f
					}.call(a));
					return g
				}
			}(this)).observe(document.body, {
				childList: !0,
				subtree: !0
			}) : void 0
		}, e.prototype.stop = function() {
			return this.stopped = !0, this.util().removeEvent(window, "scroll", this.scrollHandler), this.util().removeEvent(window, "resize", this.scrollHandler), null != this.interval ? clearInterval(this.interval) : void 0
		}, e.prototype.sync = function() {
			return a.notSupported ? this.doSync(this.element) : void 0
		}, e.prototype.doSync = function(a) {
			var b, c, d, e, f;
			if (null == a && (a = this.element), 1 === a.nodeType) {
				for (a = a.parentNode || a, e = a.querySelectorAll("." + this.config.boxClass), f = [], c = 0, d = e.length; d > c; c++) b = e[c], g.call(this.all, b) < 0 ? (this.boxes.push(b), this.all.push(b), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(b, !0), f.push(this.scrolled = !0)) : f.push(void 0);
				return f
			}
		}, e.prototype.show = function(a) {
			return this.applyStyle(a), a.className = "" + a.className + " " + this.config.animateClass
		}, e.prototype.applyStyle = function(a, b) {
			var c, d, e;
			return d = a.getAttribute("data-wow-duration"), c = a.getAttribute("data-wow-delay"), e = a.getAttribute("data-wow-iteration"), this.animate(function(f) {
				return function() {
					return f.customStyle(a, b, d, c, e)
				}
			}(this))
		}, e.prototype.animate = function() {
			return "requestAnimationFrame" in window ? function(a) {
				return window.requestAnimationFrame(a)
			} : function(a) {
				return a()
			}
		}(), e.prototype.resetStyle = function() {
			var a, b, c, d, e;
			for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) a = d[b], e.push(a.style.visibility = "visible");
			return e
		}, e.prototype.customStyle = function(a, b, c, d, e) {
			return b && this.cacheAnimationName(a), a.style.visibility = b ? "hidden" : "visible", c && this.vendorSet(a.style, {
				animationDuration: c
			}), d && this.vendorSet(a.style, {
				animationDelay: d
			}), e && this.vendorSet(a.style, {
				animationIterationCount: e
			}), this.vendorSet(a.style, {
				animationName: b ? "none" : this.cachedAnimationName(a)
			}), a
		}, e.prototype.vendors = ["moz", "webkit"], e.prototype.vendorSet = function(a, b) {
			var c, d, e, f;
			f = [];
			for (c in b) d = b[c], a["" + c] = d, f.push(function() {
				var b, f, g, h;
				for (g = this.vendors, h = [], b = 0, f = g.length; f > b; b++) e = g[b], h.push(a["" + e + c.charAt(0).toUpperCase() + c.substr(1)] = d);
				return h
			}.call(this));
			return f
		}, e.prototype.vendorCSS = function(a, b) {
			var c, e, f, g, h, i;
			for (e = d(a), c = e.getPropertyCSSValue(b), i = this.vendors, g = 0, h = i.length; h > g; g++) f = i[g], c = c || e.getPropertyCSSValue("-" + f + "-" + b);
			return c
		}, e.prototype.animationName = function(a) {
			var b;
			try {
				b = this.vendorCSS(a, "animation-name").cssText
			} catch (c) {
				b = d(a).getPropertyValue("animation-name")
			}
			return "none" === b ? "" : b
		}, e.prototype.cacheAnimationName = function(a) {
			return this.animationNameCache.set(a, this.animationName(a))
		}, e.prototype.cachedAnimationName = function(a) {
			return this.animationNameCache.get(a)
		}, e.prototype.scrollHandler = function() {
			return this.scrolled = !0
		}, e.prototype.scrollCallback = function() {
			var a;
			return !this.scrolled || (this.scrolled = !1, this.boxes = function() {
				var b, c, d, e;
				for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) a = d[b], a && (this.isVisible(a) ? this.show(a) : e.push(a));
				return e
			}.call(this), this.boxes.length || this.config.live) ? void 0 : this.stop()
		}, e.prototype.offsetTop = function(a) {
			for (var b; void 0 === a.offsetTop;) a = a.parentNode;
			for (b = a.offsetTop; a = a.offsetParent;) b += a.offsetTop;
			return b
		}, e.prototype.isVisible = function(a) {
			var b, c, d, e, f;
			return c = a.getAttribute("data-wow-offset") || this.config.offset, f = window.pageYOffset, e = f + Math.min(this.element.clientHeight, this.util().innerHeight()) - c, d = this.offsetTop(a), b = d + a.clientHeight, e >= d && b >= f
		}, e.prototype.util = function() {
			return null != this._util ? this._util : this._util = new b
		}, e.prototype.disabled = function() {
			return !this.config.mobile && this.util().isMobile(navigator.userAgent)
		}, e
	}()
}).call(this);