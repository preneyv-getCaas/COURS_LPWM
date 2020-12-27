<?php
class CalendarController{

    private $_calendarManager;

    public function __construct($collect)
    {
        
        require_once('../model/calendarManager.php');
        $this->_calendarManager = new CalendarManager($collect);
    }

    public function startCalendar(){
        $this->getAllEmploye();
        $this->getAllWeek();
        header('Location : ../vue/calendrier.php');
    }

    public function getAllEmploye()
    {
        $_SESSION['listeEmployes'] = $this->_calendarManager->getListEmploye();
    }

    public function getAllWeek()
    {
        $_SESSION['listeSemaine'] = $this->_calendarManager->getListWeek();
    }

    public function setEmployeToNull($tabArgs)
    {
        $this->_calendarManager->setEmployeToNull( $tabArgs[0], $tabArgs[1]);
        $this->startCalendar();
    }

    public function setEmployeOfWeek($tabArgs)
    {
        
        $this->_calendarManager->setEmployeOfWeek($tabArgs[0], $tabArgs[1], $tabArgs[2]);
        $this->startCalendar();
    }

    public function getStatistics(){
        echo $this->_calendarManager->getStatistics();
    }
}