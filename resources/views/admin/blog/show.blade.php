@extends('admin.layout.master')
@section('title', 'Blog')
@section('body')
    <!-- Main -->
    <div class="app-main__inner">

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        Blog
                        <div class="page-title-subheading">
                            View, create, update, delete and manage.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body display_data">
                        <div class="position-relative row form-group">
                            <label for="" class="col-md-3 text-md-right col-form-label">Images</label>
                            <div class="col-md-9 col-xl-8">
                                <ul class="text-nowrap overflow-auto" id="images">
                                        <li class="d-inline-block mr-1" style="position: relative;">
                                            <img style="height: 150px;" src="./assets/images/blogs_IT/{{ $blog->image }}"
                                                 alt="Image">
                                        </li>
                                </ul>
                            </div>
                        </div>
                            <div class="position-relative row form-group">
                                <label for="user_id"
                                       class="col-md-3 text-md-right col-form-label">User</label>

                                        <div class="col-md-9 col-xl-8">
                                            @foreach($users as $user)
                                             @if($blog->user_id == $user->id)
                                                <p>{{$user->name}}</p>
                                                @endif
                                            @endforeach
                                        </div>

                            </div>
                            <div class="position-relative row form-group">
                                <label for="name" class="col-md-3 text-md-right col-form-label">Title</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{$blog->title}}</p>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="name" class="col-md-3 text-md-right col-form-label">SubTitle</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{$blog->subtitle}}</p>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="name" class="col-md-3 text-md-right col-form-label">Category</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{$blog->category}}</p>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="name" class="col-md-3 text-md-right col-form-label">Date Of Post</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{$blog->created_at}}</p>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="name" class="col-md-3 text-md-right col-form-label">Content</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{!! $blog->content !!}</p>
                                </div>
                            </div>
                            <div class="position-relative row form-group mb-1">
                                <div class="col-md-9 col-xl-8 offset-md-2">
                                    <a href="./admin/blog" class="border-0 btn btn-outline-danger mr-1">
                                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                                        <i class="fa fa-times fa-w-20"></i>
                                                    </span>
                                        <span>Cancel</span>
                                    </a>

                                    <button type="submit"
                                            class="btn-shadow btn-hover-shine btn btn-primary">
                                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                                        <i class="fa fa-download fa-w-20"></i>
                                                    </span>
                                        <span>Save</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
@endsection
