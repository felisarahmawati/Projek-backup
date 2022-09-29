<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>titipsini.com</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- tess -->

    <!-- Favicons -->


    <link href="../../../assets/img/ic2.png" rel="icon">
    <link href="../../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('../../assets/css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('../../assets/vendor/aos/aos.css') }}" rel="stylesheet">
    {{-- <link href="../../../assets/css/coba.css" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    <link href="../../../assets/css/style.css" rel="stylesheet">
    <link href="../../../assets/css/bebas.css" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    <div>
        @yield('container')
    </div>

    @include('partials.footer')



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../../../assets/vendor/aos/aos.js"></script>
<script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../../assets/vendor/php-email-form/validate.js"></script>
<script src="../../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script>
    var incrementButton = document.getElementsByClassName('inc');
    var decrementButton = document.getElementsByClassName('dec');
    // console.log(incrementButton);
    // console.log(decrementButton);


    //increment button
    for(var i = 0; i < incrementButton.length; i++){
        var button = incrementButton[i];
        button.addEventListener('click',function(event){
            var buttonClicked = event .target;
            // console.log(buttonClicked);

            var input = buttonClicked.parentElement.children[2]; //untuk mendapatkan elemen input increment
            // console.log(input);

            var inputValue = input.value;
            // console.log(inputValue);
            
            var newValue = parseInt(inputValue) + 1;
            input.value = newValue;
        });
    }

    //increment button
    for(var i = 0; i < decrementButton.length; i--){
        var button = decrementButton[i];
        button.addEventListener('click',function(event){
            var buttonClicked = event .target;
            // console.log(buttonClicked);

            var input = buttonClicked.parentElement.children[2]; //untuk mendapatkan elemen input increment
            // console.log(input);

            var inputValue = input.value;
            // console.log(inputValue);
            
            var newValue = parseInt(inputValue) - 1;
            
            if (newValue >= 0){
                input.value = newValue;
            }
            else {
                input.value = 0;
                alert('Anda yakin menghapus layanan ini');
            }
        });
    }
</script>

<script>
const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert('Profile berhasil di update', 'success')
  })
}
</script>
<!-- Template Main JS File -->
<script src="../../../assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>
<!-- JQuery Ajax Indoregion -->
<script>
    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $(function(){
            //MENAMPILAKAN KABUPATEN BERDASARKAN PROVINSI YANG DIPILIH
            $('#provinsi').on('change',function(){
                let id_provinsi = $('#provinsi').val();

                // console.log(id_provinsi);
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getkabupaten') }}",
                    data : {id_provinsi:id_provinsi},
                    cache : false,

                    success: function(msg){
                        $('#kabupaten').html(msg);
                        $('#kecamatan').html('');
                        $('#desa').html('');
                    },
                    error: function(data){
                        console.log('error:',data);
                    },
                })
            })

            //MENAMPILAKAN KECAMATAN BERDASARKAN KABUPATEN YANG DIPILIH
            $('#kabupaten').on('change',function(){
                let id_kabupaten = $('#kabupaten').val();

                // console.log(id_kabupaten);
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getkecamatan') }}",
                    data : {id_kabupaten:id_kabupaten},
                    cache : false,

                    success: function(msg){
                        $('#kecamatan').html(msg);
                        $('#desa').html('');
                    },
                    error: function(data){
                        console.log('error:',data);
                    },
                })
            })

            //MENAMPILAKAN DESA BERDASARKAN KECAMATAN YANG DIPILIH
            $('#kecamatan').on('change',function(){
                let id_kecamatan = $('#kecamatan').val();

                // console.log(id_kecamatan);
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getdesa') }}",
                    data : {id_kecamatan:id_kecamatan},
                    cache : false,

                    success: function(msg){
                        $('#desa').html(msg);
                    },
                    error: function(data){
                        console.log('error:',data);
                    },
                })
            })
        });
    });

</script>



</html>
