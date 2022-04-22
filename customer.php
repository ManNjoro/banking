<?php 
class Customer 
{
    private  $cuNo;
    private  $name;
    private $gender;
    private $phone;
    private $email;
    private $connection;
    private $table;
    public function __construct($connection)
    {
        $this->cuNo = "";
        $this->name = "";
        $this->gender = "";
        $this->phone = "";
        $this->email = "";
        $this->connection = $connection;
        $this->table = "customer";
        
    }
    
    
    // create a user
    public function create($cuNo, $name, $email, $gender, $phone)
    {


        $this->cuNo = $cuNo;
        $this->name = $name;
        $this->gender = $gender;
        $this->phone = $phone;
        $this->email = $email;
        $query = "INSERT INTO `$this->table` SET 
        `$this->table`.Custno = :$cuNo, 
        `$this->table`.Custname = :$name,
        `$this->table`.gender = :$gender,  
        `$this->table`.MobileNo  = :$phone,
        `$this->table`.email = :$email;";
        $binder = $this->connection->prepare($query);
        $binder->bindParam(":$cuNo", $this->cuNo);
        $binder->bindParam(":$name", $this->name);
        $binder->bindParam(":$gender", $this->gender);
        $binder->bindParam(":$phone", $this->phone);
        $binder->bindParam(":$email", $this->email);
        
        $binder->execute();
    }
    
}
include 'db.php';
$db = new Database();
$conn = $db->connect();
$cust = new   Customer($conn);
$res = $cust->create("21", "colls", "form", "j", "0794940160");
print_r($res);



?>