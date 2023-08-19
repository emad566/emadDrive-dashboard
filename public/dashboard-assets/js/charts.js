
"use strict";

// Shared Colors Definition
const primary = '#6993FF';
const success = '#1BC5BD';
const info = '#8950FC';
const warning = '#FFA800';
const danger = '#F64E60';
const gray = '#CCCCCC';
const purpel = '#6c128a';
const onion = '#8a3c12';
const petrol = '#12748a';
const lemon = '#bede1f';

const colors = [primary,success,info,warning,danger,gray,purpel,onion,petrol,lemon];

// jQuery(document).ready(function () {
// var KTApexChartsDemo = function () {
// var pieChartId = '#chart_1';
// var pieChartSeries = [40, 10, 50];
// var pieChartLabels = ['Team A', 'Team B', 'Team C'];
// var pieChartColors = [primary, success, warning];

function circleChart(circleChartId = '', circleChartSeries = [], circleChartLabels = [], circleChartColors = [], type = 'pie') {
    const apexChart = circleChartId;
    var options = {
        series: circleChartSeries,
        chart: {
            width: 380,
            type: type,
        },
        labels: circleChartLabels,
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }],
        colors: circleChartColors
    };

    var chart = new ApexCharts(document.querySelector(apexChart), options);
    chart.render();
}
// var randomColor = Math.floor(Math.random()*16777215).toString(16);
// function donutChart(pieChartId = '', pieChartSeries = [], pieChartLabels = [], pieChartColors = []) {
//     const apexChart = pieChartId;
//     var options = {
//         series: pieChartSeries,
//         chart: {
//             width: 380,
//             type: 'donut',
//         },
//         labels: pieChartLabels,
//         responsive: [{
//             breakpoint: 480,
//             options: {
//                 chart: {
//                     width: 200
//                 },
//                 legend: {
//                     position: 'bottom'
//                 }
//             }
//         }],
//         colors: pieChartColors
//     };

//     var chart = new ApexCharts(document.querySelector(apexChart), options);
//     chart.render();
// }




// });
    
// }();




// 	KTApexChartsDemo.init();
// });