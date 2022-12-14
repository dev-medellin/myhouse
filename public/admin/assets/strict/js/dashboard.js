(function($) {
    "use strict";

    var month_list = null,
        month_name = null,
        user_name = null,
        month_list_count_new=[],
        month_list_new =[],
        user_list_count_new=[],
        user_list_new =[],
        res = 0,
        total_count = 0,
        total_count_users = 0,
        record = [],
        month_data = 0,
        user_data = 0,
        user_record = [];

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

    var MonthListCount = res.filter(function (el)
    {
        return el.total
    }
    );
    MonthListCount.forEach(val => {
        month_list_count_new.push(val.total);
    });

    var MonthList = res.filter(function (el)
    {
        return el.month_name
    }
    );
    MonthList.forEach(val => {
        month_list_new.push(val.month_name);
    });

    //
    var UserListCount = user_name.filter(function (el)
    {
        return el.total
    }
    );
    UserListCount.forEach(val => {
        user_list_count_new.push(val.total);
    });

    var UserList = user_name.filter(function (el)
    {
        return el.month_name
    }
    );
    UserList.forEach(val => {
        user_list_new.push(val.month_name);
    });


    // Object.values(res).forEach(val => {
    //     record.push(val.month_name);
    //     month_data = month_list.map(i => record.includes(i) ? val.total : 0)
    // });

    // Object.values(user_name).forEach(val => {
    //     user_record.push(val.month_name);
    //     user_data = month_list.map(i => user_record.includes(i) ? val.total : 0)
    // });
    
    $(function() {
        if ($("#sales-chart").length) {
            var SalesChartCanvas = $("#sales-chart")
                .get(0)
                .getContext("2d");
            var SalesChart = new Chart(SalesChartCanvas, {
                type: "bar",
                data: {
                    labels: month_list_new,
                    datasets: [
                        {
                            label: "Total Project",
                            data: month_list_count_new,
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
                    labels: user_list_new,
                    datasets: [
                        {
                            label: "User Registered",
                            data: user_list_count_new,
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

    });
})(jQuery);
