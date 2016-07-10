<?php

/**
 * Class process
 * Class to process data entered and returned
 *
 */

class process {

    /**
     * @var
     * Private variable con to
     * initiate a new connection form the settings
     *
     */

    private $con;


    /**
     * process constructor.
     * Constructor function
     *
     */

    public function __construct($con)
    {
        $this -> db = $con;
    }


    /**
     * @param $query
     * @return mixed
     * Generic function to prepare queries
     *
     */

    public function runQuery($query)
    {
        $stmt = $this->db->prepare ( $query );
        
        return $stmt;
    }

    /**
     * @param $uname
     * @param $pwd
     * @return bool
     * Function to check if login credentials correct
     *
     */

    public function login ($uname, $pwd)
    {
        
        try {
            
            $stmt = self::runQuery( "SELECT * FROM ap_user WHERE ap_uname = :uname AND ap_pwd = :pwd" );

            $stmt->execute(array(':uname'=>$uname, ':pwd'=>$pwd));

            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() > 0)
            {

                $_SESSION['user_session'] = $userRow['id'];

                return true;

            } else {

                return false;
            }
        } catch (PDOException $err)
        {
            echo $err->getMessge();
        }
    }


    /**
     * @return bool
     * Function to check if user is logged in
     */

    public function is_logged ()
    {
        if(isset($_SESSION['user_session']))
        {
            return true;

        }
    }


    /**
     * @param $url
     * Function to redirect user
     */

    public function redirect ($url)
    {
        header("location: $url");
    }


    /**
     * @return bool
     * function to logout user
     */

    public function logout ()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }
}