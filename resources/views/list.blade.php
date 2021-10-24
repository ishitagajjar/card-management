@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Card List</h4>
                            <section class="content">
                                <div class="clearfix"></div><br /><br />
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box box-success">
                                            <div class="box-body">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if(!empty($cards))
                                                        @foreach($cards as $key => $index)
                                                        <tr>
                                                            <td>{{ ++$key }}</td>
                                                            <td>{{ $index->name }}</td>
                                                            <td>{{ $index->email }}</td>
                                                            <td>
                                                                <a href="{{ url('card/'. $index->slug)}}"
                                                                    class="btn btn-success">Edit</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-6">
                            <h4>Card</h4>
                            <div class="card-body">
                                <form method="POST" id="card" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" style="display: none;" name="id"
                                        value="{{ (!empty($card) ? $card->id : '' ) }}" id="id">
                                    <input type="text" style="display: none;" name="slug"
                                        value="{{ (!empty($card) ? $card->slug : '' ) }}" id="slug">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>

                                        <div class="col-md-9">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ !empty($card) ? $card->name : '' }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>

                                        <div class="col-md-9">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ !empty($card) ? $card->email : '' }}" required
                                                autocomplete="email" autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="designation"
                                            class="col-md-3 col-form-label text-md-right">Designation</label>

                                        <div class="col-md-9">
                                            <input id="designation" type="text"
                                                class="form-control @error('designation') is-invalid @enderror"
                                                name="designation" value="{{ !empty($card) ? $card->designation : '' }}"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="business_name"
                                            class="col-md-3 col-form-label text-md-right">Business Name</label>

                                        <div class="col-md-9">
                                            <input id="business_name" type="text"
                                                class="form-control @error('business_name') is-invalid @enderror"
                                                name="business_name"
                                                value="{{ !empty($card) ? $card->business_name : '' }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="short_description"
                                            class="col-md-3 col-form-label text-md-right">Description</label>

                                        <div class="col-md-9">
                                            <textarea
                                                class="form-control @error('short_description') is-invalid @enderror"
                                                name="short_description">{{ !empty($card) ? $card->short_description : '' }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="whatsapp_number" class="col-md-3 col-form-label text-md-right">WApp
                                            Number </label>

                                        <div class="col-md-9">
                                            <input id="whatsapp_number" type="text"
                                                class="form-control @error('whatsapp_number') is-invalid @enderror"
                                                name="whatsapp_number"
                                                value="{{ !empty($card) ? $card->whatsapp_number : '' }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="contacts"
                                            class="col-md-3 col-form-label text-md-right">Contacts</label>

                                        <div class="col-md-9">
                                            <input id="contacts" type="text"
                                                class="form-control @error('contacts') is-invalid @enderror"
                                                name="contacts" value="{{ !empty($card) ? $card->contacts : '' }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="contacts"
                                            class="col-md-3 col-form-label text-md-right">Profile</label>
                                        <br />
                                        <div class="col-md-9">
                                            <input id="file-upload" type="file" accept="image/*" name="image">
                                            <input type="hidden" id="image_value" name="image_value" value="{{ !empty($card) && $card->profile != '' ? $card->profile : '' }}">
                                            <div style="{{ !empty($card) && $card->profile != '' ? 'display: block;display: block !important; height: 250px !important; width: 250px !important; ' : 'display: none;' }}"
                                                id="image_block">
                                                <img src="{{ !empty($card) && $card->profile != '' ? asset('uploads/cards/'. $card->profile) : '' }}" id="card_image" style="height: 100% !important; width: 100% !important; padding: 5px 0">
                                                <br />
                                                {{-- <button class="btn btn-sm btn-danger ml-60 mt-60" type="button"
                                                    onclick="removeImagesFromProfile();"><i
                                                        class="fa fa-remove"></i>&nbsp;Remove</button> --}}
                                                <div class="is-clearfix"></div><br />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row mb-0">
                                        <div class="col-md-3 offset-md-3">
                                            <button type="button" class="btn btn-primary" class="btn btn-submit"
                                                onClick="saveCard(this);">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    var base_path = $('#base_path').val();
    $(document).ready(function () {});

    // Profile
    $('input[type="file"]').change(function (e) {
        var fileName = URL.createObjectURL(event.target.files[0]);
        if (e.target.id == 'file-upload') {
            $('#card_image').attr('src', fileName);
            $('#image_value').val(fileName);
            $('#image_block').attr('style',
                'display: block !important; height: 250px !important; width: 250px !important;');
            $('#card_image').attr('style', 'height: 100% !important; width: 100% !important; padding: 5px 0');
        }
    });

    // Get edit form with value
    function edit(e) {
        var formData = new FormData($('#card')[0]);
        var slug = $("#slug").val();
        axios.get(base_path + '/card/' + slug).then(response => {
            if (response) {
                window.location.href = base_path + '/card/' + slug;
            }
        });
    }

    // Store or Update
    function saveCard(e) {
        var formData = new FormData($('#card')[0]);
        if ($("#id").val() != '') {
            var card_id = $("#id").val();
            axios.post(base_path + '/update', formData).then(response => {
                console.log("response :: ", response.data);
                if (response) {
                    Swal.fire(
                        'Success!',
                        'Card update Successfully!',
                        'success'
                    );
                    window.location.href = base_path + '/card';
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            });
        } else {
            axios.post(base_path + '/store', formData).then(response => {
                console.log("response :: ", response);
                if (response.data.status == 1) {
                    Swal.fire(
                        'Success!',
                        'Information Save Successfully!',
                        'success'
                    );
                    window.location.href = base_path + '/card';

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            });
        }
    }

</script>
@endsection
