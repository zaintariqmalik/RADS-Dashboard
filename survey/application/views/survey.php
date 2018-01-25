<html>
<head>
    <title>My Form</title>
</head>
<body>

<table>
    <tr>
        <th>Survey Results</th>
    </tr>
    <tr>
        <td>Survery Answer</td>
        <td>Count</td>
    </tr>
    <?php foreach($fetch_data as $row){?>
        <tr>
            <td><?php echo $row->surveyanswerAnswer;?></td>
            <td><?php echo $row->total;?></td>
              </tr>
    <?php }?>
    <table>
</body>
</html>