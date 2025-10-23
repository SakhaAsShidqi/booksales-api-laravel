<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with(['user', 'book'])->get(); 
        return response()->json(['status' => 'success', 'data' => $sales], 200);
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $data = $request->all();
        $data['user_id'] = auth()->id(); 

        $sale = Sale::create($data);

        return response()->json(['status' => 'success', 'message' => 'Transaksi berhasil dibuat.', 'data' => $sale], 201);
    }

    public function show($id)
    {

        $sale = Sale::with(['user', 'book'])->findOrFail($id);

        return response()->json(['status' => 'success', 'data' => $sale], 200);
    }
    

    public function update(Request $request, $id)
    {
        $sale = Sale::findOrFail($id);

        if ($sale->user_id !== auth()->id()) {
             return response()->json(['status' => 'error', 'message' => 'Anda tidak diizinkan mengubah transaksi ini.'], 403);
        }

        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $sale->update($request->all());

        return response()->json(['status' => 'success', 'message' => 'Transaksi berhasil diperbarui.', 'data' => $sale], 200);
    }

    public function destroy($id)
    {
        $sale = Sale::findOrFail($id);
        $sale->delete();

        return response()->json(['status' => 'success', 'message' => 'Transaksi berhasil dihapus.'], 200);
    }
}