<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\CentralLogics\FileManagerLogic;
use Brian2694\Toastr\Facades\Toastr;
use Madnest\Madzipper\Facades\Madzipper;

class FileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($folder_path = "cHVibGlj")
    {
        $file = Storage::files(base64_decode($folder_path));
        $directories = Storage::directories(base64_decode($folder_path));
        $folders = FileManagerLogic::format_file_and_folders(files:$directories, type:'folder');
        $files = FileManagerLogic::format_file_and_folders(files:$file, type:'file');
        $data = array_merge($folders, $files);
        return view('admin-views.file-manager.index', compact('data', 'folder_path'));
    }


    public function upload(Request $request)
    {
        if (env('APP_MODE') == 'demo') {
            Toastr::info(translate('messages.upload_option_is_disable_for_demo'));
            return back();
        }
        $request->validate([
            'images' => 'required_without:file',
            'file' => 'required_without:images',
            'path' => 'required',
          ]);
        if ($request->hasfile('images')) {
            $images = $request->file('images');
            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                Storage::disk('local')->put($request->path.'/'. $name, file_get_contents($image));
            }
        }
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            Madzipper::make($file)->extractTo('storage/app/'.$request->path);
        }
        Toastr::success(translate('messages.image_uploaded_successfully'));
        return back()->with('success', translate('messages.image_uploaded_successfully'));
    }




    public function download($file_name)
    {
        return Storage::download(base64_decode($file_name));
    }

    public function destroy($file_path)
    {
        Storage::disk('local')->delete(base64_decode($file_path));
        Toastr::success(translate('messages.image_deleted_successfully'));
        return back()->with('success', translate('messages.image_deleted_successfully'));
    }
}
