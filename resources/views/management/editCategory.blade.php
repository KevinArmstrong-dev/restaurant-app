
<x-app-layout>
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <!-- Sidebar -->
        @include('management.inc.sidebar')
        <!-- Main Content -->
        <div class="col-md-8">
            <i class="fa-solid fa-align-justify"></i> Edit a Category
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/management/category/{{$category->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="categoryName">Category Name </label>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}" placeholder="Category ....."/>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</x-app-layout>