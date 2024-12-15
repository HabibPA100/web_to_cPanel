<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

{{-- My java script is here --}}

<script src="{{ asset('frontend/js/admission_form.js') }}"></script>
<script src="{{ asset('frontend/js/copyPayNum.js') }}"></script>
<script src="{{ asset('frontend/js/donation.js') }}"></script>
<script src="{{ asset('frontend/js/welcome.js') }}"></script>
@if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
            });
        </script>
@endif