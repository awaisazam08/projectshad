

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KUC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
 
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet"> 
 
  <!-- DataTables -->
  <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 
  
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  
<style>  
 
.rankingstyle {

	background-color:#f4f6f9;
	font-size: 20px;
	padding-left:15px;
	padding-right:15px;
	padding-bottom:10px;
	padding-top:10px;
	font-weight: bold;
	border-radius: 5px;

} 
  
  
</style>  
  
</head>
<body class="hold-transition sidebar-mini" style="background-color:#f4f6f9;">
<div class="wrapper">
  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Loading Modal -->

<div class="modal fade" id="loadingmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
        <span class="fa fa-spinner fa-spin fa-3x"></span>
    </div>
</div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- left column -->


            <div class="col-md-10 float-left offset-md-1">
              <!-- /.card-header -->
              <div class="card-body">
				
			<div class="row">		
		
			<div class="col-md-2">
			
				<img src="logo.png" class="img-fluid" style="width:181; height:77px; " alt="Responsive image">

			</div>
			
			<div class="col-md-9 offset-md-1">
			
				<img src="banner.png" class="img-fluid" style="width:843; height:77px; " alt="Responsive image">

			</div>			
				
			</div>		
				
              </div>
              <!-- /.card-body -->
            </div>


            <div class="card col-md-10 float-left offset-md-1">
              <div class="card-header">
                <h3 class="card-title">Leaderboard</h3>
				
			<div class="col-md-2 float-right">
							
				<div class="dropdown show">
				  
				  <a class="btn btn-danger dropdown-toggle btn-sm" id="selectedtop5drop" href="#" style="background-color:#f7f7f8; color:black; border-color: #f7f7f8;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					March 2022
				  </a>				  
				  

				  <div class="dropdown-menu" id="monthdropdown">
					

				  </div>
				</div>			
							
			
			</div>				
				
				
              </div>
              <!-- /.card-header -->
              <div class="card-body">
				
                <table id="top5recs" class="table">
                  <thead>
                  <tr>
                    <th style="text-align:center;">RANKING</th>
					<th style="text-align:center;"></th>
                    <th style="text-align:center;">NAME</th>
                    <th style="text-align:center;">VOLUME</th>
                    <th style="text-align:center;">MONTHLY CHANGE</th>
                  </tr>
                  </thead>
                  <tbody id="top5recsrows">
				  
			
      
                  </tbody>
                </table>				
				
				
				
              </div>
              <!-- /.card-body -->
            </div>
			


            <div class="card col-md-10 float-left offset-md-1">
              <div class="card-header">
                <h3 class="card-title">Mortgage Team</h3>
			
			<div class="col-md-2 float-right">
							
				<div class="dropdown show">
				  <a class="btn btn-danger dropdown-toggle btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Add Member
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#" onclick="showAddMemberModal();">Add Member</a>
					<a class="dropdown-item" href="#">Import Team</a>
				  </div>
				</div>			
							
			
			</div>			
				
				
              </div>
              <!-- /.card-header -->
              <div class="card-body">
				
                <table id="allrecs" class="table">
                  <thead>
                  <tr>
					<th></th>
                    <th>Name</th>
                    <th>Email</th>
					<th>Month</th>
                    <th>Volume</th>
                    <th>Details</th>
                  </tr>
                  </thead>
                  <tbody id="allrecsrows">
			
      
                  </tbody>
                </table>				
				
				
				
              </div>
              <!-- /.card-body -->
            </div>




          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	

<!-- Modal for Add New Member -->

