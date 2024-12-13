<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\contact;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $contact=contact::get();
        return View("admin.index",["contact"=>$contact]);
    }

    public function contactDestroy($id)
    {
        if (isset($id)) {
            $contact = contact::where("id", functionController::security($id))->get();
            if ($contact[0]["name"]) {
                $delete = contact::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "Mesaj Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "Mesaj ile Silinemedi.");
                }
            }
        }
    }
}
