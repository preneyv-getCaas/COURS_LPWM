<?php
class CalendarManager{

    private $_managerDb;
    public function __construct($db)
    {
        require_once('connexion.php');
        $this->_managerDb = $db;
    }

    public function getListEmploye()
    {
        $filter = [];
        $option = [];
        $read = new MongoDB\Driver\Query($filter, $option);
        //Exécution de la requête
        $cursor =  $this->_managerDb->executeQuery('CollectPlanning.employes', $read);
        $employe = [];
        foreach($cursor as $emp)
        {
                
        
                array_push($employe,$emp);
        }
        return $employe;
    }

    public function getListWeek()
    {
        $listeSemaine = ["2017"=>[],'2018'=>[],'2019'=>[],'2020'=>[]];
        $filter = [];
        $option = [];
        $read = new MongoDB\Driver\Query($filter, $option);
        
        //Exécution de la requête
        foreach($listeSemaine as $key=>$value)
        {
            $cursor =  $this->_managerDb->executeQuery('CollectPlanning.year'.$key, $read);
            $week = [];
            foreach($cursor as $sem)
            {
                    
                     array_push($week,$sem);
            }
            
            array_push($listeSemaine[$key],$week);
        }
      
        return $listeSemaine; 
    }

    public function setEmployeToNull($week, $year)
    {
        $week=new MongoDB\BSON\ObjectId($week);
        $filter=array('_id'=>$week);
        $maj = array('$set'=>['user'=>'']);
        $updates = new MongoDB\Driver\BulkWrite();
        $updates->update($filter,$maj);
        $result = $this->_managerDb->executeBulkWrite('CollectPlanning.year'.$year, $updates) ;
        
    }

    public function setEmployeOfWeek($emp, $week, $year)
    {
        $week=new MongoDB\BSON\ObjectId($week);
        $filter=['_id'=>$week];
        $maj = ['$set'=>['user'=>$emp]];
        $updates = new MongoDB\Driver\BulkWrite();
        $updates->update($filter,$maj);
        $result = $this->_managerDb->executeBulkWrite('CollectPlanning.year'.$year, $updates) ;

    }

    public function getStatistics
}