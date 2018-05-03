<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?PHP

if (isset($_POST['send'])){
  $to = 'email@email.com';
  $subject ='Walk Up Assistance';
  $Name = 'Name: ' . $_POST['Name'];
  $Category = 'Category: ' . $_POST['helpCategory'];
  $COM = 'Comments: ' . $_POST['Comments'];
  $success = mail($to, $subject, "$Name\r\n$Category\r\n$COM\r\n");
  } ?>
  <!DOCTYPE html>
  <html>
  <body>

  <div id="header2"></div>
  <h1  id= "mainTitle2"> Service Desk Portal </h1>
<?php if (isset($success) && $success) { ?>
<div class="alert alert-success" role="alert" id="messageAlert">
<h1 class="alert-heading" style="text-align:left";>Thank you </h1>
<hr>
<?php echo "Thank you, a Help Desk Associate will be right with you.;" ?></div>
<div id="formButton">
<button onClick="window.location='http://localhost/test/';" class="btn btn-primary" type="submit" id="restart">I am done!</button></div>
<?php } else { ?>
<div class="alert alert-error" role="alert">
<h1 class="alert-heading">Oops!</h1>
<hr>
<p>Sorry, there was a problem!</p>
<?php } ?>
<div id="formButton">
<button onClick="window.location='http://localhost/test/';" class="btn btn-primary" type="submit" id="restart">Try again</button></div></div>
</body
</html>
