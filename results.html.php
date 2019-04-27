<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Poll Results</title>
</head>

<body>
<h2>Opinion Poll Results <?php if($alre){?> - You have already voted !! <?php }?></h2>
<?php
$sql_stmt = "SELECT *  FROM op_questions where id='1'";	
    $questions = $polldb->select($sql_stmt);
?>
        <p><b><?php echo $questions[0]['questions']; ?></b></p>


        <?php 

 $queryAns = "SELECT *  FROM op_answers where question_no='".$quesno."'";

    $answers = $polldb->select($queryAns);
	$size=count($answers);
	
	$totAns = "SELECT sum(votes) as total  FROM op_answers where question_no='".$quesno."'";
    $totAnsw = $polldb->select($totAns);
	?>
    <p>Total Votes casted: <?php echo $totAnsw[0]['total']; ?></p>
    <?php
	for($i=0; $i<$size; $i++){
		
		$percentage = ( $answers[$i]['votes'] / $totAnsw[0]['total'] ) * 100;
?>
<div>
<?php echo $answers[$i]['answers']; ?> - Votes (<?php echo $answers[$i]['votes']; ?>)
<div class="meter">
  <span style="width: <?php echo $percentage;?>%"></span>
  
</div>   
</div>           

                
<?php }?> 
</body>
</html>
<style>

.meter { 
	height: 15px;  
	position: relative;
	background: #555;
	-moz-border-radius: 25px;
	-webkit-border-radius: 25px;
	border-radius: 25px;
	box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
	width:237px;
}

.meter > span {
  display: block;
  height: 100%;
  border-top-right-radius: 20px;
  border-bottom-right-radius: 20px;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  background-color: rgb(43,194,83);
  background-image: linear-gradient(
    center bottom,
    rgb(43,194,83) 37%,
    rgb(84,240,84) 69%
  );
  box-shadow: 
    inset 0 2px 9px  rgba(255,255,255,0.3),
    inset 0 -2px 6px rgba(0,0,0,0.4);
  position: relative;
  overflow: hidden;
}
</style>