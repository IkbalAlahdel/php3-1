<?PHP

class DB{

    public $host='localhost';
    public $db_name='store';
    public $username='root';
    public $userpass='';
    public $driver='mysql';
    public $connection;

    function __construct(){

        $connection=new PDO();

    }






}

?>