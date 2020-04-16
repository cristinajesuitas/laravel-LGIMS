@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Population') }}</div>

                <div class="card-body">
                    <form action="/population" method="POST" role="search">
                        @csrf
						
						<div class="form-row">
							<div class="col">Household Head Name:*</div>
								<div class="col">
									 <div class="input-group">
										<input type="text" class="form-control" name="q" placeholder="Search household head">
												<div class="input-group-append">
													<div class="input-group-text"><i class="fa fa-search"></i></div>
												</div>
									</div>
								</div>
						</div>	
<script type="text/javascript">
function CheckRelations(val){
 var element=document.getElementById('relationship');
 if(val=='Select relationship'||val=='Other relative'||val=='Non-relative')
   element.style.display='block';
 else  
   element.style.display='none';
}
</script>

					
						<div class="form-row">
							<div class="col">Relationship to Household Head:*</div>
								<div class="col">
									<select name="relationship" onchange='CheckRelations(this.value);'>
										<option>Select relationship</option>
										<option>Household Head</option>
										<option>Husband</option>
										<option>Wife</option>
										<option>Son</option>
										<option>Daughter</option>
										<option>Stepson</option>
										<option>Stepdaughter</option>
										<option>Son-in-law</option>
										<option>Daughter-in-law</option>
										<option>Grandson</option>
										<option>Granddaughter</option>
										<option>Father</option>
										<option>Mother</option>
										<option>Brother</option>
										<option>Sister</option>
										<option>Uncle</option>
										<option>Auntie</option>
										<option>Nephew</option>
										<option>Niece</option>
										<option>Boarder</option>
										<option>Househelper</option>
										<option>Other relative</option>
										<option>Non-relative</option>			
									</select>	
										<input type="text" name="relationship" id="relationship" style='display:none;'/>
										<input type="text" name="relationship" id="relationship" style='display:none;'/>
								</div>
						</div>

						<div class="form-row">
							<div class="col">Name:*</div>
								<div class="col">
									<input type="text" class="form-control" placeholder="Firstname" name="firstname">
								</div>
												
							<div class="col">
								<input type="text" class="form-control" placeholder="Middlename" name="middlename">
							</div>
												
							<div class="col">
								<input type="text" class="form-control" placeholder="Lastname" name="lastname">
							</div>
						</div>
					 
						<div class="form-row">
							<div class="col">Date of Birth:*</div>
								<div class="col">
									<input type="date" id="birthdate" placeholder="mm/dd/yyyy" name="birthdate">
								</div>
													
							<div class="col">Place of Birth:*</div>
								<div class="col">
									<input type="text" id="birthplace" placeholder="Enter your place of birth" name="birthplace">
								</div>
						</div>		
													
						<div class="form-row">	
							<div class="col">Sex:*</div>
								<div class="col">
									<select class="form-control" id="sex" name="sex">
										<option>Select sex</option>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								
							<div class="col">Civil Status:*</div>
								<div class="col">
									<select class="form-control" id="civilstatus" name="civilstatus">
										<option>Select civil status</option>
										<option>Single</option>
										<option>Married</option>
										<option>Widowed</option>
										<option>Separated/Divorced</option>
									</select>	
								</div>
						</div>
											
						<div class="form-row">
							<div class="col">Citizenship:*</div>
								<div class="col">
									<input type="text" id="citizenship" placeholder="Citizenship" name="citizenship">
								</div>
								
							<div class="col">Occupation:*</div>
								<div class="col">
									<input type="text" id="occupation" placeholder="Occupation" name="occupation">
								</div>
						</div>
					 
						<div class="form-row">
							<div class="col">Education:*</div>
								<div class="col">
									<select class="form-control" id="education" name="education">
										<option>Completed level</option>
										<option>None</option>
										<option>Early Childhood Education</option>
										<option>Kinder</option>
										<option>Grade 1</option>
										<option>Grade 2</option>
										<option>Grade 3</option>
										<option>Grade 4</option>
										<option>Grade 5</option>
										<option>Grade 6</option>
										<option>Grade 7</option>
										<option>Grade 8</option>
										<option>Grade 9</option>
										<option>Grade 10</option>
										<option>Grade 11</option>
										<option>Grade 12</option>
										<option>First Year Highschool</option>
										<option>Second Year Highschool</option>
										<option>Third Year Highschool</option>
										<option>Highschool Graduate</option>
										<option>Vocation-unfinished</option>
										<option>Vocational-Finished</option>
										<option>First Year College</option>
										<option>Second Year College</option>
										<option>Third Year College</option>
										<option>Fourth Year College</option>
										<option>College Graduate</option>
										<option>Masters Unit</option>
										<option>Masters</option>
										<option>PhD Units</option>
										<option>PhD</option>
									</select>	
								</div>
							
							<div class="col">Religion:*</div>
								<div class="col">
									<input type="text" id="religion" placeholder="Religion" name="religion">
								</div>
						</div>
											
						<div class="form-row">
							<div class="col">Ethnicity:*</div>
								<div class="col">
									<input type="text" id="ethnicity" placeholder="Ethnicity" name="ethnicity">
								</div>
						
							<div class="col">Length of Stay in Barangay:*</div>
								<div class="col">
									<input type="month" id="staydate" placeholder="MM/YYYY" name="staydate">
								</div>
						</div>
<script type="text/javascript">
function CheckReasons(val){
 var element=document.getElementById('reason');
 if(val=='Select a reason'||val=='Others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 						
						<div class="form-row">
							<div class="col">Reason for coming to Barangay:*</div>
								<div class="col">
									<select name="reason_for_coming" onchange='CheckReasons(this.value);'>
										<option>Select reason</option>
										<option>Insecurity and armed conflict</option>
										<option>Study</option>
										<option>Work</option>
										<option>Tourism</option>
										<option>Accompanying</option>
										<option>Medication</option>
										<option>Others</option>
									</select>	
									<input type="text" name="reason_for_coming" id="reason" style='display:none;'/>
								</div>
						</div>
 </div>

<button class="btn btn-primary" type="create">Create</button>
<button class="btn btn-primary" type="edit">Edit</button>
<button class="btn btn-primary" type="update">Update</button>
 

                    </form>
               
            </div>
		</div>
	</div>		
</div>



@endsection
