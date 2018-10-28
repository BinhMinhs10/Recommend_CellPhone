<h1 class="text-md-center ">Tư vấn</h1>
<hr>
<form action="recommend" method="post">
	@csrf
	<input style="width: 100%" class="btn btn-success" type="submit" value="Tư vấn điện thoại">
	<hr>
	<button style="width: 100%;" class="btn btn-info" type="button" data-toggle="collapse" data-target="#manhinh" aria-expanded="false" aria-controls="manhinh">
		<h5>Kích thước màn hình <i class="fa fa-toggle-down"></i></h5>
	</button>
	<div class="cont collapse multi-collapse" id="manhinh">
		<div class="stars">
		  	<input class="star star-5" value="5" id="star-5" type="radio" name="screen_size"/>
		  	<label class="star star-5" for="star-5"></label>
			<input class="star star-4" value="4" id="star-4" type="radio" name="screen_size"/>
			<label class="star star-4" for="star-4"></label>
			<input class="star star-3" value="3" id="star-3" type="radio" name="screen_size"/>
			<label class="star star-3" for="star-3"></label>
			<input class="star star-2"  value="2"id="star-2" type="radio" name="screen_size"/>
			<label class="star star-2" for="star-2"></label>
			<input class="star star-1"  value="1" id="star-1" type="radio" name="screen_size"/>
			<label class="star star-1" for="star-1"></label>
		</div>
		  <p>click the stars (degree interest)</p>
	</div>
	


	<button style="width: 100%;" class=" btn btn-info" type="button" data-toggle="collapse" data-target="#camera_back" aria-expanded="false" aria-controls="camera_back">
		<h5>Độ phân giải camera sau <i class="fa fa-toggle-down"></i></h5>
	</button>
	<div class="cont collapse multi-collapse" id="camera_back">
		<div class="stars">
		  	<input class="star star-5" value="5" id="star-5-2" type="radio" name="camera_back"/>
		  	<label class="star star-5" for="star-5-2"></label>
			<input class="star star-4" value="4" id="star-4-2" type="radio" name="camera_back"/>
			<label class="star star-4" for="star-4-2"></label>
			<input class="star star-3" value="3" id="star-3-2" type="radio" name="camera_back"/>
			<label class="star star-3" for="star-3-2"></label>
			<input class="star star-2"  value="2"id="star-2-2" type="radio" name="camera_back"/>
			<label class="star star-2" for="star-2-2"></label>
			<input class="star star-1"  value="1" id="star-1-2" type="radio" name="camera_back"/>
			<label class="star star-1" for="star-1-2"></label>
		</div>
		  <p>click the stars (degree interest)</p>
	</div>

	<button style="width: 100%;" class=" btn btn-info" type="button" data-toggle="collapse" data-target="#camera_before" aria-expanded="false" aria-controls="camera_before">
		<h5>Độ phân giải camera trước <i class="fa fa-toggle-down"></i></h5>
	</button>
	<div class="cont collapse multi-collapse" id="camera_before">
		<div class="stars">
		  	<input class="star star-5" value="5" id="star-5-3" type="radio" name="camera_before"/>
		  	<label class="star star-5" for="star-5-3"></label>
			<input class="star star-4" value="4" id="star-4-3" type="radio" name="camera_before"/>
			<label class="star star-4" for="star-4-3"></label>
			<input class="star star-3" value="3" id="star-3-3" type="radio" name="camera_before"/>
			<label class="star star-3" for="star-3-3"></label>
			<input class="star star-2"  value="2"id="star-2-3" type="radio" name="camera_before"/>
			<label class="star star-2" for="star-2-3"></label>
			<input class="star star-1"  value="1" id="star-1-3" type="radio" name="camera_before"/>
			<label class="star star-1" for="star-1-3"></label>
		</div>
		  <p>click the stars (degree interest)</p>
	</div>
	
	<button style="width: 100%;" class=" btn btn-info" type="button" data-toggle="collapse" data-target="#cpu" aria-expanded="false" aria-controls="cpu">
		<h5>Tấc độ CPU <i class="fa fa-toggle-down"></i></h5>
	</button>
	<div class="cont collapse multi-collapse" id="cpu">
		<div class="stars">
		  	<input class="star star-5" value="5" id="star-5-4" type="radio" name="CPU"/>
		  	<label class="star star-5" for="star-5-4"></label>
			<input class="star star-4" value="4" id="star-4-4" type="radio" name="CPU"/>
			<label class="star star-4" for="star-4-4"></label>
			<input class="star star-3" value="3" id="star-3-4" type="radio" name="CPU"/>
			<label class="star star-3" for="star-3-4"></label>
			<input class="star star-2"  value="2"id="star-2-4" type="radio" name="CPU"/>
			<label class="star star-2" for="star-2-4"></label>
			<input class="star star-1"  value="1" id="star-1-4" type="radio" name="CPU"/>
			<label class="star star-1" for="star-1-4"></label>
		</div>
		  <p>click the stars (degree interest)</p>
	</div>

	<button style="width: 100%;" class=" btn btn-info" type="button" data-toggle="collapse" data-target="#battery" aria-expanded="false" aria-controls="battery">
		<h5>Dung lượng Pin <i class="fa fa-toggle-down"></i></h5>
	</button>
	<div class="cont collapse multi-collapse" id="battery">
		<div class="stars">
		  	<input class="star star-5" value="5" id="star-5-5" type="radio" name="battery"/>
		  	<label class="star star-5" for="star-5-5"></label>
			<input class="star star-4" value="4" id="star-4-5" type="radio" name="battery"/>
			<label class="star star-4" for="star-4-5"></label>
			<input class="star star-3" value="3" id="star-3-5" type="radio" name="battery"/>
			<label class="star star-3" for="star-3-5"></label>
			<input class="star star-2"  value="2"id="star-2-5" type="radio" name="battery"/>
			<label class="star star-2" for="star-2-5"></label>
			<input class="star star-1"  value="1" id="star-1-5" type="radio" name="battery"/>
			<label class="star star-1" for="star-1-5"></label>
		</div>
		  <p>click the stars (degree interest)</p>
	</div>


</form>