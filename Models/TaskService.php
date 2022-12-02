<?php
require_once 'DataBase.php';

class TaskService {

    public function getAllTasks()
    {
        try {
            $pdo = DataBase::connect();
            $sth = $pdo->prepare("SELECT * FROM tasks");
            $sth->execute();
            $result = $sth->fetchAll();
            DataBase::disconnect();
        } catch (PDOException  $e ){
            echo "Error: ".$e;
        }
        return $result;
    }



  

    public function createNewTask( $name, $email, $task, $done =1 ) {
        try {
            $pdo = DataBase::connect();
            $this->validateTaskParams($name, $email, $task);
            $stmt = $pdo->prepare("INSERT INTO tasks (name, email, task, done) VALUES (?,?,?,?)");
			$stmt->execute([$name,$email,$task,$done]);
            DataBase::disconnect();;
            } catch (Exception $e) {
            DataBase::disconnect();
            throw $e;
        }
    }



    public function getUser($login, $password) {
        try{
            $pdo = DataBase::connect();
            $sth = $pdo->prepare("SELECT * FROM users WHERE login = '".$login."' AND password = '".$password."' ");
            $sth->execute();
            $result = $sth->fetch();
            DataBase::disconnect();
        }catch(PDOException  $e ){
            echo "Error: ".$e;
        }
        return $result;
    }

   
   

}
