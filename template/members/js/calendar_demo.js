var handleCalendarDemo = function () {
        $("#external-events .fc-event").each(function () {
            $(this).data("event", {
                title: $.trim($(this).text()),
                stick: !0,
                color: $(this).attr("data-color") ? $(this).attr("data-color") : ""
            }), $(this).draggable({
                zIndex        : 999,
                revert        : !0,
                revertDuration: 0
            })
        });
        var t = new Date,
            e = t.getFullYear(),
            a = t.getMonth() + 1;
        a = 10 > a ? "0" + a : a, $("#calendar").fullCalendar({
            header      : {
                left  : "month,agendaWeek,agendaDay",
                center: "title",
                right : "prev,today,next "
            },
            droppable   : !0,
            drop        : function () {
                $(this).remove()
            },
            selectable  : !0,
            selectHelper: !0,
            select      : function (t, e) {
                var a, r = prompt("Event Title:");
                r && (a = {
                    title: r,
                    start: t,
                    end  : e
                }, $("#calendar").fullCalendar("renderEvent", a, !0)), $("#calendar").fullCalendar("unselect")
            },
            editable    : !0,
            eventLimit  : !0,
            events      : [ {
                title: "All Day Event",
                start: e + "-" + a + "-01",
                color: "#00acac"
            }, {
                title: "Long Event",
                start: e + "-" + a + "-07",
                end  : e + "-" + a + "-10"
            }, {
                id   : 999,
                title: "Repeating Event",
                start: e + "-" + a + "-09T16:00:00",
                color: "#00acac"
            }, {
                id   : 999,
                title: "Repeating Event",
                start: e + "-" + a + "-16T16:00:00"
            }, {
                title: "Conference",
                start: e + "-" + a + "-11",
                end  : e + "-" + a + "-13"
            }, {
                title: "Meeting",
                start: e + "-" + a + "-12T10:30:00",
                end  : e + "-" + a + "-12T12:30:00",
                color: "#00acac"
            }, {
                title: "Lunch",
                start: e + "-" + a + "-12T12:00:00",
                color: "#348fe2"
            }, {
                title: "Meeting",
                start: e + "-" + a + "-12T14:30:00"
            }, {
                title: "Happy Hour",
                start: e + "-" + a + "-12T17:30:00"
            }, {
                title: "Dinner",
                start: e + "-" + a + "-12T20:00:00"
            }, {
                title: "Birthday Party",
                start: e + "-" + a + "-13T07:00:00"
            }, {
                title: "Click for Google",
                url  : "http://google.com/",
                start: e + "-" + a + "-28",
                color: "#ff5b57"
            } ]
        })
    },
    Calendar = function () {
        "use strict";
        return {
            init: function () {
                handleCalendarDemo()
            }
        }
    }();