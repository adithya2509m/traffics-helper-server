var input=document.getElementById("search-box").value;
<html>
<head>
<TITLE>jQuery AJAX Autocomplete - Country Example</TITLE>
<head>
<style>
body{width:610px;}
.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list{float:left;list-style:none;margin:0;padding:0;width:190px;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}
#search-box{padding: 10px;border: #F0F0F0 1px solid;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});

	$("#change").click(function(){
		$.ajax({
			type: "POST",
			url: "sendValue.php",
			data:{road:$("#search-box").val(),vehicle:$("#vehicle-no").val()},
			success: function(data){
				$("#vehicle-no").html(data);
			}
		});
	});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}

function send(){
var road=document.getElementById("search-box").value;
var vehicle=document.getElementById("vehicle-no").value;
}

</script>
</head>
<body>
<div class="frmSearch">
<input type="text" id="search-box" placeholder="Road Name" />
<div id="suggesstion-box"></div>
<br>
<input type="text" id="vehicle-no" placeholder="Vehicle No">
<br>
<br>
<input type="button" id="submit" value="Change">
</div>
</body>
</html>
