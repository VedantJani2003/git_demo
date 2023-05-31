
<form id="upload-form" method="post" enctype="multipart/form-data">
  <input type="file" name="userfile" id="userfile">
  <button type="submit" id="upload">Upload</button>
</form><br><br>
<div id="uploadaimage"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript"> 

$(document).ready(function() {
  $('#upload-form').on('submit',function(event) {
    event.preventDefault();
    
    if($('#userfile' ).val() == '')//input type is null
    {
      alert("Please select file");
    }

    else{

      // var formData = new FormData($('#upload-form').[0]);
      $.ajax({
      url: "<?php echo site_url('main/image'); ?>",
      type: 'POST',
      data: new FormData(this),
      processData: false,
      contentType: false,
      cache: false,

      success: function(data) {
        // Handle success response
        $('#uploadaimage').html(data);
      }
      // error: function(xhr, status, error) {
      //   // Handle error response
      // }
    });

    }

  });
});
</script> 


<!-- //new  created-->
<!-- //for image uploading -->
<script>  
    $(document).ready(function() {
    $('#myform').on('submit',function(event) {
    event.preventDefault();
    
    if($('#userfile' ).val() == '')//input type is null
    {
      alert("Please select file");
    }

    else{

      // var formData = new FormData($('#upload-form').[0]);
      $.ajax({
      url: "<?php echo base_url('Admin/Open'); ?>",
      type: 'POST',
      data: new FormData(this),
      processData: false,
      contentType: false,
      cache: false,

      success: function(response) {
        // Handle success response
        console.log(data);
      }
      // error: function(xhr, status, error) {
      //   // Handle error response
      // }
    });

    }
    </script> 

  });
});
