<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class APIController extends Controller
{
    public function getProducts()
    {
        $products =  Products::all();
        return response()->json($products);
    }
    public function getOneProduct($id)
    {
        $products =  Products::find($id);
        return response()->json($products);
    }
    public function addProduct(Request $request)
    {
        $products = new Products();
        $products->name = $request->input('name');
        $products->image = $request->input('image');
        $products->description = $request->input('description');
        $products->unit_price = intval($request->input('unit_price'));
        $products->promotion_price = intval($request->input('promotion_price'));
        $products->unit = $request->input('unit');
        $products->new = intval($request->input('new'));
        $products->id_type = intval($request->input('id_type'));
        $products->save();
        return $products;
    }
    public function deleteProduct($id)
    {
        $products =  Products::find($id);
        $fileName =  'source/image/product/' . $products->image;
        if (File::exists($fileName)) {
            File::delete($fileName);
        }
        $products->delete();
        return ['status' => 'ok', 'msg' => 'Delete successed'];
    }
    public function editProduct(Request $request, $id)
    {
        $products =  Products::find($id);

        $products->name = $request->input('name');
        $products->image = $request->input('image');
        $products->description = $request->input('description');
        $products->unit_price = intval($request->input('unit_price'));
        $products->promotion_price = intval($request->input('promotion_price'));
        $products->unit = $request->input('unit');
        $products->new = intval($request->input('new'));
        $products->id_type = intval($request->input('id_type'));

        $products->save();
        return response()->json(['status' => 'ok', 'msg' => 'Edit successed']);
    }

    public function uploadImage(Request $request)
    {
        // process image
        if ($request->hasFile('uploadImage')) {
            $file = $request->file('uploadImage');
            $fileName = $file->getClientOriginalName();

            $file->move('source/image/product', $fileName);

            return response()->json(["message" => "ok"]);
        } else return response()->json(["message" => "false"]);
    }
}