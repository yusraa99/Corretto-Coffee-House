
<!DOCTYPE html>
<html lang="en" class="">
    <base href="/public">
@include('admin.sections.headAdmin')
<div id="app">

    <!-- Start Nav -->
    @include('admin.sections.nav')
    <!-- End Nav -->

    <!-- Start Slider -->
    @include('admin.sections.slider')
    <!-- End Slider -->
    <section class="section main-section">

        <!-- Start Performance -->
        @include('admin.sections.performance')
        <!-- End Performance -->
        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    Product Information
                </h1>

            </div>
            <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <a href="{{url('view_products')}}"><button name="submit" type="submit" class="button blue">
                            Back to Products
                        </button></a>
                    </div>
                </div>
            </div>
        </section>

    </section>

    
    <div class="card-content" style="padding: 60px">
      
            <div class="field">
                <label class="label">Product Name :  {{$data->title}} </label>
            </div>
            <br>
            <div class="field">
                <label class="label">Product Description : {{$data->description}}</label>
                
            </div>
            <br>
            <div class="field">
                <label class="label">Product Price : {{$data->price}} $</label>
                
            </div>
            <br>
            <div class="field">
                <label class="label">Product Quantity : {{$data->quantity}}</label>
            </div>
              <br>
              <div class="field">
                <label class="label">Product Code : {{$data->product_code}}</label>
            </div>
              <br>
              <div class="field">
                <label class="label">Product Discount Price : {{$data->discount_price}} %</label>
            
              
            </div>
              <br>
              <div class="field">
                <label class="label">Category of This Product : {{$category}}</label>
            </div>
              <br>
              <div class="field">
                <label class="label">Brand of This Product : {{$brand}}</label>
            </div>
              <br>
              
            <div class="field">
                <label class="label">Product Image :</label>
                <td data-label="Name">
                    <img style="max-width:150px; margin:auto" src="/product/{{$data->image}}">
                </td>
                
            </div>

              <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <a href="{{url('edit_product_details',$data->id)}}"><button name="submit" type="submit" class="button green">
                            Edit Product
                            <i class="mdi mdi-database-plus"></i>
                        </button></a>
                        <a href="{{url('delete_product',$data->id)}}" onclick="return confirm('Are You Sure To Delete This Item ?..')"><button name="submit" type="submit" class="button red">
                            Delete Product  <i class="mdi mdi-trash-can"></i>
                        </button></a>
                    </div>
                </div>
            </div>
        
    </div>    
</div>

<!-- Start Tail -->
@include('admin.sections.tailAdmin')
<!-- End Tail -->
