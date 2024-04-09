<?php

// namespace App\Http\Controllers;

// use App\Models\Product;
// use Illuminate\Support\Facades\DB;
// use App\Http\Resources\ProductResource;
// use App\Http\Requests\StoreProductRequest;
// use App\Http\Requests\UpdateProductRequest;
// use App\Interfaces\ProductRespositoryInterface;

// class ProductController extends Controller
// {

//     private ProductRespositoryInterface $productRespositoryInterface;

//     public function __construct(ProductRespositoryInterface $productRespositoryInterface)
//     {
//         $this->productRespositoryInterface = $productRespositoryInterface;
//     }
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $data = $this->productRespositoryInterface->index();
//         return ResponseClass::sendResponse(ProductResource::collection($data),'',200);
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(StoreProductRequest $request)
//     {
//         $details =[
//             'name' => $request->name,
//             'details' => $request->details
//         ];
//         DB::beginTransaction();
//         try{
//             $product = $this->productRespositoryInterface->store($details);

//             DB::commit();
//             return ResponseClass::sendResponse(new ProductResource($product),'Product Create Successful',201);

//         }catch(\Exception $ex){
//             return ResponseClass::rollback($ex);
//         }
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show($id)
//     {
//         $product = $this->productRespositoryInterface->getById($id);

//         return ResponseClass::sendResponse(new ProductResource($product),'',200);
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Product $product)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(UpdateProductRequest $request, Product $product)
//     {
//         $updateDetails =[
//             'name' => $request->name,
//             'details' => $request->details
//         ];
//         DB::beginTransaction();
//         try{
//             $product = $this->productRespositoryInterface->update($updateDetails,$id);

//             DB::commit();
//             return ResponseClass::sendResponse('Product Update Successful','',201);
//         }catch(\Exception $ex){
//             return ResponseClass::rollback($ex);
//         }
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy($id)
//     {
//         $this->productRespositoryInterface->delete($id);

//         return ResponseClass::sendResponse('Product Delete Successful','',201);
//     }
// }
