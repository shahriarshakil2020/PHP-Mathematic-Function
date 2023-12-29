<?php
if (isset($_POST['sub123']) && $_SERVER['REQUEST_METHOD'] == "POST");
$name = $_POST['name'];
  if (empty ($name)) {
    $errName = " name is required";
  } elseif (!preg_match("/^[a-zA-Z0-9]+$/", $name)) {
    $errName = " name can only contain letters and numbers";
  }
?>



<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form php</title>
    <!-- bootstrap 5.3.1 css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="<KEY>" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-6 m-auto border rounded shadow p-4">
                <form action="" method="post">
                    <div class="mb-3">
                        <div class="mb-3 form-floating">
                            <input type="text" placeholder="your name" name="name" class="control <?= isset($errName) ? 'is-invalid': null?>" value="<? $name ?? null ?>">
                            <label for="" class=""></label>
                            <div class="invalid-feedback">
                                 <?= $errName?>
                            </div>
                            <div class="valid-feedback">

                            </div>
                        </div>


                        <div class="mb-3">
                            
                        </div>
                        <input type="submit" class="btn btn-dark btn-small" name="sub123">
                </form>

            </div>
        </div>
    </div>

<!-- bootstrap 5.1.3 js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
</body>
</html>