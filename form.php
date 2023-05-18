 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP submit form</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<!--php--submit-form get post method-->
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Our First Form</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, suscipit?</p>
                <p> <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){ ?>
                    First name: <?php echo $_REQUEST['fname']; ?> <br>
                    <?php } ?>
                    <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){ ?>
                    Last name: <?php echo $_REQUEST['lname']; ?> <br>
                    <?php } ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control mb-3" name="lname" id="lname">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<script src="js/bootstrap.bundle.js"></script>
</body>
</html>