<?php
 include('../header.html');
?>

<?php

	$path = './';
	$page = 'comments';
	require '../../../../dbConnect.inc';

	  if ($mysqli) {
	  if (isset($_GET['name']) && isset($_GET['comment'])) {
	  if( $_GET['name']!='' && $_GET['comment']!='' ){

		$stmt=$mysqli->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
		$name = $_GET['name'];
		$comment = $_GET['comment'];
				$stmt->bind_param("ss", $name, $comment);
				$stmt->execute(); 
				$stmt->close();
	  }
      }
      $sql = 'select name, comment from comments';
	  $res=$mysqli->query($sql);
	  if($res){
			while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
				$records[] = $rowHolder;
			}
	  }
	}
?>

<?php
        $page = 'comments';
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
        $page = 'comments';
		 require '../../../../dbConnect.inc';  
		$sql = "SELECT internalCSS FROM project2 where page='$page'";
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

<!DOCTYPE html>
<html lang="en">

<div id = "commentBox">
		<div class = "FormHeader">
			<h3>Comments</h3>
		</div>
		<ul>

		<?php
			if(mysqli_num_rows($res) > 0) {
			foreach($records as $rowHolder) {
			echo '<li>'.$rowHolder['name']." ".$rowHolder['comment'].'</li>';
			} //foreach
			} //if
			else {
			echo "<h3> No Comments </h3>";
			} //else

		?>

		</ul>
		</div>
</html>

<?php 
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		return $data;
	}

	if (isset($_GET['name'])) {
		$name = test_input($_GET['name']);
	}

	if (isset($_GET['comment'])) {
		$comment = test_input($_GET['comment']);
	}
?>


<?php
    include('../footer.html');
?>