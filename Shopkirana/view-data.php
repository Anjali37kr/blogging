<?php 

require "db-connection.php";

$sel=mysqli_query($con, "select * from registration");
$num_row=mysqli_num_rows($sel);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>All Records</title>
 	<style type="text/css">
 		table
 		{
 			border: 2px solid red;
            width: 500px;
            line-height: 30px;
            margin: 20px auto;


 		}
        table <tr>
        {
             border-bottom: 2px;

        }
        table tbody tr td
        {
            text-align: center;
        }
 	</style>
 </head>
 <body>
 	<table border="1">
 			<caption><h1>DATA OF PATNA SEO</h1></caption>
 			<thead>
 				<tr>
                    <th> SL# </th>
 					<th>Name</th>
 					<th>Mobile No.</th>
                    <th>Action</th>
 				</tr>	
 			</thead>
 			<tbody>
 				<?php 
                    $i=1;
                    while ($i<=$num_row) 
                    {  
                        $row=mysqli_fetch_array($sel);
                ?>   
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td> <?php echo $row['name'] ?> </td>
                            <td> <?php echo $row['mobile'] ?> </td>
                            <td><button onclick="deleteData(<?php echo $row['id']; ?>)">Delete</button></td>
                        </tr> 
                <?php
                $i++ ; 
                    }
                ?>   
 			</tbody>
 		</table>
        <script type="text/javascript">
            function deleteData(ids)
            {
                var insert=confirm("Are You Sure");
                if(insert)
                {
                    window.location='delete-data.php?stud_id='+ids;

                }
            }
        </script>
 	
 </body>
 </html>