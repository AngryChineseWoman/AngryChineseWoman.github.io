<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form - Young Adult Literature</title>
  <meta name="description" content="A page to submit suggestions for future authors to discuss.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">

</head>

  <body>
  

	<div class="wrapper">
		<header class="banner">
   		<h1>Young Adult Literature</h1>
   		
    	<img class="fiction" src="images/fiction1.jpg" alt="fictionsign" width="450" height="400">   		
 
 
		</header> <!-- end of header -->

 		<nav class="primary-menu">
		<?php include('includes/navigation.php');?>
		</nav>

		<div class="content-wrapper">

		<main>

		<h2>Suggest an Author</h2>

<img class="ballot" src="images/ballot.jpg" alt="ballot box" width="200" height="200">

<p>I would love to hear from you and learn about your favorite author(s). My goal is to try and 
have a different author highlighted every month and this is a way for you to help choose who future
authors will be. With so many great writers contributing to amazing books, I can't
keep up with all of them. Fill out the form on the side and point me to a new favorite!
</p>
<p>
If you do submit a name, make sure to add a little information about yourself and why you like
this author. It helps me get to know more about the visitors to my site, and give me some
insight about what directions to take it in in the future. Thanks!
</p>


        </main>  <!-- end of main -->

        <aside class="sidebar">

		<h2>Form</h2>
<?php print $formMessage;?>


<p>Tell me a little about yourself. 
</p>


		<form class="food-form" method="post">

		<label for="name">Name</label>
		<input type="text" id="name" name="name">

		<label for="email">Email</label>
		<input type="text" id="email" name="email">
 
 
		<fieldset>

        <legend>Parent of a reader? Or the Reader?</legend>
 
        <label>Parent <input type="radio" name="parent" value="Parent"></label>      

        <label>Reader<input type="radio" name="type" value="Reader"></label>

</fieldset> <!-- end of radiobuttons -->
 
		<fieldset>

        <legend>What kinds of books do you/your reader enjoy?</legend>
       
        <input type="checkbox" name="genre[]" value="Fantasy"><label>Fantasy/SciFi </label>
               
       
        <input type="checkbox" name="genre[]" value="HisFic"><label>Historical Fiction </label>
               
       
        <input type="checkbox" name="genre[]" value="Nonfiction"><label>Non Fiction </label>
  
        
        <input type="checkbox" name="genre[]" value="Graphix"><label>Graphic Novels</label>


        <input type="checkbox" name="genre[]" value="All"><label>All of them!</label>

</fieldset> <!-- end of checkbox -->
 
<label for="author">Author Name</label>
<input type="text" id="author" name="author">

<p></p>
       
<label for="comments">Why did you pick this author?</label>
<textarea name="comments" id="comments"></textarea>

<input type="submit" value="Submit form">


</form>  <!-- end of form -->

        </aside> <!-- end of aside -->


</div> <!-- end of content-wrapper -->

<a href="#">Back to Top</a>

<div class="container">

	<div class="one">Fantasy</div>
	<div class="two">Historical Fiction</div>
	<div class="three">SciFi</div>
	<div class="four">Mystery</div>
	<div class="five">Sports</div>
   

</div> <!-- end of container div -->

	<footer class="site-footer">
<?php include('includes/footer.php');?>

	</footer>

	</div> <!-- end of wrapper -->
	
   </body>
</html>