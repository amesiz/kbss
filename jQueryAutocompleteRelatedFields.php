 <?php

class DB
{
    const DATABASE = 'kbss';
    const HOST = 'localhost';
    const USERNAME = 'amesiz';
    const PASSWORD = '';
    
    static private $pdo;
    
    static public function singleton()
    {
        if (!is_object(self::$pdo))
        {
            self::$pdo = new PDO('mysql:dbname=' . self::DATABASE . ';host=' . self::HOST, 
                                    self::USERNAME, 
                                    self::PASSWORD);
        }
        return self::$pdo;
    }
    
    private function __construct()
    {
        
    }
    
    public function __clone()
    {
        throw new Exception('You may not clone the DB instance');
    }
}

if (!isset($_REQUEST['term']))
{
    die('([])');
}

$st = DB::singleton()
        ->prepare(
            'select cus_code, cus_name, cus_addr ' .
            'from customer ' .
            'where cus_code = '$cus_code' ');
//            'order by zip asc ' .
//            'limit 0,10');

$cus_code = $_REQUEST['term'] . '%';
$st->bindParam(':cus_code', $cus_code, PDO::PARAM_STR);

$data = array();
if ($st->execute())
{
    while ($row = $st->fetch(PDO::FETCH_OBJ))
    {
        $data[] = array(
            'value' => $row->cus_code ,
            'city' => $row->cus_name ,
            'state' => $row->cus_addr
        );
    }
}
echo json_encode($data);
flush();

?>