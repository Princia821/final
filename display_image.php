<html> 
<head> 
    <title> Display kids information </title> 
    <style>
        body{
            background-color: lightblue;
        }
    </style> 

</head>
<body> 
    <center> 
        <form action = "" method = "POST" enctype = "multipart/form-data">
            <table width="50%" border ="1" cellpadding ="5" cellpacing ="5"> 
                <thead> 
                    <tr> 
                        <th> image </th>
                        <th> name </th>
                        <th> age </th> 
                        <th> status </th> 
                        <th> origin </th> 
                    </tr>
                </thead>  

<?php
$connection = mysqli_connect("localhost", "root", "", "webfinal");
$db = mysqli_select_db($connection,'webfinal');

$query = " SELECT * FROM 'foakids' "
$query_run = mysqli_query($connection, $query); 

while ($row = mysqli_fetch_array($query_run))
{
    ?> 

    <tr> 
        <td> <?php echo '<img src = "data:image;base64,'.base64_encode($row['image']).'" alt = "Image" style = "width: 100px; height: 100px; >'; ?>  </td> 
        <td> <?php echo $row['name']; ?>  </td>
        <td>  <?php echo$row['age']; ?>   </td> 
        <td>  <?php echo$row['status']; ?>   </td> 
        <td>  <?php echo$row['origin']; ?>   </td>   
    </tr>   
<?php 
}
?>

</table>
</form> 
</center> 
</body>
</html> 


