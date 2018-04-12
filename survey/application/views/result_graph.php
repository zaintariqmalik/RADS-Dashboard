<?php
/**
 * Created by PhpStorm.
 * User: Waqas AHmad
 * Date: 1/30/2018
 * Time: 10:06 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /*

        /*
         * General styles
         */

        body, html{
            height: 100%;
            background-repeat: no-repeat;
            background-color: #ffc57f;
            font-family: 'Oxygen', sans-serif;
        }

        .main{
            margin-top: 70px;
        }

        h1.title {
            font-size: 50px;
            font-family: 'Passion One', cursive;
            font-weight: 400;
        }

        hr{
            width: 10%;
            color: #fff;
        }

        .form-group{
            margin-bottom: 15px;
        }

        label{
            margin-bottom: 15px;
        }

        input,
        input::-webkit-input-placeholder {
            font-size: 11px;
            padding-top: 3px;
        }

        .main-login{
            background-color: #fff;
            /* shadows and rounded borders */
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

        }

        .main-center{
            margin-top: 30px;
            margin: 0 auto;
            max-width: 730px;
            max-height: 450px;
            padding: 40px 40px;

        }

        .login-button{
            margin-top: 5px;
        }

        .login-register{
            font-size: 11px;
            text-align: center;
        }
        #grad2 {
            background: red; /* For browsers that do not support gradients */
            background: radial-gradient(circle, white, sandybrown , salmon); /* Standard syntax (must be last) */

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <!--API for chart-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>Result</title>
</head>

<?php
if(sizeof($fetch_data)<1){
    show_404();
}

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
<body id="grad2">
<div class="container">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title" style="color: #920000">AHKRC</h1>
                <hr />
            </div>
        </div>
        <div class="main-login main-center">
            <div><?php echo $question_title[0]->surveyquestionQuestion?></div>
            <div style="">
                <canvas id="bar-chart"></canvas>
            </div>
            <div class="form-group ">
                <button style="background-color: #920000" class="btn btn-primary btn-lg btn-block login-button" onclick="window.location='<?php echo site_url("DisplayController/showIndexFile");?>'">
                 back
                 </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
</body>
</html>
<script type="text/javascript">

</script>
<script>
    //converting php arrays to JavaScript Arrays
    <?php $cat_array = json_encode($unique_cat);
    echo "var cat = ". $cat_array . ";\n";

    $count_array = json_encode($counts);
    echo "var count = ". $count_array . ";\n";
    ?>

    //Display counts of each category with them
    var cat1 =cat ;
    var i ;
    for(i = 0;i<cat.length;i++){
        cat1[i] = cat[i]+"("+count[i]+")";
    }

    //total count of each question
    var j;
    var total_count = 0;
    for (j=0;j<cat.length;j++)
    {
        total_count = total_count + count[j];
    }

    // Bar chart
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
            //labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            labels: cat,  // Setting labels of chart
            datasets: [
                {
                    label: "People Answered",
                    backgroundColor: ["#000040", "#c81309","#e46e25","#EC7063","#F1C40F"],
                    data: count,
                }
            ]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: 'Time Period: January (2018) - February (2018) \n N = ' + total_count,
                fontColor: '#000',
                fontSize: 13,
                showInlineValues : true,
                centeredInllineValues : true,
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
</body>
</html>

