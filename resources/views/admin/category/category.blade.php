@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 justify-content-center">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Create a New Category</h4>

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                @endif
                <!-- Basic Layout & Basic with Icons -->
                    <div class="row">
                        <!-- Basic Layout -->
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Add New Category Item</h5>
                                    <small class="text-muted float-end">Please Add</small>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('new-category')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label" for="basic-default-name">Category Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name" value="{{old('name')}}" id="basic-default-name" placeholder="Enter Your Category Name" />
                                                @error('name') <small class="text-danger">{{$message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label" for="basic-default-name">Category Slug</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="slug" id="basic-default-name" value="{{old('slug')}}" placeholder="Enter Your Category Slug" />
                                                @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label" for="basic-default-company">Description</label>
                                            <div class="col-sm-9">
                                                <textarea
                                                    name="description"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your Category Description"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                >{{old('description')}}</textarea>
                                                @error('description') <small class="text-danger">{{$message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label" for="basic-default-name">Meta Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="meta_title" value="{{old('meta_title')}}" id="basic-default-name" placeholder="Enter Your Meta Title" />
                                                @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label" for="basic-default-name">Meta Keyword</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="meta_keyword" value="{{old('meta_keyword')}}" id="basic-default-name" placeholder="Enter Your Meta Keyword" />
                                                @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label" for="basic-default-company">Meta Description</label>
                                            <div class="col-sm-9">
                                                <textarea
                                                    name="meta_description"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your Meta Description"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                >{{old('meta_description')}}</textarea>
                                                @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label" for="basic-default-name">Image</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="inputGroupFile02" name="image" value="{{old('image')}}" />
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                                @error('image') <small class="text-danger">{{$message}}</small> @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label" for="basic-default-name">Status</label>
                                            <div class="form-check col-sm-2">
                                                <input
                                                    name="status"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="0"
                                                    id="defaultRadio1"
                                                    checked
                                                />
                                                <label class="form-check-label" for="defaultRadio1"> Public </label>
                                            </div>
                                            <div class="form-check col-sm-2">
                                                <input
                                                    name="status"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="1"
                                                    id="defaultRadio2"
                                                />
                                                <label class="form-check-label" for="defaultRadio2"> UnPublic </label>
                                            </div>
                                        </div>


                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
