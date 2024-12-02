<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="bg-dark py-3">
<h3 class="text-white text-center">Admin Portal</h3>
  </div>

  <div class="container">
      <div class="row justify-content-center mt-4">
         <div class="col-md-10 d-flex justify-content-end gap-3">
        <a href="{{route('web.admin')}}" class="btn btn-dark px-3">Back</a>
         </div>
      </div>

    
     <div class="row d-flex justify-content-center justify-center">
      <div class=" col-md-10">
        <div class="card border-0 shadow-lg my-5">
          <div class="card-header">
             <h3>Edit Product</h3>
          </div>
             <form enctype="multipart/form-data" action="{{ route('web.update' ,$product->id)}}" method="post">
               @method('put')
               @csrf
               <div class="card-body">
                 <div class="mb-3">
                   <label for="" class="form-label h5">Title</label>
                     <input value="{{ old('title' ,$product ->title) }}" type="text" class=" @error('title') is-invalid @enderror form-control form-control" placeholder="Enter Product Title" name="title">
                       @error('title')
                       <p class="invalid-feedback">{{ $message}}</p>
                       @enderror
                  </div>
                    <div class="mb-3">
                      <label for="" class="form-label h5">Description</label>
                      <textarea value="{{ old('description',$product ->description) }}" class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                    


                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label h5">Price</label>
                    <input value="{{ old('price',$product ->price) }}" type="text" class="@error('price') is-invalid @enderror  form-control form-control" placeholder="Enter Product Price" name="price">

                   </div>
                   @error('price')
                       <p class="invalid-feedback">{{ $message}}</p>
                       @enderror

                    <div class="mb-3">
                    <label for="" class="form-label h5">Image</label>
                    <input type="file" class="@error('image') is-invalid @enderror form-control form-control" placeholder="Enter Product Image" name="image">
                    @error('image')
                       <p class="invalid-feedback">{{ $message}}</p>
                       @enderror
                       @if ($product->image != "")
                 <img class="w-50 my-3" src="{{asset('uploads/products/'.$product->image)}}" alt="">
                @endif

                  </div>

                  <div class="d-grid">
                    <button class="btn btn-lg btn-primary">Update</button>
                  </div>

                </div>
             </form>
        </div>
      </div>
 
     </div>
  </div>
  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>