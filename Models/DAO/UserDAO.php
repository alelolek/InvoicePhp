<?php
    require_once '../Models/ConnectionDB.php';
    require_once '../Models/DTO/UserDTO.php';

    class UserDAO {
        private $connection = null;

        public function __construct() {
            $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
        }

              
        public function validateLogin($username, $password) {
            $userLoged = array('Valid' => false, 'Id' => 0, 'Username' => null);
            $sql = "SELECT * FROM Users WHERE Username = :username";
            $statement = $this->connection->prepare($sql);
            $statement->bindValue(':username', $username);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
        
            $hash = password_hash($result['Password'], PASSWORD_DEFAULT);
            if ($result && password_verify($password, $hash)) {
                $userLoged['Valid'] = true;
                $userLoged['Id'] = $result['Id'];
                $userLoged['Username'] = $result['Username'];
            }
        
            return $userLoged;
        }
        
        
    }
?>
