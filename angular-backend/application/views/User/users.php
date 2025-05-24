<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <table id="table_id" class="table table-striped">
                    <thead>
                        <tr>
                            <!-- <th>Options</th> -->
                            <th>Name</th>
                            <th>Profile Picture</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Birthdate/ Age</th>
                            <th>Date Registered</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach (get_all_users() as $key => $value) { ?>
                        <tr>
                            <!-- <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#fire_station" onclick="crud_brand('edit',`<?=$value['user_id']?>`);"><i class="fa fa-pen" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-danger" onclick="crud_brand('delete',`<?=$value['user_id']?>`);"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </td> -->
                            <td><?=$value['fname']?> <?=$value['mname']?> <?=$value['lname']?></td>
                            <td>
                                <image src="<?=base_url()?>user_image_semi/registered_users/<?=$value['user_id']?>/<?=$value['profile_picture']?>" onerror="this.src='<?php echo base_url().'assets/admin_template/dist/img/user2-160x160.jpg' ?>';" id="imgdatauser" style="width:100px;height:auto;">
                            </td>
                            <td><?=$value['address']?></td>
                            <td><?=$value['phone_number']?></td>
                            <td><?=$value['email']?></td>
                            <td><?=date('M d, Y', strtotime($value['birthdate']))?>/ <?=age_computation($value['birthdate'])?></td>
                            <td><?=date('M d, Y H:i:s a', strtotime($value['date_added']))?></td>
                        </tr>
                    <?php } ?>



                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>