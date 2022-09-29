@extends("layouts.user")
@section('container')
    
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container mt-3 mb-3">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        
        @include('partials.profile')

          <div class="" style="width: 700px">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Kebijakan Privasi</h5>
                    <hr width="100%" color="#c0c0c0">
                    <div class="row" style="width: 650px">
                        <div class="col-md">
                            <div class="isi">
                              <p style="text-indent: 45px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum ullamcorper urna mollis augue rhoncus, ac.</p>
                                    <p style="text-indent: 45px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id laoreet fames donec sed. Id lacus purus mattis nam in viverra rutrum risus nibh. A ultrices malesuada lacus sapien. At nulla tempus, libero iaculis orci iaculis.</p>
                                    <p style="text-indent: 45px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id laoreet fames donec sed. Id lacus purus mattis nam in viverra rutrum risus nibh. A ultrices malesuada lacus sapien. At nulla tempus, libero iaculis orci iaculis.</p>
                                    <p style="text-indent: 45px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id laoreet fames donec sed. Id lacus purus mattis nam in viverra rutrum risus nibh. A ultrices malesuada lacus sapien. At nulla tempus, libero iaculis orci iaculis.</p>
                                    <p style="text-indent: 45px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id laoreet fames donec sed. Id lacus purus mattis nam in viverra rutrum risus nibh. A ultrices malesuada lacus sapien. At nulla tempus, libero iaculis orci iaculis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
        </div>

      </div>
</section>
@endsection