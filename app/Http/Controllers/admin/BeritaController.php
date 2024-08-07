<?php 
namespace App\Http\Controllers\admin;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    public function BeritaView()
    {
        $data['allDataNews'] = News::all();
        return view("admin.berita.view", $data);
    }

    public function BeritaAdd()
    {
        return view('admin.berita.tambah');
    }

    public function BeritaStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image_url' => 'required|mimes:jpg,png,jpeg|image|max:5048',
        ]);

        if ($request->hasFile('image_url')) {
            $image_url = $request->file('image_url');
            $slug = Str::slug(pathinfo($image_url->getClientOriginalName(), PATHINFO_FILENAME));
            $new_gambar = time() . '_' . $slug . '.' . $image_url->getClientOriginalExtension();
            $image_url->move(public_path('images/'), $new_gambar);
        } else {
            return back()->withErrors(['image_url' => 'Image is required']);
        }

        $data = new News();
        $data->title = $request->title;
        $data->image_url = 'images/' . $new_gambar;
        $data->description = $request->description;
        $data->save();

        return redirect()->route('berita.view');
    }

    public function BeritaEdit($id)
    {
        $editData = News::find($id);
        return view("admin.berita.edit", compact('editData'));
    }

    public function BeritaUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = News::find($id);

        if ($request->hasFile('image_url')) {
            $request->validate([
                'image_url' => 'required|mimes:jpg,png,jpeg|image|max:5048',
            ]);

            File::delete(public_path('images/' . $data->image_url));
            $image_url = $request->file('image_url');
            $slug = Str::slug(pathinfo($image_url->getClientOriginalName(), PATHINFO_FILENAME));
            $new_gambar = time() . '_' . $slug . '.' . $image_url->getClientOriginalExtension();
            $image_url->move(public_path('images/'), $new_gambar);
            $data->image_url = 'images/' . $new_gambar;
        }

        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return redirect()->route('berita.view');
    }

    public function BeritaDelete($id)
    {
        $data = News::find($id);
        File::delete(public_path('images/' . $data->image_url));
        $data->delete();

        return redirect()->route('berita.view');
    }
}
