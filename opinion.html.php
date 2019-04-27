<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Opinion poll</title>
<script src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
function check(){
	if($("input[name='vote']:checked").length == 0){
		alert("Please vote !!");
		return false;
	}
	return true;
}
</script>
</head>

<body>
<h2>Vote your fav !!!</h2>
<?php 


?>
        <h2><?php echo $questions[0]['questions']; ?></h2>

        <form method="POST" action="index.php">
<?php 

 $queryAns = "SELECT *  FROM op_answers where question_no='".$questions[0]['id']."'";

    $answers = $polldb->select($queryAns);
	$size=count($answers);
	for($i=0; $i<$size; $i++){
?>

             <input type="radio" name="vote" value="<?php echo $answers[$i]['id']; ?>" /><?php echo $answers[$i]['answers']; ?> <br />

                
<?php }?> <input type="hidden" name="quesno" value="<?php echo $questions[0]['id']; ?>" />
            <input type="submit" onclick="return check();" name="voteC" value="Vote" />

        </form>

</body>
</html>