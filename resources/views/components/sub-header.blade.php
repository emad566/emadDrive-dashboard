<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"> {{$slot}}</h5>
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
        </div>
        <div class="d-flex align-items-center">
            <a href="{{route('home')}}" class="btn btn-light-dark font-weight-bolder btn-sm">
                <i class="fa fa-home"></i>
                {{__("Home")}}
            </a>
        </div>
    </div>
</div>
