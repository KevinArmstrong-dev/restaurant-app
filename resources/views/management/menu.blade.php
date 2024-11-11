
<x-app-layout>
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <!-- Sidebar -->
        @include('management.inc.sidebar')
        <!-- Main Content -->
        <div class="col-md-8">
            <i class="fa-solid fa-align-justify"></i> Menu
            <a href="/management/category/create" class="btn btn-success btn-sm float-right">
                <i class="fas fa-plus"></i> Create Category
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
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>