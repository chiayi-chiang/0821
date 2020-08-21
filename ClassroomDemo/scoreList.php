<?php
$scoreList = Array(100,50,90,95);
$viewModel = [];
foreach($scoreListas as $score){
    $student = (object)["score"=>$score,"style"=>"pass"];
    if($score<60){
        $student->stlye = "fail";

    }
    $viewModel[] = $student;
}
// $scoreList = [100,90];
// $obj = (object)["firstName" => "Jeremy","lastName" => "Lin"];//關聯是陣列
// var_dump($obj);
// exit();
// echo $obj->lastName;
// exit();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail{
            color:red;
        }
    
    </style>
</head>
<body>
    <ul>
        <?php foreach ($scoreList as $score ){?>
            <?php if ($score >= 60){?>
                <li class="pass"> <?=$score ?> </li>
            <?}else{?>
                <li class = "fail"><?=$score?></li>
            <? } ?>
        <? } ?>
    </ul> 
</body>
</html>