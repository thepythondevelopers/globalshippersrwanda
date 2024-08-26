<section class="hero-section" style="background-color: #000;">
        <div class="container-fluid">
            <div class="container py-5">
                <!-- <h3 class="text-white display-6 mb-4 wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Welcome to the Globalshipperswanda help centre.                </h3> -->
                <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                    <div class="input-group input-group-lg rounded-pill">
                        <span class="input-group-text bi-search" id="basic-addon1">
                            
                        </span>

                        <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Search for answers..." aria-label="Search">

                        <button type="submit" class="form-control rounded-pill">Search</button>
                    </div>
                </form>   
            </div>
        </div>
    </section>
<div class="content">
    <div class="container">
        <ol class="breadcrumb">

            
                <!-- <li><a href="#">Getting Started</a></li>
            
            <li class="active">Do I have to pay to sign up?</li> -->
        </ol>

        <div class="card">
            <div class="article--meta">

                <h1 class="title"><?php echo $content->cat_question;?></h1>
                
            </div>

            <article class="article">
                <p id="isPasted"><?php echo $content->cat_answer;?></p>
            </article>
            </div>
        </div>
    </div>
</div>