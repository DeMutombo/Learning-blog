<x-admin-master>
    @section('content')
    <h1 class="h3 mb-4 text-gray-800">Create a Post</h1> 
    <div class="row">
        <div class="col-7">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Post body</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="12"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Excert</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form> 
        </div>
    </div>

    @endsection
 </x-admin-master>