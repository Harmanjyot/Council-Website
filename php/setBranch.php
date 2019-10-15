<?php

require "conn.php";

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'IT' and studentData.studentYear = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$IT = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'IT' and studentYear = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$IT_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Comps' and studentData.studentYear = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$comps = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Comps' and studentYear = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$comps_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Mechanical' and studentData.studentYear = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$mech = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Mechanical' and studentYear = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$mech_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'EXTC' and studentData.studentYear = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$extc = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'EXTC' and studentYear = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$extc_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Electrical' and studentData.studentYear = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$elec = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Electrical' and studentYear = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$elec_reg = $row["registered"];

$query = "UPDATE branchData SET branchCriteria = '$IT', branchRegistration = '$IT_reg' where branchName = 'IT' AND branchYear='1'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$comps', branchRegistration = '$comps_reg' where branchName = 'Comps' AND branchYear='1'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$mech', branchRegistration = '$mech_reg' where branchName = 'Mechanical' AND branchYear='1'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$extc', branchRegistration = '$extc_reg' where branchName = 'EXTC' AND branchYear='1'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$elec' , branchRegistration = '$elec_reg' where branchName = 'Electrical' AND branchYear='1'";
$result = mysqli_query($conn, $query);






$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'IT' and studentData.studentYear = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$IT = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'IT' and studentYear = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$IT_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Comps' and studentData.studentYear = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$comps = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Comps' and studentYear = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$comps_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Mechanical' and studentData.studentYear = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$mech = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Mechanical' and studentYear = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$mech_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'EXTC' and studentData.studentYear = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$extc = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'EXTC' and studentYear = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$extc_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Electrical' and studentData.studentYear = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$elec = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Electrical' and studentYear = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$elec_reg = $row["registered"];

$query = "UPDATE branchData SET branchCriteria = '$IT', branchRegistration = '$IT_reg' where branchName = 'IT' AND branchYear='2'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$comps', branchRegistration = '$comps_reg' where branchName = 'Comps' AND branchYear='2'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$mech', branchRegistration = '$mech_reg' where branchName = 'Mechanical' AND branchYear='2'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$extc', branchRegistration = '$extc_reg' where branchName = 'EXTC' AND branchYear='2'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$elec' , branchRegistration = '$elec_reg' where branchName = 'Electrical' AND branchYear='2'";
$result = mysqli_query($conn, $query);







$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'IT' and studentData.studentYear = '3'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$IT = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'IT' and studentYear = '3'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$IT_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Comps' and studentData.studentYear = '3'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$comps = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Comps' and studentYear = '3'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$comps_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Mechanical' and studentData.studentYear = '3'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$mech = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Mechanical' and studentYear = '3'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$mech_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'EXTC' and studentData.studentYear = '3'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$extc = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'EXTC' and studentYear = '3'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$extc_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Electrical' and studentData.studentYear = '3'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$elec = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Electrical' and studentYear = '3'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$elec_reg = $row["registered"];

$query = "UPDATE branchData SET branchCriteria = '$IT', branchRegistration = '$IT_reg' where branchName = 'IT' AND branchYear='3'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$comps', branchRegistration = '$comps_reg' where branchName = 'Comps' AND branchYear='3'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$mech', branchRegistration = '$mech_reg' where branchName = 'Mechanical' AND branchYear='3'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$extc', branchRegistration = '$extc_reg' where branchName = 'EXTC' AND branchYear='3'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$elec' , branchRegistration = '$elec_reg' where branchName = 'Electrical' AND branchYear='3'";
$result = mysqli_query($conn, $query);








$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'IT' and studentData.studentYear = '4'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$IT = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'IT' and studentYear = '4'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$IT_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Comps' and studentData.studentYear = '4'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$comps = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Comps' and studentYear = '4'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$comps_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Mechanical' and studentData.studentYear = '4'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$mech = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Mechanical' and studentYear = '4'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$mech_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'EXTC' and studentData.studentYear = '4'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$extc = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'EXTC' and studentYear = '4'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$extc_reg = $row["registered"];

$query = "SELECT COUNT(DISTINCT eventRegistrations.studentRoll) as criteria FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE studentData.studentBranch = 'Electrical' and studentData.studentYear = '4'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$elec = $row["criteria"];

$query = "SELECT COUNT(DISTINCT studentRoll) as registered FROM studentData WHERE studentBranch = 'Electrical' and studentYear = '4'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$elec_reg = $row["registered"];

$query = "UPDATE branchData SET branchCriteria = '$IT', branchRegistration = '$IT_reg' where branchName = 'IT' AND branchYear='4'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$comps', branchRegistration = '$comps_reg' where branchName = 'Comps' AND branchYear='4'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$mech', branchRegistration = '$mech_reg' where branchName = 'Mechanical' AND branchYear='4'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$extc', branchRegistration = '$extc_reg' where branchName = 'EXTC' AND branchYear='4'";
$result = mysqli_query($conn, $query);

$query = "UPDATE branchData SET branchCriteria = '$elec' , branchRegistration = '$elec_reg' where branchName = 'Electrical' AND branchYear='4'";
$result = mysqli_query($conn, $query);


?>