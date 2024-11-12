
<x-app-layout>
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <!-- Sidebar -->
        @include('management.inc.sidebar')
        <!-- Main Content -->
        <div class="col-md-8">
            <i class="fa-solid fa-align-justify"></i> Menu
            <a href="/management/menu/create" class="btn btn-success btn-sm float-right">
                <i class="fas fa-plus"></i> Create Menu
            </a>
            <hr>
            @if(Session()->has('status'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ Session()->get('status') }}
                    <button type="button" class="close" data-dismiss="alert">X</button>
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">
                            ID
                        </th>
                        <th scope="col">
                            Name
                        </th>
                        <th scope="col">
                            Price
                        </th>
                        <th scope="col">
                            Picture
                        </th>
                        <th scope="col">
                            Description
                        </th>
                        <th scope="col">
                            Category
                        </th>
                        <th scope="col">
                            Edit
                        </th>
                        <th scope="col">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td>{{$menu->id}}</td>
                        <td>{{$menu->name}}</td>
                        <td>{{$menu->price}}</td>
                        <td>
                            <img src="{{asset('menu_images')}}/{{$menu->image}}" 
                            alt="{{$menu->name}}" width="120px" height="120px" class="img-thumbnail"
                            />
                        </td>
                        <td>{{$menu->description}}</td>
                        <td>{{$menu->category->name}}</td>
                        <td>
                            <a href="/management/menu/{{$menu->id}}/edit" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>