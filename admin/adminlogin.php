<?php
//session_start();
include("adminpartials/head.php");



?>
<div class = "row">

    <div class = "col-sm-4">
    </div>

    <div class = "col-sm-4">
    <h1>Hello</h1>
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Admin Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="sessionprocess.php" method="post">

               <?php
                
                if(@$_GET['Empty'] == true ){
               ?>
               <div class="alert-light text-danger"><?php echo $_GET['Empty'] ?> </div>
               <?php
                }
                
               ?>


                <?php
                
                if(@$_GET['Invalid'] == true ){
               ?>
               <div class="alert-light text-danger"><?php echo $_GET['Invalid'] ?> </div>
               <?php
                }
                
               ?>

              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               
                <button class="btn btn-info pull-right" name="Login" >Logn in</button>
              </div>
              <!-- /.box-footer -->
            </form>
    </div>

   
    
    <div class = "col-sm-4">
    </div>
    
</div>