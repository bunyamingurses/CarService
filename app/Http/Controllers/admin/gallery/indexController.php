<?php

namespace App\Http\Controllers\admin\gallery;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\gallery;
use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery=gallery::get();
        return View("admin.gallery.index",["gallery"=>$gallery]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->File("image") != null) {
            $images = $request->file("image");
            foreach ($images as $imageWrite) {
                if (functionController::resimTurKontrol($imageWrite->getClientOriginalExtension())) {
                    $image = functionController::imageCreateGallery("gallery", $imageWrite->getRealPath(), $imageWrite->getClientOriginalExtension());
                    $imageWebp = functionController::imageCreateWebpGallery("gallery", $imageWrite->getRealPath());
                    $all=[
                        "image"=>$image,
                        "imageWebp"=>$imageWebp
                    ];
                    gallery::create($all);
                }
            }
            return redirect()->back()->with("status","Yüklenembilecek Tüm Fotoğralar Yüklendi.");

        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (isset($id)) {
            $gallery = gallery::where("id", functionController::security($id))->get();
            if ($gallery[0]["imageWebp"]) {
                $delete = gallery::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "Fotoğraf Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "Fotoğraf Silinemedi.");
                }
            }
        }
    }
}
