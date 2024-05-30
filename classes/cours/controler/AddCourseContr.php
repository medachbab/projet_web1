<?php
    namespace classes\cours\controler;
    use classes\cours\model\CoursesM;
    class AddCourseContr extends CoursesM{
        private $uploadedfilename;
        private $moduleId;
        public function __construct($uploadedfilename, $moduleId) {
            $this->uploadedfilename = $uploadedfilename;
            $this->moduleId = $moduleId;
        }
        public function addCoursecont(){
            $this->addCourse($this->uploadedfilename, $this->moduleId);
            header("Location: ../../routing/routing.php?controler=cours&action=f2");
            exit();
        }

    }