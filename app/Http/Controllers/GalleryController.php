<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\GalleryRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class GalleryController extends Controller
{
    /**
     * @param GalleryRepositoryInterface $galleryRepository
     *
     * @return Application|Factory|View
     */
    public function index(GalleryRepositoryInterface $galleryRepository)
    {
        $galleries = $galleryRepository->getAll();
        return view('app.galleries',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param                            $id
     * @param GalleryRepositoryInterface $galleryRepository
     *
     * @return Application|Factory|View
     */
    public function show($id, GalleryRepositoryInterface $galleryRepository)
    {
        $galleryHead = $galleryRepository->show($id);

        return view('app.galleryOne',compact('galleryHead'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int    $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
