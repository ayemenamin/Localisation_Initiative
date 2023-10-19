<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title_en' => 'required|string|max:100',
            'date' => 'required',
            'title_ar' => 'required|string|max:100',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'image' => 'required_without:id|mimes:jpg,jpeg,png',
        ];
    }
    public function messages()
    {
        return [
        
        
            'title_en.string' => 'اسم العنوان لابد ان يكون احرف',
         
            'title_ar.string' => 'هذا الحقل لابد ان يكون احرف ',
            'description_ar.string' => 'هذا الحقل لابد ان يكون احرف ',
            'description_en.string' => 'هذا الحقل لابد ان يكون احرف ',
        

            'required'  => 'هذا الحقل مطلوب ',
            'max'  => 'هذا الحقل طويل',
          
            'image.required_without'  => 'الصوره مطلوبة',
       
        ];
    }
}
