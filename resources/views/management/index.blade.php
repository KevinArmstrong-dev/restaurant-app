
<x-app-layout>
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <!-- Sidebar -->
        <div class="w-full md:w-1/3 lg:w-1/4 p-4">
            <div class="bg-white shadow-md rounded-lg">
                <a href="/management/category" class="block p-4 text-gray-700 hover:bg-gray-100"><i class="fas fa-bars"></i>  Category</a>
                <a href="#" class="block p-4 text-gray-700 hover:bg-gray-100"><i class="fas fa-burger"></i>  Menu</a>
                <a href="#" class="block p-4 text-gray-700 hover:bg-gray-100"><i class="fa-solid fa-chair"></i> Table</a>
                <a href="#" class="block p-4 text-gray-700 hover:bg-gray-100"><i class="fa-solid fa-users-gear"> </i>User</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-full md:w-2/3 lg:w-3/4 p-4">
            Content
        </div>
    </div>
</div>
</x-app-layout>