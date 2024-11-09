
<x-app-layout>
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <!-- Sidebar -->
        <div class="col-md-4">
            <div class="bg-white shadow-md rounded-lg">
                <a href="/management/category" class="block p-4 text-gray-700 hover:bg-gray-100"><i class="fas fa-bars"></i>  Category</a>
                <a href="#" class="block p-4 text-gray-700 hover:bg-gray-100"><i class="fas fa-burger"></i>  Menu</a>
                <a href="#" class="block p-4 text-gray-700 hover:bg-gray-100"><i class="fa-solid fa-chair"></i> Table</a>
                <a href="#" class="block p-4 text-gray-700 hover:bg-gray-100"><i class="fa-solid fa-users-gear"> </i>User</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-8">
            <i class="fa-solid fa-align-justify"></i> Create a Category
            <hr>
            <form action="/management/category" method="POST">
                @csrf
                <div class="form-group">
                    <label for="categoryName">Category Name </label>
                    <input type="text" name="name" class="form-control" placeholder="Category ....."/>
                </div>
                <button type="submit" class="btn btn-primary">Save </button>
            </form>
        </div>
    </div>
</div>
</x-app-layout>