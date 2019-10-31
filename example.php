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
var id=<?php echo $_POST['id']?>;
$(".modal-title").html(id);
</script>
