<?php
if(isset($_POST['sub'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$ans=$num1+$num2;
	else if($oprnd=="-")
		$ans=$num1-$num2;
	else if($oprnd=="x")
		$ans=$num1*$num2;
	else if($oprnd=="/")
		$ans=$num1/$num2;
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section class="container-fluid">
        <div class="row ">
            <div class="col-md-6 mx-auto p-5">
                <div class="card">
                    <div class="card-header">Calculator</div>
                    <form method="post" action="">
                    <div class="card-body">
                        <input type="number" class="form-control" value="<?php echo $ans;?>" placeholder="Result"><br>
                        <div class="operator">
                            <input type="submit" name="sub" value="+">
                            <input type="submit" name="sub" value="-">
                            <input type="submit" name="sub" value="x">
                            <input type="submit" name="sub" value="/">
                    
                        </div><br>
                        <input type="number" class="form-control" name="num1" value="" placeholder="1st number"><br>
                        <input type="number" class="form-control" name="num2" value="" placeholder="2nd number"><br>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>