
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Trucks</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Trucks</li>
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

        <?php if(in_array('createProduct', $user_permission)): ?>
          <a href="<?php echo base_url('logistics/addtruck') ?>" class="btn btn-primary">Add Truck</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <?php endif; ?>
		 <?php if(in_array('createProduct', $user_permission)): ?>
          <a href="<?php echo base_url('logistics/tracking') ?>" class="btn btn-primary">Truck Trucking</a>
         <?php endif; ?>
		 
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Manage Trucks</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="myData" class="table table-bordered table-striped">
              <thead>
              <tr bgcolor="skyblue">
				<th style="text-align: center;">Transporter Name</th>
				<th style="text-align: center;">Transport Code</th>
				<th style="text-align: center;">Vehicle No</th>
				<th style="text-align: center;">Truck Type</th>
				<th style="text-align: center;">Capacity (Tons)</th>
				<th style="text-align: center;">No.Of Wheels</th>				
				<th style="text-align: center;">Truck Year</th>
				<th style="text-align: center;">Actions</th>
              </tr>			  
              </thead>
			
            </table>
          </div>
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

<?php if(in_array('deleteProduct', $user_permission)): ?>
<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Remove Product</h4>
      </div>

      <form role="form" action="<?php echo base_url('products/remove') ?>" method="post" id="removeForm">
        <div class="modal-body">
          <p>Do you really want to remove?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endif; ?>





<script type="text/javascript">
	const api_url='http://127.0.0.1:8000/truck/';
        fetch(api_url)
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                appendData(data);
            })
            .catch(function (err) {
                console.log('error: ' + err);
            });
			//alert(data);
		
        function appendData(data) {
            var mainContainer = document.getElementById("myData");
            for (var i = 0; i < data.length; i++) {
                //if (data[i].em_status == "Created"){
				var td = document.createElement("td");
                td.innerHTML = data[i].em_orderno;
                mainContainer.appendChild(td).style.textAlign = "center";
                td = document.createElement("td");
                td.innerHTML = data[i].em_batchno;
                mainContainer.appendChild(td).style.textAlign = "center";				
				td = document.createElement("td");
                td.innerHTML = data[i].em_assetno;
                mainContainer.appendChild(td).style.textAlign = "center";
				td = document.createElement("td");
                td.innerHTML = data[i].em_name;
                mainContainer.appendChild(td).style.textAlign = "center";
				td = document.createElement("td");
                td.innerHTML = data[i].em_asset_type;
                mainContainer.appendChild(td).style.textAlign = "center";
				td = document.createElement("td");
                td.innerHTML = data[i].em_assetdt;
                mainContainer.appendChild(td).style.textAlign = "center";
				td = document.createElement("td");
                td.innerHTML = data[i].em_jmname;
                mainContainer.appendChild(td).style.textAlign = "left";
				td = document.createElement("td");
                td.innerHTML = data[i].em_whname;
                mainContainer.appendChild(td).style.textAlign = "center";
				
				button = document.createElement("button");
                button.innerHTML = "Edit";
                mainContainer.appendChild(button).style.textAlign = "center";			
				button = document.createElement("button");
                button.innerHTML = "SendToBlockchain";
                mainContainer.appendChild(button).style.textAlign = "center";			
                var tr = document.createElement("tr");
                mainContainer.appendChild(tr);

            }
        }
		
    </script>
