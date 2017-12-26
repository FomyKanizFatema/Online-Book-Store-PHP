<?php dirname(__DIR__); include(dirname(__DIR__).'/data/course_data_access.php');



function getAllCourse(){
        return getAllCourseFromDb();
    }
	function getCourseByDept($dept){
        return getCourseByDeptFromDb($dept);
    }
	function getAllDept(){
        return getAllDeptFromDb();
    }
	?>