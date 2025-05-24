    <div id="home" class="header-hero bg_cover" style="min-height: 100vh;background-image: url(<?=base_url()?>assets/frontend/images/banner-bg.svg)">
            <div class="container omb_containerv2">
                <div class="row omb_container">
                    <div class="col-md-4 col-xs-12 navbaronly">
                        <div class="">
                            <h3 class="titlenav text-center header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Profile</h3>
                            <ul>
                                <li class="listyles">
                                    <a class="ahrefnav <?=(isset($_GET['page']))?'':'active'?>" href="<?=base_url()?>manage">Change Profile Picture</a>
                                </li>
                                <li class="listyles">
                                    <a class="ahrefnav <?=(isset($_GET['page']))?(($_GET['page'] == 'change_profile')?'active':''):''?>" href="<?=base_url()?>manage?page=change_profile">Change Profile</a>
                                </li>

                                <li class="listyles">
                                    <a class="ahrefnav <?=(isset($_GET['page']))?(($_GET['page'] == 'change_password')?'active':''):''?>" href="<?=base_url()?>manage?page=change_password">Change Password</a>
                                </li>
                              
                            </ul>
                        </div> <!-- header hero content -->
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="">
                            <?php if(isset($_GET['page'])){ ?>
                                    <?php switch ($_GET['page']) {
                                        case 'change_profile': ?>
                                            <div class="card">
                                                <form id="change_profile">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Change Profile</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="fname" class="col-form-label">Firstname:</label>
                                                            <input value="<?=get_myuser_info_newuser('fname')?>" type="text" class="form-control" id="fname" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mname" class="col-form-label">Middlename:</label>
                                                            <input value="<?=get_myuser_info_newuser('mname')?>" type="text" class="form-control" id="mname">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="lname" class="col-form-label">Lastname:</label>
                                                            <input value="<?=get_myuser_info_newuser('lname')?>" type="text" class="form-control" id="lname" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone_number" class="col-form-label">Phone Number:</label>
                                                            <input value="<?=get_myuser_info_newuser('phone_number')?>" type="text" class="form-control" id="phone_number" required="">
                                                        </div>        
                                                        <div class="form-group">
                                                            <label for="email" class="col-form-label">Email:</label>
                                                            <input value="<?=get_myuser_info_newuser('email')?>" type="email" class="form-control" id="email" required="">
                                                        </div>  
                                                        <div class="form-group">
                                                            <label for="birthdate" class="col-form-label">birthdate:</label>
                                                            <input value="<?=get_myuser_info_newuser('birthdate')?>" type="date" class="form-control" id="birthdate" required="">
                                                        </div>            
                                                        <div class="form-group">
                                                            <label for="address" class="col-form-label">Address:</label>
                                                            <textarea class="form-control" id="address" required=""><?=get_myuser_info_newuser('address')?></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="username" class="col-form-label">Username:</label>
                                                            <input value="<?=get_myuser_info_newuser('username')?>" type="text" class="form-control" id="username" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password" class="col-form-label">Confirm Password:</label>
                                                            <input type="password" class="form-control" id="password" required="">

                                                            <input type="hidden" class="form-control" id="cpassword" value="<?=get_myuser_info_newuser('password')?>" required="">
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-right">
                                                        <button type="submit" id="change_profilebutton" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>    
                                        <?php break; ?>
                                        <?php case 'change_password': ?>
                                            <div class="card">
                                                <form id="change_password">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Change Password</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="confirmpassword" class="col-form-label">Confirm Password:</label>
                                                            <input type="password" class="form-control" id="confirmpassword" required="">

                                                            <input type="hidden" class="form-control" id="cpassword" value="<?=get_myuser_info_newuser('password')?>" required="">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="password" class="col-form-label">New Password:</label>
                                                            <input type="password" class="form-control" id="password" required="">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="retypepassword" class="col-form-label">Retype Password:</label>
                                                            <input type="password" class="form-control" id="retypepassword" required="">
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-right">
                                                        <button type="submit" id="change_passwordbutton" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>    
                                        <?php break; ?>
                                        
                                        <?php 
                                        default:
                                        break;
                                        ?>
                                    <?php } ?>
                            <?php }else{ ?>
                                
                                    <form style="display: none;" id="uploadForm2" action="<?php echo base_url();?>Newuser/Uploadmyimageuser" method="POST" enctype="multipart/form-data">
                                          <input type="file" name="file" id="clicked_image_background" accept="image/*">
                                    </form>

                                    <div class="container">
                                        <div class="card bg-default">
                                            <div class="card-header">
                                                <h5>My Display Image</h5>
                                            </div>
                                            <div class="card-body">
                                                <image src="<?=base_url()?>user_image_semi/registered_users/<?=get_myuser_info_newuser('user_id')?>/<?=get_myuser_info_newuser('profile_picture')?>" onerror="this.src='<?php echo global_icon(); ?>';" id="imgdatauser" style="width:100%;height:auto;">
                                            </div>
                                            <div class="card-footer">
                                                <div style="text-align: right;width: 100%;">
                                                    <h1>
                                                        <button class="btn btn-success btn-lg" onclick="upload_background()">
                                                            Upload
                                                        </button>
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <script type="text/javascript">
                                function upload_background(){
                                    $('#clicked_image_background').click();
                                }

                                $(document).on('change','#clicked_image_background',function(e){
                                        e.preventDefault();
                                        var form = $('#uploadForm2')[0];

                                        // Create an FormData object
                                        var dataString = new FormData(form);

                                        // alert(dataString);
                                            var uploadtracing = $('#uploadForm2');
                                            $.ajax({
                                              type:'POST',
                                              dataType: "json",
                                              data: dataString,
                                              enctype: 'multipart/form-data',
                                              processData: false,
                                              contentType: false,
                                              cache: false,
                                              // timeout: 600000,
                                              url: base_url+"Newuser/Uploadmyimageuser",
                                              beforeSubmit: function(data){
                                                $('.loader_thumb').show();
                                              },
                                              uploadProgress: function (event, position, total, progress){
                                                $('.loader_thumb').show();
                                              },
                                              success: function(data){
                                                  if(data.status !== 'success'){

                                                      if (data.msg == "The filetype you are attempting to upload is not allowed.") {
                                                          var pop_msg = ""+'Invalid file type upload files in png, jpeg or jpg format only'+"";
                                                      }else{
                                                          var pop_msg = data.msg;
                                                      }
                                                        app.alert('Error',pop_msg,'error');


                                                    } else {
                                                      location.reload();
                                                    }

                                              },
                                              resetForm: true
                                            });
                                });
                            </script>

                            <?php } ?>
                        </div> <!-- header hero content -->
                    </div>
                </div>
            </div> <!-- container -->
    </div> <!-- header hero -->
    </header>


