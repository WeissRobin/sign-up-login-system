(async function() {
    new Chart(
        document.getElementById('sell-chart'),
        {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July"],
                datasets: [{
                    label: false,
                    data: [5, 8, 12, 10, 15, 10, 6],
                    fill: false,
                    borderColor: '#000',
                    pointBackgroundColor: '#000',
                    pointRadius: 5,
                    tension: 0.4,
                    color: '#000',
                    cubicInterpolationMode: 'monotone'
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    datalabels: {
                        color: '#000',
                        anchor: 'end',
                        align: 'top',
                        offset: 4,
                        font: {
                            weight: '800',
                            family: 'Poppins',
                            size: 16,
                        },
                        formatter: function(value, context) {
                            return value;  // Display the value above the point
                        }
                    }
                },
                maintainAspectRatio: false,
                scales: {
                    x: {
                        grid: {
                            display: false, 
                            drawBorder: false,
                        },
                        ticks: {
                            display: true,   
                            color: '#000', 
                            font: {
                                size: 13,
                                weight: '800',
                                family: 'Poppins' 
                            }
                        }
                    },
                    y: {
                        grid: {
                            display: true,
                            drawBorder: false,
                            color: '#e0e0e0'
                        },
                        ticks: {
                            display: true,    
                            color: '#000',    
                            font: {
                                size: 13,
                                weight: '800',
                                family: 'Poppins'    
                            }
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        }
    );
})();
