@if ($errors->has('image'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erè sou imaj la',
            text: '{{ $errors->first('image') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if ($errors->has('old_password'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erè sou kod sekre aktyèl la',
            text: '{{ $errors->first('old_password') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if ($errors->has('new_password'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erè sou nouvo kod sekre a',
            text: '{{ $errors->first('new_password') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if ($errors->has('password_confirmation'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erè sou konfimasyon kod sekre a',
            text: '{{ $errors->first('password_confirmation') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif
