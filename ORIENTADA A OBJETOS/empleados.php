<?php
class Employee
{
  private $first_name;
  private $last_name;
  private $age;
  
  public function __construct($first_name, $last_name, $age)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->age = $age;
  }
 
  public function getFirstName()
  {
    return $this->first_name;
  }
 
  public function getLastName()
  {
    return $this->last_name;
  }
 
  public function getAge()
  {
    return $this->age;
  }
}
?>
<?php
$objEmployeeOne = new Employee('Karina ', 'Chiguil ', 22);
 
echo $objEmployeeOne->getFirstName(); 
echo $objEmployeeOne->getLastName(); 
echo $objEmployeeOne->getAge(); 

echo '<br>';

$objEmployeeTwo = new Employee('Jesus ', 'Medina', 22);
 
echo $objEmployeeTwo->getFirstName(); 
echo $objEmployeeTwo->getLastName(); 
echo $objEmployeeTwo->getAge(); 
?>