  <?php
  session_start();
  include("connection.php");
					   if(isset($_POST['send']))
					   {
					   $teacher_id=$_SESSION['user_id'];
					   $coursecod=$_SESSION['courseode'];;
					   $student_id=$_POST['id'];
					   $quiz=$_POST['quiz'];
					   $test=$_POST['test'];
					   $iass=$_POST['indiv'];
					   $gass=$_POST['grou'];
					   $fin=$_POST['final'];
					   $proj=$_POST['pro'];
					   $n=count($student_id);
					   for($i=0;$i<$n;$i++)
					   {
					   $stid=$student_id[$i];
					   $quiz1=$quiz[$i];
					   $test1=$test[$i];
					   $iass1=$iass[$i];
					   $gass1=$gass[$i];
					   $final1=$fin[$i];
					   $project=$proj[$i];
					   $totalresult=$quiz1 + $test1 + $iass1 + $gass1 + $project + $final1;
					   if($totalresult>=85)
	                  {
	                   $grade="A";
	                 }
	                 else if($totalresult>=70)
	                  {
	                  $grade="B";
	                 }
	                  else if($totalresult>=50)
	                  {
	                  $grade="C";
	                   }
	                  else if($totalresult>=40)
	                  {
	                  $grade="D";
	                  }
	                  else if($totalresult<40)
	                  {
	                  $grade="F";
	                   }
					   $submit="insert into course_result values('$teacher_id','$stid','$coursecod','$quiz1','$test1','$iass1','$gass1','$project','$final1','$totalresult','$grade')";
					   $inserted=mysql_query($submit);
					 
					   }
					   if($inserted)
					   {
					  // echo "Result has been send successfuly!";
					   echo '<script type="text/javascript">alert("Result has been send successfuly! ");window:location=\'submitresult.php\';</script>';
					   }
					   else
					   {
					   echo "error".mysql_error();
					   }
					   }
					   ?>