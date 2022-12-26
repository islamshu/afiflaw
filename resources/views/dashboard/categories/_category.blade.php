<form action="{{ route('categories.update',$category->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group col-md-8">
        <label for="image"> الصورة:</label>
        <input type="file"  name="image" class="form-control image"
         placeholder="اضف العنوان" id="image">
            <div class="form-group">
                <img src="{{ asset('uploads/'.$category->image) }}" style="width: 100px"
                    class="img-thumbnail image-preview" alt="">
            </div>
    </div>
    <div class="form-group col-md-8">
        <label for="email"> العنوان:</label>
        <input type="text" value="{{ $category->title }}" name="title" class="form-control"
            required placeholder="اضف العنوان" id="email">
    </div>


    <button type="submit" class="btn btn-primary">حفظ</button>
</form>
