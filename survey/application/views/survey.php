<html>
<head>
    <title>My Form</title>

</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!--<table>
    <tr>
        <th>Survey Results</th>
    </tr>
    <tr>
        <td>Survery Answer</td>
        <td>Count</td>
    </tr>
!-->
    <?php

$categories = array();
$categories_count = array();
    // Getting data in 2 arrays
    foreach($fetch_data as $row){
    array_push($categories,$row->surveyanswerAnswer);
    array_push($categories_count,$row->total);
}

// Separating each element with  respect to its weight
$cat_splitted = array();
$cat_count_splitted = array();

foreach ($categories as $key => $value) {
    $myArray = explode(',', $value);
    foreach ($myArray as $key2 => $value2) {
        array_push($cat_splitted ,$value2);
        array_push($cat_count_splitted, $categories_count[$key]);
    }
}

// Creating unique array of categories
global  $unique_cat;
$unique_cat = array_unique($cat_splitted);
// index are renumbered ..  means 0,1,2,3 in sequence..
 $unique_cat = array_values($unique_cat);

// Creating and filling an array with zero to store count of each individaul element
global $counts;
$counts = array_fill(0,sizeof($unique_cat),0);


// matching each unique element with splitted array and adding its count to unique_count array
foreach ($unique_cat as $key1 => $value) {
    foreach ($cat_splitted as $key2 => $value2) {
        if($value == $value2){
            $counts[$key1] = $counts[$key1] + $cat_count_splitted[$key2];
        }
    }

}
/*
echo "unique Categories <br/>";
print_r($unique_cat);
echo "<br/>unique Counts <br/>";
print_r($counts);
*/
?>


        <div >
            <h1>Question</h1>
        <div style="width: 600px;height: 350px; ;">
                <canvas id="bar-chart"></canvas>
        </div>
        </div>
</body>
<script>
    //converting php arrays to JavaScript Arrays
    <?php $cat_array = json_encode($unique_cat);
    echo "var cat = ". $cat_array . ";\n";

    $count_array = json_encode($counts);
    echo "var count = ". $count_array . ";\n";
    ?>

    // Bar chart
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
            //labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            labels: cat,  // Setting labels of chart
            datasets: [
                {
                    label: "People Answered",
                    backgroundColor: ["#3e95cd", "#8e5ea2"],
                    data: count
                }
            ]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: 'Calculated Results'
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }

        }
    });
</script>
</html>