<!-- Button trigger modal -->


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRegionModal">Add Region</button>
    
    <form method="POST" action="/psgc" id="addRegionForm">
                    @csrf

<!-- Modal -->
<div class="modal fade" id="addRegionModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addRegionModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

        

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
                                <input type="text" 
                                class="form-control @error('name') is-invalid @enderror" 
                                name="name" 
                                id="name" 
                                value="{{ old('name') }}">

                                @error('name')

                                <div class="help invalid-feedback" id="nameError">{{ $errors->first('name') }}</div>

                                @enderror

                            </div>
                                       
                        </div>

                        <div class="form-group row">

                            <label for="psgcCode" class="col-sm-3 col-form-label">PSG Code:</label>

                            <div class="col-sm-9"> 
                               <input type="text" 
                               class="form-control @error('psgCode') is-invalid @enderror" 
                               name="psgCode" 
                               id="psgCode" 
                               value="{{ old('psgCode') }}">

                               @error('psgCode')

                               <div class="help invalid-feedback" id="psgCodeError">{{ $message }}</div>

                               @enderror

                            </div>
                            
                        </div>

                 </div>

                    <div class="modal-footer bg-light">

                        <button type="submit" class="btn btn-primary" >Submit</button>

                    </div>
                </div>

        </div>

    </form>  

</div>
@if (count($errors) > 0)
<script>
      $( document ).ready(function() {  
        $('#addRegionModal').modal('show');
      });
</script>
@endif


