<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\MaintainedBy;
use App\Enums\MaintenanceType;
use Illuminate\Validation\Rules\Enum;

class  StoreComplaintRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'no' =>  'required|integer|max:4',
            'department' =>  'required|string|max:4',
            'problem' =>  'required|string|max:50',
            'types_of_maintenance' =>  ['required', new Enum(MaintenanceType::class)],
            // 'types_of_maintenance' =>  'required|in:new,repair',
            'complaint_date' =>  'required',
            'complaint_by' =>  'required|string|max:15',
            'maintenance_require' =>  "required|string|max:3",
            'edp_maintenance_supervisor' =>  'required|string',
            'maintained_by' =>  [Rule::enum(MaintainedBy::class)],
            'completed_at' =>  'required',
            'remark' => 'required|string|max:25'

        ];
    }

    public function messages()
    {

        return [
            
            'no.required' => 'The number field is required',
            'no.integer' => 'The number field must be number',
            'no.max' => 'The number field must be in 9999',

            'department.required' => 'The department field is required',
            'department.string' => 'The department field must be string',
            'department.max' => 'The deparment field must be 4 character long',

            'problem.required' => 'The problem field is required',
            'problem.string' => 'The problem field must be string',
            'problem.max' => 'The problem field must be in 50',

            'types_of_maintenance.required' => 'The :attribute must be one of the valid values.',

            'complaint_date.required' => 'The Complaint Date field must be required',

            'complaint_by.required' => 'The Complaint By field must be required',
            'complaint_by.string' =>  'The Complaint By field must be string',
            'complaint_by.max' =>  'The Complaint By field must 15 character long',

            'maintenance_require.required' =>  'The maintenance_require field is required',
            'maintenance_require.string' =>  'The maintenance_require field must be string',
            'maintenance_require.max' =>  'The maintenance_require field must 3 character long',


            "edp_maintenance_supervisor.require" => 'The Edp Maintenance Field is required',
            "edp_maintenance_supervisor.string" => 'The Edp Maintenance Field must be jayshukh bhai',

            'completed_at.required' => 'This  field must be required',
            
            
            'maintained_by.string' => 'The Complaint At field must be required.',
   
            'remark.require' => " The Remark field must be require",
            'remark.string' => " The Remark field is string",
            'remark.max' => " The Remark field must be 25 character long",
            

        ];
        
    }
}
