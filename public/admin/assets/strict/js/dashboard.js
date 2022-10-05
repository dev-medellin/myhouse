(function($) {
    "use strict";

    var month_list = null,
        month_name = null,
        res = 0,
        total_count = 0,
        record = [],
        month_data = 0;

    var base_url         = $('#url').val();
    var pathUrl          = base_url+"/admin/chart",
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

        
            //  if(response.status == "SUCCESS"){
            //     priceMin =  response.data.priceMin 
            //     priceMax =  response.data.priceMax
            //  }else{
            //     alert(response.message);
            //  }
          },
    });
    Object.values(res).forEach(val => {
        record.push(val.month_name);
        month_data = month_list.map(i => record.includes(i) ? val.total : 0)
      });
    
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
                            label: "Customer Project",
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

        if ($("#north-america-chart").length) {
            var areaData = {
                labels: ["Jan", "Feb", "Mar"],
                datasets: [
                    {
                        data: [100, 50, 50],
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
                    enabled: true
                },
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<div class="report-chart">');
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[0] +
                            '"></div><p class="mb-0">Offline sales</p></div>'
                    );
                    text.push('<p class="mb-0">88333</p>');
                    text.push("</div>");
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[1] +
                            '"></div><p class="mb-0">Online sales</p></div>'
                    );
                    text.push('<p class="mb-0">66093</p>');
                    text.push("</div>");
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[2] +
                            '"></div><p class="mb-0">Returns</p></div>'
                    );
                    text.push('<p class="mb-0">39836</p>');
                    text.push("</div>");
                    text.push("</div>");
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

                    var text = "90",
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

        if ($("#north-america-chart-dark").length) {
            var areaData = {
                labels: ["Jan", "Feb", "Mar"],
                datasets: [
                    {
                        data: [100, 50, 50],
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
                    enabled: true
                },
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<div class="report-chart">');
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[0] +
                            '"></div><p class="mb-0">Offline sales</p></div>'
                    );
                    text.push('<p class="mb-0">88333</p>');
                    text.push("</div>");
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[1] +
                            '"></div><p class="mb-0">Online sales</p></div>'
                    );
                    text.push('<p class="mb-0">66093</p>');
                    text.push("</div>");
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[2] +
                            '"></div><p class="mb-0">Returns</p></div>'
                    );
                    text.push('<p class="mb-0">39836</p>');
                    text.push("</div>");
                    text.push("</div>");
                    return text.join("");
                }
            };
            var northAmericaChartDarkPlugins = {
                beforeDraw: function(chart) {
                    var width = chart.chart.width,
                        height = chart.chart.height,
                        ctx = chart.chart.ctx;

                    ctx.restore();
                    var fontSize = 3.125;
                    ctx.font = "600 " + fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";
                    ctx.fillStyle = "#b1b1b5";

                    var text = "90",
                        textX = Math.round(
                            (width - ctx.measureText(text).width) / 2
                        ),
                        textY = height / 2;

                    ctx.fillText(text, textX, textY);
                    ctx.save();
                }
            };
            var northAmericaChartDarkCanvas = $("#north-america-chart-dark")
                .get(0)
                .getContext("2d");
            var northAmericaChartDark = new Chart(northAmericaChartDarkCanvas, {
                type: "doughnut",
                data: areaData,
                options: areaOptions,
                plugins: northAmericaChartDarkPlugins
            });
            document.getElementById(
                "north-america-legend-dark"
            ).innerHTML = northAmericaChartDark.generateLegend();
        }

        if ($("#south-america-chart").length) {
            var areaData = {
                labels: ["Jan", "Feb", "Mar"],
                datasets: [
                    {
                        data: [60, 70, 70],
                        backgroundColor: ["#ffc100", "#248afd", "#71c016"],
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
                    enabled: true
                },
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<div class="report-chart">');
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[0] +
                            '"></div><p class="mb-0">Offline sales</p></div>'
                    );
                    text.push('<p class="mb-0">495343</p>');
                    text.push("</div>");
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[1] +
                            '"></div><p class="mb-0">Online sales</p></div>'
                    );
                    text.push('<p class="mb-0">630983</p>');
                    text.push("</div>");
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[2] +
                            '"></div><p class="mb-0">Returns</p></div>'
                    );
                    text.push('<p class="mb-0">290831</p>');
                    text.push("</div>");
                    text.push("</div>");
                    return text.join("");
                }
            };
            var southAmericaChartPlugins = {
                beforeDraw: function(chart) {
                    var width = chart.chart.width,
                        height = chart.chart.height,
                        ctx = chart.chart.ctx;

                    ctx.restore();
                    var fontSize = 3.125;
                    ctx.font = "600 " + fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";
                    ctx.fillStyle = "#000";

                    var text = "76",
                        textX = Math.round(
                            (width - ctx.measureText(text).width) / 2
                        ),
                        textY = height / 2;

                    ctx.fillText(text, textX, textY);
                    ctx.save();
                }
            };
            var southAmericaChartCanvas = $("#south-america-chart")
                .get(0)
                .getContext("2d");
            var southAmericaChart = new Chart(southAmericaChartCanvas, {
                type: "doughnut",
                data: areaData,
                options: areaOptions,
                plugins: southAmericaChartPlugins
            });
            document.getElementById(
                "south-america-legend"
            ).innerHTML = southAmericaChart.generateLegend();
        }

        if ($("#south-america-chart-dark").length) {
            var areaData = {
                labels: ["Jan", "Feb", "Mar"],
                datasets: [
                    {
                        data: [60, 70, 70],
                        backgroundColor: ["#ffc100", "#248afd", "#71c016"],
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
                    enabled: true
                },
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<div class="report-chart">');
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[0] +
                            '"></div><p class="mb-0">Offline sales</p></div>'
                    );
                    text.push('<p class="mb-0">495343</p>');
                    text.push("</div>");
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[1] +
                            '"></div><p class="mb-0">Online sales</p></div>'
                    );
                    text.push('<p class="mb-0">630983</p>');
                    text.push("</div>");
                    text.push(
                        '<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' +
                            chart.data.datasets[0].backgroundColor[2] +
                            '"></div><p class="mb-0">Returns</p></div>'
                    );
                    text.push('<p class="mb-0">290831</p>');
                    text.push("</div>");
                    text.push("</div>");
                    return text.join("");
                }
            };
            var southAmericaChartDarkPlugins = {
                beforeDraw: function(chart) {
                    var width = chart.chart.width,
                        height = chart.chart.height,
                        ctx = chart.chart.ctx;

                    ctx.restore();
                    var fontSize = 3.125;
                    ctx.font = "600 " + fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";
                    ctx.fillStyle = "#b1b1b5";

                    var text = "76",
                        textX = Math.round(
                            (width - ctx.measureText(text).width) / 2
                        ),
                        textY = height / 2;

                    ctx.fillText(text, textX, textY);
                    ctx.save();
                }
            };
            var southAmericaChartDarkCanvas = $("#south-america-chart-dark")
                .get(0)
                .getContext("2d");
            var southAmericaChartDark = new Chart(southAmericaChartDarkCanvas, {
                type: "doughnut",
                data: areaData,
                options: areaOptions,
                plugins: southAmericaChartDarkPlugins
            });
            document.getElementById(
                "south-america-legend-dark"
            ).innerHTML = southAmericaChartDark.generateLegend();
        }
    });
})(jQuery);
