<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Exercise 2</title>
</head>
<body>
<h1>Exercise 2: Quiz.</h1>
<div id="QuizEvalDIV" style="display:true">
    <p>Question 1: Delhi city is located in<br>
        <label>You answered:</label><?php echo $_POST["Q1Op"] ?? null; ?><br>
          <label for="Q1CA">Correct answer:India</label><br>

        <p>Question 2: Which country has highest number of languages<br>
          <label>You answered:</label><?php echo $_POST["Q2Op"] ?? null; ?><br>
          <label for="Q2CA">Correct answer:Papua New Guinea</label><br>

        <p>Question 3: country With The Highest Recorded Snowfall in the 21st Century<br>
          <label>You answered:</label><?php echo $_POST["Q3Op"] ?? null; ?><br>
          <label for="Q3CA">Correct answer:Japan</label><br>
    
        <p>Question 4: Country With highest adult literacy rate<br>
          <label>You answered:</label><?php echo $_POST["Q4Op"] ?? null; ?><br>
          <label for="Q4CA">Correct answer:Latvia</label><br>
    
        <p>Question 5: Country with Best Quality of Life<br>
          <label>You answered:</label><?php echo $_POST["Q5Op"] ?? null; ?><br>
          <label for="Q5CA">Correct answer:Canada</label><br>
        <p><label>Total correct answers:</label>
        <?php 
        $c=0;
        if(strcmp($_POST["Q1Op"] ?? null,"India")==0) $c=$c+1;
        if(strcmp($_POST["Q2Op"] ?? null,"Papua New Guinea")==0) $c=$c+1;
        if(strcmp($_POST["Q3Op"] ?? null,"Japan")==0) $c=$c+1;
        if(strcmp($_POST["Q4Op"] ?? null,"Latvia")==0) $c=$c+1;
        if(strcmp($_POST["Q5Op"] ?? null,"Canada")==0) $c=$c+1;
        echo $c . "<br>score in a percent:" . (($c/5)*100)  ?><br>
</div>
</body>
</html>
