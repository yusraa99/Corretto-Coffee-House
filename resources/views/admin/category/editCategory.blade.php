
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
                    Category Information
                </h1>

            </div>
            <div class="buttons right nowrap">
              <div class="field grouped">
                  <div class="control">
                      <a href="{{url('view_category')}}"><button name="submit" type="submit" class="button blue">
                          Back to Categories
                      </button></a>
                  </div>
              </div>
          </div>
        </section>

    </section>

    @if(session()->has('message'))
        <div class="notification green">
            <div class="flex flex-col md:flex-row items-left justify-between space-y-3 md:space-y-0">
              <div>
                <span class="icon"><i class="mdi mdi-buffer"></i></span>
                <b>{{session()->get('message')}}</b>
              </div>
              <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
            </div>
          </div>
        
    @endif


    <div class="card-content">
        <form action="{{url('update_category_confirm',$data->id)}}" method="POST">
            @csrf
            <div class="field">
                <label class="label">Category Name</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="category" class="input" type="text" value="{{$data->category_name}}">
                            
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="field">
                <label class="label">Category Status : {{$data->status}}</label>
                <div class="field-body">
                  <div class="field grouped multiline">
                    <div class="control">
                      <label class="radio">
                        <input type="radio" name="status" value="active" >
                        <span class="check"></span>
                        <span class="control-label">Active</span>
                      </label>
                    </div>
                    <div class="control">
                      <label class="radio">
                        <input type="radio" name="status" value="disactive">
                        <span class="check"></span>
                        <span class="control-label">Disactive</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <button name="submit" type="submit" class="button green">
                            <i class="mdi mdi-update">Edit Category </i>
                            
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
