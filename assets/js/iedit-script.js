$("#file_img").change(function(e){
  var img = e.target.files[0];

  if(!iEdit.open(img, true, function(res){
    $("#cropped").attr("src", res);
    $('#photoTxt').val(res);   
  })){
    alert("Whoops! That is not an image!");
  }

});