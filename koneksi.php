<?php 
    $conn = mysqli_connect("localhost", "root", "", "datamotor");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_affected_rows($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

?>