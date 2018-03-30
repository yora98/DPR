<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Phase2Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'state_name' => 'required',
            'district_name' => 'required',
            'city_name' => 'required',
            'project_name' => 'required',
            'project_code' => 'required',
            'nodal_agency' => 'required',
            'implementing_agency' => 'required',
            'implementing_agency_name' => 'required',
            'approval_date' => 'required',
            'housing' => 'required',
            'infrastructure' => 'required',
            'other' => 'required',
            'total_project_cost' => 'required',
            'gen' => 'required',
            'sc' => 'required',
            'st' => 'required',
            'obc' => 'required',
            'minority' => 'required',
            'total_slum_household' => 'required',
            'selected' => 'required',
            'construction_cost' => 'required',
            'project_duration' => 'required',
            'sales_price' => 'required',
            'carpet_area' => 'required',
            'total_houses' => 'required',
            'ews_unit' => 'required',
            'lig_unit' => 'required',
            'mig_unit' => 'required',
            'hig_unit' => 'required',
            'commercial_unit' => 'required',
            'private_partner' => 'required',
            'ews_eligible' => 'required',
            'goi_grant' => 'required',
            'state_grant' => 'required',
            'land_grant' => 'required',
            'cash_grant' => 'required' => 'required',
            'implementing_agency_share' => 'required',
            'beneficiary_share' => 'required',
            'total_share' => 'required',
            'specifications' => 'required',
            'trunk_infrastructure' => 'required',
            'water_supply' => 'required',
            'sewerage' => 'required',
            'road' => 'required',
            'storm_water' => 'required',
            'electrification' => 'required',
            'solid_waste' => 'required',
            'other_civic' => 'required',
            'reason' => 'required',
            'social_infrastructure' => 'required',
            'disaster' => 'required',
            'quality' => 'required',
            'o_m' => 'required',
            'encumbrance' => 'required',
            'innovative' => 'required',
            'slac_comments' => 'required',
            'brief' => 'required',
            'submission_date' => 'required',
        ];
    }
}
