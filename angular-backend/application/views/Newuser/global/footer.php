<footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="footer-widget pb-100">
                
            </div> <!-- footer widget -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text">Designed and Developed by <?=global_title()?></p>
                            </div> <!-- copyright content -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    <!--====== PART START ======-->
    
<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->
    
    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <!-- sweetalert -->
        <link href="<?php echo base_url(); ?>assets/admin_login/plugin/sweetalert/sweetalert2.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/admin_login/plugin/sweetalert/sweetalert2.all.min.js" rel="stylesheet"></script>

    
    
    <!--====== Bootstrap js ======-->
    <script src="<?=base_url()?>assets/frontend/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/bootstrap.min.js"></script>
    
    <!--====== Plugins js ======-->
    <script src="<?=base_url()?>assets/frontend/js/plugins.js"></script>
    
    <!--====== Slick js ======-->
    <script src="<?=base_url()?>assets/frontend/js/slick.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="<?=base_url()?>assets/frontend/js/ajax-contact.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="<?=base_url()?>assets/frontend/js/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/jquery.counterup.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="<?=base_url()?>assets/frontend/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="<?=base_url()?>assets/frontend/js/jquery.easing.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/scrolling-nav.js"></script>
    
    <!--====== wow js ======-->
    <script src="<?=base_url()?>assets/frontend/js/wow.min.js"></script>
    
    <!--====== Particles js ======-->
    <script src="<?=base_url()?>assets/frontend/js/particles.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="<?=base_url()?>assets/frontend/js/main.js"></script>
    
</body>

</html>


<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form id="login_user">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
              <div class="form-group">
                <label for="username" class="col-form-label">Username:</label>
                <input type="text" class="form-control" id="username" required="">
              </div>
              <div class="form-group">
                <label for="password" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="password" required="">
              </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="login_userbutton" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form id="register_user">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="fname" class="col-form-label">Firstname:</label>
                <input type="text" class="form-control" id="fname" required="">
            </div>
            <div class="form-group">
                <label for="mname" class="col-form-label">Middlename:</label>
                <input type="text" class="form-control" id="mname">
            </div>
            <div class="form-group">
                <label for="lname" class="col-form-label">Lastname:</label>
                <input type="text" class="form-control" id="lname" required="">
            </div>
            <div class="form-group">
                <label for="phone_number" class="col-form-label">Phone Number:</label>
                <input type="text" class="form-control" id="phone_number" required="">
            </div>    
            
            <div class="form-group">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" required="">
            </div>    
            <div class="form-group">
                <label for="address" class="col-form-label">Address:</label>
                <textarea class="form-control" id="address" required=""></textarea>
            </div>

            <div class="form-group">
                <label for="birthdate" class="col-form-label">birthdate:</label>
                <input type="date" class="form-control" id="birthdate" required="">
            </div>

            <div class="form-group">
                <label for="username" class="col-form-label">Username:</label>
                <input type="text" class="form-control" id="username" required="">
            </div>
            <div class="form-group">
                <label for="password" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="password" required="">
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="register_userbutton" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).on('submit', '#login_user', function(event){
    $("#login_userbutton").attr("disabled","disabled");
    event.preventDefault();
    var username = $('#login_user #username').val();
    var password = $('#login_user #password').val();

    var data = {'username':username,'password':password};
    $.ajax({
      type:'POST',
      dataType:'JSON',
      url:base_url+'Newuser/login_user_submit',
      data:data,
      success:function(datareturn)
      {
        $("#login_userbutton").removeAttr("disabled");
        if(datareturn['is_success'] != 0){
          alert_redirection('Success','Login Success!',base_url+'manage','success');
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
  });

  $(document).on('submit', '#register_user', function(event){
    $("#register_userbutton").attr("disabled","disabled");
    event.preventDefault();
    var fname = $('#register_user #fname').val();
    var mname = $('#register_user #mname').val();
    var lname = $('#register_user #lname').val();
    var phone_number = $('#register_user #phone_number').val();
    var email = $('#register_user #email').val();
    var address = $('#register_user #address').val();
    var birthdate = $('#register_user #birthdate').val();

    var username = $('#register_user #username').val();
    var password = $('#register_user #password').val();

    var data = {'fname':fname,'mname':mname,'lname':lname,'phone_number':phone_number,'address':address,'username':username,'password':password,'email':email,'birthdate':birthdate};
    $.ajax({
      type:'POST',
      dataType:'JSON',
      url:base_url+'Newuser/register_user_submit',
      data:data,
      success:function(datareturn)
      {
        $("#register_userbutton").removeAttr("disabled");
        if(datareturn['is_success'] != 0){
          alert_redirection('Success',datareturn['message'],base_url+'manage','success');
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
  });



  function alertfunction(title,content,smile_emo){
      setTimeout(function () {
          Swal.fire({
          allowOutsideClick: false,
            title: title,
            text: content,
            icon: smile_emo,
            confirmButtonText: 'OK',
          })
      }, 100);
  };

  function alert_redirection(title,content,redirect,smile_emo){
      setTimeout(function () {
          Swal.fire({
          allowOutsideClick: false,
            title: title,
            text: content,
            icon: smile_emo,
            confirmButtonText: 'OK',
          }).then(function() {
              window.location = redirect;
          })
      }, 100);
  };          
</script>