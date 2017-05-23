<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class pajakrequest extends Request
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
        'total_pajak'=>'required',
        'tanggal_pembayaran'=>'required',
        'stnk_id'=>'required',
        'petugas_id'=>'required',
        ];
    }
}
