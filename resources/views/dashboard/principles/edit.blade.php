<form action="{{ route('principles.update',$principle->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group col-md-8">
        <label for="email"> العنوان:</label>
        <input type="text" name="title" value="{{ $principle->title }}" class="form-control"
            required placeholder="اضف العنوان" id="email">
    </div>

    <div class="form-group col-md-8">
        <label for="email"> الوصف:</label>
        <textarea name="body" required class="form-control" cols="10" rows="5">{{ $principle->body }}</textarea>
      
    </div>


    <button type="submit" class="btn btn-primary">حفظ</button>
</form>