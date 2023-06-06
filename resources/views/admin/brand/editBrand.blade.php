
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
                    Edit Brand
                </h1>

            </div>
            <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <a href="{{url('view_brands')}}"><button name="submit" type="submit" class="button blue">
                            Back to Brands
                        </button></a>
                    </div>
                </div>
            </div>
        </section>

    </section>

    @if(session()->has('message'))
          <div class="notification green">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
              <div>
                <span class="icon"><i class="mdi mdi-buffer"></i></span>
                <b>{{session()->get('message')}}</b>
              </div>
              <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
            </div>
          </div>
        
    @endif
    <div class="card-content">
      
        <form action="{{url('update_brand_confirm',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label">Brand Name : </label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="brand" class="input" type="text" value="{{$data->brand_name}}">
                        </div>
                    </div>
                </div>
            </div>
            
            <br>
            <div class="field">
                <label class="label">Category :
                    @foreach ($category_brand as $category_brand)
                        {{$category_brand->category_name}} ,
                    @endforeach
                </label>
            
              <div class="control">
                <div class="select">
                  <select name="category">
                      @foreach ($category as $category)
                          <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
            </div>
              <br>
            <div class="field">
                <label class="label">Brand Image :</label>
                <td data-label="Name">
                    <img style="max-width:150px; margin:auto" src="/brand/{{$data->brand_image}}">
                </td>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="image" class="input" type="file" >
                        </div>
                    </div>
                </div>
            </div>

              <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <button name="submit" type="submit" class="button green">
                            Edit Brand
                            <i class="mdi mdi-database-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        
    </div>    
</div>

<!-- Start Tail -->
@include('admin.sections.tailAdmin')
<!-- End Tail -->
