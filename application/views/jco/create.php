<!-- div class="container-fluid" --> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Orders</small>
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

<div class="container-fluid mt--7">

  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header bg-transparent">
          <h3 class="mb-0">Add Order</h3>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <form action="javascript:">
                  
				   <div class="form-group">
                    <label for="">Order Date</label>
                    <input type="date" class="form-control" id="or_dt" name="" placeholder="Order Date">
                  </div>
                  <div class="form-group">
                    <label for="">PCSO Number</label>
                    <input type="text" class="form-control" id="or_no" name="" placeholder="Enter Production Control cum Supply Order Number">
                  </div>
				  <div class="form-group">
                    <label for="">Indent Number</label>
                    <input type="text" class="form-control" id="indent_no" name="" placeholder="Enter Indent Number">
                  </div>
                  
                </form>
              </div>

              <div class="col-md-4">
                <form action="javascript:">
                  <div class="form-group">
				   
				  <div class="form-group">
                    <label for="">SPA Name</label>
                    <input type="text" class="form-control" id="spaname" name="" placeholder="Enter State Name">
                  </div>
				  <div class="form-group">
                    <label for="">Bag Model</label>
                    <select class="form-control" id="bagmodels" name="">
                      <option value="0" selected disabled hidden>
                        Select Bag
                      </option>
                      <option value="BT-Will-50kgs" >BT-Will-50kgs</option>
                      
                    </select>
                  </div>
				  <div class="form-group">
                    <label for="">Order Qty(Bales)</label>
                    <input type="text" class="form-control" id="or_qty" name="" placeholder="Enter No.of Bales">
                  </div>
				  </div>
                 
                </form>
              </div>

              <div class="col-md-4">
                <form action="javascript:">
                  <div class="form-group">
                    
					<div class="form-group">
                      <label for="">Jute Mill Name</label>
                      <input type="text" class="form-control" id="jm_name" name="" placeholder="Enter Jute Mill Name">
                    </div>
					<div class="form-group">
                      <label for="">Warehouse Name</label>
                      <input type="text" class="form-control" id="wh_name" name="" placeholder="Enter Warehouse Name">
                    </div>
                  <br>
                  <div class="form-group">  
                    <div class="text-right mb-4">
                      <button type="submit" class="btn btn-primary" (click)="on_Submit()">Add Order</button>
                    </div>
					</div>
                  </div>
                </form>
              </div>

            </div>
        </div>
      </div>
    </div>
  </div>
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

</div>

<script type="text/javascript">
$(document).ready(function(){
  $("button").click(function(){
    var ordt= document.getElementById("or_dt");
    var orno= document.getElementById("or_no");
	var indentno= document.getElementById("indent_no");
	var spaname= document.getElementById("spaname");
	var bagmodels= document.getElementById("bagmodels");
	var orqty= document.getElementById("or_qty");
	var jmname= document.getElementById("jm_name");
	var whname= document.getElementById("wh_name");
    $.post("http://127.0.0.1:8000/order/",
	{"em_orderdate":ordt.value,"em_orderno":orno.value,"em_indentno":indentno.value,"em_spaname":spaname.value,"em_gunnybag_type":bagmodels.value,"em_order_qty":orqty.value,"em_jmname":jmname.value,"em_whname":whname.value,"em_order_status":"Created"},
    function(data,Status){
      alert("Data: " + data + "\nStatus: " + Status);
	  console.log({"em_orderdate":ordt.value,"em_orderno":orno.value,"em_indentno":indentno.value,"em_spaname":spaname.value,"em_gunnybag_type":bagmodels.value,"em_order_qty":orqty.value,"em_jmname":jmname.value,"em_whname":whname.value});
	  
    });
  });
});</script>
