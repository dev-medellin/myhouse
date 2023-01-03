(function($) {
    "use strict";

    var month_list = null,
        month_name = null,
        user_name = null,
        res = 0,
        month_list_new = [],
        month_list_count_new =[],
        total_count = 0,
        total_count_users = 0,
        record = [],
        month_data = 0,
        user_data = 0,
        user_record = [];

    var base_url         = $('#url').val();
    var pathUrl          = base_url+"/contructor/chart",
    method            	 = "POST",
    dtype 	             = "json";

    $.ajax({
       type: method,  
       url: pathUrl,
       dataType: dtype,
       async: false,
       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       success: function(response){  
        month_list  = response.data.month;
        month_name  = response.data.query_month;
        res         = response.data.res;
        total_count = response.data.total_count;
        total_count_users = response.data.total_count_user;
        user_name   = response.data.user_count;

        $('.project_text').html(response.data.total_proj);
        $('.client_text').html(response.data.total_count_user);
        $('.wishlist_text').html(response.data.total_count_wish);
        $('.testimony_text').html(response.data.total_testimony)
        
            //  if(response.status == "SUCCESS"){
            //     priceMin =  response.data.priceMin 
            //     priceMax =  response.data.priceMax
            //  }else{
            //     alert(response.message);
            //  }
          },
    });
    var MonthList = res.filter(function (el)
    {
        return el.month_name
    }
    );
    MonthList.forEach(val => {
        month_list_new.push(val.month_name);
    });

    var MonthListCount = res.filter(function (el)
    {
        return el.total
    }
    );
    MonthListCount.forEach(val => {
        month_list_count_new.push(val.total);
    });

    // Object.values(user_name).forEach(val => {
    //     user_record.push(val.month_name);
    //     user_data = month_list.map(i => user_record.includes(i) ? val.total : 0)
    // });
    var sum_of = month_list_count_new.reduce((a, b) => a + b, 0);
    $(function() {
        if ($("#sales-chart").length) {
            var SalesChartCanvas = $("#sales-chart")
                .get(0)
                .getContext("2d");
            var SalesChart = new Chart(SalesChartCanvas, {
                type: "bar",
                data: {
                    labels: month_list,
                    datasets: [
                        {
                            label: "Total Project",
                            data: month_data,
                            backgroundColor: "#ffc100"
                        },
                        // {
                        //     label: "Online Sales",
                        //     data: [400, 340, 550, 480, 170],
                        //     backgroundColor: "#f5a623"
                        // }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 20,
                            bottom: 0
                        }
                    },
                    scales: {
                        yAxes: [
                            {
                                display: true,
                                gridLines: {
                                    display: true,
                                    drawBorder: true
                                },
                                ticks: {
                                    display: true,
                                    min: 0,
                                    max: total_count
                                }
                            }
                        ],
                        xAxes: [
                            {
                                stacked: false,
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: "#9fa0a2"
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                    display: true
                                },
                                barPercentage: 1
                            }
                        ]
                    },
                    legend: {
                        display: false
                    },
                    elements: {
                        point: {
                            radius: 0
                        }
                    }
                }
            });
            document.getElementById(
                "sales-legend"
            ).innerHTML = SalesChart.generateLegend();
        }

        if ($("#user-chart").length) {
            var SalesChartCanvas = $("#user-chart")
                .get(0)
                .getContext("2d");
            var SalesChart = new Chart(SalesChartCanvas, {
                type: "bar",
                data: {
                    labels: month_list,
                    datasets: [
                        {
                            label: "User Registered",
                            data: user_data,
                            backgroundColor: "#03FB56"
                        },
                        // {
                        //     label: "Online Sales",
                        //     // data: [400, 340, 550, 480, 170],
                        //     backgroundColor: "#f5a623"
                        // }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 20,
                            bottom: 0
                        }
                    },
                    scales: {
                        yAxes: [
                            {
                                display: true,
                                gridLines: {
                                    display: true,
                                    drawBorder: true
                                },
                                ticks: {
                                    display: true,
                                    min: 0,
                                    max: total_count_users
                                }
                            }
                        ],
                        xAxes: [
                            {
                                stacked: false,
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: "#9fa0a2"
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                    display: false
                                },
                                barPercentage: 1
                            }
                        ]
                    },
                    legend: {
                        display: false
                    },
                    elements: {
                        point: {
                            radius: 0
                        }
                    }
                }
            });
            document.getElementById(
                "user-count"
            ).innerHTML = SalesChart.generateLegend();
        }

        if ($("#north-america-chart").length) {
            var areaData = {
                labels: month_list_new,
                datasets: [
                    {
                        data: month_list_count_new,
                        backgroundColor: ["#71c016", "#ffc100", "#248afd"],
                        borderColor: "rgba(0,0,0,0)"
                    }
                ]
            };
            var areaOptions = {
                responsive: true,
                maintainAspectRatio: true,
                segmentShowStroke: false,
                cutoutPercentage: 78,
                elements: {
                    arc: {
                        borderWidth: 4
                    }
                },
                legend: {
                    display: false
                },
                tooltips: {
                    enabled: false
                },
                legendCallback: function(chart) {
                    var text = [];
                    return text.join("");
                }
            };
            var northAmericaChartPlugins = {
                beforeDraw: function(chart) {
                    var width = chart.chart.width,
                        height = chart.chart.height,
                        ctx = chart.chart.ctx;

                    ctx.restore();
                    var fontSize = 3.125;
                    ctx.font = "600 " + fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";
                    ctx.fillStyle = "#000";

                    var text = `${sum_of}`,
                        textX = Math.round(
                            (width - ctx.measureText(text).width) / 2
                        ),
                        textY = height / 2;

                    ctx.fillText(text, textX, textY);
                    ctx.save();
                }
            };
            var northAmericaChartCanvas = $("#north-america-chart")
                .get(0)
                .getContext("2d");
            var northAmericaChart = new Chart(northAmericaChartCanvas, {
                type: "doughnut",
                data: areaData,
                options: areaOptions,
                plugins: northAmericaChartPlugins
            });
            document.getElementById(
                "north-america-legend"
            ).innerHTML = northAmericaChart.generateLegend();
        }

    });
})(jQuery);
