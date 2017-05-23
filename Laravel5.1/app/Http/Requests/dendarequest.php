<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class dendarequest extends Request
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
            //
        'nama_pemilik'=>'required',
        'keterlambatan'=>'required',
        'total'=>'required',
        'pajak_id'=>'required',
        ];
    }
}
