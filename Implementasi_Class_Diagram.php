<?php  
  class Company { 
    Protected $name;
    public function setCompanyName($name) { 
        $this->name = $name;
    }
    public function getCompanyName() { 
        return $this->name;
    } 
  }

  class Departement extends Company{
    public function setDepartementName($name){
        $this->name = $name;
    }
    public function getDepartementName(){
        return $this->name;
    }
  }

  class Employee extends Departement{
    private $title;
    private $salary;
    private $day;

    public function setEmployeeName($name){
        $this->name = $name;
    }
    public function getEmployeeTitle(){
        return $this->title;
    }
    public function getEmployeeProfile(){
        return $this->profile;
    }
    public function getEmployeeMonthlySalary($day){
        return $this->day * $this->day * $salary();
    }
  }

  $company = new Company();
  $company->name='Company Name';
  echo $company->getCompanyName();

  $departement = new Depatement();
  $departement->name='Departement Name';
  echo $departement->getDepartementName();

  $employee = new Employee();
  $employee->title='Employee Title';
  $employee->salary='5000000';
  $day=&salar
  echo $employee->getEmployeeTitle();
  echo $employee->getEmployeeProfile();
  echo $employee->getEmployeeMonthlySalary($day);
?>