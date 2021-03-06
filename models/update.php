<?php

require_once('lib/database.php');

class Update {

    private $formArray;

    public function setData() {
        $this->formArray = $_POST;
        $this->formArray = $this->filterParameters($this->formArray);
//        $this->formArray['password'] = sha1($this->formArray['password']);
    }

    public function filterParameters($array) {

        // Check if the parameter is an array
        if (is_array($array)) {
            // Loop through the initial dimension
            foreach ($array as $key => $value) {
                // Check if any nodes are arrays themselves
                if (is_array($array[$key]))
                // If they are, let the function call itself over that particular node
                    $array[$key] = $this->filterParameters($array[$key]);

                // Check if the nodes are strings
                if (is_string($array[$key])) {
                    // If they are, perform the real escape function over the selected node
                    $array[$key] = mysql_real_escape_string($array[$key]);
                    $array[$key] = trim($array[$key]);
                }
            }
        }
        // Check if the parameter is a string
        if (is_string($array))
        // If it is, perform a  mysql_real_escape_string on the parameter
            $array = mysql_real_escape_string($array);

        // Return the filtered result
        return $array;
    }

    public function updateData() {
        try {
            extract($this->formArray);

            $data = array(
                ':id' => $id,
                ':name1' => $name1,
                ':surname1' => $surname1,
                ':phone1' => $phone1,
                ':email1' => $email1,
                ':name2' => $name2,
                ':surname2' => $surname2,
                ':phone2' => $phone2,
                ':email2' => $email2,
                ':userName' => $userName
            );

            $dbh = new Database();

            $sql = "UPDATE teams SET 
            name1 = :name1,
            surname1 = :surname1,
            phone1 = :phone1,
            email1 = :email1,
            name2 = :name2,
            surname2 = :surname2,
            phone2 = :phone2,
            email2 = :email2,
            user_name = :userName
            WHERE team_id = :id
            ";

            $sth = $dbh->prepare($sql);
            $sth->execute($data);
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.<br />";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
            echo $e->getMessage();
        }
    }

}

