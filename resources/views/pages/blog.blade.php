@extends('layouts.body')

@section('content')

    <div id="colorlib-main">
        <section class="ftco-section ftco-bread">
            <div class="container">
                <div class="row no-gutters slider-text justify-content-center align-items-center">
                    <div class="col-md-8 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>Blog</span></p>
                        <h1 class="bread">Read Our Blog</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-8">
                        <div class="row">

                            @foreach($blogs as $blog)

                                <div class="col-md-12">
                                    <div class="blog-entry ftco-animate d-md-flex">
                                        <a href="blogs/{{$blog->id}}" class="img img-2" style="background-image: url({{asset('storage/'.$blog->blog_image)}});"></a>
                                        <div class="text text-2 p-4">
                                            <h3 class="mb-2"><a href="blogs/{{$blog->id}}">{{$blog->title}}</a></h3>
                                            <div class="meta-wrap">
                                                <p class="meta">
                                                    <span>{{$blog->created_at}}</span>
                                                    <span><a href="blogs/{{$blog->id}}">Photography</a></span>
                                                    <span>5 Comment</span>
                                                </p>
                                            </div>
                                            <p class="mb-4">
                                                {{$blog->short_message}}
                                                <p><a href="blogs/{{$blog->id}}" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            {{$blogs->links()}}
                        </div>
                    </div>
                    <div class="col-lg-4 sidebar ftco-animate bg-light">
                        <div class="sidebar-box">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon icon-search"></span>
                                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Categories</h3>
                            <ul class="categories">
                                <li><a href="#">Fashion <span>(6)</span></a></li>
                                <li><a href="#">Technology <span>(8)</span></a></li>
                                <li><a href="#">Travel <span>(2)</span></a></li>
                                <li><a href="#">Food <span>(2)</span></a></li>
                                <li><a href="#">Photography <span>(7)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Popular Articles</h3>
                            @foreach ($blogs->take(3) as $blog)    
                                <div class="block-21 mb-4 d-flex">
                                    <a class="blog-img mr-4" style="background-image: url({{asset('storage/'.$blog->blog_image)}});"></a>
                                    <div class="text">
                                        <h3 class="heading"><a href="blogs/{{$blog->id}}">{{$blog->title}}</a></h3>
                                        <div class="meta">
                                            <div><a href="blogs/{{$blog->id}}"><span class="icon-calendar"></span> {{$blog->created_at}}</a></div>
                                            <div><a href="blogs/{{$blog->id}}"><span class="icon-chat"></span> {{count($blog->comments)}}</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Tag Cloud</h3>
                            <ul class="tagcloud">
                                <a href="#" class="tag-cloud-link">animals</a>
                                <a href="#" class="tag-cloud-link">human</a>
                                <a href="#" class="tag-cloud-link">people</a>
                                <a href="#" class="tag-cloud-link">cat</a>
                                <a href="#" class="tag-cloud-link">dog</a>
                                <a href="#" class="tag-cloud-link">nature</a>
                                <a href="#" class="tag-cloud-link">leaves</a>
                                <a href="#" class="tag-cloud-link">food</a>
                            </ul>
                        </div>
                        <div class="sidebar-box subs-wrap img" style="background-image: url({{asset('images/bg_1.jpg')}});">
                            <div class="overlay"></div>
                            <h3 class="mb-4 sidebar-heading">Newsletter</h3>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                            <form action="{{route('letter')}}" class="subscribe-form" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control @error('emailletter') is-invalid @enderror" placeholder="Email Address" name="emailletter" required autocomplete="emailletter">
                                    <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
                                    @error('emailletter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Archives</h3>
                            <ul class="categories">
                                <li><a href="#">Decob14 2018 <span>(10)</span></a></li>
                                <li><a href="#">September 2018 <span>(6)</span></a></li>
                                <li><a href="#">August 2018 <span>(8)</span></a></li>
                                <li><a href="#">July 2018 <span>(2)</span></a></li>
                                <li><a href="#">June 2018 <span>(7)</span></a></li>
                                <li><a href="#">May 2018 <span>(5)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Paragraph</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
