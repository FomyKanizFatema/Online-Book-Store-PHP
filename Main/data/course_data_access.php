<?php include(dirname(__DIR__).'/data/data_access_for_course.php'); ?>
<?php
function getAllDeptFromDb(){
        $sql = "SELECT * FROM department";        
        $result = executeSQLc($sql);
        
        $dept = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $dept[$i] = $row;
        }
        
        return $dept;
    }
	
	function getAllCourseFromDb(){
        $sql = "SELECT * FROM course";        
        $result = executeSQLc($sql);
        
        $course = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $course[$i] = $row;
        }
        
        return $course;
    }
	
	function  getCourseByDeptFromDb($dept){
		$sq11="SELECT * FROM department WHERE name LIKE '%$dept%'";
		$r1=executeSQLc($sq11);
		 $deptid = array();
        for($i=0; $row = mysqli_fetch_assoc($r1); ++$i){
            $deptid[$i] = $row;
        }
		
		 
		$id=$deptid[0]['dept_id'];
        $sql = "SELECT * FROM course WHERE dept_id LIKE '%$id%'";
        $result = executeSQLc($sql);
        
         $course = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $course[$i] = $row;
        }
        
        return $course;
    }
    
    
    
?>