

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fabric</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- Bootstrap core CSS -->
       <link href="css/bootstrap.min.css" rel="stylesheet">
	   <!-- <link href="css/croppr.min.css" rel="stylesheet"/> -->
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
		<style>
			main{
				min-height:80vh;
			}
			.hidden{
				display:none;
			}
			.pattren_img{
				width:500px;
				height:500px;
				background-repeat:no-repeat;
				background-size:500px 500px;
			}
			.result{

			}
		</style>
</head>
    
<body class="">
<nav class="navbar navbar-expand-sm navbar-dark bg-cutom mb-3">
        <div class="container">
            <a class="navbar-brand top-logo" href="/">CSI FABRIC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                      
                        <!-- 
                        <li class="nav-item">
                            <a href="#" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Register</a>
                        </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-sm-6" >
					<div class="row">
               		 <!-- <h5 class="text-center">Tester</h5>-->
                    	<div class="form-group col-sm-12">
                            <div class="card p-4 shadow-sm set-card">
							
							<label for="input file"></label>
                            <div class="custom-file">

                                <input type="file" class="custom-file-input file2 input-set" data-image-selector=".image2"  id="customFile" name="filename" value="sample.fxdr">
                                <label class="custom-file-label upload-set" for="customFile">DROP OR UPLOAD ARTWORK IMAGE HERE</label>
                            </div>
						<div class="col-sm-6 col-6 d-none upload-image" id="uploaded_img">
							<h6>Crop Image</h6>							
							<img class="image2 hidden img-fluid croppr" id="croppr" alt="Image will shown here" />
						</div>
							</div>

                        </div>
                        <!-- <div class="col-sm-12"> -->
                        <!-- <button type="submit" class="btn btn-primary btn-block btn-merge">Generate Meme</button> -->
                        <!-- </div> -->



                </div>

                <div class="col-sm-3">
				<img class="test"/>
                </div>
            </div>
			<div class="col-sm-6">
				<div class="row">
				
				<div class="form-group col-sm-12">
					<div class="card shadow-sm p-4 set-card">
					
					<label for="input file"></label>
						<div class="custom-file">
							<input type="file" class="custom-file-input file3 input-set" data-image-selector=".background-img"  id="customFile1" name="filename" value="sample.fxdr">
							<label class="custom-file-label upload-set hover" for="customFile">DROP OR UPLOAD BACKGROUND IMAGE HERE</label>
						</div>
						<div class=" col-sm-12 col-12 upload-image-2 d-none mt-5 " >
							
						<img class="background-img d-block mx-auto img-fluid"   alt="">
						</div>
					
					</div>	
				
				</div>
				<!-- <div class="col-sm-12">
				</div> -->
			</div>
			</div>    
    
            <div class="col-sm-12 text-center">
			<button id="merger_fabric" class="btn btn-custom btn-lg">MERGE IMAGES</button>
			<!-- <div style="position:relative;">
				<canvas id="c1" style="width:500px; height:100px;"></canvas>
			</div> -->
			</div>
			<div class="col-sm-2 result-set">
			
			<h2 class="result3 d-none result-h6">RESULTS</h2>
			</div>
			<div class="col-sm-12">
				<div class="card shadow p-4 d-none set-card" id="result4">
				<div class="row">
				
					<div class=" col-sm-6 result d-none mt-5" >
						<div class="pattren_img d-block mx-auto border-1 p-1">
							<canvas id="c" width="500" height="500"></canvas>
						</div>
								<!-- <canvas id="back_img" width="500" height="500"></canvas> -->
					</div>
					<div class="col-sm-6 result1 d-none mt-5">
						<canvas id="final_image" class="d-block mx-auto" width="500" height="500"></canvas>
						<h4 class="text-center result-h4">Final Result</h4>
						<button id="download" class="btn btn-custom mt-2 d-block mx-auto">Download</button>			
					</div>

				</div>

				</div>
			</div>

						<!-- <div class="col-sm-6 col-6 mt-5 d-none" id="generated_img">
							<h6>Generated Image</h6>
						<img class="merged-image hidden img-fluid" alt="merged image" />
						
						<canvas id="canvas" width="500" height="500" class="" style="position:relative">
						</canvas>
						</div> -->

            </div>
        
        </div>
    
	<!-- <button id="download1">Download1</button> -->
	<!-- <img src="" id="lala" alt=""> -->
    </main>
	<footer class="bg-cutom  py-3 mt-3 ">
		<div class="container">
			<div class="row">
			<div class="col-sm-6 "><p class="text-white text-md-left text-center font-weight-bold">CSI@2020 All rights reserved</p></div>
			<div class="col-sm-6 "> <p class="text-md-right text-center text-white font-weight-bold">TEST</p></div>
			</div>
		</div>
	</footer>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.1.0/fabric.min.js" ></script>
	<!-- <script src="js/croppr.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.min.js"></script>
    <script>
   

	var data = {};
	var img_src = "";
	var cropped_url = "";
	var background_img_src = "";
	var cropInstance = {};
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    $('.file2').on('change', function() {
	  var reader = new FileReader(),
		imageSelector = $(this).data('image-selector');
		console.log(imageSelector);
		console.log(this.files);
		console.log(reader);
	  if (this.files[0]) {
		reader.onload = function(e) {
			console.log("add");
			//imageSelector.cropper("destroy");
		  imageIsLoaded(e, imageSelector);
		  
		};
		reader.readAsDataURL(this.files[0]);
		
	  }
	 
	});
	function imageIsLoaded(e, imageSelector) {

		

		$(imageSelector).attr('src', e.target.result);
		img_src = e.target.result;
		console.log(img_src);
		$(imageSelector).removeClass('hidden');
		$("#uploaded_img").removeClass('d-none');
		var cropperImage = document.getElementById('croppr');
		if(!jQuery.isEmptyObject(cropInstance)){
			cropInstance.destroy();
		}
		console.log(cropInstance);
		initCrop(cropperImage);
	
		  
	}
	function initCrop(image){
		 cropInstance = new Cropper(image, {
			ready(){
				this.cropper.crop();
				//this.cropper.destroy();
			}
				// ...options
	  });

	}

    $('.file3').on('change', function() {
	  var reader = new FileReader(),
		imageSelector = $(this).data('image-selector');
		console.log(imageSelector);
		console.log(this.files);
		console.log(reader);
	  if (this.files[0]) {
		reader.onload = function(e) {
			console.log("add");
			backgroundImageIsLoaded(e, imageSelector);
		  
		};
		reader.readAsDataURL(this.files[0]);
		
	  }
	});
	function backgroundImageIsLoaded(e, imageSelector){
		$(".upload-image-2").removeClass("d-none");
		$(imageSelector).attr('src', e.target.result);
		background_img_src = e.target.result;
	  $(imageSelector).removeClass('hidden');
	//   $("#uploaded_img").removeClass('d-none');
	
	}
	
	$("#merger_fabric").on("click", mergeFabric);

