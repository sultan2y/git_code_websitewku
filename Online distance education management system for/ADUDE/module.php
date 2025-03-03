<html>
<body bgcolor="white">
  		<?php
			//include("upload.php");
class Module{
			var $con;
			var $query;
			var $res;
			var $destination;
			var $coursename;
			var $modulenum;
			var $dept;
			var $term;
			var $year;
			var $fileName;
			var $tmpName;
			var $fileSize;
			var $fileType;
			function connects()
           {
		$this->con=mysql_connect("localhost","root","");
			mysql_select_db("cde");
}
function query()
{          
if(isset($_POST['uploadFile'])){
   $fileName= $_FILES["file"]["name"];
   $ext_str="gif,jpg,jpeg,bmb,doc,docx,ppt,pptx,txt,pdf";
   $canupload=true;
  $allowdexstation=explode(',',$ext_str);
  $maxfile_size=10485760;
  $ext=substr($fileName,strrpos($fileName,'.'));
  if(!in_array($ext,$allowdexstation))
    {
   $canupload=false;
   $errofileTYpe="only".$ext_str." files are allowed to upload";
     }
    if($_FILES["file"]['size']>=$maxfile_size){
    $canupload=false;
	$errorLargeFileSize="only the file lessthan".$maxfile_size."mb allowed to upload";
     }
	//our work
         if($canupload){
             $fileExtension=substr($fileName,strrpos($fileName, '.'));
			 $date=date('Ymdhis');
			 $destination="module/";   
			    $this->coursename=$_POST['coursename'];	
				$this->modulenum=$_POST['modulenum'];
				$this->dept=$_POST['department'];	 
				$this->term=$_POST['term'];
				$this->year=$_POST['year'];			 
			    $this->fileName=$_FILES['file']['name'];
				$this->tmpName=$_FILES['file']['tmp_name'];
				$this->fileSize=$_FILES['file']['size'];
			    $this->fileType=$_FILES['file']['type'];
				 $newFileName=$this->coursename.$date.$fileExtension;
				move_uploaded_file($_FILES["file"]["tmp_name"],$destination.$newFileName);
			    $this->query="insert into module values('$_SESSION[a]','$this->coursename','$this->modulenum','$this->dept','$this->term','$this->year','$newFileName','$this->tmpName','$this->fileSize','$this->fileType')";
					$this->res=mysql_query($this->query,$this->con);
			      }//end of $canupload
				  }//end is set upload file
			   }
function display()
{
	    if(mysql_affected_rows()==1)
			{
				$_SESSION['coursename']="coursename";
				$_SESSION['modulenum']="modulenum";
				$_SESSION['dept']="department";
				$_SESSION['term']="term";
				$_SESSION['year']="year";
			echo"<br>"."<h2 style='color:green' align='center'>"."your file is uploaded";
			}
			else
			{
		echo"something wrong";	   	
		}
	}
 }
$Mod=new Module();
$Mod->connects();
$Mod->query();
//$Mod->display();
?>
</html>
</body> 
