@extends('layouts.forum')

@section('title', 'Forum')
@section('content')

    <div class="hero is-medium is-link is-bold">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title">
                    Forum Terbesar Dibumi
                </h1>
                <h2 class="subtitle">Diskusi sambil menambah wawasan dan saudara.</h2>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            @include('layouts.explore.categoryBlog')

            <div class="columns">
                <div class="column is-8">
                    <div class="box">

                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/doloribus-deleniti-minus-et-exercitationem">Qui totam molestias omnis oop loo</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="field is-grouped is-grouped-multiline">
                                        <div class="control">
                                            <div class="tags has-addons">
                                                    <span class="tag is-dark icon">
                                                      <i class="fas fa-thumbs-up"></i>
                                                    </span>
                                                <span class="tag is-info">0 Like</span>
                                            </div>
                                        </div>
                                        <div class="control">
                                            <div class="tags has-addons">
                                                    <span class="tag is-dark icon">
                                                      <i class="fas fa-thumbs-down"></i>
                                                    </span>
                                                <span class="tag is-light">0 UnLike</span>
                                            </div>
                                        </div>

                                        <div class="control">
                                            <div class="tags has-addons">
                                                    <span class="tag is-dark icon">
                                                      <i class="fas fa-eye"></i>
                                                    </span>
                                                <span class="tag is-primary">0 View</span>
                                            </div>
                                        </div>

                                    </div>

                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-64x64" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/ut-repudiandae-distinctio-sit-velit-delectus-quia">Omnis qui iste eius.</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Voluptatem id et sequi aut consectetur quibusdam et enim. Aliquam sit in ut mollitia tempore sed quia. Voluptas asperiores dolores quas eaque qui aute....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                        </article>

                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/doloribus-deleniti-minus-et-exercitationem">Qui totam molestias omnis oop loo</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Qui fugiat quia odit pariatur aliquam voluptates velit. Praesentium quia nihil corporis ea delectus. Neque voluptatum et suscipit dolore rem autem. Pe....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/ut-repudiandae-distinctio-sit-velit-delectus-quia">Omnis qui iste eius.</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Voluptatem id et sequi aut consectetur quibusdam et enim. Aliquam sit in ut mollitia tempore sed quia. Voluptas asperiores dolores quas eaque qui aute....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                        </article>

                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/doloribus-deleniti-minus-et-exercitationem">Qui totam molestias omnis oop loo</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Qui fugiat quia odit pariatur aliquam voluptates velit. Praesentium quia nihil corporis ea delectus. Neque voluptatum et suscipit dolore rem autem. Pe....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/ut-repudiandae-distinctio-sit-velit-delectus-quia">Omnis qui iste eius.</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Voluptatem id et sequi aut consectetur quibusdam et enim. Aliquam sit in ut mollitia tempore sed quia. Voluptas asperiores dolores quas eaque qui aute....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                        </article>

                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/doloribus-deleniti-minus-et-exercitationem">Qui totam molestias omnis oop loo</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Qui fugiat quia odit pariatur aliquam voluptates velit. Praesentium quia nihil corporis ea delectus. Neque voluptatum et suscipit dolore rem autem. Pe....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/ut-repudiandae-distinctio-sit-velit-delectus-quia">Omnis qui iste eius.</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Voluptatem id et sequi aut consectetur quibusdam et enim. Aliquam sit in ut mollitia tempore sed quia. Voluptas asperiores dolores quas eaque qui aute....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                        </article>

                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/doloribus-deleniti-minus-et-exercitationem">Qui totam molestias omnis oop loo</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Qui fugiat quia odit pariatur aliquam voluptates velit. Praesentium quia nihil corporis ea delectus. Neque voluptatum et suscipit dolore rem autem. Pe....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/ut-repudiandae-distinctio-sit-velit-delectus-quia">Omnis qui iste eius.</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Voluptatem id et sequi aut consectetur quibusdam et enim. Aliquam sit in ut mollitia tempore sed quia. Voluptas asperiores dolores quas eaque qui aute....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                        </article>

                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/doloribus-deleniti-minus-et-exercitationem">Qui totam molestias omnis oop loo</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Qui fugiat quia odit pariatur aliquam voluptates velit. Praesentium quia nihil corporis ea delectus. Neque voluptatum et suscipit dolore rem autem. Pe....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/ut-repudiandae-distinctio-sit-velit-delectus-quia">Omnis qui iste eius.</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Voluptatem id et sequi aut consectetur quibusdam et enim. Aliquam sit in ut mollitia tempore sed quia. Voluptas asperiores dolores quas eaque qui aute....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                        </article>

                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/doloribus-deleniti-minus-et-exercitationem">Qui totam molestias omnis oop loo</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Qui fugiat quia odit pariatur aliquam voluptates velit. Praesentium quia nihil corporis ea delectus. Neque voluptatum et suscipit dolore rem autem. Pe....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/10" alt="Image">
                                </figure>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/ut-repudiandae-distinctio-sit-velit-delectus-quia">Omnis qui iste eius.</a></strong> <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                        <br>
                                        Voluptatem id et sequi aut consectetur quibusdam et enim. Aliquam sit in ut mollitia tempore sed quia. Voluptas asperiores dolores quas eaque qui aute....
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <p>Mar, 31 2019 - Uncategory</p>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right is-hidden-mobile">
                                <figure class="image is-128x128" style="overflow: hidden">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                            <div class="media-right is-hidden-tablet" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                        </article>


                    </div>
                </div>
                <div class="column is-4">
                    <div class="box">
                        <a href="#" class="button is-info is-block">Buat Thread</a>
                    </div>
                    <div class="box sticky">
                        <p class="subtitle">
                            <strong>Lagi Hot Gan</strong>
                        </p>

                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/ut-repudiandae-distinctio-sit-velit-delectus-quia">Omnis qui iste eius.</a></strong>
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/ut-repudiandae-distinctio-sit-velit-delectus-quia">Omnis qui iste eius.</a></strong>
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><a href="http://admin.dibumi.com:2018/ut-repudiandae-distinctio-sit-velit-delectus-quia">Omnis qui iste eius.</a></strong>
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <small><a href="http://dibumi.com:2018/user/admin">@admin</a></small>
                                    </div>
                                </nav>
                            </div>
                            <div class="media-right" style="overflow: hidden">
                                <figure class="image is-64x64">
                                    <img src="http://dibumi.com:2018/cdn/thumbnail/post/11" alt="Image">
                                </figure>
                            </div>
                        </article>

                        <hr>
                        <p class="subtitle">
                            <strong>Topik Populer Gan</strong>
                        </p>
                        <div class="tags are-medium">
                            <span class="tag">All</span>
                            <span class="tag">Medium</span>
                            <span class="tag">Size</span>
                            <span class="tag">Kadal</span>
                            <span class="tag">Ovo</span>
                            <span class="tag">Gopay</span>
                            <span class="tag is-info">Indonesia</span>
                            <span class="tag">Startup</span>
                            <span class="tag">Oyo</span>
                            <span class="tag">Korupsi</span>
                            <span class="tag">Politik</span>
                            <span class="tag">Boneka Politik</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@push('push-footer')

@endpush