<!-- <//?php include 'admin/head.php';?>    -->
<div class="container-fluid  p-2 table-responsive">
<div class="row d-flex justify-content-end my-3">
<style>
  .img_box{
    width : 250px;
    height : auto;
  }
</style>

<div class="b2  "><button type="button" id="b1" value="Back To Form" class="btn btn-primary shadow-2 " ><a href="<?php echo base_url("Admin/index"); ?>">Back To Form</a></button></div>
</div>
<table class="table table-hover" id="form1">
                <thead>
                    <tr class="text-center">
                        <th>S.No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>img</th>
                        <th>Created this Time</th>
                        <th>Delete</th>
                        <th>Update </th>
                    </tr>
                </thead>
                <?php foreach ($fetch->result() as $value): ?>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->fname; ?></td>
                    <td><?php echo $value->lname; ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td><?php echo $value->phone; ?></td>
                    <td><?php echo $value->city; ?></td>
                    <td><img class="popup" src="<?php echo base_url('uploads/'). $value->profile_photo; ?>" width = "50%" height="10%"></td>
                    <td><?php echo $value->created_at; ?></td>
                    <td><button class="btn btn-primary shadow-2  "><a class="text-light" href='<?php echo base_url('Admin/deletedata ?id='.$row->id);?>'> Delete</a></button></td>
                    <td><button class="btn btn-primary shadow-2  "><a class="text-light" href='<?php echo base_url('Admin/deletedata ?id='.$row->id);?>'> Update</a></button></td>
    
                    
                </tr>
                <?php endforeach; ?> 
            </table>

            <!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width: fit-content;">
    <div class="modal-content">
      <img  src="" id="popup-img" alt="image" >
    </div>
  </div>
</div>

        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>

        $(document).ready(function(){
            $('.popup').click(function(){
                var src = $(this).attr('src');                
                $('.modal').modal('show');
                $('#popup-img').attr('src',src).addClass('img_box');
                // alert(src);
            });
        });
        </script>
                                                  