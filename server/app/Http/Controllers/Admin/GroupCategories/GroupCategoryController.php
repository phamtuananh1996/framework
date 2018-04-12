<?php

namespace App\Http\Controllers\Admin\GroupCategories;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Requests\GroupCategoryRequests\CreateGroupCategoryRequest;
use App\Http\Requests\GroupCategoryRequests\UpdateGroupCategoryRequest;
use App\Models\GroupCategory;

class GroupCategoryController extends ApiController
{
    public function __construct() {
        $this->middleware(['jwt.auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupCategries=GroupCategory::with('categories')->get();
        return $this->response($groupCategries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGroupCategoryRequest $request)
    {
        $groupCategory=GroupCategory::create([
            'name'=>$request->name,
        ]);
        return $this->response($groupCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(GroupCategory $groupcategory)
    {
        return $this->response($groupcategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupCategoryRequest $request, GroupCategory $groupcategory)
    {
        $groupcategory->update([
            'name'=>$request->name,
        ]);
        return $this->response($cagroupcategorytegory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupCategory $groupcategory)
    {
        $groupcategory->delete();
        return $this->response($groupcategory);
    }
}
