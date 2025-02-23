<!-- Modal -->
<div class="modal fade" id="deleteSupplier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Supplier</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <h3>Are you sure to remove this Supplier?</h3>
          <input type="hidden" name="remove_value" id="remove_supplier_id">
          <button type="button" class="btn btn-secondary float-right mx-1" data-bs-dismiss="modal">No</button>
          <button type="submit" name="btn-remove-supplier" class="btn btn-primary float-right mx-1">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <h3>Are you sure to remove this Product?</h3>
          <input type="hidden" name="remove_value" id="remove_product_id">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="submit" name="btn-remove-product" class="btn btn-primary">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>


</div>
</div>
</div>

<!-- wow animation -->
<script src="js/animate.js"></script>
<!-- select country -->
<script src="js/bootstrap-select.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.js"></script>
<!-- chart js -->
<script src="js/Chart.min.js"></script>
<script src="js/Chart.bundle.min.js"></script>
<script src="js/utils.js"></script>
<script src="js/analyser.js"></script>
<!-- nice scrollbar -->
<script src="js/perfect-scrollbar.min.js"></script>
<script>
  var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- fancy box js -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- calendar file css -->
<script src="js/semantic.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $(document).on('click', '#btn-delete-supplier', function() {
      var id = $(this).parent('td').parent('tr').find('td').eq(0).text();
      $('#remove_supplier_id').val(id)
    })

    $(document).on('click', '#btn-delete-product', function() {
      var id = $(this).attr('remove-id');
      $('#remove_product_id').val(id);
    })
  })
</script>
</body>

</html>