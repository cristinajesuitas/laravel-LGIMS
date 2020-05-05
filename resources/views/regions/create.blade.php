<!-- Button trigger modal -->


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRegionModal">Add Region</button>
    
    <form method="POST" action="/psgc" id="addRegionForm">
                    @csrf

<!-- Modal -->
<div class="modal fade" id="addRegionModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addRegionModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

        <div class="alert alert-danger" style="display:none"></div>

            <div class="modal-header bg-info">

                <h5 class="modal-title" id="addRegionModalLabel">Add Region</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

            </div>

                <div class="modal-body">

                        <div class="form-group row">

                            <label for="name" class="col-sm-3 col-form-label">Region:</label>

                            <div class="col-sm-9">  
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">

                            </div>
                                       
                        </div>

                        <div class="form-group row">

                            <label for="psgcCode" class="col-sm-3 col-form-label">PSG Code:</label>

                            <div class="col-sm-9"> 
                               <input type="text" class="form-control" name="psgCode" id="psgCode" value="{{ old('psgCode') }}">

                             </div>
                            
                        </div>

                 </div>

                    <div class="modal-footer bg-light">

                        <button type="submit" class="btn btn-primary" id="submitAddRegion">Submit</button>

                    </div>

                    </form>

        </div>

    </div>

</div>
<script>
jQuery(document).ready(function(){
            jQuery('#submitAddRegion').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/psgc') }}",
                  method: 'POST',
                  data: {
                     name: jQuery('#name').val(),
                     psgCode: jQuery('#psgCode').val(),
                  },
                  success: function(result){
                  	if(result.errors)
                  	{
                  		jQuery('.alert-danger').html('');

                  		jQuery.each(result.errors, function(key, value){
                  			jQuery('.alert-danger').show();
                  			jQuery('.alert-danger').append('<li>'+value+'</li>');
                  		});
                  	}
                  	else
                  	{
                  		jQuery('.alert-danger').hide();
                  		$('#open').hide();
                  		$('#addRegionModal').modal('hide');
                  	}
                  }});
               });
            });
      </script>

