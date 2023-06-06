
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
                    All Users Information
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
    <div class="card has-table">
        <header class="card-header">
          <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
            Clients
          </p>
          
        </header>
        <div class="card-content">
          <table>
            <thead>
            <tr>
              <th class="image-cell"></th>
              <th>Username</th>
              <th>User Email</th>
              <th>User Address</th>
              <th>User Phone Number</th>
              <th>Created at</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
              @foreach ($data as $data)
                  
              
                <tr>
                  <td class="image-cell">
                    <div class="image">
                      <img src="/user/{{$data->profile_photo_path}}" class="rounded-full">
                    </div>
                  </td>
                  <td data-label="Name">{{$data->name}}</td>
                  <td data-label="Email">{{$data->email}}</td>
                  <td data-label="City">{{$data->address}}</td>
                  <td data-label="number">{{$data->phone}}</td>
                  <td data-label="Created">
                    <small class="text-gray-500">{{$data->created_at}}</small>
                  </td>
                  <td class="actions-cell">
                    <div class="buttons right nowrap">
                      <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                        <a href="{{url('view_user_details',$data->id)}}"><span class="icon"><i class="mdi mdi-eye"></i></span></a>
                      </button>
                      <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                        <a href="{{url('edit_user_details',$data->id)}}"><span class="icon"><i class="mdi mdi-update"></i></span></a>
                    </button>
                      <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                        <a href="{{url('delete_user',$data->id)}}" onclick="return confirm('Are You Sure To Delete This Item ?..')"><span class="icon"><i class="mdi mdi-trash-can"></i></span></a>
                      </button>
                    </div>
                  </td>
                </tr>
              
              @endforeach
              
            </tbody>
          </table>
          <div class="table-pagination">
            <div class="flex items-center justify-between">
              <div class="buttons">
                <button type="button" class="button active">1</button>
                <button type="button" class="button">2</button>
                <button type="button" class="button">3</button>
              </div>
              <small>Page 1 of 3</small>
            </div>
          </div>
        </div>
      </div>
  
</div>

<!-- Start Tail -->
@include('admin.sections.tailAdmin')
<!-- End Tail -->
