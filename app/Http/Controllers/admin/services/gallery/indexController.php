<?php

namespace App\Http\Controllers\admin\services\gallery;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\serviceGallery;
use App\Models\services;
use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (isset($request->id)) {
            $id = functionController::security($request->id);
            $service = services::where("id", $id)->get();
            if (isset($service[0]["title"])) {
                $gallery = serviceGallery::where("serviceId", $id)->get();
                return View("admin.service.gallery.index", ["gallery" => $gallery, "id" => $id]);
            } else {
                return redirect()->back()->with("status", "Servis Mevcut Değil!");
            }
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->File("imageBefore") != null && $request->File("imageAfter") != null && isset($request->serviceId)) {
            if (functionController::resimTurKontrol($request->file("imageBefore")->getClientOriginalExtension()) && functionController::resimTurKontrol($request->file("imageAfter")->getClientOriginalExtension())) {

                $imageBefore = functionController::imageCreate($request, "service/gallery", "imageBefore");
                $imageBeforeWebp = functionController::imageCreateWebp($request, "service/gallery", "imageBefore");
                $imageAfter = functionController::imageCreate($request, "service/gallery", "imageAfter");
                $imageAfterWebp = functionController::imageCreateWebp($request, "service/gallery", "imageAfter");

                $id = functionController::security($request->serviceId);

                $all = [
                    "serviceId" => $id,
                    "imageBefore" => $imageBefore,
                    "imageBeforeWebp" => $imageBeforeWebp,
                    "imageAfter" => $imageAfter,
                    "imageAfterWebp" => $imageAfterWebp,
                ];

                $craete = serviceGallery::create($all);
                if ($craete) {
                    return redirect()->back()->with("status", "Fotoğraflar Başarıyla Eklendi.");
                } else {
                    return redirect()->back()->with("status", "Fotoğraflar Eklenemedi. Lütfen Tekrar Deneyin!");
                }
            }else{
                return redirect()->back()->with("status", "Lütfen Desteklenen Formatlardaki Fotoğrafları Kullanın!");
            }

        } else {
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
            $gallery = serviceGallery::where("id", functionController::security($id))->get();
            if ($gallery[0]["imageBeforeWebp"]) {
                $delete = serviceGallery::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "Fotoğraf Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "Fotoğraf ile Silinemedi.");
                }
            }
        }
    }
}
