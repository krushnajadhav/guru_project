<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    include('connection.php');
 
    $regNo = isset($_POST['reg_no']) ? $_POST['reg_no'] : '';
    $regDate = isset($_POST['reg_date']) ? $_POST['reg_date'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';

    $regNo = $conn->real_escape_string($regNo);
    $regDate = $conn->real_escape_string($regDate);
    $dob = $conn->real_escape_string($dob);

    // Perform further validation if needed
    $errors = array();

    // Validate registration number
    if (empty($regNo)) {
        $errors[] = "Registration Number is required";
    }

    // Validate registration date
    if (empty($regDate)) {
        $errors[] = "Registration Date is required";
    }

    // Validate date of birth
    if (empty($dob)) {
        $errors[] = "Date of Birth is required";
    }

    // If there are errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo "<p><a href='javascript:history.go(-1)'>Go back and fix errors</a></p>";
    } 
    else 
    {

        $sql = "SELECT * FROM candidate_details WHERE reg_no = '$regNo' AND reg_date = '$regDate' AND dob = '$dob'";

        // Execute the query
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            // Fetch the record
            $record = $result->fetch_assoc();
            // Collect the image path
            $extensions = ['jpg', 'JPEG', 'png', 'gif', 'bmp'];

            // Initialize image path
            $imagePath = '';
        
            // Check for each extension
            foreach ($extensions as $ext) 
            {
                $path = 'assets/doc/' . $regNo . '.' . $ext;
                if (file_exists($path)) {
                    $imagePath = $path;
                    break;
                }
            }
        
        ?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Doctors Details</title>

        </head>
       
        <body>
            
            <?php include("header.php"); ?>
        
            <div class="row ">
                <div class="col-lg-3 " >
                    <div class="sidebar" style="width:15%; background-color: #E5E5E5;padding-left: 18px">
                        <?php include("sidebar.php"); ?>
                    </div>
                </div>

            <div class="col-lg-9">
                <div class="container text-center" style="background-color: white; padding: 50px;">
                    <div class="container">
                        <li style="color: Orange; font-size: 30px; font-style: italic; font-weight: bold;">
                            <i>Candidate Details</i>
                        </li>
                        <hr>

                        <div>
                            <?php if ($imagePath): ?>
                                <img src="<?php echo htmlspecialchars($imagePath); ?>" id="printImage" alt="Candidate Image" style="max-width: 50%; height: 50%;">
                            <?php else: ?>
                                <p>No image available for this candidate.</p>
                            <?php endif; ?>

                            <!-- Display other details from $record -->
                            <p><strong>Registration No:</strong> <?php echo htmlspecialchars($record['reg_no']); ?></p>
                            <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($record['dob']); ?></p>
                            <button class="btn btn-primary print-button" onclick="downloadImage();">Print Document</button>
                            <!-- Add more details as necessary -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        </body>
        <script>
        function downloadImage() {
            var img = document.getElementById('printImage');
            var imgSrc = img.src;
            var link = document.createElement('a');
            link.href = imgSrc;
            link.download = 'candidate-image.jpg'; // Set default filename
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>
        </html>
        
        <?php
        } else {
            echo "No records found.";
        }
    }
} 
else 
{
    // If accessed directly without form submission
    echo "<h2>Error: Invalid Access</h2>";
    echo "<p>Please submit the form from the previous page.</p>";
}
?>

