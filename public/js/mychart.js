
var ctx = document.getElementById('myChart').getContext('2d');
const ctx2 = document.getElementById('myChart2').getContext('2d');
const ctx3 = document.getElementById('myChart3').getContext('2d');


var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: barData.labelBar,
        datasets: [{
            label: 'avg price',
            data: barData.dataBar,
            backgroundColor: [
                '#f32424',
                '#0aa1dd',
                '#ffd124',
                '#069a8e',
                'rgba(75, 192, 192, 1)',
                '#bd4291',
                '#da7f8f'
            ],
            borderColor: [
                '#f32424',
                '#0aa1dd',
                '#ffd124',
                '#069a8e',
                'rgba(75, 192, 192, 1)',
                '#bd4291',
                '#da7f8f'
            ],
            borderWidth: 1
        }]
    },
    options: {
        indexAxis: 'y',
        plugins:{
            legend:{
                display: false,
            },
            title: {
                display: true,
                text: 'Average Price',
                font: {
                    size: 15
                }
            }
        }
    }
});
const myChart2 = new Chart(ctx2, {
    type: 'pie',
    data: {
        labels: pieData.labelPie,
        datasets: [{
            label: 'sum of category',
            data: pieData.dataPie,
            backgroundColor: [
                '#f32424',
                '#0aa1dd',
            ]
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Sum of Fertilizers',
                font: {
                    size: 15
                }
            }
        }
    }
});

const myChart3 = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: lineLabel.labelLine,
        datasets: [{
            label: 'Organic',
            data: lineData1.dataLine,
            backgroundColor: '#0aa1dd',
            borderColor: '#0aa1dd',
            borderWidth: 3,
            tension: 0.3,
            pointRadius: 3,
        },{
            label: 'Inorganic',
            data: lineData2.dataLine,
            backgroundColor: '#f32424',
            borderColor: '#f32424',
            borderWidth: 3,
            tension: 0.3,
            pointRadius: 3,
        }]
    },
    options: {
        scales:{
            y:{
                type: 'linear',
                display: true,
                beginAtZero: true,
            }
        },
        plugins:{
            title:{
                display: true,
                text: 'Amount of Fertilizer per Month',
                font:{
                    size: 15
                }
            }
        }
    }
});

