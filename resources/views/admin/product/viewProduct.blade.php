
<!DOCTYPE html>
<html lang="en" class="">
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
                    Products Information
                </h1>

            </div>
        </section>

    </section>

    @if(session()->has('message'))
          <div class="notification red">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
              <div>
                <span class="icon"><i class="mdi mdi-buffer"></i></span>
                <b>{{session()->get('message')}}</b>
              </div>
              <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
            </div>
          </div>
    @endif

    <div class="card-content" >
        <div class="buttons right nowrap">
            <a href="{{url('create_product')}}"><button class="button green" ><i class="mdi mdi-database-plus">Create</i></button></a>
        </div>
        <table >
            <thead >
                <tr>
                    <th style="text-align: center">Product Name</th>
                    <th style="text-align: center">Product Brand</th>
                    <th style="text-align: center">Product Category</th>
                    <th style="text-align: center">Product Code</th>
                    <th style="text-align: center">Product Price</th>
                    <th style="text-align: center">Product Quantity </th>
                    <th style="text-align: center">Product Image</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($data as $data)
                    
                
                    <tr>
                        <td data-label="Name" style="text-align: center">{{$data->title}} {{$data->brand->brand_name}}</td>
                        <td data-label="Name" style="text-align: center">{{$data->brand->brand_name}}</td>
                        <td data-label="Name" style="text-align: center">{{$data->category->category_name}}</td>
                        <td data-label="Name" style="text-align: center">{{$data->product_code}}</td>
                        <td data-label="Name" style="text-align: center">{{$data->price}}$</td>
                        <td data-label="Progress" class="progress-cell">
                            <progress max="100" value="{{$data->quantity}}">{{$data->quantity}}</progress>
                          </td><td data-label="Name">
                            <img style="max-width:150px; margin:auto" src="/product/{{$data->image}}">
                        </td>
                        <td class="actions-cell">
                            <div class="buttons right nowrap">
                                <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                                    <a href="{{url('view_product_details',$data->id)}}"><span class="icon"><i class="mdi mdi-eye"></i></span></a>
                                  </button>
                                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                    <a href="{{url('edit_product_details',$data->id)}}"><span class="icon"><i class="mdi mdi-update"></i></span></a>
                                </button>
                                <button class="button small red --jb-modal" data-target="sample-modal" type="submit">
                                    <a href="{{url('delete_product',$data->id)}}"onclick="return confirm('Are You Sure To Delete This Item ?..')"><span class="icon"><i class="mdi mdi-trash-can"></i></span></a>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    

    
</div>

<!-- Start Tail -->
@include('admin.sections.tailAdmin')
<!-- End Tail -->
