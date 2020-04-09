<?php
    include('../header.html');
?>

<?php   
    $visitName = $_POST['visitName'];
    $rateMadrid = $_POST['rateMadrid'];
    $location = $_POST['location'];
    $websiteImprove = $_POST['websiteImprove'];
    $destination_email = "jlb2886@rit.edu";
    $email_subject = "Madrid Spain";
    $email_body = "Visitor Name: " . $visitName . "\n";
    $email_body .= "Quiz rating: " . $rateMadrid . "\n";
    $email_body .= "Topics could use more reinforcement with: " . $location . "\n";
    $email_body .= "How the website could be improved: " . $websiteImprove . "\n";
    mail($destination_email, $email_subject, $email_body);
?>

<?php
        $page = 'formproces';
		 require '../../../../dbConnect.inc';  
		$sql = "SELECT content FROM project2 where page='$page'";
		$result = $mysqli->query($sql);
		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo "0 results";
		}
?>

<?php
        $page = 'formproces';
		 require '../../../../dbConnect.inc';  
		$sql = "SELECT internalCSS FROM project2  where page='$page'";
		$result = $mysqli->query($sql);
		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['internalCSS'];
			}
		}else{
			echo "0 results";
		}
?>

<?php
    include('../footer.html');
?>