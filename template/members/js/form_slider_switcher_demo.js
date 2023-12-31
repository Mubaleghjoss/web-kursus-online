var green = "#00acac",
    red = "#ff5b57",
    blue = "#348fe2",
    purple = "#727cb6",
    orange = "#f59c1a",
    black = "#2d353c",
    renderSwitcher = function () {
        0 !== $("[data-render=switchery]").length && $("[data-render=switchery]").each(function () {
            var t = green;
            if ($(this).attr("data-theme")) switch ($(this).attr("data-theme")) {
                case "red":
                    t = red;
                    break;
                case "blue":
                    t = blue;
                    break;
                case "purple":
                    t = purple;
                    break;
                case "orange":
                    t = orange;
                    break;
                case "black":
                    t = black
            }
            var a = {};
            a.color = t, a.secondaryColor = $(this).attr("data-secondary-color") ? $(this).attr("data-secondary-color") : "#dfdfdf", a.className = $(this).attr("data-classname") ? $(this).attr("data-classname") : "switchery", a.disabled = $(this).attr("data-disabled") ? !0 : !1, a.disabledOpacity = $(this).attr("data-disabled-opacity") ? parseFloat($(this).attr("data-disabled-opacity")) : .5, a.speed = $(this).attr("data-speed") ? $(this).attr("data-speed") : "0.5s";
            new Switchery(this, a)
        })
    },
    checkSwitcherState = function () {
        $('[data-click="check-switchery-state"]').live("click", function () {
            alert($('[data-id="switchery-state"]').prop("checked"))
        }), $('[data-change="check-switchery-state-text"]').live("change", function () {
            $('[data-id="switchery-state-text"]').text($(this).prop("checked"))
        })
    },
    renderPowerRangeSlider = function () {
        0 !== $('[data-render="powerange-slider"]').length && $('[data-render="powerange-slider"]').each(function () {
            var t = {};
            t.decimal = $(this).attr("data-decimal") ? $(this).attr("data-decimal") : !1, t.disable = $(this).attr("data-disable") ? $(this).attr("data-disable") : !1, t.disableOpacity = $(this).attr("data-disable-opacity") ? parseFloat($(this).attr("data-disable-opacity")) : .5, t.hideRange = $(this).attr("data-hide-range") ? $(this).attr("data-hide-range") : !1, t.klass = $(this).attr("data-class") ? $(this).attr("data-class") : "", t.min = $(this).attr("data-min") ? parseInt($(this).attr("data-min")) : 0, t.max = $(this).attr("data-max") ? parseInt($(this).attr("data-max")) : 100, t.start = $(this).attr("data-start") ? parseInt($(this).attr("data-start")) : null, t.step = $(this).attr("data-step") ? parseInt($(this).attr("data-step")) : null, t.vertical = $(this).attr("data-vertical") ? $(this).attr("data-vertical") : !1, $(this).attr("data-height") && $(this).closest(".slider-wrapper").height($(this).attr("data-height"));
            new Switchery(this, t), new Powerange(this, t)
        })
    },
    FormSliderSwitcher = function () {
        "use strict";
        return {
            init: function () {
                renderSwitcher(), checkSwitcherState(), renderPowerRangeSlider()
            }
        }
    }();