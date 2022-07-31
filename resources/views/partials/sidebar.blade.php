@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">

            

            <li class="">
                <a href="{{ route('results.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">My Results</span>
                </a>
            </li>

                <li class="{">
                    <a href="#">
                        <i class="fa fa-gears"></i>
                        <span class="title"> My Subjects </span>
                        <span class="fa arrow"></span>
                    </a>

                    <ul class="sub-menu">


                        <li class="">
                            <a href="{{ route('subjects.index') }}">
                                <i class="fa fa-gears"></i>
                                <span class="title"> Register For Subjects </span>
                            </a>
                        </li>


                    </ul>

                </li>
          
            
        </ul>


    </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
