$(function () {
    data = {
        action: 'get_progress_bar'
    };
    jQuery.get(ajax_url, data, function (response) {
        $("#Progress_bar").css("width", response + "%");
    });
    data = {
        action: 'get_dashboard_personal'
    };
    jQuery.get(ajax_url, data, function (response) {
        var Results = jQuery.parseJSON(response);
        console.log(Results);
        if (typeof Results.Single[11] != "undefined") {
            $("#Positive_bar").css("width", Results.Single[11].Result_analog + "%");
        } else {
            $("#positive_emotions_message").append("You have not answerd the nessassery questions or they too old");
        }
        if (typeof Results.Single[12] != "undefined") {
            $("#Negative_bar").css("width", Results.Single[12].Result_analog + "%");
        } else {
            $("#positive_emotions_message").append("You have not answerd the nessassery questions or they too old");
        }
        var WellBeing = [];
        Results.Month[2].forEach(item => WellBeing.push({
            x: item.Date,
            y: item.Result_analog
        }));
        var PositiveEmotions = [];
        Results.Month[11].forEach(item => PositiveEmotions.push({
            x: item.Date,
            y: item.Result_analog
        }));
        var NegativeEmotions = [];
        Results.Month[12].forEach(item => NegativeEmotions.push({
            x: item.Date,
            y: item.Result_analog
        }));
        var Depression = [];
        Results.Month[5].forEach(item => Depression.push({
            x: item.Date,
            y: item.Result_analog
        }));
        var Anxiety = [];
        Results.Month[7].forEach(item => Anxiety.push({
            x: item.Date,
            y: item.Result_analog
        }));
        var Stress = [];
        Results.Month[6].forEach(item => Stress.push({
            x: item.Date,
            y: item.Result_analog
        }));
        var PersonalBurnout = [];
        Results.Month[8].forEach(item => PersonalBurnout.push({
            x: item.Date,
            y: item.Result_analog
        }));
        var WorkBurnout = [];
        Results.Month[9].forEach(item => WorkBurnout.push({
            x: item.Date,
            y: item.Result_analog
        }));
        if (typeof Results.Single[13] != "undefined") {
            var WellBeing_single=Results.Single[13].Result_analog;
        } else {
            var WellBeing_single=0;
        }

        var WellBarOptions = {
            series: [WellBeing_single],
            colors: ["#FDBF11"],
            chart: {
                type: 'radialBar',
                height: '200'
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 16,
                        size: '70%',
                        image: 'https://www.proency.com/wp-content/uploads/2020/11/holy-star.png',
                        imageWidth: 64,
                        imageHeight: 64,
                        imageClipped: false
                    },
                    dataLabels: {
                        name: {
                            show: false
                        },
                        value: {
                            show: false,
                        }
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#WellBar"), WellBarOptions);
        chart.render();
        var PositiveTimeLine = {
            series: [{
                name: "Well-being",
                data: WellBeing
            }, {
                name: "Positive-emotions",
                data: PositiveEmotions
            }],
            colors: ['#FDBF11', '#0CB359'],
            chart: {
                height: 400,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            title: {
                text: 'Positive Trends by Month',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'],
                    opacity: 0.3
                },
            }
        };
        var chart = new ApexCharts(document.querySelector("#PositiveTimeLine"), PositiveTimeLine);
        chart.render();
        var NegativeTimeLine = {
            series: [{
                name: "Negative Emotions",
                data: NegativeEmotions
            }, {
                name: "Depression",
                data: Depression
            }, {
                name: "Anxiety",
                data: Anxiety
            }, {
                name: "Stress",
                data: Stress
            }, {
                name: "Personal Burnout",
                data: PersonalBurnout
            }, {
                name: "Work Burnout",
                data: WorkBurnout
            }],
            colors: ['#FD3E11', '#1468a2', '#FD9611', '#6EC0E4', '#78348E', '#DF0F55'],
            chart: {
                height: 400,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            title: {
                text: 'Negative Trends by Month',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'],
                    opacity: 0.3
                },
            }
        };
        var chart = new ApexCharts(document.querySelector("#NegativeTimeLine"), NegativeTimeLine);
        chart.render();
    });
});
$(function () {
    $('[data-toggle="popover"]').popover()
})