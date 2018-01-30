<html>
<head>
    <title>Dash board</title>
</head>
<body>

<table>
    <tr>
        <th>Questions</th>
    </tr>
    <?php 
    foreach($fetch_data as $row)
        {?>
        <tr>
            <td>
                <a href="<?php echo site_url('DisplayController/getQuestionData?var1='.$row->surveyquestionId) ?>">
                   <?php echo $row->surveyquestionQuestion;
                   ?>
                    </a>
            </td>
        </tr>
    <?php }?>
    <table>
        <a href="<?php echo site_url('DisplayController/showIndexFile')?>"> show Dashboard</a>
</body>
</html>