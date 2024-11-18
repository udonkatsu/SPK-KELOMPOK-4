<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        {{-- <div class="row">
            <div class="col my-1">
                <p class="m-0">Copyright &copy; <a href="https://codedthemes.com/" target="_blank">Codedthemes</a></p>
            </div>
            <div class="col-auto my-1">
                <ul class="list-inline footer-link mb-0">
                    <li class="list-inline-item"><a href="https://codedthemes.com/" target="_blank">Home</a></li>
                    <li class="list-inline-item"><a href="https://codedthemes.com/privacy-policy/"
                            target="_blank">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="https://codedthemes.com/contact/" target="_blank">Contact
                            us</a></li>
                </ul>
            </div>
        </div> --}}
    </div>
</footer>
<!-- Required Js -->
<script src="{{ asset('template') }}/dist/assets/js/plugins/popper.min.js"></script>
<script src="{{ asset('template') }}/dist/assets/js/plugins/simplebar.min.js"></script>
<script src="{{ asset('template') }}/dist/assets/js/plugins/bootstrap.min.js"></script>
<script src="{{ asset('template') }}/dist/assets/js/config.js"></script>
<script src="{{ asset('template') }}/dist/assets/js/pcoded.js"></script>

<!-- [Page Specific JS] start -->
<!-- Apex Chart -->
{{-- <script src="{{ asset('template') }}/dist/assets/js/plugins/apexcharts.min.js"></script> --}}
{{-- <script src="{{ asset('template') }}/dist/assets/js/pages/dashboard-default.js"></script> --}}
<!-- [Page Specific JS] end -->

<script>
    $('.dashnum-card').on('mouseenter', function() {
        $(this).removeClass('bg-blue-600')
        $(this).addClass('bg-blue-900')
    })

    $('.dashnum-card').on('mouseleave', function() {
        $(this).removeClass('bg-blue-900')
        $(this).addClass('bg-blue-600')
    })

    $('.st').on('mouseenter', function() {
        $(this).removeClass('bg-green-600')
        $(this).addClass('bg-green-900')
    })

    $('.st').on('mouseleave', function() {
        $(this).removeClass('bg-green-900')
        $(this).addClass('bg-green-600')
    })

    $('.mt').on('mouseenter', function() {
        $(this).removeClass('bg-yellow-600')
        $(this).addClass('bg-yellow-900')
    })

    $('.mt').on('mouseleave', function() {
        $(this).removeClass('bg-yellow-900')
        $(this).addClass('bg-yellow-600')
    })

    $('.lt').on('mouseenter', function() {
        $(this).removeClass('bg-red-600')
        $(this).addClass('bg-red-900')
    })

    $('.lt').on('mouseleave', function() {
        $(this).removeClass('bg-red-900')
        $(this).addClass('bg-red-600')
    })

    $('#myTable').DataTable();
    $('#myTable2').DataTable();
    $('#myTable3').DataTable();
    $('#myTable4').DataTable();
    $('#myTable5').DataTable();
    $('#myTable6').DataTable();
    $('#myTable7').DataTable();
    $('#myTable8').DataTable();
    $('#myTable9').DataTable();
    $('#myTable10').DataTable();
    $('#myTable11').DataTable();
    $('#myTable12').DataTable();
    $('#myTable13').DataTable();
    $('#myTable14').DataTable();
    $('#myTable15').DataTable();
    $('#myTable16').DataTable();
    $('#myTable17').DataTable();
    $('#myTable18').DataTable();
    $('#myTable19').DataTable();
    $('#myTable20').DataTable();

    $(function() {
        $('#datepicker').datepicker();
    });

    $('#login').hover(() => {
        $('#login').toggleClass('text-primary')
    })

    @if (Session::has('succMessage'))
        Swal.fire({
            icon: 'success',
            title: '{{ Session::get('succMessage') }}',
            timer: 3000
        })
    @elseif (Session::has('succKMEANSMessage'))
        Swal.fire({
            icon: 'success',
            title: '{{ Session::get('succKMEANSMessage') }}',
            timer: 3000
        })
    @elseif (Session::has('errKMEANSMessage'))
        Swal.fire({
            icon: 'error',
            title: '{{ Session::get('errKMEANSMessage') }}'
            // timer: 3000
        })
    @elseif (Session::has('errMessage'))
        Swal.fire({
            icon: 'error',
            title: '{{ Session::get('errMessage') }}'
            // timer: 3000
        })
    @elseif (Session::has('warnMessage'))
        Swal.fire({
            icon: 'warning',
            title: '{{ Session::get('warnMessage') }}'
            // timer: 3000
        })
    @elseif (Session::has('logMessage'))
        Swal.fire({
            icon: 'success',
            title: '{{ Session::get('logMessage') }}',
            timer: 3000
        })
    @endif

    function hapus(id, controller) {
        Swal.fire({
            title: 'Yakin ingin Menghapus?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace('/' + controller + '-destroy/' + id);
            }
        })
    }

    function logout() {
        Swal.fire({
            title: 'Yakin ingin Logout?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace('/logout');
            }
        })
    }

    function trendMoment() {
        Swal.fire({
            title: 'Mulai Perhitungan <br> TREND MOMENT ?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Mulai!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace('/perhitungan-terms');
            }
        })
    }
</script>
</body>

<!-- [Body] end -->

</html>
