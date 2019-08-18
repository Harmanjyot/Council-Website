<?php  
 require "../php/conn.php";

        $roll = $_POST["id"];
        echo $roll;
        $sql = "SELECT * FROM studentData where studentRoll = '".$_POST["id"]."'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        $branch = $row["studentBranch"];
        $year = $row["studentYear"];

        $sql = "DELETE FROM studentVerification WHERE studentRoll = '".$_POST["id"]."'";  
        $result = mysqli_query($conn, $sql);

        $sql = "DELETE FROM studentData WHERE studentRoll = '".$_POST["id"]."'";
        $result = mysqli_query($conn, $sql);

        $sql = "SELECT * FROM studentCriteria where studentID = '".$_POST["id"]."'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $criteria = $row["criteriaStatus"];
        echo $criteria;
        if ($criteria == 1) {
            $sql = "SELECT * FROM branchData where branchName = '$branch' and branchYear = '$year'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                $crit = $row["branchCriteria"];
                $newcrit = $crit - 1;
                $reg = $row["branchRegistration"];
                $newReg = $reg - 1;
                $sql = "UPDATE branchData SET branchCriteria = '$newcrit', branchRegistration = '$newReg' where branchName = '$branch' and branchYear = '$year'";
                $result = mysqli_query($conn, $sql);
        }

    	$sql = "DELETE FROM studentCriteria WHERE studentID = '".$_POST["id"]."'";
    	$result = mysqli_query($conn, $sql);
    	$sql = "DELETE FROM eventRegistrations WHERE studentRoll = '".$_POST["id"]."'";
        $result = mysqli_query($conn, $sql);

        ?>
