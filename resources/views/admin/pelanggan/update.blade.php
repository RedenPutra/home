<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Account') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                  <h1 class="mb-o">Edit Account</h1>
                  <hr>
                  <form action="{{ route('admin/pelanggans/update', $users->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{$users->name}}">
                        @error('name')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{$users->email}}">
                        @error('email')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    {{-- <div class="row">
                      <div class="col mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Product Price" value="{{$products->price}}">
                        @error('price')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div> --}}
                    <div class="row">
                      <div class="d-grid">
                        <button class="btn btn-warning">Update</button>
                      </div>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
