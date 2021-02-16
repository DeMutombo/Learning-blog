
<x-admin-master>
   @section('content')
   <h1 class="h3 mb-4 text-gray-800">Admin Dashboard</h1>  
   <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Owner</th>
          <th scope="col">Title</th>
          <th scope="col">Image</th>
          <th scope="col">Created at</th>
          <th scope="col">Updated at</th>
        </tr>
      </thead>
      <tbody>
         @foreach ($posts as $post)
         <tr>
           <th scope="row">{{ $post->id }}</th>
           <td>{{ $post->user->name }}</td>
           <td>{{ $post->title }}</td>
           <td><img src="{{ $post->post_image }}" width="140" height="50" alt=""></td>
           <td>{{ $post->created_at->diffForHumans() }}</td>
           <td>{{ $post->updated_at->diffForHumans() }}</td>
         </tr>             
         @endforeach
      </tbody>
    </table>     
   @endsection
</x-admin-master>
