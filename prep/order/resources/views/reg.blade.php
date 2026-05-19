<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Exam</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
       
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    </head>
    <body>
        <div class="container mt-5">
            <h1 class="h1">Confirm Order</h1>  
            <div class="mt-5 ps-5 ">
            
                <form aciton="{{ route('ord.store') }}" method="post">
                @csrf 
     
                    <div class='mb-3 row'>
                        <label for ="order_number" class="form-label col-md-2">Order No.</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="order_number" id="order_number">
                            @error('order_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label for ="customer_name" class="form-label col-md-2">Customer  Name</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="customer_name" id="customer_name">
                            @error('customer_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>   
                    <div class='mb-3 row'>
                        <label for ="customer_email" class="form-label col-md-2">Customer Email</label>
                        <div class="col-md-5">
                            
                            <input type="text" class="form-control" name="customer_email" id="customer_email">
                            @error('customer_email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>   
                    <div class='mb-3 row'>
                        <label for ="order_date" class="form-label col-md-2">Order Date.</label>
                        <div class="col-md-3">
                           
                            <input type="date" class="form-control" name="order_date" id="order_date">
                            @error('order_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for ="status" class="form-label col-md-1">status</label>
                        <div class="col-md-3">
                           
                            <input type="text" class="form-control" name="status" id="status" value="Pending" disabled>
                            @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label for ="shipping_address" class="form-label col-md-2">Shipping Address</label>
                        <div class="col-md-7">
                          
                            <input type="text" class="form-control" name="shipping_address" id="shipping_address">
                            @error('shipping_address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>  
                    </div>

                    <div class='mb-3 row'>
                        <p class="col-md-4"></p>
                        <div class="col-md-2">
                            <input type="submit" class="btn px-4 py-2 btn-info"/>
                        </div>
                        <div class="col-md-2">
                            <input type="reset" class="btn px-4 py-2 btn-danger"/>    
                        </div>    
                    </div>

                </form>

            </div>  
     
        </div>
    </body>
</html>
