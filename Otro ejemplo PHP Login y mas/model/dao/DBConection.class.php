<?php

class DBConection extends mysqli {
    private static $HOST = "localhost";
    private static $USER = "root";
    private static $PASSWORD = "";
    private static $DATABASE = "dbpruebalogin";
    private static $PORT = 3306;
    
    private static $SINGLETON;
    
    private function __construct() {
        parent::__construct(static::$HOST,
                            static::$USER,
                            static::$PASSWORD,
                            static::$DATABASE, 
                            static::$PORT);
    }

    public static function getInstance() {
        // si la variable estatica con la conexion no esta inicializada ó
        // si la variable está inicializada, pero la conexion ya no está abierta
        if(static::$SINGLETON == null || !static::$SINGLETON->ping()) {
            // crear una nueva instancia conectada a la base de datos
            static::$SINGLETON = new DBConection();
        }
        
        return static::$SINGLETON;
    }

}

