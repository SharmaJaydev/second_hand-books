<?php
require_once  'core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';
$sql= "SELECT *FROM product WHERE featured = 1";
$featured=$db->query($sql);
?>
<div class="row">
      <?php while($product=mysqli_fetch_assoc($featured)):?>
  <div  class="col-md-3 column_style" style="padding-top: 20px;padding-left:130px;height:320px">
<a href="javascript:modal(<?= $product['id'];?>)">
  <img src="<?=$product['image'];?>" alt="HTML tutorial" width="53%" height:30%">
  <p style="padding-left:0.3px;margin:2px"><b><?=$product['title'];?></b></p>
  <p style="padding-left:35px;margin:0px">price:<?=$product['price'];?></p>
  <p style="padding-left:0px;"><?=$product['description'];?></p>
  </div>
</a>
<?php endwhile;?>
<script>
function modal(id)
{
  var data ={"id":id};
  jQuery.ajax({
    url:<?= BASEURL;?>+'includes/detailsmodal.php',
    method:"post",
    data:data,
    success: function(data)
    {
      jQuery('body').append(data);
      jQuery('#details-modal').modal('toggle');
}
  });
}
</script>

</div>
</body>
  <?php include 'includes/tail.php';?>
