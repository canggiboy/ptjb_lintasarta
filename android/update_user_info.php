<?php

class update_user_info {

    private $conn;

    // constructor
    function __construct() {
        require_once 'android_login_connect.php';
        // connecting to database
        $db = new android_login_connect();
        $this->conn = $db->connect();
    }

    // destructor
    function __destruct() {

    }

    /**
     * Storing new user
     * returns user details
     */
    public function StoreUserInfo($id, $nik, $username, $encrypted_password, $level) {
        $hash = $this->hashFunction($encrypted_password);
        $password = $hash["encrypted"]; // encrypted password

        $stmt = $this->conn->prepare("INSERT INTO user_android(id, nik, username, password, level) VALUES(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $id, $nik, $username, $password, $level);
        $result = $stmt->execute();
        $stmt->close();

        // check for successful store
        if ($result) {
            $stmt = $this->conn->prepare("SELECT id, nik, username, password, level FROM user_android WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt-> bind_result($token2,$token3,$token4,$token5,$token6);
            while ( $stmt-> fetch() ) {
               $user["id"] = $token2;
               $user["nik"] = $token3;
               $user["username"] = $token4;
               $user["level"] = $token6;
            }
            $stmt->close();
            return $user;
        } else {
          return false;
        }
    }

    /**
     * Get user by email and password
     */
    public function VerifyUserAuthentication($username, $encrypted_password) {

        $stmt = $this->conn->prepare("SELECT id, nik, username, password, level FROM user_android WHERE username = ?");

        $stmt->bind_param("s", $username);

        if ($stmt->execute()) {
            $stmt-> bind_result($token2,$token3,$token4,$token5,$token6);

            while ( $stmt-> fetch() ) {
               $user["id"] = $token2;
               $user["nik"] = $token3;
               $user["username"] = $token4;
               $user["password"] = $token5;
               $user["level"] = $token6;
            }

            $stmt->close();

            // verifying user password
            $password = $token4;
            $hash = $this->CheckHashFunction($password);
            // check for password equality
            if ($password == $hash) {
                // user authentication details are correct
                return $user;
            }
        } else {
            return NULL;
        }
    }

    /**
     * Check user is existed or not
     */
    public function CheckExistingUser($username) {
        $stmt = $this->conn->prepare("SELECT username from user_android WHERE username = ?");

        $stmt->bind_param("s", $username);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // user existed 
            $stmt->close();
            return true;
        } else {
            // user not existed
            $stmt->close();
            return false;
        }
    }

    /**
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
    public function hashFunction($password) {

        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
    public function checkHashFunction($salt, $password) {
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
        return $hash;
    }

}

?>