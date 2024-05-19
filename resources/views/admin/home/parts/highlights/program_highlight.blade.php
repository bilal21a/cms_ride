<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Program Highlights</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'programhighlights_'.$type.'' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'programhighlight' }}">
                <div class="row mb-3">
                    <label class="col-12">Program Highlights</label>
                    <div class="col-12">
                        <input type="text" name="type[programhighlights_heading]" class="form-control"
                            value="{{ $data['programhighlights_heading'] ?? null }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-12">Description</label>
                    <div class="col-12">
                        <textarea class="form-control" name="type[programhighlights_description]" required style="height: 100px">{{ $data['programhighlights_description'] ?? null }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-12">Image</label>
                    <div class="col-12">
                        <input class="form-control" name="img[programhighlights_img]"
                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                    </div>
                    <div class="col-12 mt-2">
                        <img width="150px" src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/programhighlights_img.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
