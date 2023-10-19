<?php

namespace App\Http\Controllers;

use App\Models\UploadedFile;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getUserInAdmin(Request $request): View
    {
        $userFileCounts = UploadedFile::select('user.id', 'user.nama', 'user.email', 'user.created_at')
        ->selectRaw('COUNT(filename) * 50 as file_count')
        ->join('user', 'uploaded_files.user_id', '=', 'user.id')
        ->groupBy('user_id')
        ->paginate(2);
        return view("admin.admin")->with('data', $userFileCounts);
    }

    public function getDetailUserInAdmin(): View
    {
        $userId = request("user_id");
        $user = DB::table("user")->where("id", "=", $userId)->first();
        return view("admin.user_admin")->with('data', $user);
    }
}
