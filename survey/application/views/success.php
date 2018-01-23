<html>
<head>
    <title>My Form</title>
</head>
<body>

<table>
    <tr>
        <th>Question</th>
    </tr>
    <?php foreach($fetch_data as $row){?>
        <tr>
            <td><a href="<?php echo site_url('DisplayController/getQuestionData?var1='.$row->id) ?>"><?php echo $row->question;?></a></td>
        </tr>
    <?php }?>
    <table>
</body>
</html>