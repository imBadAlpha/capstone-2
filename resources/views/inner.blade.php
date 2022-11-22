@include ('layouts.header')
@include ('layouts.navbar_inner')
<main id="main">

    <section class="inner-page">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-lg-6">
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/cover 1.png" alt=""></div>
                            <p class="username">modern_web_channel</p>
                        </div>
                        <img src="assets/img/option.PNG" class="options" alt="">
                    </div>
                    <img src="assets/img/cover 1.png" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <img src="assets/img/like.PNG" class="icon" alt="">
                            <img src="assets/img/comment.PNG" class="icon" alt="">
                            <img src="assets/img/send.PNG" class="icon" alt="">
                            <img src="assets/img/save.PNG" class="save icon" alt="">
                        </div>
                        <p class="likes">1,012 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus molestias?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="assets/img/smile.PNG" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
                        <button class="comment-btn">post</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
@include ('layouts.footer')