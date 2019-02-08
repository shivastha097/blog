@extends('layouts.public.index')
@section('content')

<!-- Main Content -->
<div class="blog-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto pl-lg-0 pr-lg-4">
        <div class="post-item">
          <br>
          <div class="featured-image">
            <a href="#"><img src="{{asset('assets/img/post.jpg')}}" alt="" height="350px" width="100%"></a>
            <div class="like-button">
              <div class="content">
                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                <span class="like-count">5</span>
              </div>
            </div>
          </div>
          <div class="blog-head">
            <div class="tags">
              <span><a href=""><strong>Tech</strong></a></span>
              <span><a href=""><strong>Programming</strong></a></span>
              <span><a href=""><strong>PHP</strong></a></span>
            </div>
            <a href="#"><h1>Check Out New Trendy Smart Phones in Next Decade</h1></a>
            <div class="post-details">
              <span><img src="{{asset('uploads/users/default.png')}}" alt="" height="40" width="40"></span>
              <span class="item">SHIVA SHRESTHA</span>
              <span class="item">NOVEMBER 8, 2018</span>
            </div>
          </div>
          <div class="blog-preview">
            <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory...</p>
          </div>
          <div class="social-share">
            <div class="social-left float-left">
              <span><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
              <span><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></span>
              <span><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
              <span>--------------------------</span>
            </div>
            <div class="social-right float-right">
              <span><i class="fa fa-comments" aria-hidden="true"></i> 0</span>
            </div>
            <div class="clear"></div>
          </div>
          <br>
          <hr>
        </div>

        <div class="post-item">
          <br>
          <div class="featured-image">
            <a href="#"><img src="{{asset('assets/img/post.jpg')}}" alt="" height="350px" width="100%"></a>
            <div class="like-button">
              <div class="content">
                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                <span class="like-count">5</span>
              </div>
            </div>
          </div>
          <div class="blog-head">
            <div class="tags">
              <span><a href=""><strong>Tech</strong></a></span>
              <span><a href=""><strong>Programming</strong></a></span>
              <span><a href=""><strong>PHP</strong></a></span>
            </div>
            <a href="#"><h1>Check Out New Trendy Smart Phones in Next Decade</h1></a>
            <div class="post-details">
              <span><img src="{{asset('uploads/users/default.png')}}" alt="" height="40" width="40"></span>
              <span class="item">SHIVA SHRESTHA</span>
              <span class="item">NOVEMBER 8, 2018</span>
            </div>
          </div>
          <div class="blog-preview">
            <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory...</p>
          </div>
          <div class="social-share">
            <div class="social-left float-left">
              <span><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
              <span><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></span>
              <span><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
              <span>--------------------------</span>
            </div>
            <div class="social-right float-right">
              <span><i class="fa fa-comments" aria-hidden="true"></i> 0</span>
            </div>
            <div class="clear"></div>
          </div>
          <br>
          <hr>
        </div>

        <div class="post-item">
          <br>
          <div class="featured-image">
            <a href="#"><img src="{{asset('assets/img/post.jpg')}}" alt="" height="350px" width="100%"></a>
            <div class="like-button">
              <div class="content">
                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                <span class="like-count">5</span>
              </div>
            </div>
          </div>
          <div class="blog-head">
            <div class="tags">
              <span><a href=""><strong>Tech</strong></a></span>
              <span><a href=""><strong>Programming</strong></a></span>
              <span><a href=""><strong>PHP</strong></a></span>
            </div>
            <a href="#"><h1>Check Out New Trendy Smart Phones in Next Decade</h1></a>
            <div class="post-details">
              <span><img src="{{asset('uploads/users/default.png')}}" alt="" height="40" width="40"></span>
              <span class="item">SHIVA SHRESTHA</span>
              <span class="item">NOVEMBER 8, 2018</span>
            </div>
          </div>
          <div class="blog-preview">
            <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory...</p>
          </div>
          <div class="social-share">
            <div class="social-left float-left">
              <span><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
              <span><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></span>
              <span><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
              <span>--------------------------</span>
            </div>
            <div class="social-right float-right">
              <span><i class="fa fa-comments" aria-hidden="true"></i> 0</span>
            </div>
            <div class="clear"></div>
          </div>
          <br>
          <hr>
        </div>


        @if($posts->count())
          @foreach($posts as $post)  
            <div class="post-preview">
              <a href="{{route('public.single_post',['slug'=>$post->slug])}}">
                <h2 class="post-title">
                  {{$post->title}}
                </h2>
                <h3 class="post-subtitle">
                  Problems look mighty small from 150 miles up
                </h3>
              </a>
              <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on September 24, 2019</p>
            </div>
            <hr>
          @endforeach
        @else
          <div class="text-center">
            <h2>No posts available</h2>
          </div>
        @endif
        {{$posts->links()}}
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
      @include('layouts.public.snippets.sidebar')
    </div>
  </div>

</div>
@endsection