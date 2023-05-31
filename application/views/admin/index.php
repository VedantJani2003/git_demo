
    <!-- My Copy Code Start -->
    <!DOCTYPE html>
<html>
    <head>
        <title>Fetch data from the database by using Ajax in CodeIgniter 3</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <table id="example1" class="display table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Age</th>
                    </tr>
                </thead>
            </table>
        </div>


        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script type="text/javascript">

            //displaying data on page start here
            $(document).ready(function () {
                $('#example1').DataTable({
                    "ajax": "<?php echo base_url('My_Controller/fetchDatafromDatabase'); ?>"
                });
            });
            //displaying data on page end here

        </script>
    </body>
</html>


    <!-- My Copy Code End -->
