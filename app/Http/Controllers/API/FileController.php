<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Traits\ApiResponder;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{
    use ApiResponder;
    /**
     * upload File.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadFile(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'file' => 'required',
            'path' => 'required',
        ]);

        if ($validatedData->fails()) {
            return $this->errorStatus($validatedData->errors()->first());
        }

        if ($request->has('old_file')) {
            File::delete($request->old_file);
        }

        return $this->respondWithItem(uploadToStorage($request->file, $request->path));
    }

    /**
     * delete Upload File.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteUploadFile(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'files' => 'required|array',
        ]);
        if ($validatedData->fails()) {
            return $this->errorStatus($validatedData->errors()->first());
        }
        $inputs = $request->all();
        foreach ($inputs['files'] as $file) {
            File::delete('storage/' . $file);
        }
        return $this->successStatus();
    }
}
