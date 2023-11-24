@extends('layout.master')

@section('content')


<main>
        <!-- about-start-here -->
        <section class="container">
           <div class="about_section">
            <h2 class="section_title">About Me </h2>
            <p>I, m a designer & developer with a passion for web design. I enjoy developing simple, clean and
                slick websites that provide real value to the end user. Thousands of clients have procured
                exceptional resulfs while working with me. Delivering work within time and budget which meets
                clients requirements in our mata.</p>

                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="about_detelts">
                            <h4 class="about_title">Name:</h4>
                            <h2 class="about_all">Abdullah</h2>

                        </div>

                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="about_detelts">
                            <h4 class="about_title">Email:</h4>
                            <h2 class="about_all">developerabdullahalmasum@gmail.com</h2>

                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="about_detelts">
                            <h4 class="about_title">Date of birth:</h4>
                            <h2 class="about_all">17 december 1998</h2>

                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="about_detelts">
                            <h4 class="about_title">From:</h4>
                            <h2 class="about_all">Rangpur,BAN</h2>

                        </div> 
                    </div>

                </div>
           </div>

        </section>
        <!-- about-end-here -->
        <!-- what-i -do -start-here -->
        <section class="container">
            <div class="what_i_do">
                <h2 class="section_title">What I Do  </h2>
                <p>I have more than 3 years experience building Website for clients all over the world. Below is a quick
                    overview of my main technical skill sets and technologies i use. Want to find out more about my experience?
                    Check out my online resume and project portfolio.</p>

            </div>

        </section>
        <!-- what-i -do-end-here -->
        <!-- program-area-start-here -->
        <section  id="program_section">
          <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="program_area">
                        <img class="progam_img" src="{{asset('/images/icons/html.png')}}" alt="">
                        <h2 class="program_tital">Html</h2>
                        <p class="program_des">
                            HTML (HyperText Markup Language) is the code that is used to structure a web page and its content. For example, content could be structured within a set of paragraphs, a list of bulleted points, or using images and data table
                        </p>

                    </div>

                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="program_area">
                        <img class="progam_img" src="{{asset('/images/icons/css.png')}}" alt="">
                        <h2 class="program_tital">CSS</h2>
                        <p class="program_des">
                            Cascading Style Sheets (CSS) is a stylesheet language that instructs the browser how we want our HTML to appear; it is not a programming language. More than 95% of all websites on the internet today employ CSS to establish their design, making it highly crucial
                        </p>

                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="program_area">
                        <img class="progam_img" src="{{asset('/images/icons/bootatarp.png')}}" alt="">
                        <h2 class="program_tital">bootstrap</h2>
                        <p class="program_des">
                            Bootstrap is a CSS framework and toolkit. Developers can't use it to write programs, but because Bootstrap contains massive amounts of reusable code and website element templates, the framework can remove some of the “busy work” and significantly speed up the process of building a website.
                        </p>

                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="program_area">
                        <img class="progam_img" src="{{asset('/images/icons/jquery.png')}}" alt="">
                        <h2 class="program_tital">Jquery</h2>
                        <p class="program_des">
                            jQuery by itself is not a programming language. It is a tool that you can use to facilitate web development in JavaScript. This helps make the tasks simpler and straightforward
                        </p>

                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="program_area">
                        <img class="progam_img" src="{{asset('/images/icons/js.png')}}" alt="">
                        <h2 class="program_tital">JavaScript</h2>
                        <p class="program_des">
                          
JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive. Where HTML and CSS are languages that give structure and style to web pages, JavaScript gives web pages interactive elements that engage a user
                        </p>

                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="program_area">
                        <img class="progam_img" src="{{asset('/images/icons/php.png')}}" alt="">
                        <h2 class="program_tital">PHP</h2>
                        <p class="program_des">
                            PHP, originally derived from Personal Home Page Tools, now stands for PHP: Hypertext Preprocessor, which the PHP FAQ describes as a "recursive acronym." PHP executes on the server, while a comparable alternative, JavaScript, executes on the client.
                        </p>

                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="program_area">
                        <img class="progam_img" src="{{asset('/images/icons/mysql.png')}}" alt="">
                        <h2 class="program_tital">MySQL</h2>
                        <p class="program_des">
                            Is MySQL a programming language?
                            SQL and MySQL are database-related languages. While SQL is a programming language used to work with data in relational databases, MySQL is an open-source database product that implements the SQL standard.
                        </p>

                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="program_area">
                        <img class="progam_img" src="{{asset('/images/icons/laravel.png')}}" alt="">
                        <h2 class="program_tital">Laravel</h2>
                        <p class="program_des">
                            What is the difference between PHP and Laravel? The difference is clear - PHP or Core PHP is a basic scripting language where Laravel is a full-structured PHP framework. Both act as the best web development sources, making projects worth using for en-users
                        </p>

                    </div>
                </div>
            </div>
         
          
          </div>

        </section>
        <!-- program-area-end-here -->
        <!-- summary of My -resume-start-here -->
        <section class="summary_section">
            <div class="container">
                <h3 class="section_title">A summary  of my resume</h3>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="education">
                           
                            <h2 class="summary_title">My education</h2>
                            <h4 class="summary_title2">(SSC) Secondary School Certificate  </h4>
                            <h5 class="summary_clg">bhurungamari pilot high school / 2016-2017</h5>
                            <p class="summary_p">hi .I am Md Abdullah Al Masum. I passed the Secondary School Certificate exam in 2016-2017 academic year (SSC) with 4.00. My school name is Bhurungamari Government Pilot High School</p>
                            <hr>

                        </div>
                        <!-- education-area-end-here -->
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="experience">
                            <h2 class="summary_title">My experience</h2>
                            <h4 class="summary_title2">jr.Font-end developer </h4>
                            <h5 class="summary_clg">Fiverr.com Inc/2020-current</h5>
                            <p class="summary_p">I am a front end
                                developer. I can design any website. I use it for design. HTML,CSS,JS,Jquery and bootsterp.I can design website with wordpress. I can design 100% responsive website. All devices are 100% responsive</p>
                                <hr>
                           


                        </div>
                        <!-- experience-area-end-here -->
                    </div>

                </div>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="education">
                           
                          
                            <h4 class="summary_title2">diploma in engineering  </h4>
                            <h5 class="summary_clg">Rangpur Ideal Institute of Technology / (CMT)2017-2018</h5>
                            <p class="summary_p">I studied Computer Technology from Rangpur Ideal Institute of Technology till 5th semester</p>
                            <hr>

                        </div>
                        <!-- education-area-end-here -->
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="experience">
                          
                            <h4 class="summary_title2">jr.Back-end developer </h4>
                            <h5 class="summary_clg">Fiverr.com Inc/2020-current</h5>
                            <p class="summary_p">I am back end developer. I use for back end. PHP, MySQL,Laravel</p>
                                <hr>
                           


                        </div>
                        <!-- experience-area-end-here -->
                    </div>

                </div>

            </div>
        </section>
        <!-- summary of My -resume-end-here -->
      

    </main>



@endsection