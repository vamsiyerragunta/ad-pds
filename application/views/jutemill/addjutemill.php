 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>JuteMills</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">JuteMills</li>
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
          <h3 class="mb-0">Add JuteMill</h3>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <form action="javascript:">

                  <div class="form-group">
                      <label for="">JuteMill Name</label>
                      <input type="text" class="form-control" id="jmname" name="" placeholder="Enter JuteMill Name">
                    </div>
                  
                  <div class="form-group">
                      <label for="">JuteMill Code</label>
                      <input type="text" class="form-control" id="jmcode" name="" placeholder="Enter JuteMill Code">
                    </div>
                  <div class="form-group">
                    <label for="">JuteMill GSTIN</label>
                    <input type="text" class="form-control" id="jmgstin" name="" placeholder="Enter JuteMill GSTIN">
                  </div>
                  
                </form>
              </div>

              <div class="col-md-4">
                <form action="javascript:">
                  <div class="form-group">
				   
				    <div class="form-group">
                    <label for="">Contact Person</label>
                    <input type="text" class="form-control" id="jmcontactperson" name="" placeholder="Enter Contact Person Name">
                  </div>
				  <div class="form-group">
                    <label for="">Contact No</label>
                    <input type="text" class="form-control" id="jmcontactno" name="" placeholder="Enter Contact No">
                  </div>
				  <div class="form-group">
                    <label for="">Email ID</label>
                    <input type="text" class="form-control" id="jmemail" name="" placeholder="Enter Email ID">
                  </div>			  
				  </div>
                 
                </form>
              </div>

              <div class="col-md-4">
                <form action="javascript:">
                  <div class="form-group">
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" class="form-control" id="jmaddress" name="" placeholder="Enter Address">
                    </div>
					<div class="form-group">
                      <label for="">Area Office</label>
                      <input type="text" class="form-control" id="jmofficearea" name="" placeholder="Enter Area Office Address">
                    </div>
                  
                  <div class="form-group">  
                    <div class="text-right mb-4">
                      <button type="submit" class="btn btn-primary" (click)="on_Submit()">Add JuteMill</button>
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
<script type="text/javascript">
$(document).ready(function(){
  $("button").click(function(){
    var jmname= document.getElementById("jmname");
    var jmcode= document.getElementById("jmcode");
	var jmgstin= document.getElementById("jmgstin");
	var jmcontactperson= document.getElementById("jmcontactperson");
	var jmcontactno= document.getElementById("jmcontactno");
	var jmemail= document.getElementById("jmemail");
	var jmaddress= document.getElementById("jmaddress");
	var jmofficearea= document.getElementById("jmofficearea");
	
    $.post("http://127.0.0.1:8000/jutemill/",    
	{"em_jmname":jmname.value,"em_jmcode":jmcode.value,"em_jmgstin":jmgstin.value,"em_jmcontact_person":jmcontactperson.value,"em_jmcontact_no":jmcontactno.value,"em_jmemail_id":jmemail.value,"em_jmaddress":jmaddress.value,"em_jmoffice_area_address":jmofficearea.value},
    function(data,Status){
      alert("Data: " + data + "\nStatus: " + Status);
	  console.log({"em_jmname":jmname.value,"em_jmcode":jmcode.value,"em_jmgstin":jmgstin.value,"em_jmcontact_person":jmcontactperson.value,"em_jmcontact_no":jmcontactno.value,"em_jmemail_id":jmemail.value,"em_jmaddress":jmaddress.value,"em_jmoffice_area_address":jmofficearea.value});
	  
    });
  });
});</script>
