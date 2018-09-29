<?php
// Include config file
require_once "load_data.php";

// Define variables and initialize with empty values
$brand_id = $brand_name = $product_id = $product_name  "";
$brand_id_err = $brand_name_err = $product_id_err = $product_name_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_brand_id= trim($_POST["brand_id"]);
    if(empty($input_brand_id)){
        $brand_id_err = "Please enter a valid";
    } else{
        $brand_id = $input_id_name;
    }
    $input_brand_name = trim($_POST["brand_name"]);
    if(empty($input_brand_name)){
        $brand_name_err = "Please enter a valid";
    } else{
        $brand_name = $input_brand_name;
    }
    $input_product_id = trim($_POST["product_id"]);
    if(empty($input_product_id)){
        $product_id_err = "Please enter a valid";
    } else{
        $product_id = $input_product_id;
    }
    $input_product_name = trim($_POST["product_name"]);
    if(empty($input_product_name)){
        $product_name_err = "Please enter a valid";
    } else{
        $product_name = $input_product_name;
    }

    // Check input errors before inserting in database
    if(empty($brand_id_err) && empty($brand_name_err) && empty($product_id_err)&& empty($product_name_err) ){
        // Prepare an insert statement
        $sql = "INSERT INTO brand (brand_id,brand_name) VALUES (?, ?)";
        if(empty($brand_id_err) && empty($brand_name_err) && empty($product_id_err)&& empty($product_name_err) ){
            // Prepare an insert statement
            $sql = "INSERT INTO product ( product_id, product_name , brand_id) VALUES (?, ? , ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "test", $param_brand_id, $param_brand_name, $param_product_id , $param_product_name);

            // Set parameters
            $param_brand_id = $brand_id;
             $param_brand_name = $brand_name;
             $param_product_id = $product_id
              $param_product_name = $product_name

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: load_data_select.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                            <span class="help-block"><?php echo $salary_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
