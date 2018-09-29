<?php
    include('connection/dbconnect.php');
    $old=array();
    $sql="SELECT question_id_OLD from my_questions where question_id_OLD>0";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    	$old[]=$row["question_id_OLD"];
    $i=0;
    foreach($old as $var)
    {
        $v.=$old[$i].', ';
        $i++;
    }
    //echo sizeof($old).' -- '.$v;


abc(); 
function abc(){
    include('connection/dbconnect.php');
 echo $sql="SELECT question_id_OLD as x,question_id as y from my_questions";

$result=$conn->query($sql);
        while($row=$result->fetch_assoc()) {
        	$old_id=$row["x"];
        	$id=$row["y"]; //new qun id
         	$f=1;
        	echo $sql1="SELECT question_id as q from my_answer where question_id=$old_id";
        	$result1=$conn->query($sql1);
	        while($row1=$result1->fetch_assoc()){ 
	        	$f++;
	        	$aid=$row1["q"];
}
	       	
	        	if($f>1)
	        	{
	        		echo '</br>'.'if condition='.$updateques="UPDATE my_answer set question_id =$id where question_id=$aid";
	        			$result2=$conn->query($updateques);
	        		
	        		echo '</br>'.$updateB="UPDATE my_answer set ansAvl=available where question_id=$aid";
	        		$result3=$conn->query($updateB);
	        	}
	        	else {
	        		echo '</br>'.'else condition='.$insertB="INSERT into my_answer (question_id , ansAvl) values ($id,'not available')";
	        		$result2=$conn->query($insertB);

	        	}

}

	        

}


?>