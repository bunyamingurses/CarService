<?php

namespace App\Http\Controllers\admin\carousel;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\carousel;
use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousel = carousel::get();
        return View("admin.carousel.index", ["carousel" => $carousel]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (isset($request->foto)) {
            if (functionController::resimTurKontrol($request->File("foto")->getClientOriginalExtension()) == 1) {
                $image = functionController::imageCreate($request, "carousel", "foto");
                $imageWebp = functionController::imageCreateWebp($request, "carousel", "foto");

                $all = [
                    "image" => $image,
                    "imageWebp" => $imageWebp,
                ];

                $create = carousel::create($all);
                if ($create) {
                    return redirect()->back()->with("status", "Carousel Ekleme Başarılı.");
                } else {
                    return redirect()->back()->with("status", "Carousel Eklenemedi. Lütfen Tekrar Deneyin.");
                }

            } else {
                return redirect()->back()->with("status", "Lütfen Desteklenen Biçimlerdeki Fotoğrafları Kullanın. JPG,JPEG,PNG.");
            }
        } else {
            return redirect()->back()->with("status", "Lütfen Boş Alan Bırakmayın!");
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
            $carousel = carousel::where("id", functionController::security($id))->get();
            if ($carousel[0]["imageWebp"]) {
                $delete = carousel::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "Carousel Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "Carousel Silinemedi.");
                }
            }
        }
    }
}
