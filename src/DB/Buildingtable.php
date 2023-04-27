<?php 

// namespace DB; попытки понять хоть что-то

// global $result;


// $sql = "SELECT * FROM Products ORDER BY DATE_CREATE DESC";
// $result = $mysqli->query($sql);
// $mysqli->close();

// // while($rows=$result->fetch_assoc()){};

class CProducts {
    public function buildTable() {
        global $result;
        while($rows=$result->fetch_assoc())
        
        return $rows;
    }
    
}

$obj = new CProducts();
