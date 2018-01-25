<html>
<head>
    <title>Survey Questions</title>
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
                   <?php echo $row->surveyquestionQuestion;?>
                    </a>
            </td>
        </tr>
    <?php }?>
    <table>
</body>
</html>