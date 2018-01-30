<html>
<head>
    <title>Household Data</title>
</head>
<body>
<table>
    <tr>
        <th>Result</th>
        <th>Total</th>
    </tr>
    <?php 
    foreach($fetch_data as $row)
        {?>
        <tr>
            <td>
               <?php echo $row->value;?>
            </td>
            <td>
                <?php echo $row->total;?>
            </td>
        </tr>
    <?php }?>
    <table>
</body>
</html>