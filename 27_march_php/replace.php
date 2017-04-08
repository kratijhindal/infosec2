<?php
$offset= 0;
 if(isset($_POST['text'])&& isset($_POST['search']) && isset($_POST['replace'])){
	 $text = $_POST['text'];
	 $search = $_POST['search'];
	 $replace = $_POST['replace'];
	 
	 $search_length =strlen($search);
	 
	 if(!empty($text) && !empty($search) && !empty($replace)){
		 while($strposition = strpos($text,$search,$offset)){
			 $offset = $strposition + $search_length;
			 //echo $offset;
			 $text = substr_replace($text,$replace,$strposition,$search_length);
		 }
		 echo $text;
	 }else
		 echo "there is a mistake";
 }
	
?>
<form action="replace.php" method="post">
	<textarea name="text" rows="5" cols="30"></textarea><br><br>
	Search:<input type="text"  name="search"><br><br>
	Replace:<input type="text"  name="replace"><br><br>
	<input type="submit" value="find and repace">
	
</form>