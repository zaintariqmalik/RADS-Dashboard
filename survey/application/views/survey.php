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
        <td>Survery ID</td>
        <td>User ID</td>
        <td>Name</td>
        <td>Ans</td>
    </tr>
    <?php foreach($fetch_data as $row){?>
        <tr>
            <td><?php echo $row->survey_id;?></td>
            <td><?php echo $row->user_id;?></td>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->ans;?></td>
              </tr>
    <?php }?>
    <table>
</body>
</html>