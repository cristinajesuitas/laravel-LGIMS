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
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">

                                @error('name')
                                    <p class="help invalid-feedback">
                                    <strong id="name-error">{{ $errors->first('name') }}</strong>
                                    </p>
                                @enderror

                            </div>
                                       
                        </div>

                        <div class="form-group row">

                            <label for="psgcCode" class="col-sm-3 col-form-label">PSG Code:</label>

                            <div class="col-sm-9"> 
                               <input type="text" class="form-control @error('psgCode') is-invalid @enderror" name="psgCode" id="psgCode" value="{{ old('psgCode') }}">

                               @error('name')
                                    <p class="help invalid-feedback">
                                    <strong id="psgCode-error">{{ $message }}</strong>
                                    </p>
                                @enderror
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

    function openModal(){
        $('#addRegionForm').modal('show')
    }

    function storeData(){
        var CSRF_TOKEN=$('meta[name="csrf-token"]').attr('content');
        var name = $('#name').val();
        var psgCode = $('#psgCode').val();

    $('#name-error').addClass('d-none');
    $('#psgCode-error').addClass('d-none');

        $.ajax({
            url:'psgc',
            type:'POST',
            data:[_token: CRF_TOKEN, name, psgCode],

            success:function(data) {

            },
            error:function(data){

                var errors = data.responseJSON;
                if($.isEmptObject(errors)== false){
                    $.each(errors.error, function(key, value){
                        var errorID = '#' + key + 'Error';
                        $(ErrorID).removeClass("d-none");
                        $(ErrorID).text(value)
                    })
                }

            }
        });
    }
               
</script>

