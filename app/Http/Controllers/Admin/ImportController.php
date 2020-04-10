<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;

class ImportController extends Controller
{
    public function importFile()
    {
        return view('admin.excel');
    }

    public function importExcel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|max:5000|mimes:xlsx,xls,csv'
        ]);

        if($validator->passes()) {

            $dataTime = date('Ymd_His');
            $file = $request->file('file');
            $fileName = $dataTime . '-' . $file->getClientOriginalName();
            $savePath = public_path('/upload');
            $file->move($savePath, $fileName);

            return redirect()->back()
            ->with(['success' => 'File upload success']);
        }else {
            return redirect()->back()
            ->with(['errors' => $validator->errors()->all()]);
        }
    }
}
