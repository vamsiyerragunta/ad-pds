<!-- div class="container-fluid" --> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Logistics</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Logistics</li>
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
          <h3 class="mb-0">Add Bill of Material</h3>
        </div>
        <div class="card-body">
            <div class="row">
				<div class="card-header bg-transparent">
					<h4 class="mb-0">&nbsp;&nbsp;&nbsp;&nbsp;Origin Details:</h4>
				</div>
              <div class="col-md-4">
                <form action="javascript:">
				<div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control" id="mnft_date" name="mnft_date" placeholder="Manufactured Date">
                  </div>                  
                   
				  <div class="form-group">
                    <label for="">Email ID</label>
                    <input type="text" class="form-control" id="asset_name" name="" placeholder="Enter Email ID">
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
                    <label for="">Contact Number</label>
                    <input type="text" class="form-control" id="asset_name" name="" placeholder="Enter Contact Number">
                  </div>
				  
				  </div>
                 
                </form>
              </div>

              <div class="col-md-4">
                <form action="javascript:">
                  <div class="form-group">
				  <div class="form-group">
                      <label for="">Jute Mill Code</label>
                      <input type="text" class="form-control" id="jm_code" name="" placeholder="Enter Jute Mill Code">
                    </div>
				  <div class="form-group">
                    <label for="">Jute Mill Address</label>
                    <input type="text" class="form-control" id="jm_add" name="" placeholder="Enter Jute Mill Address">
                  </div>
                  </div>
                </form>
              </div>

            </div>
			<div class="row">
				<div class="card-header bg-transparent">
					<h4 class="mb-0">&nbsp;&nbsp;&nbsp;&nbsp;Destination Details:</h4>
				</div>
              <div class="col-md-4">
                <form action="javascript:">
				<div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control" id="mnft_date" name="mnft_date" placeholder="Manufactured Date">
                  </div>                  
                   
				  <div class="form-group">
                    <label for="">Email ID</label>
                    <input type="text" class="form-control" id="asset_name" name="" placeholder="Enter Email ID">
                  </div>                  
                </form>
              </div>

              <div class="col-md-4">
                <form action="javascript:">
                  <div class="form-group">
				  <div class="form-group">
                      <label for="">Warehouse Name</label>
                      <input type="text" class="form-control" id="jm_name" name="" placeholder="Enter Warehouse Name">
                    </div>			   
				   
				  <div class="form-group">
                    <label for="">Contact Number</label>
                    <input type="text" class="form-control" id="asset_name" name="" placeholder="Enter Contact Number">
                  </div>
				  
				  </div>
                 
                </form>
              </div>

              <div class="col-md-4">
                <form action="javascript:">
                  <div class="form-group">
				  <div class="form-group">
                      <label for="">Warehouse Code</label>
                      <input type="text" class="form-control" id="jm_code" name="" placeholder="Enter Warehouse Code">
                    </div>
				  <div class="form-group">
                    <label for="">Warehouse Address</label>
                    <input type="text" class="form-control" id="jm_add" name="" placeholder="Enter Warehouse Address">
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
    var assetno= document.getElementById("asset_no");
    var batchno= document.getElementById("bt_no");
	var orderno= document.getElementById("or_no");
	var mnftdate= document.getElementById("mnft_date");
	var assetname= document.getElementById("asset_name");
	var assettype= document.getElementById("assettype");
	var whname= document.getElementById("wh_name");
	var jmname= document.getElementById("jm_name");
	var jmadd= document.getElementById("jm_add");
	//alert(assettype.value);
    $.post("http://127.0.0.1:8000/asset/",    
	{"em_assetno":assetno.value,"em_batchno":batchno.value,"em_orderno":orderno.value,"em_assetdt":mnftdate.value,"em_name":assetname.value,"em_asset_type":assettype.value,"em_whname":whname.value,"em_jmname":jmname.value,"em_jmadd":jmadd.value,"em_status":"Created","em_assetowner":"Jute Mill"},
    function(data,Status){
      alert("Data: " + data + "\nStatus: " + Status);
	  console.log({"em_assetno":assetno.value,"em_batchno":batchno.value,"em_orderno":orderno.value,"em_assetdt":mnftdate.value,"em_name":assetname.value,"em_asset_type":assettype.value,"em_whname":whname.value,"em_jmname":jmname.value,"em_jmadd":jmadd.value});
	  
    });
	 $.post("http://127.0.0.1:8000/qualitycontrol/",  
	{"em_qcassetno":assetno.value,"em_qcbatchno":batchno.value,"em_qcorderno":orderno.value,"em_qcmnft_dt":mnftdate.value,"em_qcassetname":assetname.value,"em_qcassettype":assettype.value,"em_qcjmname":jmname.value,"em_qcstatus":"QC Pending"},
    function(data,Status){
      alert("Data: " + data + "\nStatus: " + Status);
	  console.log({"em_qcassetno":assetno.value,"em_qcbatchno":batchno.value,"em_qcorderno":orderno.value,"em_qcmnft_dt":mnftdate.value,"em_qcassetname":assetname.value,"em_qcassettype":assettype.value,"em_qcjmname":jmname.value});
	  
    });
  });
});</script>
