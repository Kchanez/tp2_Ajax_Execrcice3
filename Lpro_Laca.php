<?php 
	require_once 'Cnx.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Licence proféssionelle ou Académique</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    </head>
    <style type="text/css">
    	 .Sous_container 
		{
			display: flex;
		}
    	.Sous_container > #list
		{
			display: flex; 
			width: 50%; 
			font-size: 15px;
		}
		.Sous_container > #show 
		{ 
			display: flex;
			width: 50%;  
			text-align: center;
			align-items: center;
		}

    </style>
<body>
	<div class="container">
		<?php include_once 'header.php'; ?>
		<div class="Sous_container">
			<div class="mb-3" id="list">
				<ul>
					<li id="LP">
						Licence professionnelle
					</li>
					<br>
					<li id="LA">
						 Licence académique
					</li>
				</ul>			  
			</div >
			<div id="show">				
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
	<script>
		$(document).ready(function()
		{
			$("li").mouseenter(function()
			{
				//let Licence = $(this).val();
				let Licence = $(this).attr("id");				
					$.ajax ({
						url: "Licence_Pro_Aca.php",
						method: "post",	
						data: {
							Licence:Licence
						},
						success: function(data)
						{	
							$("#show").fadeIn().html(data);
							//$("#show").html(data);
							$("#LP").click(function ()
							{
						        $("#show")
						            .css("border", "1px solid #000")
						            .fadeIn()
						            .html(data);  
						    });	

						    $("#LA").click(function () 	
						    {
						        $("#show")
						            .css("border", "1px solid #000")
						            .fadeIn()
						            .html(data);    
						    });


						    $("#LP").mouseleave(function ()
						    {
						    	$("#show").hide();
						    }); 


						    $("#LA").mouseleave(function ()
						    {
						    	$("#show").hide();
						    });  
						}	
					});
				//}
			});
		});
    </script>
</body>
</html>