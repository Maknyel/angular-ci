<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body style="background: #fff;padding: 50px 0px;max-width: 600px;">

    <div class="container" style="background: #00467f;margin: 0 auto;width: 100%;height:50px;">
            <a href="<?=base_url()?>"><img src="<?=global_icon()?>" style="margin-left: 10px;height:50px;max-height:50px;"></a>

    </div>

    <div style="overflow: auto;"></div><br>

    <div class="container" style="background: #ffffff;margin: 0 auto;width: 100%;">
        <div style="padding:20px;font-size:20px;">
            <?=$message;?>
        </div>

        <br><br><br>
            <hr style="border: 1px solid #ffff;width: 50%">
            <br>

        <div style ="width:100%;display:flex;align-items: flex-end;" >
            <div style="width: 100%;background-color: #00467f;height:10px;"></div>
        </div>

        <br>

        <center>



            <p style="font-family: Arial, Arial, Helvetica, sans-serif;font-size: 13px;color: #565656;margin-bottom:0px;">
            <strong>Copyright &copy; <?=date('Y')?> <?=global_title()?>.</strong>All rights reserved.

            </p>
        </center>
    </div>
</body>
</html>

<style type="text/css">
    .or:before{
  content: "";
  width: 40%;
  height: 10px;
  display: block;
  position: absolute;
  top: 45%;
  z-index: 999;
  background-color: #00467f;
}

.or:after{
  content: "";
    width: 40%;
    height: 10px;
    display: block;
    position: absolute;
    top: 45%;
    z-index: 999;
    background-color: #00467f;
    right: 0;
}

.or{
  /*text-align: center;*/
  position: relative;
  padding-top: 15px;
  padding-bottom: 25px;
  color: #00467f;
}
</style>
