<?php    
    class Connection{
        private $host = '';  
        private $user = '';  
        private $password = '';  
        private $db_name = '';  
        private $con = '';  
        
        function __construct() {
            $this->host = 'localhost';
            $this-> user = 'root';
            $this->password = ''; 
            $this->db_name = 'addressdb';
            
        }

        // function check_connection(){
        //     if(mysqli_connect_errno()) {  
        //         die('Failed to connect with MySQL: '. mysqli_connect_error());  
                
        //     }  
        // }

        // function get_connection(){
        //     $this->con = mysqli_connect($this->host, $this-> user, $this->password, $this->db_name);
        //     $this->check_connection();
        //     return $this->con;
        // }

        function get_connection(){
            $this->mysqli = mysqli_connect($this->host, $this-> user, $this->password, $this->db_name) or die(mysqli_error($mysqli));
            return $this->mysqli;
        }
    


    }
?>