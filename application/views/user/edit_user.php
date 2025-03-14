<?php $this->load->view('/includes/header');?>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Update user</h5>
                    <form method="post" action="<?=base_url()?>user/edit/<?=$id?>"  >
                        <div class="mb-3">
                            <label for="username" class="form-label"  >Username</label>
                            <input type="text" name="username" placeholder="Username" value="<?=$user->username?>" class="form-control" id="username">

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="email"  placeholder="Email" value="<?=$user->email?>" aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" maxlength="10" name="mobile"  placeholder="Mobile" value="<?=$user->mobile?>"  class="form-control" id="mobile">

                        </div>


                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address"  placeholder="Address" value="<?=$user->address?>"  class="form-control" id="address">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-primary" onclick="window.history.back();">Back</button>
                    </form>
                    <?php
                    if($this->session->flashdata('success')) {?>
                    <div class="alert alert-success" role="alert">
                        Successfully Updated
                </div> 
                <?php }
                ?>

                <?php
                    if($this->session->flashdata('error')) {?>
                    <div class="alert danger" role="alert">
                        Failed!
                </div> 
                <?php }
                ?>
 

                </div>
            </div>
        </div>

    </div>
    <?php $this->load->view('includes/footer');?>
  