<div class="row ns-sub" data-count="{{$i}}">
    <div class="form-group mt-3">
        <label>Title</label>
        <input type="text" class="form-control " name="sub[{{$i}}][title]" placeholder="Enter Title" value="" required="true"/>
    </div>
    <div class="form-group mt-3">
        <label>Image</label>
        <input type="file" class="form-control " name="sub[{{$i}}][image]" placeholder="Enter Title" value="" required="true"/>
    </div>
    <div class="form-group mt-3">
        <label>Description</label>
        <!-- <div id="editor"></div> -->
        <textarea class="form-control" name="sub[{{$i}}][description]" required="true"></textarea>
    </div>
</div>