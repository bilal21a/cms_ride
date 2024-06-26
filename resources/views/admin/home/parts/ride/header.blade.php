<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Header</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'header' }}">
                <div class="row mb-3">
                    <label class="col-12">Heading</label>
                    <div class="col-12">
                        <input type="text" name="type[header_heading]" class="form-control"
                            value="{{ $data['header_heading'] ?? null }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-12">Background Image</label>
                    <div class="col-12">
                        <input class="form-control" name="img[header_background_img]"
                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                    </div>
                    <div class="col-12 mt-2">
                        <img width="150px" src="{{ asset('frontend/'.$page.'/'.$page_subtype.'/header_background_img.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
