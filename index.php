<?php
include 'db.php';


$sql = "SELECT * FROM profiles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $age = $row['age'];
    $dob = $row['date_of_birth'];
    $ic = $row['id_number'];
    $phone = $row['mobile_number'];
    $email = $row['email_address'];
    $snumber = $row['stud_number'];
    $gender = $row['gender'];
    $religion = $row['religion'];
    $imagePath = $row['profile_photo_path'];
    // Fetch other fields similarly
} else {
    echo "No data found.";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style> 
            .container{
                
            }</style>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Nik's Profile</title>
      </head>
<div class="container" style=" width: 200px; margin-left: 0%; padding: 0px; margin-top: 0px;>
      
							  
							  <div id="home style=" width: 500px; margin-left: 50%; padding: 50px; margin-top: px;">  
        <header>        
            <nav>
                
            </nav>
        </header>
    </div><br>

                  <div id="bio" style="#e6e6e6 width: 200px; border: 1px; margin-left: 10%; margin-right: 40%; padding: 50px; margin-top: 0px; border-radius: 20px 20px 20px 0px; ">
                      <h2> Biodata</h2>    
                      <ol><?php echo $name; ?>
                      </ol>
                      <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <?php echo $dob; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <?php echo $age; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Gender:</strong> <?php echo $gender; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Religion:</strong> <?php echo $religion; ?></li>
                  
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <?php echo $phone; ?></li>    
                <li><i class="bi bi-chevron-right"></i> <strong>IC Number:</strong> <?php echo $ic; ?></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Student Number:</strong> <?php echo $snumber; ?></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <?php echo $email; ?></li>
                                   
                </ul>
              </div>
					  <img src="Adaku_Ijeomah.jpg" alt="Adaku Ijeomah" Width="327" height="385";>
                    </div>
</div>
 
                   
        </div>
</div>
 

  
	<script src="js/script.js"></script>
	</div>     
    </body>
</html>
