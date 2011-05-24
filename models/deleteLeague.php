<?php

class DeleteLeague {

    public function __construct($id) {
        try {
            require_once('lib/database.php');
            $data = array(':id' => $id);

            $dbh = new Database();

            $sql = "DELETE FROM leagues WHERE league_id = :id";

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

?>
