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
                                <label for="description">Description</label>
                                <input name="description"
                                       value="{{$item->description}}"
                                       id="description"
                                       class="form-control"
                                       type="text">
                            </div>
                            <div class="form-group">
                                <label for="cover_url">Cover Url</label>
                                <input name="cover_url"
                                       value="{{$item->cover_url}}"
                                       id="cover_url"
                                       class="form-control"
                                       type="text">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" class="form-control">{{$item->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="is_published">Publish</label>
                                <input name="is_published"
                                       value="{{$item->is_published}}"
                                       id="is_published"
                                       class="form-control"
                                       type="number">
                            </div>
                            <input name="user_id" hidden type="number" value="2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
