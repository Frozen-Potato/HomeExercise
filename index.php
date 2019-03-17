<?php
    error_reporting(0);	
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });

    echo '<h2>Teacher</h2>';
    $xTeacher = new Teachers();
    $xTeacher->setFN('Hakto');
    $xTeacher->setLN('"N3rd" Zume');
    $xTeacher->setYoB(1985);
    $xTeacher->setSubjects('Nierology');
    $xTeacher->setSubjects('Otaku Technology');
    $xTeacher->setD('WeebGame');
    echo 'Name: '.$xTeacher->getFN().' '.$xTeacher->getLN().'.<br>';
    echo 'Year of birth: '.$xTeacher->getYoB().'.<br>';
    echo 'Age: '.$xTeacher->getAge().'.<br>';
    $SubOfH=$xTeacher->getSubjects();
    echo 'Teaching subjects: ';
    for ($i = 0; $i < count($SubOfH); $i++) {
        echo $SubOfH[$i];
        if ($i < count($SubOfH) - 1){
            echo ', ';
        } else {
            echo '.<br>';
        }
    }
    echo 'Department: '.$xTeacher->getD().'.<br>';

    echo '<h2>Student</h2>';

    $aStudent = new Students();
    $aStudent->setFN('Zayden');
    $aStudent->setLN('"Potato" Mikos ');
    $aStudent->setYoB(2000);
    $aStudent->setCredits(9000);
    echo 'Name: '.$aStudent->getFN().' '.$aStudent->getLN();
    $aStudent->setCourses('Honkai-ology');
    $aStudent->setCourses('Nierology');
    echo '<br>';
    echo 'Year of birth: '.$aStudent->getYoB().'.<br>';
    echo 'Age: '.$aStudent->getAge().'.<br>';
    $coursesOfLisa=$aStudent->getCourses();
    echo 'Selected courses: ';
    for ($i = 0; $i < count($coursesOfLisa); $i++) {
        echo $coursesOfLisa[$i];
        if ($i < count($coursesOfLisa) - 1){
            echo ', ';
        } else {
            echo '.<br>';
        }
    }
    echo 'Total credits: '.$aStudent->getCredits();

    echo '<h2>Staffs</h2>';

    $aStaff = new Staffs();
    $aStaff->setFN('Jyri');
    $aStaff->setLN('Hatti');
    $aStaff->setYoB(1995);
    $aStaff->setVacancy('Cleaner');
    echo 'Name: '.$aStaff->getFN().' '.$aStaff->getLN().'.<br>';
    echo 'Year of birth: '.$aStaff->getYoB().'.<br>';
    echo 'Age: '.$aStaff->getAge().'.<br>';
    echo 'Vacancy: '.$aStaff->getVacancy().'.<br>';

    echo '<br>';

    $bStaff = new Staffs();
    $bStaff->setFN('Joel');
    $bStaff->setLN('Manos');
    $bStaff->setYoB(1994);
    $bStaff->setVacancy('Caretaker');
    echo 'Name: '.$bStaff->getFN().' '.$bStaff->getLN().'.<br>';
    echo 'Year of birth: '.$bStaff->getYoB().'.<br>';
    echo 'Age: '.$bStaff->getAge().'.<br>';
    echo 'Vacancy: '.$bStaff->getVacancy().'.<br>';
?>
