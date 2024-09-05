<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\DetailPortfolio;

// routers
Route::get("/", [PageController::class, "home"]);
Route::get("/about", [PageController::class, "about"]);
Route::get("/portfolio", [PageController::class, "portfolio"]);
Route::get("/contact", [PageController::class, "contact"]); 
