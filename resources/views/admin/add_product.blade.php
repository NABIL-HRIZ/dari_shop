<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dari Shop Admin</title>
    <!-- plugin:css -->
    <link rel="stylesheet" href="adminDashboard/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="adminDashboard/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="adminDashboard/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="adminDashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="adminDashboard/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="adminDashboard/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="adminDashboard/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="adminDashboard/assets/images/favicon.png" />
  </head>
  <body>
  
    @include('sweetalert::alert')

    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
     

      @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       

        @include('admin.navbar')
        <!-- partial -->

        <div class="p-4" style="margin-top:60px">
            <h1 style="font-size: 40px;font-weight:bold;letter-spacing:2px">ADD PRODUCT</h1>
            
            <form class="row g-3 mt-4" action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                  <label for="" class="form-label">Title Product </label>
                  <input  type="text" class="form-control bg-black text-white" name="title" required>
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Description </label>
                    <input style="bg-black text-white" type="text" class="form-control bg-black text-white" name="description" required>
                  </div>
                
               
                <div class="col-md-4">
                  <label for="" class="form-label">Category</label>
                  <select  id="" class="form-select bg-black text-white" name="category">
                    <option selected>Choose...</option>
                    @foreach ($categories as $category)
                    <option>{{$category->category_name}}</option>
                        
                    @endforeach

                        

                  </select>
                </div>
                <div class="col-md-2">
                  <label for="" class="form-label">Quantity</label>
                  <input style="bg-black text-white" type="number" class="form-control bg-black text-white"  name="quantity" required>
                </div>
                <div class="col-md-2">
                    <label for="" class="form-label">Price</label>
                    <input style="bg-black text-white" type="number" class="form-control bg-black text-white"  name="price" required>
                  </div>

                  <div class="col-md-2">
                    <label for="" class="form-label">Discount Price</label>
                    <input style="bg-black text-white" type="number" class="form-control bg-black text-white"  name="discount_price">
                  </div>

                  <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="image" required>
                  </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary" style="background-color:blue">ADD</button>
                </div>
              </form>

          

        </div>
      
       
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->


    <script type="text/javascript">

     function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute('href');

        swal({
            title:"Are You Sure Want To Delete This Category ? ",
            text : "You Won't be Abble to See It Again !!",
            icon:'warning',
            buttons:true,
            dangerMode:true
        }).then((willCancel)=>{
            if(willCancel){
                window.location.href=urlToRedirect;
            }
        })
     }

    </script>













   @include('admin.script')
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>