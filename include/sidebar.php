<?php require("db.php"); ?>

<div class="col-md-4">
    <div class="row">
        <div class="card p-5" style="border:none ;">
            <div class="card-block">
                <h4 class="card-title font-weight-bold" style="font-family:var(--font-2)">News Letter</h4>
                <input type="text" class="py-2 pl-2 text-muted w-100" style="outline:none; border:1px solid #B8B8B8"
                    placeholder="Enter Email">
                <button style="border-radius:0 ;" type="button"
                    class="btn bg-dark px-5 mt-3 w-100 btn-outline-dark"><span
                        class=" text-warning">SUBSCRIBE</span></button>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-12 card p-5" style="border:none ;">
            <div class="card-block">
                <h4 class="card-title text-left pl-3 font-weight-bold" style="font-family:var(--font-2)">Category</h4>
            </div>
            <?php
            $result = mysqli_query($con,"SELECT * from cat;")
                    ?>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <?php   while($row = mysqli_fetch_assoc($result)){
                            ?>
                        <div class="row">
                            <p class="col-6  text-left text-muted"><?=$row['cat_name']?></p>
                            <?php 
                             $id= $row['cat_id'];
                            $r = mysqli_query($con,"SELECT * FROM post_cat left join posts ON post_cat.post_id=posts.post_id where cat_id=  $id")

                            ?>
                            <p class="col-6 text-muted pl-4 text-center">(<?=mysqli_num_rows($r)?>)</p>
                        </div>
                        <?Php
                        } ?>


                    </div>
                    <!-- <div class="col-6">
                        <div class="row">
                            
                        </div>
                        <div class="row">
                            <p class="text-muted pl-4 text-right">(12)</p>
                        </div>
                        <div class="row">
                            <p class="text-muted pl-4 text-right">(12)</p>
                        </div>
                        <div class="row">
                            <p class="text-muted pl-4 text-right">(12)</p>
                        </div>
                        <div class="row">
                            <p class="text-muted pl-4 text-right">(12)</p>
                        </div>
                        <div class="row">
                            <p class="text-muted pl-4 text-right">(12)</p>
                        </div>

                    </div> -->
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="card p-5 col-12" style="border:none ;">
            <div class="card-block">
                <h4 class="card-title font-weight-bold" style="font-family:var(--font-2)">Popular posts</h4>
            </div>
        </div>
        <div class="col-12">
            <div class="card  mt-3" style="border:none">
                <img class="card-img-top"
                    src="https://images.unsplash.com/photo-1608265386093-9b242ca91b6e?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDg3fHRvd0paRnNrcEdnfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    alt="Card image cap">
                <div class="card-body">
                    <a class="card-link text-dark" href="#">
                        <h1 class="card-title font-weight-bold" style="font-family: var(--font-2);font-size:32px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, mollitia!
                        </h1>
                        <p style="font-family: var(--font-3);font-size:18px" class="card-text text-muted">
                            TAG:news,life-style...</p>
                    </a>
                    <p id="p" class="mt-3 text-truncate">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit.
                        Consectetur, odit eum, voluptas ducimus excepturi atque porro dolorem nisi
                        architecto,
                        enim nemo quibusdam quasi quos odio rerum omnis magnam et officia.</p>
                </div>
            </div>

            <div class="col-12">
                <div class="card  mt-3" style="border:none">
                    <img class="card-img-top"
                        src="https://images.unsplash.com/photo-1608265386093-9b242ca91b6e?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDg3fHRvd0paRnNrcEdnfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Card image cap">
                    <div class="card-body">
                        <a class="card-link text-dark" href="#">
                            <h1 class="card-title font-weight-bold" style="font-family: var(--font-2);font-size:32px">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, mollitia!
                            </h1>
                            <p style="font-family: var(--font-3);font-size:18px" class="card-text text-muted">
                                TAG:news,life-style...</p>
                        </a>
                        <p id="p" class="mt-3 text-truncate">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit.
                            Consectetur, odit eum, voluptas ducimus excepturi atque porro dolorem nisi
                            architecto,
                            enim nemo quibusdam quasi quos odio rerum omnis magnam et officia.</p>
                    </div>
                </div>


                <div class="col-12">
                    <div class="card  mt-3" style="border:none">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1608265386093-9b242ca91b6e?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDg3fHRvd0paRnNrcEdnfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="Card image cap">
                        <div class="card-body">
                            <a class="card-link text-dark" href="#">
                                <h1 class="card-title font-weight-bold"
                                    style="font-family: var(--font-2);font-size:32px">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, mollitia!
                                </h1>
                                <p style="font-family: var(--font-3);font-size:18px" class="card-text text-muted">
                                    TAG:news,life-style...</p>
                            </a>
                            <p id="p" class="mt-3 text-truncate">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.
                                Consectetur, odit eum, voluptas ducimus excepturi atque porro dolorem nisi
                                architecto,
                                enim nemo quibusdam quasi quos odio rerum omnis magnam et officia.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card py-5 col-12" style="border:none ;">
            <div class="card-block">
                <h4 class="card-title font-weight-bold" style="font-family:var(--font-2)">Popular Categories
                </h4>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="col-12">
        <div class="row">

            <div class="col" style="margin: 0;">
                <button style="border:none;border-radius:0 ;" type="button"
                    class="btn bg-white  mt-3 btn-outline-dark"><span class=" text-muted">SUBSCRIBE</span></button>
            </div>
            <div class="col" style="margin: 0;padding-left:5%">
                <button style="border:none;border-radius:0 ;" type="button"
                    class="btn bg-white  mt-3 btn-outline-dark"><span class=" text-muted">tech</span></button>
            </div>
            <div class="col" style="margin: 0;padding:0;">
                <button style="border:none;border-radius: 0;margin:0 ;" type="button"
                    class="btn bg-white  mt-3 btn-outline-dark"><span class=" text-muted">SUBSCRIBE</span></button>
            </div>
            <div class="col" style="margin: 0;padding:0;">
                <button style="border:none;border-radius: 0;margin:0 ;" type="button"
                    class="btn bg-white  mt-3 btn-outline-dark"><span class=" text-muted">SUBSCRIBE</span></button>
            </div>
            <div class="col" style="margin: 0;padding:0;">
                <button style="border:none;border-radius: 0;margin:0 ;" type="button"
                    class="btn bg-white  mt-3 btn-outline-dark"><span class=" text-muted">SUBSCRIBE</span></button>
            </div>
            <div class="col" style="margin: 0;padding:0;">
                <button style="border:none;border-radius: 0;margin:0 ;" type="button"
                    class="btn bg-white  mt-3 btn-outline-dark"><span class=" text-muted">SUBSCRIBE</span></button>
            </div>

        </div>

    </div>

</div>