<?php 
namespace App\Http\Controllers\admin;

use App\Models\Prestasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PrestasiController extends Controller
{
    public function PrestasiView()
    {
        $data['allDataPrestasi'] = Prestasi::all();
        return view("admin.prestasi.view", $data);
    }

    public function PrestasiAdd()
    {
        return view('admin.prestasi.tambah');
    }

    public function PrestasiStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image_url' => 'required|mimes:jpg,png,jpeg|image|max:5048',
        ]);

        if ($request->hasFile('image_url')) {
            $image_url = $request->file('image_url');
            $slug = Str::slug(pathinfo($image_url->getClientOriginalName(), PATHINFO_FILENAME));
            $new_gambar = time() . '_' . $slug . '.' . $image_url->getClientOriginalExtension();
            $image_url->move(public_path('images/prestasi/'), $new_gambar);
        } else {
            return back()->withErrors(['image_url' => 'Image is required']);
        }

        $data = new Prestasi();
        $data->title = $request->title;
        $data->image_url = 'images/prestasi/' . $new_gambar;
        $data->description = $request->description;
        $data->save();

        return redirect()->route('prestasi.view');
    }


    public function PrestasiEdit($id)
    {
        $editData = Prestasi::find($id);
        return view("admin.prestasi.edit", compact('editData'));
    }

    public function PrestasiUpdate(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'title' => 'required',
        ]);

        $data = Prestasi::find($id);

        $request->validate([
            'description' => 'required',
        ]);        
        

        if ($request->hasFile('image_url')) {
            $request->validate([
                'image_url' => 'required|mimes:jpg,png,jpeg|image|max:5048',
            ]);


            File::delete(public_path('images/' . $data->image_url));
            $image_url = $request->file('image_url');
            $slug = Str::slug(pathinfo($image_url->getClientOriginalName(), PATHINFO_FILENAME));
            $new_gambar = time() . '_' . $slug . '.' . $image_url->getClientOriginalExtension();
            $image_url->move(public_path('/images/prestasi/'), $new_gambar);
            $data->image_url = 'images/prestasi/' . $new_gambar;
        }

        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return redirect()->route('prestasi.view');
    }

    public function PrestasiDelete($id)
    {
        $data = Prestasi::find($id);
        File::delete(public_path('/images/prestasi/' . $data->image_url));
        $data->delete();

        return redirect()->route('prestasi.view');
    }
}
