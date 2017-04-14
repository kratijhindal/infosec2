//deda dddrf
$(document).ready(function(){
		$("button").click(function(){
				//$("div").load("my.css #file1")
				//$.get("phppost.php",function(data){
				//	alert(data)
				//});
				var inputData = $("input").val();
				 $.post("phppost.php",{inputValue:inputData},function(data){
					 $("div").html(data);
				 });
		});
	
});