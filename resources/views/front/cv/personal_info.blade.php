<div class="resume-section-content">
    <h4 class=""><i class="fa fa-user"></i> Personal Info</h4>
    <p class="text-muted">Be accurate and the employer will contact you through this information.</p>
    <div class="row my-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name"
                    required
                    value="{{ old('first_name', (isset(auth()->user()->name) and !empty(auth()->user()->name)) ? auth()->user()->name : '') }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name"
                    required value="{{ old('last_name') }}">
            </div>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required
                    value="{{ old('email', (isset(auth()->user()->email) and !empty(auth()->user()->email)) ? auth()->user()->email : '') }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone" required
                    value="{{ old('phone', (isset(auth()->user()->phone) and !empty(auth()->user()->phone)) ? auth()->user()->phone : '') }}">
            </div>
        </div>
    </div>

    <div class="form-group my-4">
        <label for="address">Address</label>
        <textarea name="address" id="address" class="form-control" placeholder="Address" required cols="30"
            rows="3">{{ old('address', (isset(auth()->user()->address) and !empty(auth()->user()->address)) ? auth()->user()->address : '') }}</textarea>
    </div>
    <div class="row my-4">
        <div class="col-md-4">
            <div class="form-group">
                <label for="country">Country</label>
                <input type="country" name="country" id="country" class="form-control" placeholder="Country" required
                    value="{{ old('country', (isset(auth()->user()->country) and !empty(auth()->user()->country)) ? auth()->user()->country : '') }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" name="state" id="state" class="form-control" placeholder="State" required
                    value="{{ old('state', (isset(auth()->user()->state) and !empty(auth()->user()->state)) ? auth()->user()->state : '') }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="City" required
                    value="{{ old('city', (isset(auth()->user()->city) and !empty(auth()->user()->city)) ? auth()->user()->city : '') }}">
            </div>
        </div>

        <div class="col-md-4 w-100 my-2">
            <br>
            <div class="image-upload-success-message text-success" style="display: none;"></div>
            <div class="image-upload-error-message text-danger" style="display: none;"></div>
            <div class="form-group w-100">
                <label for="image">Upload Image</label>
                <div id="image" class="dropzone dz-clickable w-100">
                    <div class="dz-message needsclick">
                        <br>Drop profile image here or click to upload.<br><br>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" name="image_id" id="image_id" value="">
    </div>

</div>

@push('scripts')
    <script>
        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });
            },
            url: "{{ route('front.temp.image.create') }}",
            maxFiles: 1,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(file, response) {
                console.log(response)
                if (response.status == 'success') {
                    $("#image_id").val(response.data.id);
                    $('.image-upload-success-message').html(response.message).show();
                    $('.image-upload-error-message').hide().html("");
                } else {
                    $('.image-upload-error-message').html(response.message).show();
                    $('.image-upload-success-message').hide().html("");
                }
            }
        });
    </script>
@endpush