<style type="text/css">
    .ahrefnav.active{
        color: white;
        background-color: #3f68da;
    }

    .ahrefnav{
        color: black;
    }
    .navbaronly{
        display: block;
        border: 1px solid #ececec;
        padding-bottom: 10px;
        margin-left: -15px;
        margin-top: -15px;
        padding-top: 15px;
        margin-bottom: -15px;
        padding-left: 0px;
        padding-right: 0px;
    }
    .titlenav{
        display: block;
        margin-bottom: 25px;
        border-bottom: 1px solid #ececec;
        
    }
    .omb_containerv2{
        padding-top: 180px;
    }
    .omb_container{
        background: #fff;
        border: 1px solid #eaeaea;
        padding-bottom: 30px;
        border-radius: 3px;
        padding: 15px;
        box-shadow: 0px 1px 1px 0px #f5f5f5;
        -moz-box-shadow: 0px 1px 1px 0px #f5f5f5;
        -webkit-box-shadow: 0px 1px 1px 0px #f5f5f5;
    }

    .listyles a{
        position: relative;
        display: block;
        padding: 10px 15px;
    }

    .listyles a:focus, .listyles a:hover {
        text-decoration: none;
        background-color: #eee;
        color: black;
    }
</style>
<script type="text/javascript">
    $(document).on('submit', '#change_profile', function(event){
        $("#change_profilebutton").attr("disabled","disabled");
        event.preventDefault();
        var fname = $('#change_profile #fname').val();
        var mname = $('#change_profile #mname').val();
        var lname = $('#change_profile #lname').val();
        var phone_number = $('#change_profile #phone_number').val();
        var email = $('#change_profile #email').val();
        var address = $('#change_profile #address').val();
        var birthdate = $('#change_profile #birthdate').val();
        var username = $('#change_profile #username').val();
        var password = $('#change_profile #password').val();
        var cpassword = $('#change_profile #cpassword').val();

        var data = {'fname':fname,'mname':mname,'lname':lname,'phone_number':phone_number,'email':email,'address':address,'username':username,'password':password,'birthdate':birthdate};
        if(cpassword != password){
            $("#change_profilebutton").removeAttr("disabled");
            alertfunction('Error',"Password is incorrect",'error');
        }else{
            $.ajax({
              type:'POST',
              dataType:'JSON',
              url:base_url+'Newuser/change_profile_submit',
              data:data,
              success:function(datareturn)
              {
                $("#change_profilebutton").removeAttr("disabled");
                if(datareturn['is_success'] != 0){
                  alertfunction('Success',datareturn['message'],'success');
                }else{
                  alertfunction('Error',datareturn['message'],'error');
                }
              },
                  error: function(XMLHttpRequest, textStatus, errorThrown) {

                      // alert(textStatus);
                      // alert(JSON.stringify(XMLHttpRequest));
                      // alert(errorThrown);
                    }

            });
        }
        
    });

    $(document).on('submit', '#change_password', function(event){
        $("#change_passwordbutton").attr("disabled","disabled");
        event.preventDefault();
        var retypepassword = $('#change_password #retypepassword').val();
        var confirmpassword = $('#change_password #confirmpassword').val();
        var password = $('#change_password #password').val();
        var cpassword = $('#change_password #cpassword').val();

        var data = {'password':password};
        if(retypepassword != password){
                alertfunction('Error',"New Password and Retype password is not match",'error');
                $("#change_passwordbutton").removeAttr("disabled");
        }else{
            if(cpassword != confirmpassword){
                alertfunction('Error',"Confirm Password is incorrect",'error');
                $("#change_passwordbutton").removeAttr("disabled");
            }else{
                $.ajax({
                  type:'POST',
                  dataType:'JSON',
                  url:base_url+'Newuser/change_password_submit',
                  data:data,
                  success:function(datareturn)
                  {
                    $("#change_passwordbutton").removeAttr("disabled");
                    if(datareturn['is_success'] != 0){
                      alertfunction('Success',datareturn['message'],'success');
                    }else{
                      alertfunction('Error',datareturn['message'],'error');
                    }
                  },
                      error: function(XMLHttpRequest, textStatus, errorThrown) {

                          // alert(textStatus);
                          // alert(JSON.stringify(XMLHttpRequest));
                          // alert(errorThrown);
                        }

                });
            }
        }
        
    });
</script>