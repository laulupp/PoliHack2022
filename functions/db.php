<?php

function dbConnect($dbC){

        $connection = mysqli_connect($dbC->db_host, $dbC->db_username, $dbC->db_password);
        if($connection){
            $connection->query("CREATE DATABASE IF NOT EXISTS ".$dbC->db_name.";");
            $connection = mysqli_connect($dbC->db_host, $dbC->db_username, $dbC->db_password, $dbC->db_name);
            $_SESSION['connection'] = $connection;
            //$connection->query("CREATE SCHEMA IF NOT EXISTS ".$dbC->db_schema);
            $connection->query("CREATE TABLE IF NOT EXISTS ".$dbC->db_usersTable."( id SERIAL primary key, username Varchar(255) not null, password Varchar(255) not null, fullname Varchar(255) not null, email Varchar(255), hasRequest Integer default 0, level Integer default 0, hospid Integer default -1)");
            $connection->query("CREATE TABLE IF NOT EXISTS ".$dbC->db_clinicsReqsTable."( id SERIAL primary key, name Varchar(255) not null, address Varchar(255) not null, phone Varchar(255) not null, idreprez Integer not null, hasemergency Integer not null, emergency Varchar(255) not null)");
            $connection->query("CREATE TABLE IF NOT EXISTS ".$dbC->db_clinicsTable."( id SERIAL primary key, name Varchar(255) not null, address Varchar(255) not null, phone Varchar(255) not null, idreprez Integer not null, hasemergency Integer not null, emergency Varchar(255) not null)");
            $connection->query("CREATE TABLE IF NOT EXISTS ".$dbC->db_programari."( id SERIAL primary key, idclinic Integer not null, data Varchar(255) not null, ora Varchar(255), specializare Varchar(255), pret Integer not null, isfree Integer default 1, iduser Integer default -1)");

            //mysqli_query($dbC, "CREATE TABLE IF NOT EXISTS ".$dbC->db_schema.".".$dbC->db_hospTable."( id SERIAL primary key, owner Varchar(255) not null, title Varchar(255) not null, shortdescription Varchar(255) not null, longdescription Varchar(5000), datecreated timestamp NOT NULL DEFAULT now())");
            return true;
        }
        echo "No DB connection";
        return false;
}
?>
