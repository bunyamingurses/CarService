<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\contact;
use App\Models\serviceGallery;
use App\Models\services;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return View("front.index");
    }

    public function about()
    {
        return View("front.about");
    }

    public function services()
    {
        $service=\App\Models\services::get();
        return View("front.services",["service"=>$service]);
    }

    public function serviceDetail(Request $request)
    {
        if (isset($request->id)) {
            $id = functionController::security($request->id);
            $service = services::where("id", $id)->get();
            if (isset($service[0]["title"])) {
                $gallery=serviceGallery::where("serviceId",$id)->get();
                return View("front.serviceDetail",["service"=>$service,"gallery"=>$gallery]);
            }
        }
    }

    public function gallery()
    {
        $gallery=\App\Models\gallery::get();
        return View("front.gallery",["gallery"=>$gallery]);
    }

    public function galleryBA()
    {
        $gallery=\App\Models\serviceGallery::get();
        return View("front.galleryBeforeAfter",["gallery"=>$gallery]);
    }

    public function contact()
    {
        return View("front.contact");
    }

    public function contactCreate(Request $request)
    {
        if (isset($request->name) && isset($request->email) && isset($request->subject) && isset($request->message)) {
            $name = functionController::security($request->name);
            $email = functionController::security($request->email);
            $subject = functionController::security($request->subject);
            $message = functionController::security($request->message);


            $all = [
                "name" => $name,
                "email" => $email,
                "subject" => $subject,
                "message" => $message
            ];

            $create = contact::create($all);
            if ($create) {
                return redirect()->back()->with("status", "Mesajınız Başarılı Bir Şekilde İletildi. En Kısa Sürede Size Dönüş Yapılacaktır.");
            } else {
                return redirect()->back()->with("status", "Mesajınız İletilemedi. Lütfen Tekrar Deneyin!");
            }

        } else {
            return redirect()->back()->with("status", "Lütfen Boş Alan Bırakmayın!");
        }
    }

}
