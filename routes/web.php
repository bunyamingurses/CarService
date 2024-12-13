<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get("/", [Controllers\front\indexController::class, "index"])->name("index");
Route::get("/homepage", [Controllers\front\indexController::class, "index"])->name("homepage");
Route::get("/index.html", [Controllers\front\indexController::class, "index"])->name("indexHtml");

Route::get("/about", [Controllers\front\indexController::class, "about"])->name("about");
Route::get("/about.html", [Controllers\front\indexController::class, "about"])->name("aboutHtml");

Route::get("/services", [Controllers\front\indexController::class, "services"])->name("services");
Route::get("/services.html", [Controllers\front\indexController::class, "services"])->name("servicesHtml");
Route::get("/servicedetail/{id}-{name}", [Controllers\front\indexController::class, "serviceDetail"])->name("serviceDetail");
Route::get("/servicedetail.html/{id}-{name}", [Controllers\front\indexController::class, "serviceDetail"])->name("serviceDetailHtml");

Route::get("/gallery", [Controllers\front\indexController::class, "gallery"])->name("gallery");
Route::get("/gallery.html", [Controllers\front\indexController::class, "gallery"])->name("galleryHtml");
Route::get("/gallerybeforeafter", [Controllers\front\indexController::class, "galleryBA"])->name("galleryBA");
Route::get("/gallerybeforeafter.html", [Controllers\front\indexController::class, "galleryBA"])->name("galleryBAHtml");

Route::get("/contact", [Controllers\front\indexController::class, "contact"])->name("contact");
Route::get("/contact.html", [Controllers\front\indexController::class, "contact"])->name("contactHtml");
Route::post("/contact", [Controllers\front\indexController::class, "contactCreate"])->name("contactCreate");


// Login Route Start
Route::prefix("login")->as("login.")->group(function () {
    Route::get("/", [Controllers\login\indexController::class, "index"])->name("index");
    Route::get("/index", [Controllers\login\indexController::class, "index"])->name("index");
    Route::post("/create", [Controllers\login\indexController::class, "login"])->name("loginPost");
    Route::get("/logout", [Controllers\login\indexController::class, "logOut"])->name("logOut");

});
// Login Route Finish


Route::prefix("admin")->as("admin.")->middleware("loginControl")->group(function () {
    Route::get("/", [Controllers\admin\indexController::class, "index"])->name("index");
    Route::get("/contactdestroy/{id}", [Controllers\admin\indexController::class, "contactDestroy"])->name("contactDestroy");

    Route::prefix("/setting")->as("setting.")->group(function () {
        Route::get("/", [Controllers\admin\setting\indexController::class, "index"])->name("index");
        Route::post("/update/{id}", [Controllers\admin\setting\indexController::class, "update"])->name("update");

        Route::get("/about", [Controllers\admin\setting\indexController::class, "about"])->name("about");
        Route::post("/aboutpost", [Controllers\admin\setting\indexController::class, "aboutPost"])->name("aboutPost");
    });

    Route::prefix("profile")->as("profile.")->group(function () {
        Route::get("/", [Controllers\admin\profile\indexController::class, "index"])->name("index");
        Route::post("/update", [Controllers\admin\profile\indexController::class, "save"])->name("update");
    });

    Route::prefix("/carousel")->as("carousel.")->group(function () {
        Route::get("/", [Controllers\admin\carousel\indexController::class, "index"])->name("index");
        Route::post("/create", [Controllers\admin\carousel\indexController::class, "store"])->name("store");
        Route::get("/destroy/{id}", [Controllers\admin\carousel\indexController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/gallery")->as("gallery.")->group(function () {
        Route::get("/", [Controllers\admin\gallery\indexController::class, "index"])->name("index");
        Route::post("/create", [Controllers\admin\gallery\indexController::class, "store"])->name("store");
        Route::get("/destroy/{id}", [Controllers\admin\gallery\indexController::class, "destroy"])->name("destroy");
    });

    Route::prefix("service")->as("service.")->group(function () {
        Route::get("/", [Controllers\admin\services\indexController::class, "index"])->name("index");
        Route::get("/create", [Controllers\admin\services\indexController::class, "create"])->name("create");
        Route::post("/create", [Controllers\admin\services\indexController::class, "store"])->name("store");
        Route::get("/edit/{id}", [Controllers\admin\services\indexController::class, "edit"])->name("edit");
        Route::post("/update/{id}", [Controllers\admin\services\indexController::class, "update"])->name("update");
        Route::get("/destroy/{id}", [Controllers\admin\services\indexController::class, "destroy"])->name("destroy");
        Route::get("/popular/{id}", [Controllers\admin\services\indexController::class, "popular"])->name("popular");

        Route::prefix("gallery")->as("gallery.")->group(function () {
            Route::get("/index/{id}", [Controllers\admin\services\gallery\indexController::class, "index"])->name("index");
            Route::post("/create", [Controllers\admin\services\gallery\indexController::class, "store"])->name("store");
            Route::get("/destroy/{id}", [Controllers\admin\services\gallery\indexController::class, "destroy"])->name("destroy");
        });
    });

});





