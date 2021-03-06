<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <br>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">My Profile</h3>
                    </div>
                <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <?php if(Auth::user()->role == 1):?>
                                        <th>Actions</th>
                                    <?php endif;?>
                                </tr>
                               
                                    <?php
                                    $role = $user->role;
                                    if($role == 1){
                                        $role = "Admin";
                                    }elseif($role == 2){
                                        $role = "Teacher";
                                    }else{
                                        $role='- - -';
                                    }
                                    ?>
                                    <?php
                                    $status = $user->status;
                                    if($status == 1){
                                        $status = "Active";
                                    }elseif($status == 0){
                                        $status = "Pending";
                                    }elseif($status == -1){
                                        $status="Block";
                                    }else{
                                        $status ='- - -';
                                    }
                                    ?>
                                <tr>
                                    <td> <?php echo $user->user_id; ?>  </td>
                                    <td> <?php echo $user->fullname; ?> </td>
                                    <td> <?php echo $user->email; ?>    </td>
                                    <td> <?php echo $role; ?>           </td>
                                    <td> <?php echo $status; ?>         </td>
                                    <?php if(Auth::user()->role == 1):?>
                                        <td>
                                            <a href="<?php echo url('user/edit/'.$user->user_id); ?>"class="btn btn-sm bg-orange "><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                            <a href="<?php echo url('user/delete/'.$user->user_id); ?>" class="btn btn-sm bg-maroon" onclick="return confirm('Are you sure you want to delete this User?');"><i class="fa fa-trash" aria-hidden="true" ></i> Delete</a>
                                        </td>
                                    <?php endif;?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <!-- /.box-body -->
                </div>
            <!-- /.box -->
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>