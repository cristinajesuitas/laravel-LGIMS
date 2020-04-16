<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLguprofilePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'district' => 'required|unique:geocodes',
			'sitios_of_bgy' => 'required|unique:geocodes|max:255',
			'classification' => 'required|unique|max:5',
			'landarea' => 'required',
			'indigenous_group' => 'required',
			'unitNo' => 'required',
			'floorNo' => 'required',
			'phaseNo' => 'required',
			'blockNo' => 'required',
			'lotNo' => 'required',
			'houseno' => 'required',
			'street' => 'required|unique|max:255',
			'sitio' => 'required|unique|max:255',
			'munLogo' => 'required|mimes:jpeg,bmp,png',
			'bgyLogo' => 'required|mimes:jpeg,bmp,png,jpg',
        ];
    }
	
	public function messages()
{
    return [
        'district.required' => 'Barangay is required',
		'sitios_of_bgy.required' => 'Sitios of Barangay is required',
		'classification.required' => 'Barangay Classification is required',
		'landarea.required' => 'Barangay is required',
		'indigenous_group.required' => 'Barangay is required',
		'unitNo.required' => 'Barangay is required',
		'floorNo.required' => 'Barangay is required',
		'phaseNo.required' => 'Barangay is required',
		'blockNo.required' => 'Barangay is required',
		'lotNo.required' => 'Barangay is required',
		'houseno.required' => 'Barangay is required',
		'street.required' => 'Barangay is required',
		'sitio.required' => 'Barangay is required',
		'munLogo.required' => 'Barangay is required',
		'bgyLogo.required' => 'Barangay is required',
    ];
}
}