<div class="modal fade" id="memberaddmodal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Team Member</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  
			<div class="form-group">
			  <label for="usr">Full Name:</label>
			  <input type="text" class="form-control" style="background-color:#f4f6f9;" id="memName" placeholder="Enter Full Name">
			</div>
		
		
			<div class="form-group">
			  <label for="usr">Email address:</label>
			  <input type="text" class="form-control" style="background-color:#f4f6f9;" id="memEmail" placeholder="Enter email">
			</div>		
		
		
      </div>
	  
	  
      <div class="modal-header">
        <h4 class="modal-title">Mortgage Volume</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>	

      <!-- Modal body -->
      <div class="modal-body">
	  
	  
	  
	  
	  
            <div class="form-group col-xs-6">
                <label for="firstname" class="sr-only"></label>
				<input type="text" class="form-control" placeholder="Select Date" name="datepicker" id="addmemberdate" />
            </div>

            <div class="form-group col-xs-6">
                <label for="firstname" class="sr-only"></label>
                <input id="memvolume" class="form-control input-group-lg reg_name" type="email" placeholder="Enter Volume"
                       
                       placeholder="Enter Volume"/>
            </div>			
			
		
      </div>


	  

      <!-- Modal footer -->
      <div class="modal-footer">
	    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" onclick="addNewMemebr();" class="btn btn-primary" >Submit</button>
      </div>

    </div>
  </div>
</div>	




<!-- Modal for Update Member -->

<div class="modal fade" id="memberupdatemodal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Team Member</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  
			<div class="form-group">
			  <label for="usr">Full Name:</label>
			  <input type="text" class="form-control" style="background-color:#f4f6f9;" id="upmemName" placeholder="Enter Full Name">
			</div>
		
		
			<div class="form-group">
			  <label for="usr">Email address:</label>
			  <input type="text" class="form-control" style="background-color:#f4f6f9;" id="upmemEmail" placeholder="Enter email">
			</div>		
		
		
      </div>
	  
	  
      <div class="modal-header">
        <h4 class="modal-title">Mortgage Volume</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>	

      <!-- Modal body -->
      <div class="modal-body">
	  
	  
                <table id="updatemodaltable" class="table">
                  <thead>
                  <tr>
                    <th style="text-align:center;">Month</th>
                    <th style="text-align:center;">Amount</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>
                  <tbody id="updatemodaltablebody">
				  
      
                  </tbody>
                </table>	  
	  
	  
            <div class="form-group col-xs-6">
                <label for="firstname" class="sr-only"></label>
				<input type="text" class="form-control" placeholder="Select Date" name="datepicker" id="editmemberdate" />
            </div>	  

            <div class="form-group col-xs-6">
                <label for="firstname" class="sr-only"></label>
                <input id="upmemvolume" class="form-control input-group-lg reg_name" type="email" placeholder="Enter Volume"
                       
                       placeholder="Enter Volume"/>
            </div>	


			
			<button type="button" onclick="addincomeformemebr();" class="btn btn-primary" >Save</button>
		
      </div>


	  

      <!-- Modal footer -->
      <div class="modal-footer">
	    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" onclick="editmember();" class="btn btn-primary" >Submit</button>
      </div>

    </div>
  </div>
</div>
	
  </div>
  
<input type="hidden" id="addincomememberid"/>  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="/plugins/jquery-validation/additional-methods.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

<!-- DataTables  & /plugins -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/plugins/jszip/jszip.min.js"></script>
<script src="/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" crossorigin="anonymous"></script>

<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>

$("#addmemberdate").datepicker( {
    format: "MM-yyyy",
    startView: "months", 
    minViewMode: "months"
});

$("#editmemberdate").datepicker( {
    format: "MM-yyyy",
    startView: "months", 
    minViewMode: "months"
});


