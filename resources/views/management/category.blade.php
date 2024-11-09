
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
            <i class="fa-solid fa-align-justify"></i> Category
            <a href="/management/category/create" class="btn btn-success btn-sm float-right">
                <i class="fas fa-plus"></i> Create Category
            </a>
            <hr>
        </div>
    </div>
</div>
</x-app-layout>