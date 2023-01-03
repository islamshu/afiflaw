<form action="{{ route('teams.update',$team->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group col-md-8">
        <label for="image"> الصورة:</label>
        <input type="file"  name="image" class="form-control video"
             placeholder="اضف العنوان" id="image">
            <div class="form-group">
                <img src="{{ asset('uploads/'.$team->image) }}" style="width: 100px"
                    class="img-thumbnail video-preview" alt="">
            </div>
    </div>
    <div class="form-group col-md-8">
        <label for="email"> الاسم:</label>
        <input type="text" value="{{ $team->title }}" name="title" class="form-control"
            required placeholder="اضف العنوان" id="email">
    </div>

    <div class="form-group col-md-8">
        <label for="email"> المسمى الوظيفي:</label>
        <input type="text" value="{{ $team->job }}" name="job" class="form-control"
            required placeholder="اضف المسمى الوظيفي" id="email">
    </div>


    <button type="submit" class="btn btn-primary">حفظ</button>
</form>
<script>
      $(".video").change(function() {

if (this.files && this.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('.video-preview').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);
}

});
</script>