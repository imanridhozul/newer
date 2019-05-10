<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <title>login</title>
</head>

<body>
  <div class="col-xs-5">
    <form id="form1" method="post" action="<?php echo base_url(); ?>Auth/login">
      <div class="form-group">
        <label for=""></label>
        <input type="text" name="id" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
      </div>
      <br>
     
      <div class="form-group">
        <label for=""></label>
        <input type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
      </div>
      <button type="button" id="bt" class="btn btn-primary" btn-lg btn-block">Maasukkan</button>
    </form>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
  var ur = "<?php echo base_url(); ?>"
  $(document).ready(function() {
    $('#bt').click(function() {
      $.post($('#form1').attr('action'), $('form').serializeArray(), function(data, status) {
        if (data == "success") {
          window.location.href = ur + "User";
        }
        else if(data == "successAdmin"){
          window.location.href = ur + "Admin";
        }
        else{
          alert("gagal");
        }
      });
    });
  });
</script>

</html>