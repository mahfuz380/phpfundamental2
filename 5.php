<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
echo rand(1,100);
echo "<br>";
$str = "lfjljsflsjflsjflsjfsljf";
$valuLength = strlen($str);
echo $valuLength;
echo "<br>";

$values = ['sjfljslf',456, 'dldjfldjf',$str];
$name = in_array($str, $values);
if($name){
    echo "Found";
}else{
    echo "nothing found";
}
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>