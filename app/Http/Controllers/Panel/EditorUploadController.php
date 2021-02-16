<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditorUploadController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('upload');
        $baseName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();
        $fileName = $baseName . '_' . time() . '.' . $ext;
        $file->storeAs('images/posts', $fileName, 'public_files');
        $function = $request->CKEditorFuncNum;
        $url = asset('images/posts/'.$fileName);
        return response("<script>window.parent.CKEDITOR.tools.callFunction({$function}, '{$url}', 'فایل به درستی آپلود شد!')</script>");

    }
}
