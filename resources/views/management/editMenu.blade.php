
<x-app-layout>
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <!-- Sidebar -->
        @include('management.inc.sidebar')
        <!-- Main Content -->
        <div class="col-md-8">
            <i class="fa-solid fa-burger"></i> Edit a Menu
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
            <form action="/management/menu/{{$menu->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                    <div class="form-group">
                        <label for="menuName">Menu Name</label>
                        <input type="text" name="name" class="form-control" value="{{$menu->name}}" placeholder="Menu...">
                    </div>
                    <label for="menuPrice">Price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                        </div>
                        <input type="text" name="price" class="form-control" value="{{$menu->price}}" aria-label="Amount (to the nearest dollor)">
                    </div>
                    <label for="MenuImage">Image</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose File</label>            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Description">Description</label>
                        <input type="text" name="description" class="form-control" value="{{$menu->description}}" placeholder="Description...">
                    </div>  
                    </div>
                    </div>

                <div class="form-group">
                    <label for="Category">Category</label>
                    <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{$menu->category_id === $category->id ? 'selected' :''}}>{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
    </div>
</div>
</x-app-layout>