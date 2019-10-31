<?php require_once '../core/init.php';
$id=$_POST['id'];;
$id=(int)$id;
$sql="SELECT *from product where id='$id'";
$result=$db->query($sql);
$products=mysqli_fetch_assoc($result);
$brand_id=$products['brand'];
$sql="SELECT *from brand where id='$brand_id'";
$brand_query=$db->query($sql);
$brands=mysqli_fetch_assoc($brand_query);
?>
<?php echo ob_start();?>

<div class="modal fade" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" onclick="refresh()" data-dismiss="modal" aria-label="Close" >
           <span aria-hidden="true">&times;</span>
         </button>
         <h4 class="modal-title" text-center"><?php echo $products['title'];?></h4>
       </div>
       <div class="modal-body">
         <div class"container-fluid">
           <div class="row">
             <div class="col-sm-6">
               <div class="center-block">
                <img src="<?php echo $products['image'];?>" alt="arihant book" class="details img-responsive">
              </div>
            </div>
            <div class="col-sm-6">
              <h4>Details</h4>
              <p><?php echo $products['description'];?></p>
              <p>Price:<?php echo $products['price'];?></p>
              <p>Brand:<?php echo $brands['brand'];?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-default" onclick="refresh()" data-dismiss="modal">Close</button>
      <button class="btn btn-warning" type="submit">Add To cart</button>
    </div>
  </div>
</div>
</div>
<script>
  function refresh()
  {
 window.location.reload();
  }
</script>

<?php echo ob_get_clean();?>
