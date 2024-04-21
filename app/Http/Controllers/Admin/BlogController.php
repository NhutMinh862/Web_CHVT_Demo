<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ProductImage;
use App\Services\Blog\BlogsServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Utilities\Common;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogsService;
    private $userService;
    public function __construct(BlogsServiceInterface $blogsService,
                                UserServiceInterface $userService)
    {
        $this->blogsService = $blogsService;
        $this->userService = $userService;
    }
    public function index(Request $request)
    {
        $blogs = $this->blogsService->searchAndPaginate('title', $request->get('search'));
        return view('admin.blog.main', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = $this->userService->all();
        return view('admin.blog.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->all();
        if ($request->hasFile('image')){
            $data['image'] = Common::uploadFile($request->file('image'), 'assets/images/blogs_IT');
            Blog::create($data);
        }
        return redirect('admin/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = $this->blogsService->find($id);
        $users = $this->userService->all();
        return view('admin.blog.show', compact('blog', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = $this->userService->all();
        $blog = $this->blogsService->find($id);
        return view('admin.blog.edit', compact('blog', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $this->blogsService->update($data, $id);
        return redirect('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->blogsService->delete($id);
        //Delete old file
        return redirect('admin/blog');
    }
}
