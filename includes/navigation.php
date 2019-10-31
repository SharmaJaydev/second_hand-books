<?php
$sql= "SELECT *FROM cateogries WHERE parent = 0";
$pquery= $db->query($sql);
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" style="color:black" data-target="#myNavbar" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#">
<img border="0" alt="eror" src="image/logo.jpg" width="70px" height="60px">
</a>
    </div>
    <div style="color:black" class="collapse navbar-collapse " id="myNavbar">
      <ul style="color:black" class="nav navbar-nav">
        <?php while($parent=mysqli_fetch_assoc($pquery)):?>
          <?php $parent_id=$parent['id'];
          $sql2="select *from cateogries where parent = '$parent_id'";
          $cquery= $db->query($sql2);
          ?>
        <li style="font-size:16px;padding-top:40px;padding-left:50px"class="dropdown">
          <a style="color:black" class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $parent['cateogries'];?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <?php while($child=mysqli_fetch_assoc($cquery)):?>
            <li><a href="#"><?php echo $child['cateogries'];?></a></li>
            <?php endwhile;?>
          </ul>
        </li>
      <?php endwhile;?>
      <ul style="padding-left:400px"class="nav navbar-nav navbar-right">
        <li ><a href="#"> Sign Up</a></li>
        <li><a href="#"> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
