
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
                    Feedbacks Posts
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
        
        <table >
            <thead >
                <tr>
                    <th style="text-align: center">Feedback Created at</th>
                    <th style="text-align: center">User Name</th>
                    <th style="text-align: center">Feedback Body</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    
                
                    <tr>
                        <td data-label="Name" style="text-align: center">{{$data->created_at}}</td>
                        <td data-label="Name" style="text-align: center">{{$data->user->name}}</td>

                        <td data-label="Brand" style="text-align: center">{{$data->message}}</td>
                        
                        
                    
                        <td data-label="Name" style="text-align: center">
                            <small class="text-gray-500">{{$data->body}}</small>
                        </td>

                        <td class="actions-cell">
                            <div class="buttons right nowrap">
                                <button class="button small red --jb-modal" data-target="sample-modal" type="submit">
                                    <a href="{{url('delete_feedback',$data->id)}}"onclick="return confirm('Are You Sure To Delete This Item ?..')"><span class="icon"><i class="mdi mdi-trash-can"></i></span></a>
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
