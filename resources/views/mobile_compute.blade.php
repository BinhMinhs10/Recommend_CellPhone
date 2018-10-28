<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<!-- css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<?php 
		$mobiles = array
	  	(
		  	array(86341.0625 ,135 ,3.9, 64, 1, 5.7, 2.1, 8, 1.2, 1 ,1450, 698),
		  	array(115758.15 , 170.1, 4.3, 32, 1, 3.1, 3, 8, 2.4, 1.5, 1620, 719),
		  	array(270216, 390, 8.2 ,32 ,1, 5.76, 2.1, 5, 3.2, 1.2 ,3960, 529.99),
		  	array(81884.005, 135, 4.65, 32, 1, 5.76 ,3 ,5, 4, 1.2, 1750, 725),
		  	array(75031.25, 110, 3.8 ,32 ,0.512 ,2.9, 3, 5, 2.4, 1, 1500, 359.99),
		  	array(71940, 90, 2.44, 32, 0.512, 3.1, 2.1 ,5 ,7, 0.8 ,1000, 479.99),
		  	array(62781.696, 140, 3.5, 64, 0.512, 5.8, 4, 8, 5, 1, 1432, 870),
		  	array(68512.5, 117, 4.2, 32, 0.512, 5.8, 2.1, 8, 2.4, 1.4, 1500, 420),
		  	array(80638.65, 141.8, 4, 32, 0.512, 5.76, 2.1, 8, 2.2, 1, 1500, 529),
		  	array(115584, 130, 4.3, 32, 0.512, 7.2, 2.1, 5, 2.2, 1, 1280, 679.99),
	  	);
	  	$lamda = array(0.0606,0.0606,0.0771,0.0606,0.0707,0.0707,0.0659,0.1197,0.1197,0.0707,0.0897,0.134);
	?>

	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<th>Dimensions</th>
				<th>Weight</th>
				<th>Screen Size</th>	
				<th>Memory</th>	
				<th>RAM</th>	
				<th>Speed</th>	
				<th>Blue Tooth</th>	
				<th>Camera</th>	
				<th>OS</th>	
				<th>CPU</th>	
				<th>Battery</th>	
				<th>Price</th>	
			</tr>
		</thead>
		<tbody>
			@foreach ($mobiles as $mobile)
				<tr>
					@for ( $j=0; $j < 12; $j++)
						<td>{{ $mobile[$j] }}</td>
					@endfor
					
				</tr>
			@endforeach
			
		</tbody>
	</table>

	<hr>
		<h1>Compute Entropy weight method</h1>
		<?php 
			
			
			
		?>
		
		<!-- compute p -->
		@for( $j=0 ; $j < 12; $j++)
			<?php  $sum = 0 ?>  
			@for( $i=0 ; $i < 10; $i++)
				<?php  $sum += $mobiles[$i][$j] ?> 
			@endfor
			<?php  $sumcol[] = $sum ?>  
		@endfor

		@foreach( $mobiles as $mobile)

			@for($j=0 ; $j < 12; $j++)
				<?php $pi[$j] = $mobile[$j] / $sumcol[$j];?>
			@endfor
			<?php $p[] = $pi  ?>
		@endforeach
		
		<?php $sum_d = 0 ?>
		<!-- compute ej  and dj -->
		@for( $j=0 ; $j < 12; $j++)
			<?php $ej[] = 0 ?>
			@for( $i=0 ; $i < 10; $i++)
				
				<?php $ej[$j] -= (1/log(10)) *  $p[$i][$j] * log($p[$i][$j]) ?> 
			@endfor  
			<?php $dj[$j] = 1 - $ej[$j]; 
				$sum_d += $dj[$j] 
			?>
		@endfor

		<!-- compute w -->
		@for ( $j=0; $j < 12; $j++)
			<?php $w[] =  $dj[$j] / $sum_d ?>
		@endfor
		
		<?php $sum_B = 0 ?>
		<!-- compute B -->
		@for( $j=0 ; $j < 12; $j++)
			<?php $B[] = $w[$j] * $lamda[$j] ; 
				$sum_B += $B[$j]
			?>
		@endfor
		@for( $j=0 ; $j < 12; $j++)
			<?php $B[$j] = $B[$j] / $sum_B	?>
		@endfor



		<table class="table table-bordered table-hover">
			<thead class="thead-dark">
				<tr>
					<th></th>
					<th>Dimensions</th>
					<th>Weight</th>
					<th>Screen Size</th>	
					<th>Memory</th>	
					<th>RAM</th>	
					<th>Speed</th>	
					<th>Blue Tooth</th>	
					<th>Camera</th>	
					<th>OS</th>	
					<th>CPU</th>	
					<th>Battery</th>	
					<th>Price</th>	
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<td>Ej</td>
					@for ( $j=0; $j < 12; $j++)
						<td>{{ $ej[$j] }}</td>
					@endfor
					
				</tr>
				<tr>
					<td>dj</td>
					@for ( $j=0; $j < 12; $j++)
						<td>{{ $dj[$j] }}</td>
					@endfor
					
				</tr>
				<tr>
					<td>wj</td>
					@for ( $j=0; $j < 12; $j++)
						<td>{{ $w[$j] }}</td>
					@endfor
					
				</tr>
				<tr>
					<td>lamda</td>
					@for ( $j=0; $j < 12; $j++)
						<td>{{ $lamda[$j] }}</td>
					@endfor
					
				</tr>
				<tr>
					<td>B</td>
					@for ( $j=0; $j < 12; $j++)
						<td>{{ $B[$j] }}</td>
					@endfor
					
				</tr>
				
			</tbody>
		</table>
	<hr>
	<hr>
	
	
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>