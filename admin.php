<!-- Thhave to do list = 
1) Add groups or teachers 
2) Update groups or teachers 
3) Delete groups or teachers -->
<html>
<head>
	<link rel ="stylesheet" type = "text/css" href="style.css">
	<script src="script.js"></script>
	<script src="jquery-2.2.0.js"></script>
</head>
<body>
	<?php
		include "connection.php";
		$sqlTeacher = "SELECT Teacher FROM teachers ORDER BY Teacher";
		$sqlGroup = "SELECT GName FROM groups ORDER BY GName";
		$result = $coon->query($sqlTeacher);
		$resultG = $coon->query($sqlGroup);
		if(!$result || !$resultG){
			echo "NIO" . $coon->error;
		}
		?>
	<video id="bg" src="1.mp4" autoplay="true" loop="true" muted="true"></video>
	<div id="wrapper" .box>
		<!-- Hidden Elements -->
			<div class="AdminForms" id="addGroup">
				<h1 align="center">Adding Group</h1>
				<form action="addingGroup.php" method ="post">
					Group: <input type="text" name="gName" /> <br />
					<input type="submit" value="Add Group" />
				</form>
			</div>

			<div class="AdminForms" id="addTeacher">
				<h1 align="center">Adding Teacher</h1>
				<form action="addingTeacher.php" method = "post">
					Name: <input type="text" name="teacherName" /> <br />
					<input type="submit" value="Add Teacher" />
				</form>
			</div>

			<div class="AdminForms" id="createTT">
				<h1 align="center">Creating Timetable</h1>
				<form action="CreateTimetable.php" method ="post">
					Duration: <select name="duration">
								<option selected = "selected">08:00 - 09:00</option>
								<option>09:00 - 10:00</option>
								<option>10:00 - 11:00</option>
								<option>11:00 - 12:00</option>
								<option>12:00 - 13:00</option>
								<option>13:00 - 14:00</option>
								<option>14:00 - 15:00</option>
								<option>15:00 - 16:00</option>
								<option>16:00 - 17:00</option>
								<option>17:00 - 18:00</option>
							  </select>
					Lesson: <input type="text" name="lesson" /> <br />
					Group: <select name="gName">
							<?php while($rowG = $resultG->fetch_array()){ ?>
								<option value="<?php echo $rowG['GName'];?>"><?php echo $rowG['GName'];?></option>
							<?php } ?>
						   </select>
					Teacher: <select name="teacherName">
							<?php while($row = $result->fetch_array()){ ?>
								<option value="<?php echo $row['Teacher'];?>"><?php echo $row['Teacher'];?></option>
							<?php } ?>
							 </select>
					Room: <input type="text" name="room" /> <br />
					Weekday: <select name="weekday">
								<option selected = "selected">Monday</option>
								<option>Tuesday</option>
								<option>Wednesday</option>
								<option>Thursday</option>
								<option>Friday</option>
							  </select> 
					<input type="submit" value="Add Group" />
				</form>
			</div>


			<div class="AdminForms" id="deleteRecord">
				<h1 align="center">Deleting record</h1>
				<form action="delete.php" method ="post">
					ID of record: <input type="text" name="ID" /> <br />
					<input type="submit" value="Delete" />
				</form>
			</div>

			

			<div class="AdminForms" id="viewGroups">
				<h1 align="center"> Groups </h1>
				<?php
					$sqlViewGroupMonday = "SELECT ID, Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Monday' ORDER BY GName";
					$sqlViewGroupTuesday = "SELECT ID, Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Tuesday' ORDER BY GName";
					$sqlViewGroupWednesday = "SELECT ID, Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Wednesday' ORDER BY GName";
					$sqlViewGroupThursday = "SELECT ID, Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Thursday' ORDER BY GName";
					$sqlViewGroupFriday = "SELECT ID, Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Friday' ORDER BY GName";
					$resultViewGroup = $coon->query($sqlViewGroupMonday);
					$resultViewGroup1 = $coon->query($sqlViewGroupTuesday);
					$resultViewGroup2 = $coon->query($sqlViewGroupWednesday);
					$resultViewGroup3 = $coon->query($sqlViewGroupThursday);
					$resultViewGroup4 = $coon->query($sqlViewGroupFriday);
					if(!$resultViewGroup || !$resultViewGroup1 || !$resultViewGroup2 || !$resultViewGroup3 || !$resultViewGroup4){
						echo "NIO" . $coon->error;
					} 	
				 ?>
				 <table>
				 	<tr><th> ID </th> 	<th>Group</th>		<th>Duration</th>	<th>Lesson</th>		<th>Room</th>	<th> Teacher</th>   <th> Weekday </th>
				 	<?php while($GroupView = $resultViewGroup->fetch_array()){
				 		echo '
					<tr><td>'.$GroupView['ID'].'</td>
						<td>'.$GroupView['GName'].'</td>	
				 		<td>'.$GroupView['Duration'].'</td>	
				 		<td>'.$GroupView['Lesson'].'</td>	
				 		<td>'.$GroupView['Room'].'</td>	
				 		<td>'.$GroupView['Teacher'].'</td>
				 		<td>'.$GroupView['WeekDay'].'</td>
				 	</tr>'; } ?>
				 	<?php while($GroupView1 = $resultViewGroup1->fetch_array()){
				 		echo '
					<tr><td>'.$GroupView1['ID'].'</td>
						<td>'.$GroupView1['GName'].'</td>	
				 		<td>'.$GroupView1['Duration'].'</td>	
				 		<td>'.$GroupView1['Lesson'].'</td>	
				 		<td>'.$GroupView1['Room'].'</td>	
				 		<td>'.$GroupView1['Teacher'].'</td>
				 		<td>'.$GroupView1['WeekDay'].'</td>
				 	</tr>'; } ?>
				 	<?php while($GroupView2 = $resultViewGroup2->fetch_array()){
				 		echo '
					<tr><td>'.$GroupView2['ID'].'</td>
						<td>'.$GroupView2['GName'].'</td>	
				 		<td>'.$GroupView2['Duration'].'</td>	
				 		<td>'.$GroupView2['Lesson'].'</td>	
				 		<td>'.$GroupView2['Room'].'</td>	
				 		<td>'.$GroupView2['Teacher'].'</td>
				 		<td>'.$GroupView2['WeekDay'].'</td>
				 	</tr>'; } ?>
				 	<?php while($GroupView3 = $resultViewGroup3->fetch_array()){
				 		echo '
					<tr><td>'.$GroupView3['ID'].'</td>
						<td>'.$GroupView3['GName'].'</td>	
				 		<td>'.$GroupView3['Duration'].'</td>	
				 		<td>'.$GroupView3['Lesson'].'</td>	
				 		<td>'.$GroupView3['Room'].'</td>	
				 		<td>'.$GroupView3['Teacher'].'</td>
				 		<td>'.$GroupView3['WeekDay'].'</td>
				 	</tr>'; } ?>
				 	<?php while($GroupView4 = $resultViewGroup4->fetch_array()){
				 		echo '
					<tr><td>'.$GroupView4['ID'].'</td>
						<td>'.$GroupView4['GName'].'</td>	
				 		<td>'.$GroupView4['Duration'].'</td>	
				 		<td>'.$GroupView4['Lesson'].'</td>	
				 		<td>'.$GroupView4['Room'].'</td>	
				 		<td>'.$GroupView4['Teacher'].'</td>
				 		<td>'.$GroupView4['WeekDay'].'</td>
				 	</tr>'; } ?>
				 </table>
			</div>

			<div class="AdminForms" id="viewTeachers">
				<h1 align="center"> Teachers </h1>
				<?php
					$sqlViewTeacherMonday = "SELECT ID, Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Monday' ORDER BY Teacher";
					$sqlViewTeacherTuesday = "SELECT ID, Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Tuesday' ORDER BY Teacher";
					$sqlViewTeacherWednesday = "SELECT ID, Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Wednesday' ORDER BY Teacher";
					$sqlViewTeacherThursday = "SELECT ID, Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Thursday' ORDER BY Teacher";
					$sqlViewTeacherFriday = "SELECT ID, Duration, Lesson, GName, Teacher, Room, WeekDay FROM duration WHERE WeekDay = 'Friday' ORDER BY Teacher";
					$resultViewTeacher = $coon->query($sqlViewTeacherMonday);
					$resultViewTeacher1 = $coon->query($sqlViewTeacherTuesday);
					$resultViewTeacher2 = $coon->query($sqlViewTeacherWednesday);
					$resultViewTeacher3 = $coon->query($sqlViewTeacherThursday);
					$resultViewTeacher4 = $coon->query($sqlViewTeacherFriday);
					if(!$resultViewTeacher || !$resultViewTeacher1 || !$resultViewTeacher2 || !$resultViewTeacher3 || !$resultViewTeacher4){
						echo "NIO" . $coon->error;
					} 	
				 ?>
				<table>
				 	<tr><th> ID </th> <th>Teacher</th>		<th>Duration</th>	<th>Lesson</th>		<th>Room</th>	<th> Group</th>   <th> WeekDay </th> 
				 	</tr>
				 	<?php while($TeacherView = $resultViewTeacher->fetch_array()){
				 		echo '
					<tr><td>'.$TeacherView['ID'].'</td>
						<td>'.$TeacherView['Teacher'].'</td>	
				 		<td>'.$TeacherView['Duration'].'</td>	
				 		<td>'.$TeacherView['Lesson'].'</td>	
				 		<td>'.$TeacherView['Room'].'</td>	
				 		<td>'.$TeacherView['GName'].'</td>
				 		<td>'.$TeacherView['WeekDay'].'</td>
				 	</tr>'; } ?>
				 	<?php while($TeacherView1 = $resultViewTeacher1->fetch_array()){
				 		echo '
					<tr><td>'.$TeacherView1['ID'].'</td>
						<td>'.$TeacherView1['Teacher'].'</td>	
				 		<td>'.$TeacherView1['Duration'].'</td>	
				 		<td>'.$TeacherView1['Lesson'].'</td>	
				 		<td>'.$TeacherView1['Room'].'</td>	
				 		<td>'.$TeacherView1['GName'].'</td>
				 		<td>'.$TeacherView1['WeekDay'].'</td>
				 	</tr>'; } ?>
				 	<?php while($TeacherView2 = $resultViewTeacher2->fetch_array()){
				 		echo '
					<tr><td>'.$TeacherView2['ID'].'</td>
						<td>'.$TeacherView2['Teacher'].'</td>	
				 		<td>'.$TeacherView2['Duration'].'</td>	
				 		<td>'.$TeacherView2['Lesson'].'</td>	
				 		<td>'.$TeacherView2['Room'].'</td>	
				 		<td>'.$TeacherView2['GName'].'</td>
				 		<td>'.$TeacherView2['WeekDay'].'</td>
				 	</tr>'; } ?>
				 	<?php while($TeacherView3 = $resultViewTeacher3->fetch_array()){
				 		echo '
					<tr><td>'.$TeacherView3['ID'].'</td>
						<td>'.$TeacherView3['Teacher'].'</td>	
				 		<td>'.$TeacherView3['Duration'].'</td>	
				 		<td>'.$TeacherView3['Lesson'].'</td>	
				 		<td>'.$TeacherView3['Room'].'</td>	
				 		<td>'.$TeacherView3['GName'].'</td>
				 		<td>'.$TeacherView3['WeekDay'].'</td>
				 	</tr>'; } ?>
				 	<?php while($TeacherView4 = $resultViewTeacher4->fetch_array()){
				 		echo '
					<tr><td>'.$TeacherView4['ID'].'</td>
						<td>'.$TeacherView4['Teacher'].'</td>	
				 		<td>'.$TeacherView4['Duration'].'</td>	
				 		<td>'.$TeacherView4['Lesson'].'</td>	
				 		<td>'.$TeacherView4['Room'].'</td>	
				 		<td>'.$TeacherView4['GName'].'</td>
				 		<td>'.$TeacherView4['WeekDay'].'</td>
				 	</tr>'; } ?>
				 </table>

			</div>
		<!-- Hidden elements finished -->
		<div class="sign">
			<button id="shit" onclick="popSignIn()"> Sign Out </button>				
		</div>
		<div class="name">TSearch <br><p id = "admin"> Admin </p></div>
			<div class="menuAdmin">
				<div class="menuElementAdmin" id = "add"><button style="font-size: 40px;">Add Group / Teacher</button></div>
				<div class="menuElementAdmin" id = "create"><button style="font-size: 40px;">Create TimeTable</button></div>
				<div class="menuElementAdmin" id = "delete"><button style="font-size: 40px;">Delete Record</button></div>
				<div class="menuElementAdmin" id = "view"<button style="font-size: 40px;">View Groups / Teachers</button></div>
			</div>
			<div class="clear"></div>
			<div class="choiceElementWrapper">
				<div class="choiceElement" id="adminGroup"><button>Group ?</button></div>
				<div class="choiceElement" id="adminTeacher"><button>Teacher ?</button></div>		
			</div>	
	</div>




</body>
</html>
<script type="text/javascript">
var indicator = "";
$(document).ready(function(){
	// First order buttons 
	$("#add").click(function(){
		$(".AdminForms").hide(900);
		$(".choiceElementWrapper").show(900);
		$(this).dblclick(function(){
			$(".choiceElementWrapper").hide(900);
			$("#createTT").hide(900);
			$(".AdminForms").hide(900);
		});
	});
	$("#view").click(function(){
		$(".AdminForms").hide(900);
		$(".choiceElementWrapper").show(900);
		$(this).dblclick(function(){
			$(".choiceElementWrapper").hide(900);
			$("#createTT").hide(900);
			$(".AdminForms").hide(900);
		});
	});

	$("#create").click(function(){
		$(".AdminForms").hide(900);
		$(".choiceElementWrapper").hide(900);
		$("#createTT").show(900);
		$(this).dblclick(function(){
			$(".choiceElementWrapper").hide(900);
			$("#createTT").hide(900);
			$(".AdminForms").hide(900);
		});
	});
	$("#delete").click(function(){
		$(".AdminForms").hide(900);
		$(".choiceElementWrapper").hide(900);
		$("#deleteRecord").show(900);
		$(this).dblclick(function(){
			$(".choiceElementWrapper").hide(900);
			$("#deleteRecord").hide(900);
			$(".AdminForms").hide(900);
		});
	});
	// first order buttons finished and indicator started


	$("#add").click(function(){
		indicator = "add";

	});

	$("#view").click(function(){
		indicator = "view";
	});


    // indicator finished and second order buttons started : either for group or for teacher
	$("#adminGroup").click(function(){
		if(indicator === "add"){
			$(".AdminForms").hide(900);
			$("#addGroup").show(900);
		}
		if(indicator === "view"){
			$(".AdminForms").hide(900);
			$("#viewGroups").show(900);
		}
	});


	$("#adminTeacher").click(function(){
		if(indicator === "add"){
			$(".AdminForms").hide(900);
			$("#addTeacher").show(900);
		}
		if(indicator === "view"){
			$(".AdminForms").hide(900);
			$("#viewTeachers").show(900);
		}
	});

});
</script>