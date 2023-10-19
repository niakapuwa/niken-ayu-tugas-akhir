<?php

namespace App\Http\Controllers;

use App\Models\UploadedFile;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChallengeController extends Controller
{
    public function challengeList(): View
    {
        return view("halaman.tantangan");
    }

    public function firstChallenge(): View
    {
        if (Auth::check()) {
            return view("halaman.utantangan-1");
        }
        return view("sesi.login");
    }

    private function storeFile(Request $request): bool
    {
        $path = $request->file("challengeItem1")->store("challengeItems");
        if (!$path) {
            return false;
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
        ]);
        $path = $request->file("challengeItem2")->store("challengeItems");
        if (!$path) {
            return false;
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
        ]);
        $path = $request->file("challengeItem3")->store("challengeItems");
        if (!$path) {
            return false;
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
        ]);
        return true;
    }

    public function postFirstChallenge(Request $request): View
    {
        if (!$this->storeFile($request)) {
            session()->flash("failed", "failed to save challenge image");
            return view("halaman.utantangan-1");
        }
        session()->flash("success", "success to save challenge image");
        return view("halaman.utantangan-1");
    }

    public function secondChallenge(): View
    {
        if (Auth::check()) {
            return view("halaman.utantangan-2");
        }
        return view("sesi.login");
    }

    public function postSecondChallenge(Request $request): View
    {
        if (!$this->storeFile($request)) {
            session()->flash("failed", "failed to save challenge image");
            return view("halaman.utantangan-2")->with("status", "Upload photo failed");
        }
        session()->flash("success", "success to save challenge image");
        return view("halaman.utantangan-2")->with("status", "Upload photo successfull");
    }

    public function thirdChallenge(): View
    {
        if (Auth::check()) {
            return view("halaman.utantangan-3");
        }
        return view("sesi.login");
    }

    public function postThirdChallenge(Request $request): View
    {
        $path = $request->file("challengeItem1")->store("challengeItems");
        if (!$path) {
            session()->flash("failed", "failed to save challenge image");
            return view("halaman.utantangan-3")->with("status", "Upload photo failed");
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
        ]);
        $path = $request->file("challengeItem2")->store("challengeItems");
        if (!$path) {
            session()->flash("failed", "failed to save challenge image");
            return view("halaman.utantangan-3")->with("status", "Upload photo failed");
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
        ]);
        session()->flash("success", "success to save challenge image");
        return view("halaman.utantangan-3")->with("status", "Upload photo successfull");
    }
}
