
</script>
<!-- div class="container-fluid" --> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Indents</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Indents</li>
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
          <h3 class="mb-0">Add Indent</h3>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <form action="javascript:">

                  <div class="form-group">
                    <label for="">Indent Date</label>
                    <input type="date" class="form-control" id="indent_dt" name="indent_date" placeholder="Indent Date">
                  </div>
                  
                  <div class="form-group">
                      <label for="">Indent Number</label>
                      <input type="text" class="form-control" id="indent_no" name="" placeholder="Enter Indent Number">
                    </div>
                  <div class="form-group">
                    <label for="">Indent Month</label>
                    <select class="form-control" id="indentmonth" name="">
                      <option value="0" selected disabled hidden>
                        Select Month
                      </option>
                      <option value="Jan-2020" >Jan-2020</option>
					  <option value="Feb-2020" >Feb-2020</option>
					  <option value="Mar-2020" >Mar-2020</option>
					  <option value="Apr-2020" >Apr-2020</option>
					  <option value="May-2020" >May-2020</option>
					  <option value="Jun-2020" >Jun-2020</option>
					  <option value="Jul-2020" >Jul-2020</option>
					  <option value="Aug-2020" >Aug-2020</option>
					  <option value="Sep-2020" >Sep-2020</option>
					  <option value="Oct-2020" >Oct-2020</option>
					  <option value="Nov-2020" >Nov-2020</option>
					  <option value="Dec-2020" >Dec-2020</option>
					                        
                    </select>
                  </div>
				  <div class="form-group">
                      <label for="">Indent Qty(Bales)</label>
                      <input type="text" class="form-control" id="indent_qty" name="" placeholder="Enter No.of Bales">
                    </div>
                  
                </form>
              </div>

              <div class="col-md-6">
                <form action="javascript:">
                  <div class="form-group">
				   
				   
				  <div class="form-group">
                    <label for="">SPA Name</label>
                    <select class="form-control" id="spaname" name="">
                      <option value="0" selected disabled hidden>
                        Select State
                      </option>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      
                    </select>
                  </div>
				  <div class="form-group">
                    <label for="">Gunny Bag Model</label>
                    <select class="form-control" id="bagmodel" name="">
                      <option value="0" selected disabled hidden>
                        Select Bag Model
                      </option>
                      <option value="BT-Will-50kgs" >BT-Will-50kgs</option>
                      
                    </select>
                  </div>
				  <div class="form-group">
                    <label for="">Season</label>
                    <select class="form-control" id="season" name="">
                      <option value="0" selected disabled hidden>
                        Select Season
                      </option>
                      <option value="Kharif Season">Kharif Season</option>
					  <option value="Rabi Season">Rabi Season</option>                      
                    </select>
                  </div>
				   <div class="form-group">  
                    <div class="text-right mb-4">
                      <button type="submit" class="btn btn-primary" (click)="on_Submit()">Add Indent</button>
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
    var indent_dt= document.getElementById("indent_dt");
    var indent_no= document.getElementById("indent_no");
	var indentmonth= document.getElementById("indentmonth");
	var indent_qty= document.getElementById("indent_qty");
	var spaname= document.getElementById("spaname");
	var bagmodel= document.getElementById("bagmodel");
	var season= document.getElementById("season");
		
    $.post("http://127.0.0.1:8000/indent/",    
	{"em_indentdate":indent_dt.value,"em_indentno":indent_no.value,"em_indent_month":indentmonth.value,"em_indent_qty":indent_qty.value,"em_spaname":spaname.value,"em_gunnybag_type":bagmodel.value,"em_indent_season":season.value},
    function(data,Status){
      alert("Data: " + data + "\nStatus: " + Status);
	  console.log({"em_indentdate":indent_dt.value,"em_indentno":indent_no.value,"em_indent_month":indentmonth.value,"em_indent_qty":indent_qty.value,"em_spaname":spaname.value,"em_gunnybag_type":bagmodel.value,"em_indent_season":season.value});
	  
    });	 
  });
});</script>
