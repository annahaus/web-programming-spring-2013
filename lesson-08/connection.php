<?php

$dataconnection = new mysqli('localhost', 'ahausfel_admin', 'ABnrRxfh', 'ahausfel' );
if ($dataconnection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $dataconnection->connect_errno . ") " . $dataconnection->connect_error;
}
