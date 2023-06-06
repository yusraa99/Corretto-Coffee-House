
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
                    Edit Post Information
                </h1>

            </div>
            <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <a href="{{url('view_brands_blogs')}}"><button name="submit" type="submit" class="button blue">
                            Back to Blog Posts
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
      
        <form action="{{url('update_post_confirm',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label">Post Title</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="title" class="input" type="text" value="{{$data->title}}">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">Post Auther</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="auther" class="input" type="text" value="{{$data->auther}}">
                        </div>
                    </div>
                </div>
            </div>
            
            <br>
            <div class="field">
                <label class="label">Post Description</label>
                <div class="control">
                    <div class="control icons-left">
                        <textarea name="description" class="textarea" >{{$data->description }}</textarea>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">Choose Brand</label>
                <div class="control">
                  <div class="select">
                    <select name="brand">
                        @foreach ($brand as $brand)
                            <option value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">Post Image</label>
                <td data-label="Name">
                    <img style="max-width:150px; margin:auto" src="/post/{{$data->image}}">
                </td>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="image" class="input" type="file">
                        </div>
                    </div>
                </div>
            </div>
            <br>
              <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <button name="submit" type="submit" class="button green">
                            edit Post
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
