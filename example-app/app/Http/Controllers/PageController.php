<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Slide;
use App\Models\Products;
use App\Models\Type_Products;
use App\Models\BillDetail;
use App\Models\Cart;


class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Products::where('new',1)->paginate(8);
        $top_product = Products::where('promotion_price','<>',0)->paginate(4);
        return view('page.index', compact('slide','new_product', 'top_product'));
    }

    public function getProTy($type){
        $type_product = Type_Products::all();

        $product_filter = Products::where('id_type', $type)->get();

        $other_product = Products::where('id_type', '<>', $type)->paginate(3);

        $product_types = Type_Products::where('id', $type)->first();

        return view('page.product_type', compact('type_product', 'product_filter', 'other_product', 'product_types'));

    }

    public function getProDe(){
        return view('page.product_details');
    }

    public function getAddToCart(Request $req, $id){
        $product = Products::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        return redirect()->back(); 
    }

    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getContact(){
        return view('page.contact');
    }

    public function getAbout(){
        return view('page.about');
    }

    public function getIndexAdmin() {
        $products = Products::all();
        return view('page.admin')->with(['products' => $products, 'sumSold' => count(BillDetail::all())]);														
    }

    public function getAdminAdd() {
        return view('page.formAdd');						
    }

    public function postAdminAdd(Request $request){
        $products = new Products();
        if($request -> hasFile('inputImage')){
            $file = $request -> file('inputImage');
            $fileName = $file -> getClientOriginalName('inputImage');
            $file -> move('source/image/product', $fileName);
        }

        $file_name = null;

        if($request->file('inputImage') != null){
            $file_name = $request -> file('inputImage')->getClientOriginalName();
        }

        $products->name = $request -> inputName;
        $products->image = $file_name;
        $products->description = $request -> inputDescription;
        $products->unit_price = $request -> inputPrice;
        $products->promotion_price = $request -> inputPromotionPrice;
        $products->unit = $request -> inputUnit;
        $products->new = $request -> inputNew;
        $products->id_type = $request -> inputType;

        $products->save();
        return $this->getIndexAdmin();
    }

    public function getAdminEdit($id){
        $products = Products::find($id);
        return view('page.formEdit')->with('products', $products);
    }

    public function postAdminEdit(Request $request){

        $id = $request->editId;

        $products = new Products($id);
        if($request -> hasFile('editImage')){
            $file = $request -> file('editImage');
            $fileName = $file -> getClientOriginalName('editImage');
            $file -> move('source/image/product', $fileName);
        }

        if($request->file('editImage') != null){
            $products->image = $fileName;
        }

        $products->name = $request -> editName;
        $products->description = $request -> editDescription;
        $products->unit_price = $request -> editPrice;
        $products->promotion_price = $request -> editPromotionPrice;
        $products->unit = $request -> editUnit;
        $products->new = $request -> editNew;
        $products->id_type = $request -> editType;

        $products->save();
        return $this->getIndexAdmin();
    }

    public function postAdminDelete($id){
        $products = Products::find($id);
        $products->delete();
        return $this->getIndexAdmin();
    }
}