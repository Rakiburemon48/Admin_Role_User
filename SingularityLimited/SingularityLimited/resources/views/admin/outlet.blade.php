@extends('admin.layout')
@section('body')

<div id="app" class="app">

    @include('admin.header')

    @include('admin.menu')

    <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


    <div id="content" class="app-content">

        <div class="row">

            <div class="col-xl-12 col-lg-12">

                <div class="card mb-3">

                    <div class="card-body">

                        <h1>Add Outlet</h1>
                        <a href="{{route('outletList')}}" class="btn" style="color: white"> Outlet List</a>
                        <form action="{{route('createOutlet')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Outlet Name" value="{{old('name')}}">
                                        @error('name')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </th>
                                    <th>Address</th>
                                    <th>
                                        <input type="text" name="address" class="form-control" placeholder="Enter Outlet address" value="{{old('address')}}">
                                        @error('address')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </th>
                                </tr>
                                <tr>
                                    <th>Open Time</th>
                                    <th>
                                        <input type="time" class="form-control" name="open_time" value="{{old('open_time')}}">
                                        @error('open_time')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </th>
                                    <th>Close Time</th>
                                    <th>
                                        <input type="time" class="form-control" name="close_time" value="{{old('close_time')}}">
                                        @error('close_time')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </th>
                                </tr>
                                <tr>
                                    <th>Photo</th>
                                    <th>
                                        <input type="file" name="photos[]" class="form-control" multiple >
                                        @error('photos')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </th>
                                    <th>Visit Date</th>
                                    <th>
                                        <input type="date" name="visit_date" class="form-control" value="{{old('visit_date')}}">
                                        @error('visit_date')
                                        <span style="color: red">{{$message}}</span>
                                         @enderror
                                    </th>
                                    
                                </tr>
                                <tr>
                                    <th >
                                        <input type="submit" value="Submit" class="btn btn-info form-control">
                                       
                                    </th>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


    <div class="app-theme-panel">
        <div class="app-theme-panel-container">
            <a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i class="bi bi-sliders"></i></a>
            <div class="app-theme-panel-content">
                <div class="small fw-bold text-white mb-1">Theme Color</div>
                <div class="card mb-3">

                    <div class="card-body p-2">

                        <div class="app-theme-list">
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
                            <div class="app-theme-list-item active"><a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class="theme-primary" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
                        </div>

                    </div>


                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>
                <div class="small fw-bold text-white mb-1">Theme Cover</div>
                <div class="card">

                    <div class="card-body p-2">

                        <div class="app-theme-cover">
                            <div class="app-theme-cover-item active">
                                <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-1.jpg);" data-theme-cover-class="" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a>
                            </div>
                            <div class="app-theme-cover-item">
                                <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-2.jpg);" data-theme-cover-class="bg-cover-2" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 2">&nbsp;</a>
                            </div>
                            <div class="app-theme-cover-item">
                                <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-3.jpg);" data-theme-cover-class="bg-cover-3" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 3">&nbsp;</a>
                            </div>
                            <div class="app-theme-cover-item">
                                <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-4.jpg);" data-theme-cover-class="bg-cover-4" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 4">&nbsp;</a>
                            </div>
                            <div class="app-theme-cover-item">
                                <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-5.jpg);" data-theme-cover-class="bg-cover-5" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 5">&nbsp;</a>
                            </div>
                        </div>

                    </div>


                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
{{-- --}}
