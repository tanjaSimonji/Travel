<?php 
    function konekcijaDB()
    {
        static $kon;
        if(!isset($kon))
        {
            $kon= new mysqli("localhost", "root", "", "travel");
        }
        return $kon;
    }
    $konekcijaMySQLi = konekcijaDB();

    function konekcijaDBPDO()
    {
        try 
        {
            static $dbh;
            if(!isset($dbh))
            {
                $dbh = new PDO("mysql:host=localhost;dbname=travel;charset=utf8", "root", "");
            }
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
            return $dbh;
    }
    $konekcijaPDO = konekcijaDBPDO();
    
?>