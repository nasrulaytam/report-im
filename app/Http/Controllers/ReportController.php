<?php

namespace App\Http\Controllers;


use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reports = Report::paginate(10);

        // return $reports;
        return view('report.manage', compact('reports'));
    }

    public function simpan(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'email' => 'required|string|email|max:255',
            'name' => 'required|string|max:255',
            'jenis' => 'required',
            'kategori' => 'required',
            'regulator' => 'required',
            'pembuat' => 'required',
            'pengirim' => 'required',
            'deadline' => 'required',
            'format' => 'required',
            'notes'=> 'required',
        ]);

        // Simpan data ke dalam database
        $reports = new Report;
        $reports->email = $request->input('email');
        $reports->name = $request->input('name');
        $reports->jenis = $request->input('jenis');
        $reports->kategori = $request->input('kategori');
        $reports->regulator = $request->input('regulator');
        $reports->pembuat = $request->input('pembuat');
        $reports->pengirim = $request->input('pengirim');
        $reports->deadline = $request->input('deadline');
        $reports->format = $request->input('format');
        $reports->notes = $request->input('notes');


        $reports->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('manage')->withSuccess('Report Added successfully.');

    }

    public function destroy(Report $report)
    {

        $this->authorize('delete', $report);

        $report->delete();

        return redirect()->route('manage')->with('success', 'Laporan berhasil dihapus');

    }

    public function edit($id)
    {
        $reports = Report::findOrFail($id);
        return view('report.edit', compact('reports'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'name' => 'required|string|max:255',
            'jenis' => 'required',
            'kategori' => 'required',
            'regulator' => 'required',
            'pembuat' => 'required',
            'pengirim' => 'required',
            'deadline' => 'required',
            'format' => 'required',
            'notes'=> 'required',
        ]);


        $reports = Report::findOrFail($request->id);
        $reports->email = $request->input('email');
        $reports->name = $request->input('name');
        $reports->jenis = $request->input('jenis');
        $reports->kategori = $request->input('kategori');
        $reports->regulator = $request->input('regulator');
        $reports->pembuat = $request->input('pembuat');
        $reports->pengirim = $request->input('pengirim');
        $reports->deadline = $request->input('deadline');
        $reports->format = $request->input('format');
        $reports->notes = $request->input('notes');

        $reports->save();

        return redirect()->route('manage')->withSuccess('Report updated successfully.');
    }

    public function uploadImage(Request $request, $id) //this function is nolonger in use,, You can delete it
    {
        // dd($request);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Simpan gambar di sini
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            $report = Report::find($id);

            $report->image_path = $imageName;
            $report->save();

            $report->image_uploaded = true;
            $report->save();

            return response()->json(['uploaded' => true]);
        }

        return response()->json(['uploaded' => false]);
    }

    public function markUploaded(Request $request, $id)  //this function is the one handling image uploads
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Simpan gambar di sini
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            $report = Report::find($id);

            $report->image_path = $imageName;
            $report->save();

            $report->image_uploaded = true;
            $report->save();

            return response()->json(['success' => true, 'message' => 'Status updated successfully']);
        }

        return response()->json(['uploaded' => false]);
    }

}
