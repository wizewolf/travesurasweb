<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travesuras\Entities\ImageGallery;

class ImageGalleryController extends Controller
{
    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index($iduser)
    {

        $images = ImageGallery::where('id_usuario','iduser');
        return view('image-gallery',compact('images'));
    }

    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'iduser' => 'required',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);
        $input['title'] = $request->title;
        $input['id_usuario'] = $request->iduser;

        ImageGallery::create($input);

        return back()
            ->with('Éxito','La imagen se cargo correctamente.');
    }

    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ImageGallery::find($id)->delete();
        return back()
            ->with('Éxito','La imagen se removio satisfacoriamente.');
    }
}
