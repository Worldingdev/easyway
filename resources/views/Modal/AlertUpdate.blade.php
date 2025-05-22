
@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Toastify({
                text: @json(session('success')), // empêche les erreurs de guillemets
                duration: 3000,
                gravity: "top", // "top" ou "bottom"
                position: "right", // "left", "center" ou "right"
                backgroundColor: "linear-gradient(to right,rgb(23, 105, 39),rgb(119, 122, 115))",
                stopOnFocus: true
            }).showToast();
        });

        // const toast = swal.mixin({
        //     toast : true,
        //     position: 'top-end',
        //     showConfrimButton : false,
        //     timer : 3000
        // });

        // toast({
        //     type: 'success',
        //     title: 'signed in successfully'
        // })
    </script>
@endif

@if(session('error'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Toastify({
                text: @json(session('error')), // empêche les erreurs de guillemets
                duration: 3000,
                gravity: "top", // "top" ou "bottom"
                position: "right", // "left", "center" ou "right"
                backgroundColor: "linear-gradient(to right,rgb(227, 67, 13),rgb(206, 162, 19))",
                stopOnFocus: true
            }).showToast();
        });
    </script>
@endif

