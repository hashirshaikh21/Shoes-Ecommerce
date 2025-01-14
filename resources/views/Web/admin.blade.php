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
  <a href="{{route('index')}}" class="btn btn-dark">Home</a>
        <a href="{{route('web.create')}}" class="btn btn-dark">Create</a>
        
      </div>
      </div>

     <div class="row d-flex justify-content-center justify-center">
      @if (Session::has('success'))
      <div class="col-md-10 mt-4">
        <div class="alert alert-success">
          {{Session::get('success')}}
          </div>
      </div>
      @endif
      <div class=" col-md-10">
        <div class="card border-0 shadow-lg my-5">
          <div class="card-header">
             <h3>List Product</h3>
          </div>

          <div class="card-body">
          <table class="table">
            <tr>
              <th>ID</th>
              <th></th>
              <th>Title</th>
              <th>Description</th>
              <th>Price</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
            @if ($product->isNotEmpty())
            @foreach ($product as $product)
            
            
            <tr>
              <td>{{$product->id}}</td>
              <td>
                @if ($product->image != "")
                 <img width="50" src="{{asset('uploads/products/'.$product->image)}}" alt="">
                @endif
              </td>
              <td>{{$product->title}}</td>
              <td>{{$product->description}}</td>
              <td>${{$product->price}}</td>
              <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y')}}</td>
              <td>
                <a href="{{route('web.edit',$product->id)}}" class="btn btn-dark">Edit</a>
                <a href="#" onclick="deleteProduct({{$product->id}})" class="btn btn-danger">Delete</a>
                <form id="delete-product-form-{{ $product->id }}" action="{{route('web.destroy',$product->id)}}" method="post">
                  @csrf
                  @method('delete')
                </form>
              </td>
            </tr>

            @endforeach
            @endif
          </table>
           
          </div>
             
        </div>
      </div>
 
     </div>
  </div>
  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<script>
  function deleteProduct(id){
    if(confirm("Are you sure you want to delete this product?")){
   document.getElementById("delete-product-form-"+id).submit();
    }
  }
</script>