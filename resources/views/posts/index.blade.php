@extends('layouts.app')

@section('content')

<div class="offset-2 col-md-7 col-lg-8 col-xl-9 p-4" style="background-color:white; ">
  @auth
    <div class="d-flex justify-content-center m-4">     
                <form action="{{ route('posts') }}" method="post" >
                    @csrf
                    <div class="mb-4 p-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="90" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="px-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button> </br>
                    </div>
                </form>
            </div>
   @endauth

            @if ($posts->count())
                @foreach ($posts as $post)
               <div class="offset-2 col-md-6 col-lg-5 col-xl-9 py-2">
               <a href="" style="font-weight:bold;">  {{$post->user->name}}
                    </a>{{$post->created_at->diffForHumans() }}
                   <p class="mb-4"> {{$post->body}}
                    </p>
                    
@auth
    @if($post->ownedBy(auth()->user()))
                    <div>
        <form action="{{ route('posts.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500">Delete</button>
        </form>
   </div>
   @endif
   @endauth
    <div class="d-flex flex-row">
           @auth
            @if (!$post->likedBy(auth()->user()) && !$post->ownedBy(auth()->user()))
                <form action="{{route('posts.likes',$post)}}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class="text-blue-500" style="color:blue;">Like</button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                     @method('DELETE')
                    <button type="submit" class="text-blue-500">Unlike</button>
                </form>
          @endif
          @endauth
<span>{{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</span>
     
    </div>
                </div>  
                @endforeach
        <div class="p-4 d-flex justify-content-center">
                 {!! $posts->links() !!}    
        </div>            @else
                <p>There are no posts</p>
            @endif
        
    
</div>
@endsection