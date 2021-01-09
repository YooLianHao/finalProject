<script src="https://code.jquery.com/jquery-3.3.1.min.js"
			  ></script>
<script>
	$(document).ready(function() {
    var max_fields      = 50; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    var add_group       = $(".add_group_button"); //Add button ID
    var x = 1; //initlal text box count
	
	
   $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
	
		     //text box increment
            $(wrapper).append('<br><div><input type="text" placeholder="choices" name="mytext[]" class="col-md-6 " ><br></div>'); //add input box
            x++; 
	  }
    });
    $(add_group).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
	
		     //text box increment
            $(wrapper).append('<br><div><input type="text" name="mytext[]" placeholder="Add Group" class="form-control"></div>'); //add input box
            x++; 
	  }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       
		e.preventDefault(); 
		$(this).parent('div').remove(); 
		x--;
    })
  
});
	
	</script>
<div class="col-md-12">
 <!--
     this one is multimple fields dynamically, still haven't put into lqs, ,this is including the date and name of election.
     must be function and view.
     link:https://www.youtube.com/watch?v=7efeIJ7oFTc&t=395s
  -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Running Position</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <div class="input_fields_wrap">
                <label for="add_group">Add Group</label>
                <div><input type="text" name="mytext[]" class="form-control" placeholder="Add Group"></div>
              </div>
              <br><button class="add_field_button">Add More choices</button><br>
              <br><button class="add_group_button">Add More Group</button>
            <!-- /.card-body -->
          </div>