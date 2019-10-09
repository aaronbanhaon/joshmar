<!-- Register -->
<div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Register</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="registeruser.php" enctype="multipart/form-data" autocomplete="off">
                    <input type="text" name="name" class="form-control" required placeholder="Name">
                    <input type="text" name="address" class="form-control" required placeholder="Address">
                    <input type="text" name="contact" class="form-control" required placeholder="contact">
                    <input type="email" name="email" class="form-control" required placeholder="Email Address">
                    <input type="text" name="username" class="form-control" required placeholder="Username">
                    <input type="password" name="password" class="form-control" required placeholder="Password">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Register </button>
            </div>
            </form>
        </div>

    </div>
</div>
</div>