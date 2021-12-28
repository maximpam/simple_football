@php
    /** @var \App\Models\Category $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <ul class="nav nav-tabs" role="tablist">
                        <li>
                            <a href="#maindata" class="nav-link active" data-toggle="tab">Main data</a>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane active" id="maindata" role="tabpanel">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title"
                                       value="{{$item->title}}"
                                       id="title"
                                       class="form-control"
                                       minlength="3"
                                       type="text">
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input name="slug"
                                       value="{{$item->slug}}"
                                       id="slug"
                                       class="form-control"
                                       type="text">
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input name="slug"
                                       value="{{$item->slug}}"
                                       id="slug"
                                       class="form-control"
                                       type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