$(document).ready(function () {

// Ajax to Get Months and Years for Dropdown

$.ajax({
    url: "http://localhost:8000/getMonthYear", 
    type: "GET",

    success: function(result) {
        //console.log(result);
		
	var fres = jQuery.parseJSON(result);		
		
      fres.forEach(function(obj)
      {	
	  
			var paramet = obj.month + " " + obj.year;
	  
			var temp = '<a class="dropdown-item" href="#" onClick="getrecordsformonthyear(\'' +paramet+ '\')" >'+obj.month+' '+obj.year+'</a>';
				
				
		
		  $('#monthdropdown').append(temp);		  
		  
		  
		  
		  
		  			 
      });		
		
		
    }
});


	
// Ajax to Get All Memebrs

$.ajax({
    url: "http://localhost:8000/getMembersTables", 
    type: "GET",

    success: function(result) {
        //console.log(result);
		
	var fres = jQuery.parseJSON(result);		
		
      fres.forEach(function(obj)
      {	
		  
			var temp = '<tr>';
			
			  temp += '<td><span style="margin-right:10px;"><img src="user.jpg" class="img-fluid" style="width:36; height:36px; " alt="Responsive image"></span></td>';
			  
			  
			  temp +='<td>'+obj.memName+'</td>';
			  
			  temp +='<td>'+obj.memEmail+'</td>';
			  
			  temp +='<td>'+obj.month+' '+obj.year+'</td>';
			  
			  temp +='<td>'+obj.volume+'</td>';
			  
			  
			 
			  temp +='<td><button type="button" onclick="showUpdateMemberModal('+obj.mem_id+');" class="btn btn-block bg-gradient-primary btn-sm">Edit</button></td>';
			  
			
			  

			temp +='</tr>';	
		
		  $('#allrecsrows').append(temp);		  
		  
		  
		  
		  
		  			 
      });


    $('#allrecs').DataTable({
        pagingType: 'full_numbers',
		"searching": false,
		"info": false,
		"bInfo" : false,
		"lengthChange": false,
		"ordering": false,
    });	  
		
		
    }
});


// Ajax to get top 5 memebrs

$.ajax({
    url: "http://localhost:8000/getTopMembers", 
    type: "GET",

    success: function(result) {
        //console.log(result);
		
	var fres = jQuery.parseJSON(result);		
	
	var rank = 1;
		
      fres.forEach(function(obj)
      {
		  
			var temp = '<tr>';
			
			  
			  temp +='<td style="width:10%; text-align:center;"><span class="rankingstyle">'+rank+'</span></td>';
			  
			  temp += '<td><span style="margin-right:10px;"><img src="user.jpg" class="img-fluid" style="width:36; height:36px; " alt="Responsive image"></span></td>';
			  
			  temp +='<td style="width:20%; text-align:center;">'+obj.memName+'</td>';
			  
			  temp +='<td style="width:30%; text-align:center;">$'+obj.volume+'</td>';
			  
			  temp +='<td style="width:30%; text-align:center;"><span style="color:red;">--</span></td>';
			  

			temp +='</tr>';	
		
		  $('#top5recsrows').append(temp);	
			
		rank++;	
		  
		  
		  
		  
		  			 
      });		
		
		
    }
});
	
	

});


function showAddMemberModal()
{	
	$('#memberaddmodal').modal('show');
}

function showUpdateMemberModal(uid)
{	
	//alert(uid);

// Ajax to get amount details of memebr


$('#addincomememberid').val(uid);

$.ajax({
    url: "http://localhost:8000/getIncomeDetails/"+uid, 
    type: "GET",

    success: function(result) {
        //console.log(result);
		
	var fres = jQuery.parseJSON(result);

	$("#updatemodaltablebody").empty();

      fres.forEach(function(obj)
      {
		  
			var temp = '<tr>';
			
			  
			  temp +='<td style="text-align: center;">'+obj.month+' '+obj.year+'</td>';
			  
			  temp +='<td style="text-align: center;">$'+obj.volume+'</td>';
			  
			  temp +='<td style="text-align: center;"><button type="button" class="btn" style="background-color:#f4f6f9;" onclick="deletemembervolume('+obj.id+');"><i class="fa fa-trash" style="color:#007bff;"></button></td>';
			  

			temp +='</tr>';	
		
		  $('#updatemodaltablebody').append(temp);		  
		  			 
      });
	
	
		
    }
});		
	
	
// Ajax to get personal details of memebr

$.ajax({
    url: "http://localhost:8000/getPerDetails/"+uid, 
    type: "GET",

    success: function(result) {
        //console.log(result);
		
	var fres = jQuery.parseJSON(result);

		$('#upmemName').val(fres.memName);		  
		$('#upmemEmail').val(fres.memEmail);
	
	
		
    }
});	
	
	
	
	$('#memberupdatemodal').modal('show');
}

