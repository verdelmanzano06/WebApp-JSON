<html>
	<head>
		<title></title>
	</head>
<body>
	<?php
 		
 		$arrSubs = array( array('subject' => 'College Algebra',
 							'catalog' => 'MATH',
 							'code' => '101',
 							'grade' => 3.0),
 				array('subject' => 'Integral Calculus',
 							'catalog' => 'MATH',
 							'code' => '212',
 							'grade' => 'C-'),
 				array('subject' => 'Principles of Operating Systems and its Applications',
 							'catalog' => 'CS',
 							'code' => '342',
 							'grade' => 2.75),
 				array('subject' => 'Seminars and Marketing',
 							'catalog' => 'MKTG',
 							'code' => '372',
 							'grade' => 'B+'),
 				array('subject' => 'Team Sports',
 							'catalog' => 'PHYED',
 							'code' => '131',
 							'grade' => 2.00),
 				array('subject' => 'Physical Fitness',
 							'catalog' => 'PHYED',
 							'code' => '101',
 							'grade' => 2.50),
 				array('subject' => 'Computer Programming 2',
 							'catalog' => 'CS',
 							'code' => '202',
 							'grade' => 2.00),
 				array('subject' => 'National Service Training Program 1',
 							'catalog' => 'NSTP',
 							'code' => '101',
 							'grade' => 2.00),		
		  );

			$jsonSubs = json_encode($arrSubs);
		
	?>
	<script language = "javascript" type = "text/javascript">
		var arr = JSON.parse('<?php echo $jsonSubs; ?>'); 

		arr.push({"subject" : "Data Comm", "catalog" : "IT", "code" : "211", "grade" : "B"});
		arr.push({"subject" : "Web App", "catalog" : "IT", "code" : "341", "grade" : "B-"});
		arr.push({"subject" : "Operating System", "catalog" : "CS", "code" : "342", "grade" : "A-"});

		document.writeln("<table border='1'");
	 	document.writeln("<tr><th>SUBJECT</th><th>Subject Catalog</th><th>Subject Code</th></th><th>Grade</th></tr>");
	 	for(x = 0; arr.length > 0; x++){
	 		document.writeln("<tr>");
		 	document.writeln("<td>"+ arr[x].subject +"</td>");
		 	document.writeln("<td>"+ arr[x].catalog +"</td>");
		 	document.writeln("<td>"+ arr[x].code +"</td>");
		 	document.writeln("<td>"+ arr[x].grade +"</td>");
		 	document.writeln("</tr>");
		 }
		 document.writeln("</table>");

	</script>
</body>
</html>