<html>
<head>
    <title> Dashboard </title>  
</head>
    <body style="background:url(1.jpg);background-repeat:no-repeat;background-size:100% 100%">
    <div class="login-box">
			
           <h1 style="text-align:center;">Post Your Blog</h1>
           <form method="post">
            
            <p>Name: 	<input type="text" name="name"  placeholder="enter your name" >
			
			Phone: 	<input type="text" name="phone"  placeholder="enter your phone">   

			Category: <input type="text" name="category" placeholder="enter category of blog"></p>			

		   <p>Blog:</p> <textarea id="blog" name="blog" rows="25" cols="160">Enter Your Blog Here</textarea>
		
			<p>Email:	<input type="text" name="email"  placeholder="enter your email">
			
			Working:	<input type="text" name="working" placeholder="currently working at">
			
			Instagram: <input type="text" name="instagram" placeholder="instagram">

			Linkedin: <input type="text" name="linkedin" placeholder="linkedin"></p>
   
            <input type="submit" name="submit" color="blue" value="post"></a>
			    </form>
       
        </div>
    
    </body>
</html>
<?php
	require 'connection.php';
	$name=filter_input(INPUT_POST,'name');
	$phone=filter_input(INPUT_POST,'phone');
	$category=filter_input(INPUT_POST,'category');
	@$blog=$_POST['blog'];
	$email=filter_input(INPUT_POST,'email');
	$working=filter_input(INPUT_POST,'working');
	$instagram=filter_input(INPUT_POST,'instagram');
	$linkedin=filter_input(INPUT_POST,'linkedin');

$query="insert into tiao(name,phone,email,working,linkedin,instagram,blog,category) values ('$name','$phone','$email','$working','$linkedin','$instagram','$blog','$category')";
if(!empty($_POST['submit']))
{
if ($conn->query($query))
{
header("Location:done.html");
}
}
?>