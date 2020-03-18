
<div class="page-wrapper">
<div class="container-fluid">
  <br>
  <div class="container">
   <h1 align="center">Datatables Individual column searching using PHP Ajax Jquery</h1>
   <br />
   
   <div class="table-responsive">
    <table id="product_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Sr. No.</th>
       <th>Product Name</th>
       <th>
        <select name="category" id="category" class="form-control">
         <option value="">Category Search</option>
         <?php 
         while($row = mysqli_fetch_array($result))
         {
          echo '<option value="'.$row["category_id"].'">'.$row["category_name"].'</option>';
         }
         ?>
        </select>
       </th>
       <th>Product Price</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>


</div>  
</div>  

<script>

 $(document).on('change', '#category', function(){
  var category = $(this).val();
  $('#product_data').DataTable().destroy();
  if(category != '')
  {
   load_data(category);
  }
  else
  {
   load_data();
  }
 });


</script>