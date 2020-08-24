<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\Interfaces\AdminRepositoryInterface;
use Auth;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;


class AdminController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.pages.admin_main', compact('user'));
    }

    /**
     * @param  AdminRepositoryInterface  $adminRepository
     *
     * @return JsonResponse
     */
    public function getAll(AdminRepositoryInterface $adminRepository): JsonResponse
    {
        return response()->json($adminRepository->getAll(), 200);
    }

}
