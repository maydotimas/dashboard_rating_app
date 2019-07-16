demo = {
    initPickColor: function () {
        $('.pick-class-label').click(function () {
            var new_class = $(this).attr('new-class');
            var old_class = $('#display-buttons').attr('data-class');
            var display_div = $('#display-buttons');
            if (display_div.length) {
                var display_buttons = display_div.find('.btn');
                display_buttons.removeClass(old_class);
                display_buttons.addClass(new_class);
                display_div.attr('data-class', new_class);
            }
        });
    },

    initDocChart: function () {
        chartColor = "#FFFFFF";

        ctx = document.getElementById('chartHours').getContext("2d");

        myChart = new Chart(ctx, {
            type: 'line',

            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
                datasets: [{
                    borderColor: "#6bd098",
                    backgroundColor: "#6bd098",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    borderWidth: 3,
                    data: [300, 310, 316, 322, 330, 326, 333, 345, 338, 354]
                },
                    {
                        borderColor: "#f17e5d",
                        backgroundColor: "#f17e5d",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        borderWidth: 3,
                        data: [320, 340, 365, 360, 370, 385, 390, 384, 408, 420]
                    },
                    {
                        borderColor: "#fcc468",
                        backgroundColor: "#fcc468",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        borderWidth: 3,
                        data: [370, 394, 415, 409, 425, 445, 460, 450, 478, 484]
                    }
                ]
            },
            options: {
                legend: {
                    display: false
                },

                tooltips: {
                    enabled: false
                },

                scales: {
                    yAxes: [{

                        ticks: {
                            fontColor: "#9f9f9f",
                            beginAtZero: false,
                            maxTicksLimit: 5,
                            //padding: 20
                        },
                        gridLines: {
                            drawBorder: false,
                            zeroLineColor: "#ccc",
                            color: 'rgba(255,255,255,0.05)'
                        }

                    }],

                    xAxes: [{
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(255,255,255,0.1)',
                            zeroLineColor: "transparent",
                            display: false,
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#9f9f9f"
                        }
                    }]
                },
            }
        });

    },

    displayChartsWeeklyDashboard: function (weekly_label, weekly, title, id) {
        var ctx = document.getElementById(id).getContext("2d");

        myChart = new Chart(ctx, {
            type: 'line',

            data: {
                labels: weekly_label,
                datasets: [
                    {
                        label: 'VG',
                        borderColor: "#51BCDA",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: Object.values(weekly['VG']),
                        fill: false,
                    },
                    {
                        label: 'G',
                        borderColor: "#6BD098",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: Object.values(weekly['G']),
                        fill: false,
                    },
                    {
                        label: 'O',
                        borderColor: "#FBC658",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: Object.values(weekly['O']),
                        fill: false,
                    },
                    {
                        label: 'P',
                        borderColor: "#EB7C08",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: Object.values(weekly['P']),
                        fill: false,
                    },
                    {
                        label: 'VP',
                        borderColor: "#F4A359",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: Object.values(weekly['VP']),
                        fill: false,
                    }
                ]
            },
            options: {
                legend: {
                    display: true
                },

                tooltips: {
                    enabled: true
                },

                scales: {
                    yAxes: [{

                        ticks: {
                            fontColor: "#9f9f9f",
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            //padding: 20
                        },
                        gridLines: {
                            drawBorder: true,
                            zeroLineColor: "#ccc",
                        }

                    }],
                    xAxes: [{
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(255,255,255,0.1)',
                            zeroLineColor: "transparent",
                            display: false,
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#9f9f9f"
                        }
                    }]
                },
                title: {
                    display: true,
                    text: title
                }
            }
        });

    },

    displayChartsMonthlyDashboard: function (weekly_label, weekly, title, id) {
        var ctx = document.getElementById(id).getContext("2d");

        myChart = new Chart(ctx, {
            type: 'bar',

            data: {
                labels: weekly_label,
                datasets: [
                    {
                        label: 'VG',
                        borderColor: "#51BCDA",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: [weekly['VG']],
                        fill: false,
                    },
                    {
                        label: 'G',
                        borderColor: "#6BD098",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: [weekly['G']],
                        fill: false,
                    },
                    {
                        label: 'O',
                        borderColor: "#FBC658",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: [weekly['O']],
                        fill: false,
                    },
                    {
                        label: 'P',
                        borderColor: "#EB7C08",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: [weekly['P']],
                        fill: false,
                    },
                    {
                        label: 'VP',
                        borderColor: "#F4A359",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: [weekly['VP']],
                        fill: false,
                    }
                ]
            },
            options: {
                legend: {
                    display: true
                },

                tooltips: {
                    enabled: true
                },

                scales: {
                    yAxes: [{

                        ticks: {
                            fontColor: "#9f9f9f",
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            //padding: 20
                        },
                        gridLines: {
                            drawBorder: true,
                            zeroLineColor: "#ccc",
                        }

                    }],
                    xAxes: [{
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(255,255,255,0.1)',
                            zeroLineColor: "transparent",
                            display: false,
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#9f9f9f"
                        }
                    }]
                },
                title: {
                    display: true,
                    text: title
                }
            }
        });

    },

    initChartsPages: function (id) {
        chartColor = "#FFFFFF";


        ctx = document.getElementById('chartWeek').getContext("2d");

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Very Good', 'Good', 'OK', 'Poor', 'Very Poor'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Custom Chart Title'
                }
            }
        });

        ctx = document.getElementById('chartMonth').getContext("2d");


        myChart = new Chart(ctx, {
            type: 'line',

            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",],
                datasets: [
                    {
                        label: 'VG',
                        borderColor: "#6bd098",
                        backgroundColor: "#6bd098",
                        pointRadius: 1,
                        pointHoverRadius: 1,
                        borderWidth: 3,
                        data: [300, 310, 316, 322, 330, 326, 333, 345, 338, 354]
                    },
                    {
                        label: 'G',
                        borderColor: "#f17e5d",
                        backgroundColor: "#f17e5d",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        borderWidth: 3,
                        data: [320, 340, 365, 360, 370, 385, 390, 384, 408, 420]
                    },
                    {
                        label: 'O',
                        borderColor: "#fcc468",
                        backgroundColor: "#fcc468",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        borderWidth: 3,
                        data: [370, 394, 415, 409, 425, 445, 460, 450, 478, 484]
                    },
                    {
                        label: 'P',
                        borderColor: "#fcc468",
                        backgroundColor: "#fcc468",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        borderWidth: 3,
                        data: [370, 394, 415, 409, 425, 445, 460, 450, 478, 484]
                    },
                    {
                        label: 'VP',
                        borderColor: "#fcc468",
                        backgroundColor: "#fcc468",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        borderWidth: 3,
                        data: [370, 394, 415, 409, 425, 445, 460, 450, 478, 484]
                    }
                ]
            },
            options: {
                legend: {
                    display: true
                },

                tooltips: {
                    enabled: true
                },

                scales: {
                    yAxes: [{

                        ticks: {
                            fontColor: "#9f9f9f",
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            //padding: 20
                        },
                        gridLines: {
                            drawBorder: true,
                            zeroLineColor: "#ccc",
                            color: 'rgba(255,255,255,0.05)'
                        }

                    }],

                    xAxes: [{
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(255,255,255,0.1)',
                            zeroLineColor: "transparent",
                            display: false,
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#9f9f9f"
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Custom Chart Title'
                }
            }
        });

        chartColor = "#FFFFFF";

        ctx = document.getElementById('chartWeeks').getContext("2d");

        myChart = new Chart(ctx, {
            type: 'line',

            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
                datasets: [
                    {
                        borderColor: "#6bd098",
                        backgroundColor: "#6bd098",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        borderWidth: 3,
                        data: [300, 310, 316, 322, 330, 326, 333, 345, 338, 354]
                    },
                    {
                        borderColor: "#f17e5d",
                        backgroundColor: "#f17e5d",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        borderWidth: 3,
                        data: [320, 340, 365, 360, 370, 385, 390, 384, 408, 420]
                    },
                    {
                        borderColor: "#fcc468",
                        backgroundColor: "#fcc468",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        borderWidth: 3,
                        data: [370, 394, 415, 409, 425, 445, 460, 450, 478, 484]
                    }
                ]
            },
            options: {
                legend: {
                    display: false
                },

                tooltips: {
                    enabled: false
                },

                scales: {
                    yAxes: [{

                        ticks: {
                            fontColor: "#9f9f9f",
                            beginAtZero: false,
                            maxTicksLimit: 5,
                            //padding: 20
                        },
                        gridLines: {
                            drawBorder: false,
                            zeroLineColor: "#ccc",
                            color: 'rgba(255,255,255,0.05)'
                        }

                    }],

                    xAxes: [{
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(255,255,255,0.1)',
                            zeroLineColor: "transparent",
                            display: false,
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#9f9f9f"
                        }
                    }]
                },
            }
        });

        /*
            ctx = document.getElementById('chartWeek').getContext("2d");

            myChart = new Chart(ctx, {
              type: 'pie',
              data: {
                labels: [1, 2, 3],
                datasets: [{
                  label: "Emails",
                  pointRadius: 0,
                  pointHoverRadius: 0,
                  backgroundColor: [
                    '#e3e3e3',
                    '#4acccd',
                    '#fcc468',
                    '#ef8157'
                  ],
                  borderWidth: 0,
                  data: [342, 480, 530, 120]
                }]
              },

              options: {

                legend: {
                  display: false
                },

                pieceLabel: {
                  render: 'percentage',
                  fontColor: ['white'],
                  precision: 2
                },

                tooltips: {
                  enabled: false
                },

                scales: {
                  yAxes: [{

                    ticks: {
                      display: false
                    },
                    gridLines: {
                      drawBorder: false,
                      zeroLineColor: "transparent",
                      color: 'rgba(255,255,255,0.05)'
                    }

                  }],

                  xAxes: [{
                    barPercentage: 1.6,
                    gridLines: {
                      drawBorder: false,
                      color: 'rgba(255,255,255,0.1)',
                      zeroLineColor: "transparent"
                    },
                    ticks: {
                      display: false,
                    }
                  }]
                },
              }
            });

            var speedCanvas = document.getElementById("speedChart");

            var dataFirst = {
              data: [0, 19, 15, 20, 30, 40, 40, 50, 25, 30, 50, 70],
              fill: false,
              borderColor: '#fbc658',
              backgroundColor: 'transparent',
              pointBorderColor: '#fbc658',
              pointRadius: 4,
              pointHoverRadius: 4,
              pointBorderWidth: 8,
            };

            var dataSecond = {
              data: [0, 5, 10, 12, 20, 27, 30, 34, 42, 45, 55, 63],
              fill: false,
              borderColor: '#51CACF',
              backgroundColor: 'transparent',
              pointBorderColor: '#51CACF',
              pointRadius: 4,
              pointHoverRadius: 4,
              pointBorderWidth: 8
            };

            var speedData = {
              labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
              datasets: [dataFirst, dataSecond]
            };

            var chartOptions = {
              legend: {
                display: false,
                position: 'top'
              }
            };

            var lineChart = new Chart(speedCanvas, {
              type: 'line',
              hover: false,
              data: speedData,
              options: chartOptions
            });*/
    },

    initGoogleMaps: function () {
        var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
        var mapOptions = {
            zoom: 13,
            center: myLatlng,
            scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
            styles: [{
                "featureType": "water",
                "stylers": [{
                    "saturation": 43
                }, {
                    "lightness": -11
                }, {
                    "hue": "#0088ff"
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{
                    "hue": "#ff0000"
                }, {
                    "saturation": -100
                }, {
                    "lightness": 99
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#808080"
                }, {
                    "lightness": 54
                }]
            }, {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ece2d9"
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ccdca1"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#767676"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "poi",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "landscape.natural",
                "elementType": "geometry.fill",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#b8cb93"
                }]
            }, {
                "featureType": "poi.park",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi.sports_complex",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi.medical",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi.business",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }]

        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title: "Hello World!"
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);
    },

    showNotification: function (from, align) {
        color = 'primary';

        $.notify({
            icon: "nc-icon nc-bell-55",
            message: "Welcome to <b>Paper Dashboard</b> - a beautiful bootstrap dashboard for every web developer."

        }, {
            type: color,
            timer: 8000,
            placement: {
                from: from,
                align: align
            }
        });
    }

};