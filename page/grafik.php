    <div class="kotak">
        <canvas id="myChart" width="400" height="200"></canvas>
    </div>
 
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["0", "20", "40", "60", "80", "100"],
        datasets: [{
            label: 'HTML 5',
            data: [80, 85, 86, 88, 89, 90],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
            ],
            borderWidth: 1
        }]
    }
});
</script>


    <div class="kotak">
        <canvas id="myChartjs" width="400" height="200"></canvas>
    </div>
 
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script>
var ctx = document.getElementById("myChartjs");
var myChartjs = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["0", "20", "40", "60", "80", "100"],
        datasets: [{
            label: 'JavaScript',
            data: [45, 47, 47, 55, 55, 62],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
            ],
            borderWidth: 1
        }]
    }
});
</script>


    <div class="kotak">
        <canvas id="myChartCss" width="400" height="200"></canvas>
    </div>
 
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script>
var ctx = document.getElementById("myChartCss");
var myChartCss = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["0", "20", "40", "60", "80", "100"],
        datasets: [{
            label: 'CSS',
            data: [55, 57, 57, 75, 75, 82],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
            ],
            borderWidth: 1
        }]
    }
});
</script>