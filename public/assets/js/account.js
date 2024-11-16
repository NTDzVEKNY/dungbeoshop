(function($) {
    'use strict';

    $(document).ready(function() {


        /*---------------------------
        Price Range Slider
        ---------------------------*/
        var taskReport = {
            series: [{
                name: 'income',
                data: [40, 35, 49, 71, 57, 43, 31, 52, 32, 35, 47, 60],
                color: '#4287f5'
            }, {
                name: 'withdrawals',
                data: [23, 22, 35, 27, 43, 22, 17, 31, 22, 27, 12, 16],
                color: '#fe5502'
            }],
            chart: {
                type: 'area',
                height: 204,
                toolbar: {
                    tools: {
                        download: true,
                        selection: false,
                        zoom: true,
                        zoomin: false,
                        zoomout: false,
                        pan: false,
                        reset: true | '<img src="/static/icons/reset.png" width="20">',
                        customIcons: []
                    }
                },
                sparkline: {
                    enabled: true,
                }
            },
            stroke: {
                curve: 'smooth',              
                width: [0.5, 0.5]
            },
            dataLabels: {
                enabled: false,
            },
            labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            responsive: [
              {
                breakpoint: 480,
                options: {
                    chart: {
                        height: 150,
                    },
                }
              },
              {
                breakpoint: 576,
                options: {
                    chart: {
                        height: 200,
                    },
                }
              },
              {
                breakpoint: 992,
                options: {
                    chart: {
                        height: 130,
                    },
                }
              },
              {
                breakpoint: 1200,
                options: {
                    chart: {
                        height: 150,
                    },
                }
              }
            ]
        };
        var chart = new ApexCharts(document.querySelector("#overviewChart"), taskReport);
        chart.render();
    });
})(jQuery);