var c1 = new fabric.Canvas('c1');
var canvas = new fabric.Canvas('c');
var coordinates = {};
var finalCanvas = document.getElementById("final_image");
canvas.on("after:render", function(){
	$(".result1").removeClass("d-none");
	var ao = canvas.getActiveObject();
	console.log(ao);
  if (ao) {
    var bound = ao.getBoundingRect();

    // canvas.contextContainer.strokeRect(
    //   bound.left,
    //   bound.top,
    //   bound.width,
    //   bound.height
    // );
	coordinates=bound;
    // console.log(bound);
			 ftx = finalCanvas.getContext("2d");
			 ftx.clearRect(0, 0, finalCanvas.width, finalCanvas.height);
			 backFinalImg = new Image();
			 aboveFinalImg = new Image();
			 backFinalImg.src = background_img_src;
			 backFinalImg.onload = function(){
				ftx.globalAlpha = 1;
				ftx.drawImage(backFinalImg, 0, 0, 500, 500);
				ftx.save();
				aboveFinalImg.src = cropped_url.toDataURL();

				aboveFinalImg.onload = function(){
					// ftx.globalAlpha = 1;

					if(ao.angle){
						//ftx.translate(coordinates.width/2, coordinates.height/2);
						ftx.rotate(ao.angle * Math.PI/180);

					}
					ftx.drawImage(aboveFinalImg, coordinates.left, coordinates.top, coordinates.width, coordinates.height);
					ftx.restore();
				}
			 }
  }		
})
	function mergeFabric(){
			cropped_url = cropInstance.getCroppedCanvas();
			fabric.Image.fromURL(cropped_url.toDataURL(), function(oImg) {
				c1.add(oImg);
			});

			fabric.Image.fromURL($('.background-img').attr('src'), function(oImg) {
				c1.add(oImg);
			});
			if(img_src != "" && background_img_src != ""){
			
			$(".result").removeClass("d-none");
			$(".result3").removeClass("d-none");
			$("#result4").removeClass("d-none");
			$("#merger_fabric").addClass("d-none");
			console.log(cropInstance);
		  	cropped_url = cropInstance.getCroppedCanvas();
			  console.log(cropped_url.toDataURL());
			//   console.log(imageData); 
			  console.log(cropped_url)
			var pattren_img = $(".pattren_img");
			pattren_img.css("background-image", "url("+background_img_src+")");
			console.log(cropped_url);
			fabric.Image.fromURL(cropped_url.toDataURL(), function(oImg) {
				canvas.add(oImg);
			});
			}	
			else{
				$("#merger_fabric").insertAfter("<div class='alert alert-danger'>Please Upload Both Images</div>");
			}
	  };

	

	$("#download1").click(function(){

	})
	$('#download').click(function() {
			 console.log(finalCanvas.toDataURL());
	 		 download(finalCanvas.toDataURL(),"fabric.png","image/png");
			//  window.open(canvas.toDataURL('png'))
		  });
	
	



    </script>
</body>
</html>    


