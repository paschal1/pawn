<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
   <form method="post" action="action.php" id="postdata">
   <!-- <input type="text" name="name"  class="form-group"></br></br>
   <input type="tel" name="phone"  class="form-group"></br></br> -->
   <input type="file" name="file"  class="form-group" id="postimage"></br></br>
   <input type="submit" name="upload_button" value="submit"  class="form-group">
   </form>
   <div class="preview"></div>
</body>

<script>
$(document).ready(function(){
$("#postdata").on('submit',function(e){

e.preventDefault();

$.ajax({
    url:"action.php",
	method:"POST",
	data: new FormData(this),
    contentType:false,
    processData:false,
	success:function(data){
        $('#preview').html(data);
		$('#postimage').val();
    //	$('#postdata')[0].reset();
		//alert('post sent');
		
	}

})
$(document).on('click','#remove_button',function(){

if(confirm("Are you sure you want to remove this image?"))
{
  var path = $('#remove_button').data("path");
  $.ajax({
    url:"action1.php",
	method:"POST",
	data:{path:path},
	success:function(data){
      if(data != '')
      {
        $('#preview').html('');
      }
		
	}

})
}else
{
  return false;
}
});


}); 

});
</script>
</html>