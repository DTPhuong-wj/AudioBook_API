<?php

namespace App\Http\Controllers;

use App\Models\AudioBook;
use Illuminate\Http\Request;

class AudioBookController extends Controller
{
    // GET: Lấy danh sách audiobook
    public function index()
    {
        return response()->json(AudioBook::all(), 200);
    }

    // POST: Tạo audiobook mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'author' => 'required|string',
            'image' => 'required|string',
            'audio' => 'required|string',
        ]);

        $audiobook = AudioBook::create($validated);

        return response()->json($audiobook, 201);
    }

    // GET: Lấy chi tiết audiobook
    public function show($id)
    {
        $audiobook = AudioBook::find($id);
        return $audiobook ? response()->json($audiobook) : response()->json(['message' => 'Not found'], 404);
    }

    // PUT: Cập nhật audiobook
    public function update(Request $request, $id)
    {
        $audiobook = AudioBook::find($id);
        if (!$audiobook) return response()->json(['message' => 'Not found'], 404);

        $audiobook->update($request->all());
        return response()->json($audiobook);
    }

    // DELETE: Xoá audiobook
    public function destroy($id)
    {
        $audiobook = AudioBook::find($id);
        if (!$audiobook) return response()->json(['message' => 'Not found'], 404);

        $audiobook->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
