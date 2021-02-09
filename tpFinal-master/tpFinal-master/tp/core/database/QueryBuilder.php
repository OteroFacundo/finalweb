<?php

namespace App\Core\Database;

use PDO;
use Exception;

class QueryBuilder
{
    /**
     * The PDO instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo, $logger = null)
    {
        $this->pdo = $pdo;
        $this->logger = ($logger) ? $logger : null;
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Insert a record into a table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function insert($table, $parameters)
    { 
        $parameters = $this->cleanParameterName($parameters);
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            $this->sendToLog($e);
        }
    }

    private function sendToLog(Exception $e)
    {
        if ($this->logger) {
            $this->logger->error('Error', ["Error" => $e]);
        }
    }

    /**
     * Limpia guiones - que puedan venir en los nombre de los parametros
     * ya que esto no funciona con PDO
     *
     * Ver: http://php.net/manual/en/pdo.prepared-statements.php#97162
     */
    private function cleanParameterName($parameters)
    {
        $cleaned_params = [];
        foreach ($parameters as $name => $value) {
            $cleaned_params[str_replace('-', '', $name)] = $value ;
        }
        return $cleaned_params;
    
    }

 public function validarLogin($table, $usuario ,$password){
        $statement = $this->pdo->prepare(
            "SELECT * FROM {$table} 
            WHERE nombre='{$usuario}' AND password='{$password}' "
        );
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
public function comparaUsuario($table, $usuario ){  $statement = $this->pdo->prepare(
            "SELECT * FROM {$table} 
            WHERE nombre='{$usuario}'  "
        );
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
 


  public function getEventos($tableEvento){ 
        $statement = $this->pdo->prepare(
           "SELECT nombreEvento FROM $tableEvento"
    );
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
    }
public function updatePresupuesto($tabla,$estado,$id){
        $statement = $this->pdo->prepare(
            "UPDATE $tabla SET estado='$estado' WHERE idPresupuesto=$id"
        );
        $statement->execute();
        }

        public function insertarImagen($tabla,$archi,$dir){
            $statement = $this->pdo->prepare(
            "INSERT INTO $tabla(archivo,directorio) VALUES ('$archi','$dir')"
        );
            $statement->execute();
        }
        public function insertImagen($tabla,$ruta){
            $statement = $this->pdo->prepare(
                "INSERT INTO $tabla(imagen) VALUES ('$ruta')"
            );
                $statement->execute();
        }
       public function dameImg($tabla){
        $statement = $this->pdo->prepare(
            "SELECT imagen FROM $tabla"
        );
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
   
    }

