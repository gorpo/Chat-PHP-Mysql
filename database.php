
<!-- @Guilherme Paluch 2021 -->

<?php


class Database
{
    private static $dbNome = 'site_vendas';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = 'daimonae';
    
    private static $cont = null;
    
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    public static function conectar($dbNome='site_vendas', $dbHost='localhost',)
    {
        $_SESSION['nome_db'] = self::$dbNome;
        $_SESSION['nome_db_host'] = self::$dbHost;
        $_SESSION['nome_db_usuario'] = self::$dbUsuario;
        $_SESSION['nome_db_senha'] = self::$dbSenha;
        if(null == self::$cont)
        {
            try
            {


                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".$dbNome, self::$dbUsuario, self::$dbSenha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 

            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}
?>
