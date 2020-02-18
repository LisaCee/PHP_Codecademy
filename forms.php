<?php
function checkWord($input, $letter){
   if ($_SERVER["REQUEST_METHOD"] === "POST" && strtolower($input[0]) !== $letter) {
    return "* This word must start with the letter ${letter}!";
   } else {
     return "";
   }
}
?>
  
<h1>Time to Practice our ABCs</h1>
<form method="post" action="">
    Enter a word that starts with the letter "a":
    <br>
    <input type="text" name="a-word" id="a-word" value=<?= $_POST["a-word"];?>>
    <br>
    <p class="error" id="a-error"><?= checkWord($_POST["a-word"], "a");?></p>
    <br>
      
    Enter a word that starts with the letter "b":
    <br>
    <input type="text" id="b-word" name="b-word" value=<?= $_POST["b-word"];?>>
    <br>
    <p class="error" id="b-error"><?= checkWord($_POST["b-word"], "b");?></p>
    <br>
    Enter a word that starts with the letter "c":
    <br>
    <input type="text" id="c-word" name="c-word" value=<?= $_POST["c-word"];?>>
    <br>
    <p class="error" id="c-error"><?= checkWord($_POST["c-word"], "c");?></p>
    <br>
    <input type="submit" value="Submit Words">
</form>
<div>
    <h3>"a" is for: <?= $_POST["a-word"];?><h3>
    <h3>"b" is for: <?= $_POST["b-word"];?><h3>
    <h3>"c" is for: <?= $_POST["c-word"];?><h3>    
<div>  

<form method="post" action="">
Enter some HTML:
<br>
<input type="text" name="html">
<br>  
<input type="submit" value="Submit">
  
</form>
<div>
  You entered:
	<?= htmlspecialchars($_POST["html"]); ?> 
</div>  

<?php
$validation_error = "";
$user_answer = "";
$submission_response = "";

// Write your code here:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user_answer = filter_var($_POST["answer"], FILTER_SANITIZE_NUMBER_INT);
  
  if ($user_answer === "-5"){
    $submission_response = "Correct!";
  } else {
    $validation_error = "* Wrong answer. Try again.";
  }
}


?>
<h2>Time for a math quiz!</h2>
<form method="post" action="">
<h4>Question 1:</h4>  
<p>What is 6 - 11?</p> 
<input type="text" name="answer" id="answer" value="<?= $user_answer;?>">
<br>
<span class="error" id="error"><?= $validation_error;?></span> 
<br> 
<input type="submit" value="Submit Your Answer">
</form>
<div>
  <p id="answer-display">Your answer was: <?= $user_answer;?></p>
  <p id="submission-response"><?= $submission_response;?></p>
</div>