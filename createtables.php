<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HMS";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//sql to create table employee
// $sql = "CREATE TABLE EMPLOYEE(
// id VARCHAR(30) PRIMARY KEY,
// firstname VARCHAR(30),
// mmiddlename VARCHAR(30),
// lastname VARCHAR(30),
// dbrith VARCHAR(30) ,
// age VARCHAR(30) ,
// gender VARCHAR(10),
// phone VARCHAR(30) ,
// email VARCHAR(50),
// country VARCHAR(50),
// region VARCHAR(50),
// stffaddress  VARCHAR(50),
// empId VARCHAR(50),
// passwd VARCHAR(50),
// passconf VARCHAR(50),
// proffession VARCHAR(50),
// salary VARCHAR(30),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
//create table for pateint
// $sql = "CREATE TABLE PATEINT(
//     pateintCode VARCHAR(30) PRIMARY KEY,
//     pname VARCHAR(30),
//     dbrith VARCHAR(30) ,
//     age VARCHAR(30) ,
//     disease VARCHAR(30) ,
//     email VARCHAR(50),
//     gender VARCHAR(10),
//     bgroup VARCHAR(50),
//     city VARCHAR(50),
//     paddress  VARCHAR(50),
//     contact VARCHAR(50),
//     allname VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    //create table for  medicine
// $sql = "CREATE TABLE EMAILandPASSWORD(
//     emila VARCHAR(30) ,
//     passwd VARCHAR(30) ,
//     passconf VARCHAR(30) 
//     )";
//create table for billinfo
$sql = "CREATE TABLE BILLTABLE(
  cardNo VARCHAR(30) ,
  itemid VARCHAR(30) PRIMARY KEY,
  amount VARCHAR(30) ,
  price VARCHAR(30) ,
  noday VARCHAR(30) ,
  roomno VARCHAR(50),
  nameacceptor VARCHAR(10),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY(cardNo) REFERENCES PATEINT(pateintCode)
  )";
if ($conn->query($sql) === TRUE) {
  echo "Table EMAILandPASSWORD created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>