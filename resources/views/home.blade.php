@extends('layouts.main')

@section('js_css_header')
    <style>
        .bg-blue-400 {
            background-color: #7931ad;
        }
        .bg-success-400 {
            background-color: #d645cf;
        }
        .bg-danger-400 {
            background-color: rgba(178, 69, 255, 0.51);
        }
        .card{
            border-radius: 15px;
        }
        .btn{
            border-radius: 15px;
        }
        .btn-primary{
            background-color: #88D645;
        }
        .btn-primary:hover{
            background-color: #70b931;
        }
        .btn-info{
            background-color: #31AD4C;
        }
        .btn-info:hover {
            background-color: #6db530;
        }
        .btn-success {
            background-color: #40bf80;
        }
        .btn-success:hover {
            background-color: #1e8a35;
        }
        .form-control{
            border-radius: 15px;
        }
        .font-weight-semibold {
            font-size: 17px;
            color: #7c3db3;
        }

    </style>
@endsection
@section('content')
    <script src="{{asset('portal/global_assets/js/plugins/visualization/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('portal/global_assets/js/demo_charts/echarts/light/pies/pie_basic.js')}}"></script>
    <script src="{{asset('portal/global_assets/js/demo_charts/echarts/light/pies/pie_donut.js')}}"></script>
    <script src="{{asset('portal/global_assets/js/demo_charts/echarts/light/pies/pie_nested.js')}}"></script>
    <script src="{{asset('portal/global_assets/js/demo_charts/echarts/light/pies/pie_rose.js')}}"></script>
    <script src="{{asset('portal/global_assets/js/demo_charts/echarts/light/pies/pie_rose_labels.js')}}"></script>
    <script src="{{asset('portal/global_assets/js/demo_charts/echarts/light/pies/pie_levels.js')}}"></script>
    <script src="{{asset('portal/global_assets/js/demo_charts/echarts/light/pies/pie_timeline.js')}}"></script>
    <script src="{{asset('portal/global_assets/js/demo_charts/echarts/light/pies/pie_multiple.js')}}"></script>
    <script src="{{asset('portal/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>


        <style>
            .gm-style-iw-d {
                overflow: auto !important;
            }

            .gm-style-iw {
                background: #f3ffe5 !important;
            }
        </style>
        <!-- Basic card -->
    <div class="content">

        @role('User')
        <div class="row mt-5">
            <div class="col-sm-6 col-xl-4">
                <div class="card card-body bg-success-400 has-bg-image">
                    <div class="media">
                        <div class="media-body ">
                            <h3 class="mb-0">{{$customer ?? ''}}</h3>
                            <span class="text-uppercase font-size-xs font-weight-bold">@lang('app.customers')</span>
                        </div>

                        <div class="mr-3 align-self-center">
                            <i class="icon-users4 icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="card card-body bg-danger-400 has-bg-image">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-0">{{$mobile ?? ''}}</h3>
                            <span class="text-uppercase font-size-xs font-weight-bold">@lang('app.mobiles')</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <i class="icon-mobile3 icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="card card-body bg-success-400 has-bg-image">
                    <div class="media">
                        <div class="media-body ">
                            <h3 class="mb-0">
                                {{$total ?? ''}}
                            </h3>
                            <span class="text-uppercase font-size-xs font-weight-bold">@lang('app.overall_salaries')</span>
                        </div>

                        <div class="mr-3 align-self-center">
                            <i class="icon-coin-dollar icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-4">
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body" style="">
                            <h6 class="media-title font-weight-semibold">@lang('app.required_premium')</h6>
                            <h3><b> {{$required_payments ?? ''}} </b></h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-4">
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body" style="">
                            <h6 class="media-title font-weight-semibold">@lang('app.residual_salaries')</h6>
                            <h3><b>{{$residual ?? ''}} @lang('app.shekel')</b></h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-4">
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body" style="">
                            <h6 class="media-title font-weight-semibold">@lang('app.expired_premiums')</h6>
                            <h3><b>{{$expired_premiums ?? ''}}</b></h3>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endrole

        @role('Super_Admin')
        <div class="row mt-5">
            <div class="col-sm-6 col-xl-4">
                <div class="card card-body bg-success-400 has-bg-image">
                    <div class="media">
                        <div class="media-body ">
                            <h3 class="mb-0">{{$users-1 ?? ''}}</h3>
                            <span class="text-uppercase font-size-xs font-weight-bold">@lang('app.users')</span>
                        </div>

                        <div class="mr-3 align-self-center">
                            <i class="icon-users4 icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        @endrole

    </div>
    <div class="card">
        <div class="card-header">
            <b> @lang('app.notifications')</b>
        </div>

        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


                @forelse($notifications->where('type','App\Notifications\requiredPaymentNotification') as $notification)
                    <div class="alert alert-success" role="alert">
                       دفعة مستحقة .
                        [{{ $notification->created_at }}]  {{ $notification->data['mobile_name'] }} {{ $notification->data['customer_name'] ?? '' }}.
                        <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                            @lang('app.mark_as_read')
                        </a>
                    </div>

                    @if($loop->last)
                        <a href="#" id="mark-all">
                            @lang('app.mark_all_as_read')
                        </a>
                    @endif
                @empty
                  @lang('app.there_are_no_new_notifications_about_required_payments')
                @endforelse
                <hr>
                @forelse($notifications->where('type','App\Notifications\ExpiredMobileNotification') as $notification)
                    <div class="alert alert-success" role="alert">
                       قسط منتهي بتاريخ :

                        [{{ $notification->created_at }} ]  : --<b>   الجوال : </b>  {{ $notification->data['mobile_name'] }} : -- <b> للزبون : </b> {{ $notification->data['customer_name'] ?? '' }}.
                        <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                            @lang('app.mark_as_read')
                        </a>
                    </div>

                    @if($loop->last)
                        <a href="#" id="mark-all">
                            @lang('app.mark_all_as_read')
                        </a>
                    @endif
                @empty
                @lang('app.there_are_no_new_notifications_about_expired_payments')
                @endforelse
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    @if(auth()->user()->is_admin)
        <script>

            $(function() {
                $('.mark-as-read').click(function() {
                    let request = sendMarkRequest($(this).data('id'));
                    request.done(() => {
                        $(this).remove();
                        $('.bell_notification').parents('div.alert').remove();
                    });
                });
                $('#mark-all').click(function() {
                    let request = sendMarkRequest();
                    request.done(() => {
                        $('div.alert').remove();
                    })
                });
            });
        </script>
    @endif
@endsection
