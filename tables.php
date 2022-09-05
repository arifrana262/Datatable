<?php
include_once './config/db.php';
$sql = "SELECT * FROM persons";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- datatable css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> </link>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Data Table</title>
</head>
<body>
    <div class="container" style="margin:30px;">
    <table id="mytable" class="table table-striped">
             <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <!-- <th>Last Name </th> -->
                        <th>District</th>
                        <th>Post Code</th>
                    </tr>
             </thead>
                 
             <tbody>
                    <?php 
                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["CustomerID"] ?></th>
                        <td><?php echo $row["FirstName"] . " " . $row["LastName"] ?> </td>
                        <!-- <td><?php echo $row["LastName"] ?></td> -->
                        <td><?php echo $row["DistrictName"] ?></td>
                        <td><?php echo $row["PostCode"] ?></td>
                    </tr>
                     <?php }} ?>

             </tbody>
                <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <!-- <th>Last Name </th> -->
                            <th>District</th>
                            <th>Post Code</th>
                        </tr>
                </tfoot>

    </table>
</div>
</body>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<!-- Datatable cdn -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!-- JS to start  -->
<script> $(document).ready(function () {
      $('#mytable').DataTable();
      }); 
</script>
</html>