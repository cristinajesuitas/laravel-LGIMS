<!-- Button trigger modal -->


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editRegionModal" value="{{$region}}"><svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 1em 1em" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
</svg></button>

    <form method="POST" action="{{route('regions.update')}}" id="editRegionForm">
                    @csrf
                    @method('PUT')

<!-- Modal -->
<div class="modal fade" id="editRegionModal" tabindex="-1" role="dialog" aria-labelledby="editRegionModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header bg-info">

                <h5 class="modal-title" id="editRegionModalLabel">Update Region</h5>

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
                        value="{{ $region->name }}">

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
                       value="{{ $region->psgCode }}">

                       @error('psgCode')

                       <div class="help invalid-feedback" id="psgCodeError">{{ $errors->first('psgCode') }}</div>

                       @enderror

                    </div>
                    
                </div>

            </div>

            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary" value = "{{$region->id}}">Update</button>

            </div>

        </div>

    </div>

    </form>
</div>
