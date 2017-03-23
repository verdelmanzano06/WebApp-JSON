<html>
	<head>
		<title></title>
		<style type="text/css">
			table tr th {
				background-color: green;
				color: white;
			}
			table {
				text-align: center;
			}
			tr:nth-child(even) {
   				 background-color: beige;
			}
		</style>
	</head>
<body style="margin: 5%;">
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
		var jsonArr = JSON.parse('<?php echo $jsonSubs; ?>'); 

		jsonArr.push({"subject" : "Knowledge Work Software and Presentation Skills", "catalog" : "COMP", "code" : "101", "grade" : 2.00});
		jsonArr.push({"subject" : "Philippine History, Politics, Governance & Constitution", "catalog" : "PSCI", "code" : "101", "grade" : 2.25});
		jsonArr.push({"subject" : "Art Appreciation", "catalog" : "HUMA", "code" : "111", "grade" : 1.75});
		

		document.writeln("<table border='border-collapse' cellpadding='10' border-collapse");
	 	document.writeln("<tr><th>SUBJECT</th><th>SUBJECT CATALOG</th><th>SUBJECT CODE</th></th><th>GRADE</th></tr>");
	 	for(x = 0; jsonArr.length > 0; x++){
	 		document.writeln("<tr>");
		 	document.writeln("<td>"+ jsonArr[x].subject +"</td>");
		 	document.writeln("<td>"+ jsonArr[x].catalog +"</td>");
		 	document.writeln("<td>"+ jsonArr[x].code +"</td>");
		 	document.writeln("<td>"+ jsonArr[x].grade +"</td>");
		 	document.writeln("</tr>");
		 }
		 document.writeln("</table>");

	</script>
</body>
</html>