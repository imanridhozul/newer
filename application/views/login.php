<!DOCTYPE html>
<html lang="en">

<body class="gray-bg">

  <div class="loginColumns animated fadeInDown">
    <div class="row">
      <div class="col-md-6">
        <h2>Login 2 user</h2>

      </div>
      <div class="col-md-6">
        <div class="ibox-content">
          <form id="form1" method="post" action="<?php echo base_url(); ?>Auth/login">
            <div class="form-group">
              <input type="text" name="id" id="" class="form-control" placeholder="Username" aria-describedby="helpId" required="">
            </div>
            <div class="form-group">
              <input type="text" name="password" id="" class="form-control" placeholder="Password" aria-describedby="helpId" required="">
            </div>
            <button type="submit" id="bt" class="btn btn-primary btn-lg btn-block">Maasukkan</button>
          </form>
        </div>
      </div>
    </div>
    <hr />
    <div class="row">
      <div class="col-md-6">
        Copyright Example Company
      </div>
      <div class="col-md-6 text-right">
        <small>© 2014-2015</small>
      </div>
    </div>
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
        } else if (data == "successAdmin") {
          window.location.href = ur + "Admin";
        } else {
          alert(data);
        }
      });
    });
  });
</script>

</html>