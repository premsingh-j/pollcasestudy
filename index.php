<?php
session_start();    
require 'poll.class.php';

$polldb = new poll();
$browserSession=session_id();
$alre='';
if (count($_POST) > 1) {
	 $option = $_POST['vote']; 
	 $quesno = $_POST['quesno'];
    $voteSql = "UPDATE  op_answers  set votes= votes + 1 where id='".$_POST['vote']."'";
    $polldb->insert($voteSql);
	$sessSql = "INSERT into  op_pollsessions(sessionid,question_no) values ('".$browserSession."','".$quesno."')";
    $polldb->insert($sessSql);
    require 'results.html.php';
    exit;

}
$checkSql = "SELECT *  FROM op_pollsessions where question_no='1' and sessionid='".$browserSession."'";

    $checkRes = $polldb->select($checkSql);
	$sql_stmt = "SELECT *  FROM op_questions where id='1'";	
    $questions = $polldb->select($sql_stmt);
	 
if(sizeof($checkRes)<=0){
require 'opinion.html.php';
}else{
	$quesno = '1';
	$alre=1;
	require 'results.html.php';
}

?>