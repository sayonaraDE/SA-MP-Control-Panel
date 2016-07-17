"use strict";
var styleSwitcher = {
    initialized: false,
    options: {
        color: 'blue',
        layout: 'wide',
        pattern: 'square_bg'
    },
    colors : [
        {
            "Hex": "#1E90FF",
            "colorName": "blue"
        },
        {
            "Hex": "#8CC152",
            "colorName": "green"
        },
        {
            "Hex": "#F6BB42",
            "colorName": "yellow"
        },
        {
            "Hex": "#E9573F",
            "colorName": "orange"
        },
        {
            "Hex": "#967ADC",
            "colorName": "purple"
        },
        {
            "Hex": "#D770AD",
            "colorName": "pink"
        },
        {
            "Hex": "#cd6560",
            "colorName": "red"
        },
        {
            "Hex": "#23bab5",
            "colorName": "lime"
        },
        {
            "Hex": "#2FA2D1",
            "colorName": "river"
        },
        {
            "Hex": "#000000",
            "colorName": "black"
        },
        {
            "Hex": "#666666",
            "colorName": "grey"
        }
    ],
    initialize: function () {
        var $this = this;
        if (this.initialized) return;

        $("head").append($('<link rel="stylesheet">').attr("href", "assets/plugins/style-switcher/style-switcher.css"));
        $this.build();
        $this.events();

        if ($.cookie("skin") != null) {
            $this.setColor($.cookie("skin"));
        } else {
            $this.container.find("ul[data-type=colors] li:first a").click();
        }

        if ($.cookie("initialized") == null) {
            $this.container.find("h4 a").click();
            $.cookie("initialized", true);
        }

        if ($.cookie("layout") != null) {
            $this.setLayout($.cookie("layout"));
        }

        if ($.cookie("pattern") != null) {
            $this.setPattern($.cookie("pattern"));
            $this.updatePatternColor();
        }

        $this.initialized = true;
    },
    build: function () {
        var $this = this;
        var switcher = $("<div />")
            .attr("id", "styleSwitcher")
            .addClass("style-switcher visible-lg")
            .append($("<h4 />").html("Style Selector")
                .append($("<a />")
                    .attr("href", "#")
                    .append($("<i />")
                        .addClass("fa fa-cog"))), $("<div />")
                .addClass("style-switcher-wrap")
                .append($("<h5 />")
                    .html("Theme Color"), $("<ul />")
                    .addClass("options colors")
                    .attr("data-type", "colors"))
                .append($("<h5 />")
                    .html("Layout"), $("<ul />")
                    .addClass("options layout")
                    .attr("data-type", "layouts"))
                .append($("<h5 />")
                    .html("Pattern <small>(Boxed Layout)</small>"), $("<ul />")
                    .addClass("options pattern")
                    .attr("data-type", "patterns"))
        );
        $("body").append(switcher);
        this.container = $("#styleSwitcher");

        //var

        var layouts = [
            {
                "Hex": "#323232",
                "colorName": "wide"
            },
            {
                "Hex": "#323232",
                "colorName": "boxed"
            }
        ];

        var patternsBgHex = "#323232";
        setPatternsBgHex();
        function setPatternsBgHex() {
            $(styleSwitcher.colors).each(function (i) {
                if ($.cookie("skin") == styleSwitcher.colors[i].colorName) {
                    patternsBgHex = styleSwitcher.colors[i].Hex;
                }
            });
        }

        var patterns = [
            /*
            {
                "Hex": patternsBgHex,
                "patternImage": "square_bg",
                "patternImageName": ""
            },
            */
            {
                "Hex": patternsBgHex,
                "patternImage": "crissXcross",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "cross_scratches",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "struckaxiom",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "whitediamond",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "worn_dots",
                "patternImageName": "" /**/
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "cardboard_flat",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "diamond_upholstery",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "egg_shell",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "sneaker_mesh_fabric",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "subtle_grunge",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "subtle_stripes",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "subtle_white_feathers",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "textured_stripes",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "tiny_grid",
                "patternImageName": ""
            },
            {
                "Hex": patternsBgHex,
                "patternImage": "white_bed_sheet",
                "patternImageName": ""
            }
        ];

        var colorList = this.container.find("ul[data-type=colors]");
        $.each(styleSwitcher.colors, function (i, value) {
            var color = $("<li />").append($("<a />").css("background-color", styleSwitcher.colors[i].Hex).attr({
                "data-color-hex": styleSwitcher.colors[i].Hex,
                "data-color-name": styleSwitcher.colors[i].colorName,
                "href": "#",
                "title": styleSwitcher.colors[i].colorName
            }).html(''));
            colorList.append(color);
        });

        var layoutList = this.container.find("ul[data-type=layouts]");
        $.each(layouts, function (i, value) {
            var layout = $("<li />").append($("<a />").css("background-color", layouts[i].Hex).attr({
                "data-color-hex": layouts[i].Hex,
                "data-color-name": layouts[i].colorName,
                "href": "#",
                "title": layouts[i].colorName
            }).html(layouts[i].colorName));
            layoutList.append(layout);
        });

        var patternList = this.container.find("ul[data-type=patterns]");
        $.each(patterns, function (i, value) {
            var pattern = $("<li />").append($("<a />")
                .css({
                    "background": 'url("assets/img/patterns/' + patterns[i].patternImage + '_' + $.cookie("skin") + '.png") repeat 50% 50%' + patterns[i].Hex
                })
                .attr({
                    "data-color-hex": patterns[i].Hex,
                    "data-image": patterns[i].patternImage,
                    "data-image-name": patterns[i].patternImageName,
                    "href": "#",
                    "title": patterns[i].patternImageName
                }).html(patterns[i].patternImageName));
            patternList.append(pattern);
        });

        colorList.find("a").click(function (e) {
            e.preventDefault();
            $this.setColor($(this).attr("data-color-name"));
        });

        layoutList.find("a").click(function (e) {
            e.preventDefault();
            $this.setLayout($(this).attr("data-color-name"));
            // main slider
            $("#event-slider").data('owlCarousel').destroy();
            theme.initEventSlider();
            theme.onResize();

        });

        patternList.find("a").click(function (e) {
            e.preventDefault();
            $this.setPattern($(this).attr("data-image"));
        });

        $this.container.find("a.reset").click(function (e) {
            e.preventDefault();
            $this.reset();
        });
    },
    events: function () {
        var $this = this;
        $this.container.find("h4 a").click(function (e) {
            e.preventDefault();
            if ($this.container.hasClass("active")) {
                $this.container.animate({
                    right: "-" + $this.container.width() + "px"
                }, 300).removeClass("active");
            } else {
                $this.container.animate({
                    right: "0"
                }, 300).addClass("active");
            }
        });
        if ($.cookie("showSwitcher") != null) {
            $this.container.find("h4 a").click();
            $.removeCookie("showSwitcher");
        }
    },
    setColor: function (color) {
        var $this = this;
        var $colorSwitcherLink = jQuery('#css-switcher-link');
        if (this.isChanging) {
            return false;
        }
        $colorSwitcherLink.attr('href', 'assets/css/theme-' + color + '.css');
        $.cookie("skin", color);
        $this.updatePatternColor();
    },
    setLayout: function (layout) {
        $('body').removeAttr('class');
        $('body').addClass(layout);
        $.cookie("layout", layout);
    },
    setPattern: function (pattern) {
        $('body.boxed').css({"background-image": 'url("assets/img/patterns/' + pattern + '_' + $.cookie("skin") + '.png")'});
        $.cookie("pattern", pattern);
    },
    updatePatternColor: function () {
        $('body.boxed').css({"background-image": 'url("assets/img/patterns/' + $.cookie("pattern") + '_' + $.cookie("skin") + '.png")'});
        var patternListToUpdate = this.container.find("ul[data-type=patterns] li a");
        var patternsBgHex = "";
        $(styleSwitcher.colors).each(function (i) {
            if ($.cookie("skin") == styleSwitcher.colors[i].colorName) {
                patternsBgHex = styleSwitcher.colors[i].Hex;
            }
        });
        patternListToUpdate.each(function () {
            $(this).css({"background-color": patternsBgHex});
            //$(this).css({"background-image": 'url("assets/img/patterns/' + $(this).attr('data-image') + '_' + $.cookie("skin") + '.png")'});
            $(this).css({"background-image": 'url("assets/img/patterns/' + $(this).attr('data-image') + '_' + 'black' + '.png")'});
        });
    },
    reset: function () {
        $.removeCookie("skin");
        $.removeCookie("layout");
        $.cookie("showSwitcher", true);
        window.location.reload();
    }
};
styleSwitcher.initialize();
