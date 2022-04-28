<html>
<head>
<meta charset="utf-8">
<title>Exercise 2</title>
</head>
<body>
<h1>Exercise 2: Quiz.</h1>
<div id="QuizDIV" style="display:<?php if(!isset($_POST['submit'])) echo 'true'; else echo 'none';  ?>">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<p>Question 1: Delhi city is located in<br>
<input type="radio" id="Q1Op1" name="Q1Op" value="Nepal">
<label for="Q1Op1L">Nepal</label><br>
<input type="radio" id="Q1Op2" name="Q1Op" value="Pakistan">
<label for="Q1Op2L">Pakistan</label><br>
<input type="radio" id="Q1Op3" name="Q1Op" value="India">
<label for="Q1Op3L">India</label><br>
<input type="radio" id="Q1Op4" name="Q1Op" value="Sri lanka">
<label for="Q1Op4L">Sri lanka</label>

<p>Question 2: Which country has highest number of languages<br>
<input type="radio" id="Q2Op1" name="Q2Op" value="Nigeria">
<label for="Q2Op1L">Nigeria</label><br>
<input type="radio" id="Q2Op2" name="Q2Op" value="Indonesia">
<label for="Q2Op2L">Indonesia</label><br>
<input type="radio" id="Q2Op3" name="Q2Op" value="India">
<label for="Q2Op3L">India</label><br>
<input type="radio" id="Q2Op4" name="Q2Op" value="Papua New Guinea">
<label for="Q2Op4L">Papua New Guinea</label>

<p>Question 3: country With The Highest Recorded Snowfall in the 21st Century<br>
<input type="radio" id="Q3Op1" name="Q3Op" value="Russia">
<label for="Q3Op1L">Russia</label><br>
<input type="radio" id="Q3Op2" name="Q3Op" value="United States">
<label for="Q3Op2L">United States</label><br>
<input type="radio" id="Q3Op3" name="Q3Op" value="Japan">
<label for="Q3Op3L">Japan</label><br>
<input type="radio" id="Q3Op4" name="Q3Op" value="Canadaa">
<label for="Q3Op4L">Canada</label>

<p>Question 4: Country With highest adult literacy rate<br>
<input type="radio" id="Q4Op1" name="Q4Op" value="Tajikistan">
<label for="Q4Op1L">Tajikistan</label><br>
<input type="radio" id="Q4Op2" name="Q4Op" value="Latvia">
<label for="Q4Op2L">Latvia</label><br>
<input type="radio" id="Q4Op3" name="Q4Op" value="Ukraine">
<label for="Q4Op3L">Ukraine</label><br>
<input type="radio" id="Q4Op4" name="Q4Op" value="Poland">
<label for="Q4Op4L">Poland</label>

<p>Question 5: Country with Best Quality of Life<br>
<input type="radio" id="Q5Op1" name="Q5Op" value="Denmark">
<label for="Q5Op1L">Denmark</label><br>
<input type="radio" id="Q5Op2" name="Q5Op" value="Canada">
<label for="Q5Op2L">Canada</label><br>
<input type="radio" id="Q5Op3" name="Q5Op" value="Sweden">
<label for="Q5Op3L">Sweden</label><br>
<input type="radio" id="Q5Op4" name="Q5Op" value="Switzerland">
<label for="Q5Op4L">Switzerland</label><br>
<p><input type="submit" name="submit" value="Submit">
</form>
</div>

<div id="QuizEvalDIV" style="display:<?php if(!isset($_POST['submit'])) echo 'none'; else echo 'true';  ?>">
<p>Question 1: Delhi city is located in<br>
<label>You answered:</label><?php echo $_POST["Q1Op"]; ?><br>
<label for="Q1CA">Correct answer:India</label><br>

<p>Question 2: Which country has highest number of languages<br>
<label>You answered:</label><?php echo $_POST["Q2Op"]; ?><br>
<label for="Q2CA">Correct answer:Papua New Guinea</label><br>

<p>Question 3: country With The Highest Recorded Snowfall in the 21st Century<br>
<label>You answered:</label><?php echo $_POST["Q3Op"]; ?><br>
<label for="Q3CA">Correct answer:Japan</label><br>

<p>Question 4: Country With highest adult literacy rate<br>
<label>You answered:</label><?php echo $_POST["Q4Op"]; ?><br>
<label for="Q4CA">Correct answer:Latvia</label><br>

<p>Question 5: Country with Best Quality of Life<br>
<label>You answered:</label><?php echo $_POST["Q5Op"]; ?><br>
<label for="Q5CA">Correct answer:Canada</label><br>
<p><label>Total correct answers:</label>
<?php 
$c=0;
if(strcmp($_POST["Q1Op"],"India")==0) $c=$c+1;
if(strcmp($_POST["Q2Op"],"Papua New Guinea")==0) $c=$c+1;
if(strcmp($_POST["Q3Op"],"Japan")==0) $c=$c+1;
if(strcmp($_POST["Q4Op"],"Latvia")==0) $c=$c+1;
if(strcmp($_POST["Q5Op"],"Canada")==0) $c=$c+1;
echo $c . "<br>score in a percent:" . (($c/5)*100)  ?><br>
</div>
</body>
</html>
