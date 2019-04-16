
        <?php
/*** check if a file was submitted ***/
if(!isset($_FILES['pic']))
    {
    echo '<p>Please select a file</p>';
    }
else
    {
    try    {
        upload();
        /*** give praise and thanks to the php gods ***/
      header('Location:demo.php');
        }
    catch(Exception $e)
        {
        echo '<h4>'.$e->getMessage().'</h4>';
        }
    }


function upload(){
/*** check if a file was uploaded ***/
if(is_uploaded_file($_FILES['pic']['tmp_name']) && getimagesize($_FILES['pic']['tmp_name']) != false)
    {
    /***  get the image info. ***/
    $size = getimagesize($_FILES['pic']['tmp_name']);
    /*** assign our variables ***/
    $type = $size['mime'];
    $imgfp = fopen($_FILES['pic']['tmp_name'], 'rb');
    $size = $size[3];
    $name = $_FILES['pic']['name'];
    $maxsize = 99999999;


    /***  check the file is less than the maximum file size ***/
    if($_FILES['pic']['size'] < $maxsize )
        {
        /*** connect to db ***/
       $dbh = new PDO("mysql:host=localhost;dbname=dummy", 'root', '');

                /*** set the error mode ***/
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            /*** our sql query ***/
        $stmt = $dbh->prepare("INSERT INTO volunteer (username,email,contact_no,adhaar_no,gender,Latitude,Longitude,Password,Confirm_password,pic)
 VALUES (? ,?,?,?,?, ?,?,?,?,?)");

        /*** bind the params ***/
        $stmt->bindParam(1, $_POST['usrname']);
        $stmt->bindParam(2, $_POST['email']);
        $stmt->bindParam(3, $_POST['cno']);
        $stmt->bindParam(4, $_POST['adhaar']);
        $stmt->bindParam(5, $_POST['gen']);
         $stmt->bindParam(6, $_POST['lat']);
        $stmt->bindParam(7, $_POST['lon']);
        $stmt->bindParam(8, $_POST['pass']);
        $stmt->bindParam(9, $_POST['rpass']);
        $stmt->bindParam(10, $imgfp, PDO::PARAM_LOB);
        
    /*** execute the query ***/
        $stmt->execute();
        }
    else
        {
        /*** throw an exception is image is not of type ***/
        throw new Exception("File Size Error");
        }
    }
else
    {
    // if the file is not less than the maximum allowed, print an error
    throw new Exception("Unsupported Image Format!");
    }
}
?> 

