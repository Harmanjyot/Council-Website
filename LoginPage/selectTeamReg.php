<?php

require "../php/conn.php";
$eveName = $_POST["event_name"];
$playerName = $_POST["player_name"];
$playerYear = $_POST["player_year"];
$userRoll = $_POST["userroll"];
$capRollno = $_POST["capRoll"];
$uid = $_POST["userid"];

if (!preg_match("/^[a-zA-Z0-9]*$/", $playerName)){
    echo "player name";
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $playerYear)){
    echo "year";
    exit();
  }
  else if (!preg_match("/^[1-9][0-9]*$/", $userRoll)){
    echo "roll";
    exit();
  }
  else if (!preg_match("/^[1-9][0-9]*$/", $capRollno)){
    echo "captain";
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
    echo "uid";
    exit();
  }
  else {


 $query = "SELECT * FROM eventList WHERE eventName = '".$_POST["event_name"]."'";  
 $result = mysqli_query($conn, $query); 
 $row = mysqli_fetch_array($result);
 $event_id = (int)$row["SrNo"];
 $teamcap = (int)$row["teamCapacity"];
 $capacity = (int)$row["eventCapacity"];


 $query = "SELECT * from eventRegistrations where eventID = '$event_id' AND teamLeader = '".$_POST["capRoll"]."'";
 $result = mysqli_query($conn, $query);
 $row = mysqli_num_rows($result);
 echo "ONE";
 if ($row == 0) {
  echo "THIS IS HERE";
   $query = "SELECT count(distinct teamLeader) as total FROM eventRegistrations where eventID = '$event_id'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $rowCount = $data["total"];
    echo $rowCount;
    if ($capacity < $rowCount) {
      echo "Registrations full";
      exit();
    }
 }




 $query = "SELECT count(*) as total FROM eventRegistrations where eventID = '$event_id' AND teamLeader = '".$_POST["capRoll"]."'";
 $result = mysqli_query($conn, $query);
 $data = mysqli_fetch_assoc($result);
 $rowCount = $data['total'];
  if ($teamcap > $rowCount) {

    $query = "SELECT * FROM eventRegistrations WHERE studentRoll = '".$_POST["userroll"]."' AND eventID = '".$event_id."'";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
      echo "Registered already!";
    }
    else
    {
    $query = "SELECT * FROM studentData WHERE studentRoll = '".$_POST["userroll"]."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $playerid = $row["userID"];
    $query = "INSERT INTO eventRegistrations(studentID, studentRoll, eventID, teamLeader) VALUES ('".$playerid."', '".$_POST["userroll"]."' , '".$event_id."', '".$_POST["capRoll"]."')";
    $result = mysqli_query($conn, $query);

    $cultural = false;
    $sport = false;

    // $sql = "SELECT * FROM studentcriteria WHERE "

    $query = "SELECT * FROM studentcriteria where studentID = '".$_POST["userroll"]."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $currentCrit = $row["criteriaStatus"];
    $sport = $row["sport_technicalEvent"];
    $cultural = $row["culturalEvent"];

    $sql = "SELECT eventType FROM eventlist WHERE SrNo = '$event_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row["eventType"] == "Sports") {
      $sport = true;
    } 
    if ($row["eventType"] == "Cultural") {
      $cultural = true;
    }


    if ($currentCrit == 0) 
    {
      $query = "UPDATE studentcriteria SET culturalEvent='$cultural', sport_technicalEvent='$sport', criteriaStatus = '1' WHERE studentID='".$_POST["userroll"]."' ";
      $result = mysqli_query($conn, $query);

      $query = "SELECT * FROM studentData WHERE studentRoll = '".$_POST["userroll"]."'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result);
      $branch = $row["studentBranch"];
      $year = $row["studentYear"];

      $query = "SELECT * FROM branchData WHERE branchName = '$branch' and branchYear = '$year'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result);
      $criteria = $row["branchCriteria"];
      $newCrite = $criteria + 1;
      $sql = "UPDATE branchData SET branchCriteria = '$newCrite' WHERE branchName = '$branch' and branchYear = '$year'";
          $result = mysqli_query($conn, $sql);
          

      echo "Registration completed";
    }
    else {
      $query = "UPDATE studentcriteria SET culturalEvent='$cultural', sport_technicalEvent='$sport', criteriaStatus = '1' WHERE studentID='".$_POST["userroll"]."' ";
      $result = mysqli_query($conn, $query);
      echo "Registration completed";
    }
      } 
  }}
    require "../php/setBranch.php";

?>