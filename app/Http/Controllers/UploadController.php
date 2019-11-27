<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class UploadController extends Controller
{

    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository=$categoryRepository;
    }

    public function upload(Request $request)
    {

        DB::beginTransaction();
        try {
            $category=$this->categoryRepository->getCategoryById(
                (int)$request->get('category_id')
            );

            $request->file('image')->store('media');
        } catch(\Exception $e) {
            DB::rollBack();
        }
    }

    public function create()
    {
        $categories=$this->categoryRepository->getUserCategories($this->getUser());
        return view('upload.add', compact('categories'));
    }
}