function addNewMemebr()
{

var oneDate = moment($("#addmemberdate").datepicker('getDate'));

var monthName = oneDate.format('MMMM');

var year = $("#addmemberdate").datepicker('getDate').getFullYear();



  var  mname = $("#memName").val();
  var  memail = $("#memEmail").val();
  var  memvolume = $("#memvolume").val();



    $.ajax({
        url: 'http://localhost:8000/addMember/'+mname+'/'+memail+'/'+monthName+'/'+year+'/'+memvolume,
        type: 'GET',
        success: function(){
        
          
		alert("Data Added");

        },
        error: function(){
            alert('error');
        }
    });    



}


// Funciton to delete volume entry of a memebr

function deletemembervolume(uid)
{
	
// Ajax to delete income of memebr

$.ajax({
    url: "http://localhost:8000/delIncomeDetails/"+uid, 
    type: "GET",

    success: function(result) {
        //console.log(result);
		alert("Record Deleted");
    }
});	
	

}


// Function to add income of a member

function addincomeformemebr()
{


var oneDate = moment($("#editmemberdate").datepicker('getDate'));

var monthName = oneDate.format('MMMM');

var year = $("#editmemberdate").datepicker('getDate').getFullYear();

	//alert($('#addincomememberid').val());
	
  var  memid = $('#addincomememberid').val();
  var  volume = $("#upmemvolume").val();


    $.ajax({
        url: 'http://localhost:8000/addMemebrIncome/'+memid+'/'+monthName+'/'+year+'/'+volume,
        type: 'GET',
        success: function(){
        
          
		alert("Data Added");

        },
        error: function(){
            alert('error');
        }
    }); 	
}


// Funciton to edit name or email of member

function editmember()
{

  var  id = $('#addincomememberid').val();
  var  name = $("#upmemName").val();
  var  email = $("#upmemEmail").val();


    $.ajax({
        url: 'http://localhost:8000/editPerDetails/'+id+'/'+name+'/'+email,
        type: 'GET',
        success: function(){
        
          
		alert("Data Updated");

        },
        error: function(){
            alert('error');
        }
    }); 	
	

}

function getrecordsformonthyear(myear)
{
	const myArray = myear.split(" ");
	
	var month = myArray[0];
	var year = myArray[1];
	
$("#selectedtop5drop").html(month + " " + year);
	
$("#top5recsrows").empty();
	
// Ajax to get top 5 memebrs based on month and year

$.ajax({
    url: 'http://localhost:8000/getTopMembersOnParams/'+month+'/'+year,
    type: "GET",

    success: function(result) {
        //console.log(result);
		
	var fres = jQuery.parseJSON(result);		
	
	var rank = 1;
		
      fres.forEach(function(obj)
      {
		  
			var temp = '<tr>';
			
			  
			  temp +='<td style="width:10%; text-align:center;"><span class="rankingstyle">'+rank+'</span></td>';
			  
			  temp += '<td><span style="margin-right:10px;"><img src="user.jpg" class="img-fluid" style="width:36; height:36px; " alt="Responsive image"></span></td>';
			  
			  temp +='<td style="width:20%; text-align:center;">'+obj.memName+'</td>';
			  temp +='<td style="width:30%; text-align:center;">$'+obj.volume+'</td>';
			  
			  temp +='<td style="width:30%; text-align:center;"><span style="color:red;">--</span></td>';
			  

			temp +='</tr>';	
		
		  $('#top5recsrows').append(temp);		  
		  
		  rank++;
		  
		  
		  
		  			 
      });		
		
		
    }
});	
	
	
}




</script>
</body>
</html>