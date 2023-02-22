@if(Session::has('success'))
    <div class="d-none" id="success-message-ns">{{Session::get('success')}}</div>
@endif
@if($errors->any())
    <div class="d-none error-message-ns">{{ $errors->first() }}</div>
@endif

<script>
    const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        function tost(icon,title = ''){
            return Toast.fire({ icon, title});
        }
        let errors = document.querySelectorAll('.error-message-ns');
        errors.forEach(element => {
            // console.log(element.innerHTML);
            setTimeout(() => {
                tost('error',element.innerHTML)
            }, 200);
        });
        let success = document.getElementById('success-message-ns');
        if(success.length != 0) tost('success',success.innerHTML)
</script>