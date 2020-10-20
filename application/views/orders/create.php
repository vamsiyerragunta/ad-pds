<style>
  .thumbnail:hover {
    position:relative;
    top:-25px;
    left:-35px;
    width:800px;
    height:auto;
    display:block;
    z-index:999;
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Indent</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Orders</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>


        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Create Indent</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="<?php base_url('orders/create') ?>" method="post" class="form-horizontal">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="gross_amount" class="col-sm-12 control-label">Date: <?php echo date('Y-m-d') ?></label>
                </div>
                <div class="form-group">
                  <label for="gross_amount" class="col-sm-12 control-label">Date: <?php echo date('h:i a') ?></label>
                </div>

                <div class="col-md-4 col-xs-12 pull pull-left">

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">CPA Name</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter JC Name" autocomplete="off" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">JCO Address</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Enter JCO Address" autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Jute Bag Type</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="B TWills" autocomplete="off">
                    </div>
                  </div>

                </div>
                
                
                <br /> <br/>
                <table class="table table-bordered" id="product_info_table">
                  <thead>
                    <tr>                      
                      <!-- <th >Image</th> -->
                      <th style="width:20%">District</th>
                      <th style="width:20%">Buffer Godown</th>
                      <th style="width:10%">Demand</th>
                      <th style="width:10%">Rate</th>
                      <th style="width:10%">Amount</th>
                      <th style="width:10%"><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                    </tr>
                  </thead>

                   <tbody>
                     <tr id="row_1">
                       <td>
                          <input type="text" name="sku[]" id="sku_1" class="form-control" onkeyup="getProductDataBySKU(1)" autocomplete="off">
                          <input type="hidden" name="sku_value[]" id="sku_value_1" class="form-control" autocomplete="off">
                       </td>
                       <!-- <td>
                          <div id="image_1"></div>
                       </td> -->
                       <td>
                          <input type="text" name="product_name[]" id="product_name_1" class="form-control" disabled autocomplete="off">
                          <input type="hidden" name="product[]" id="product_1" class="form-control" autocomplete="off">
                       </td>
                        <td><input type="text" name="qty[]" id="qty_1" class="form-control" required onkeyup="getTotal(1)"></td>
                        <td>
                          <input type="text" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off">
                          <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                          <input type="hidden" name="cost_price_value[]" id="cost_price_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td>
                          <input type="text" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
                          <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td><button type="button" class="btn btn-default" onclick="removeRow('1')"><i class="fa fa-close"></i></button></td>
                     </tr>
                   </tbody>
                </table>

                <br /> <br/>

                <div class="col-md-6 col-xs-12 pull pull-right">

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label">Gross Amount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="gross_amount" name="gross_amount" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
                       <input type="hidden" class="form-control" id="net_profit_value" name="net_profit_value" autocomplete="off">
                    </div>
                  </div>
                  <?php if($is_service_enabled == true): ?>
                  <div class="form-group">
                    <label for="service_charge" class="col-sm-5 control-label">S-Charge <?php echo $company_data['service_charge_value'] ?> %</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="service_charge" name="service_charge" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="service_charge_value" name="service_charge_value" autocomplete="off">
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if($is_vat_enabled == true): ?>
                  <div class="form-group">
                    <label for="vat_charge" class="col-sm-5 control-label">GST <?php echo $company_data['vat_charge_value'] ?> %</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="vat_charge" name="vat_charge" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="vat_charge_value" name="vat_charge_value" autocomplete="off">
                    </div>
                  </div>
                  <?php endif; ?>
                  <div class="form-group">
                    <label for="discount" class="col-sm-5 control-label">Discount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="net_amount" class="col-sm-5 control-label">Net Amount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="net_amount" name="net_amount" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off">
                    </div>
                  </div>

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="service_charge_rate" value="<?php echo $company_data['service_charge_value'] ?>" autocomplete="off">
                <input type="hidden" name="vat_charge_rate" value="<?php echo $company_data['vat_charge_value'] ?>" autocomplete="off">
                <button type="submit" class="btn btn-primary">Create Indent</button>
                <a href="<?php echo base_url('orders/') ?>" class="btn btn-warning">Back</a>
              </div>
            </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";

  $(document).ready(function() {
    $(".select_group").select2();
    // $("#description").wysihtml5();

    $("#mainOrdersNav").addClass('active');
    $("#addOrderNav").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>'; 
  
    // Add new row in the table 
    $("#add_row").unbind('click').bind('click', function() {
      var table = $("#product_info_table");
      var count_table_tbody_tr = $("#product_info_table tbody tr").length;
      var row_id = count_table_tbody_tr + 1;

      $.ajax({
          url: base_url + '/orders/getTableProductRow/',
          type: 'post',
          dataType: 'json',
          success:function(response) {
            
              // console.log(reponse.x);
               var html = '<tr id="row_'+row_id+'">'+
                   '<td>\
                          <input type="text" name="sku[]" id="sku_'+row_id+'" class="form-control" onkeyup="getProductDataBySKU('+row_id+')"  autocomplete="off">\
                          <input type="hidden" name="sku_value[]" id="sku_value_'+row_id+'" class="form-control" autocomplete="off">\
                       </td>\
                       <td>'+ 
                     '<input type="text" name="product_name[]" id="product_name_'+row_id+'" class="form-control" disabled autocomplete="off">\
                          <input type="hidden" name="product[]" id="product_'+row_id+'" class="form-control" autocomplete="off">'+
                    '</td>'+ 
                    '<td><input type="number" name="qty[]" id="qty_'+row_id+'" class="form-control" onkeyup="getTotal('+row_id+')"></td>'+
                    '<td><input type="text" name="rate[]" id="rate_'+row_id+'" class="form-control" disabled><input type="hidden" name="rate_value[]" id="rate_value_'+row_id+'" class="form-control"><input type="hidden" name="cost_price_value[]" id="cost_price_value_'+row_id+'" class="form-control" autocomplete="off"></td>'+
                    '<td><input type="text" name="amount[]" id="amount_'+row_id+'" class="form-control" disabled><input type="hidden" name="amount_value[]" id="amount_value_'+row_id+'" class="form-control"></td>'+
                    '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                    '</tr>';

                if(count_table_tbody_tr >= 1) {
                $("#product_info_table tbody tr:last").after(html);  
              }
              else {
                $("#product_info_table tbody").html(html);
              }

              $(".product").select2();

          }
        });

      return false;
    });

  }); // /document

  function getTotal(row = null) {
    if(row) {
      var total = Number($("#rate_value_"+row).val()) * Number($("#qty_"+row).val());
      total = total.toFixed(2);
      $("#amount_"+row).val(total);
      $("#amount_value_"+row).val(total);
      
      subAmount();

    } else {
      alert('no row !! please refresh the page');
    }
  }

  // get the product information from the server
  // function getProductData(row_id)
  // {
  //   var product_id = $("#product_"+row_id).val();    
  //   if(product_id == "") {
  //     $("#sku_"+row_id).val("");
  //     $("#sku_value_"+row_id).val("");

  //     $("#rate_"+row_id).val("");
  //     $("#rate_value_"+row_id).val("");

  //     $("#qty_"+row_id).val("");           

  //     $("#amount_"+row_id).val("");
  //     $("#amount_value_"+row_id).val("");

  //   } else {
  //     $.ajax({
  //       url: base_url + 'orders/getProductValueById',
  //       type: 'post',
  //       data: {product_id : product_id},
  //       dataType: 'json',
  //       success:function(response) {
  //         // setting the rate value into the rate input field
  //          $("#sku_"+row_id).val(response.sku);
  //          $("#sku_value_"+row_id).val(response.sku);

  //         $("#rate_"+row_id).val(response.price);
  //         $("#rate_value_"+row_id).val(response.price);

  //         $("#qty_"+row_id).val(1);
  //         $("#qty_value_"+row_id).val(1);

  //         var total = Number(response.price) * 1;
  //         total = total.toFixed(2);
  //         $("#amount_"+row_id).val(total);
  //         $("#amount_value_"+row_id).val(total);
          
  //         subAmount();
  //       } // /success
  //     }); // /ajax function to fetch the product data 
  //   }
  // }

  function getProductDataBySKU(row_id)
  {
    var product_id = $("#sku_"+row_id).val();
    if(product_id == "") {
      $("#sku_"+row_id).val("");
      $("#sku_value_"+row_id).val("");

      $("#product_"+row_id).val("");
      $("#product_name_"+row_id).val("");

      $("#rate_"+row_id).val("");
      $("#rate_value_"+row_id).val("");
      $("#cost_price_value_"+row_id).val("");

      $("#qty_"+row_id).val("");
      $("#qty_"+row_id).attr({'min':0,'max':0});           

      $("#amount_"+row_id).val("");
      $("#amount_value_"+row_id).val("");

    } else {
      $.ajax({
        url: base_url + 'orders/getProductValueBySKU',
        type: 'post',
        data: {product_sku : product_id},
        dataType: 'json',
        success:function(response) {
          // setting the rate value into the rate input field
           if(response) 
           {
              // $("#image_"+row_id).html('<img src="'+base_url+response.image+'" alt="'+response.name+'" height="50" width="50" class="thumbnail" />');

               $("#product_"+row_id).val(response.id);
               $("#product_name_"+row_id).val(response.name);

              $("#rate_"+row_id).val(response.price);
              $("#rate_value_"+row_id).val(response.price);
              $("#cost_price_value_"+row_id).val(response.cost_price);

              $("#qty_"+row_id).val(1);
              $("#qty_value_"+row_id).val(1);
              $("#qty_"+row_id).attr({'min':1,'max':response.qty});

              var total = Number(response.price) * 1;
              total = total.toFixed(2);
              $("#amount_"+row_id).val(total);
              $("#amount_value_"+row_id).val(total);
           }
           else
            {
                $("#product_"+row_id).val("");
                $("#product_name_"+row_id).val("");

                $("#rate_"+row_id).val("");
                $("#rate_value_"+row_id).val("");
                $("#cost_price_value_"+row_id).val("");

                $("#qty_"+row_id).val("");
                $("#qty_"+row_id).attr({'min':0,'max':0});           

                $("#amount_"+row_id).val("");
                $("#amount_value_"+row_id).val("");
            }
          
          subAmount();
        } // /success
      }); // /ajax function to fetch the product data 
    }
  }

  // calculate the total amount of the order
  function subAmount() {
    var service_charge = <?php echo ($company_data['service_charge_value'] > 0) ? $company_data['service_charge_value']:0; ?>;
    var vat_charge = <?php echo ($company_data['vat_charge_value'] > 0) ? $company_data['vat_charge_value']:0; ?>;

    var tableProductLength = $("#product_info_table tbody tr").length;
    var totalSubAmount = 0;
    var NetProfit = 0;
    for(x = 0; x < tableProductLength; x++) {
      var tr = $("#product_info_table tbody tr")[x];
      var count = $(tr).attr('id');
      count = count.substring(4);

      totalSubAmount = Number(totalSubAmount) + Number($("#amount_"+count).val());
      NetProfit = Number(NetProfit) + ( Number($('#rate_value_'+count).val()) - Number($('#cost_price_value_'+count).val()) ) * Number($('#qty_'+count).val());
    } // /for

    totalSubAmount = totalSubAmount.toFixed(2);
    NetProfit = NetProfit.toFixed(2);

    // sub total
    $("#gross_amount").val(totalSubAmount);
    $("#gross_amount_value").val(totalSubAmount);

    // vat
    var vat = (Number($("#gross_amount").val())/100) * vat_charge;
    vat = vat.toFixed(2);
    $("#vat_charge").val(vat);
    $("#vat_charge_value").val(vat);

    // service
    var service = (Number($("#gross_amount").val())/100) * service_charge;
    service = service.toFixed(2);
    $("#service_charge").val(service);
    $("#service_charge_value").val(service);
    
    // total amount
    var totalAmount = (Number(totalSubAmount) + Number(vat) + Number(service));
    totalAmount = totalAmount.toFixed(2);
    // $("#net_amount").val(totalAmount);
    // $("#totalAmountValue").val(totalAmount);

    var discount = $("#discount").val();
    if(discount) {
      var grandTotal = Number(totalAmount) - Number(discount);
      grandTotal = grandTotal.toFixed(2);
      $("#net_amount").val(grandTotal);
      $("#net_amount_value").val(grandTotal);
      $('#net_profit_value').val(Number(NetProfit) - Number(discount));
    } else {
      $("#net_amount").val(totalAmount);
      $("#net_amount_value").val(totalAmount);
      $('#net_profit_value').val(NetProfit);
      
    } // /else discount 

  } // /sub total amount

  function removeRow(tr_id)
  {
    $("#product_info_table tbody tr#row_"+tr_id).remove();
    subAmount();
  }
</script>