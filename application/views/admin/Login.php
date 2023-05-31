<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">User Form </h3>

                <form method="post" id="myform" enctype="multipart/form-data"> <!--action = "<//?php echo site_url('Admin/open'); ?>"--> 
                    <div class="input-group mb-4">
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Your First Name">
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Your Last Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name ="email" id ="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" name="city" id="city" class="form-control" placeholder="Enter Your City">
                    </div>   
                    <!-- <p><//?php echo $this->session->flashdata('message') ?> </p>
                    <div class="input-group mb-4">
                        
                        <input type="file" name="userfile" id="userfile" class="form-control">
                    </div>    -->
                    <input type="file" name="userfile" id="userfile">
                    <!-- <button type="submit" id="upload">Upload</button> -->
                                                 
                    <input type="submit" class="btn btn-primary shadow-2 my-4" id="submit" value="SUBMIT">
                    
        </form>
                </div>
            </div>
        </div>
    </div>

        <!-- Required Js -->
<!-- <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    

    <!-- Add this script to the head section of your HTML file -->

    <script type="text/javascript">  
    
    $(document).ready(function() {
        $("#myform").on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData($(this)[0]);
        
        if($('#userfile' ).val() == ''||$('#fname' ).val() == ''||$('#lname' ).val() == ''||$('#email' ).val() == ''||$('#phone' ).val() == ''||$('#city' ).val() == '' )//input type is null
                {
                 alert("Please Fill this filed");
              }
              else{

        $.ajax({

            url: "<?php echo base_url("Admin/open"); ?>", //$(this).attr("action"),

            type:"POST", //'$(this).attr("method"),
            data: formData,
            processData: false,
            contentType: false,
            
            success: function(response) {
                alert("Data inserted successfully.");
                if(response == 1){
                window.location = "<?php echo base_url("Admin/value"); ?>";                
                $("#myform")[0].reset();
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                alert("Error: " + errorThrown);
            }
        });
    }
    }, );//{ passive: false }
});
</script>




    <!-- // $(document).ready(function(){

//         $("#submit").click(function(){
            
//             if($('#userfile' ).val() == '')//input type is null
//                 {
//                  alert("Please select file");
//               }
//               else{
//             $.ajax({
// 				url: "<//?php echo base_url("Admin/open"); ?>",
// 				type: "POST",
//                 data:$("#myform").serialize(),
//                 processData: false,
//                 contentType: false,
//                 cache: false,
//                 success:function(response){
//                     // console.log(response);
//                     if(response == 1){
//                         // alert('Successfully add');                        
//                         window.location = "<//?php echo base_url("Admin/value"); ?>";
//                         $('#myform').reset();                     
//                     }                    
//                 },
//                 error:function(){
//                     alert("fail");
//                 }            
//         });
//     }
        
//     });
// });

    
    // $.ajax({
    //     url: "<//?php echo site_url("Admin/upload")?> ",
    //     type:"POST",
    //     data:$("#userfile").serialize(),
    //     success:function(){
    //         alert('Successfully add');
    //     },
    //     error:function(){
    //                 alert("fail");
    //     },             
        
    // });
    

     -->
    <!-- </script> -->

</body>
