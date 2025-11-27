<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require("scripts/connect.php");

        $sql = "SELECT Product, Stock FROM tblproducts";

        $chartStatement = mysqli_query($conn, $sql);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Charts</title>
    <!-- This loads the Google Charts API -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        // Loading the corechart library
        google.charts.load('current', {packages: ['corechart']});

        // Sets a callback to run when the Google API is loaded i.e. it will find this function called drawChart():
        google.charts.setOnLoadCallback(drawChart);

        // Step #1 Create a function:
        function drawChart(){
            // Step #2 - Create a datatable:
            var data = google.visualization.arrayToDataTable([
                ['Products', 'Stock'],
                
                <?php
                while($row = mysqli_fetch_assoc($chartStatement)) {
                    echo("['".$row['Product']."', ".$row['Stock']."],");
                }

                ?>
                // ['Bananas', 155],
            ]);

            var myChart = new google.visualization.PieChart(document.getElementById('chartDiv'));

            var options = {
                title: 'Products in Stock',
                
            };

            myChart.draw(data, options);
        }
    </script>
</head>
<body>
    <h1>Google Charts Page</h1>
    <section id="chartDiv"></section>
</body>
</html>