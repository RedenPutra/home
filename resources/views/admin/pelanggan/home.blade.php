<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar User') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                      <h1 class="mb-0">List User</h1>
                      {{-- <a href="{{ route('admin/products/create') }}" class="btn btn-primary">Add Product</a> --}}
                    </div>
                    <hr>
                    @if (session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div>
                    @endif
                    <table class="table table-hover">
                      <thead class="table-primary">
                        <tr>
                          <th>#</th>
                          <th>Nama User</th>
                          <th>Email</th>
                          <th>Action</th>
                          {{-- <th>Action</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($pelanggans as $pelanggan)
                        <tr>
                          <td class="align-middle">{{ $loop->iteration }}</td>
                          <td class="align-middle">{{ $pelanggan->name }}</td>
                          <td class="align-middle">{{ $pelanggan->email }}</td>
                          {{-- <td class="align-middle">{{ $product->price }}</td> --}}
                          <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <a href="{{ route('admin/pelanggans/edit', ['id'=>$pelanggan->id]) }}" type="button" class="btn btn-secondary">Edit</a>
                              <a href="{{ route('admin/pelanggans/delete', ['id'=>$pelanggan->id]) }}" type="button" class="btn btn-danger">Delete</a>
                            </div>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <td class="text-center" colspan="5">User Not Found</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>
  