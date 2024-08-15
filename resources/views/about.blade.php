@extends('master')
@section('content')
<section div class="about">
        <div class="hero-title">About</div>
        <div class="about-content-wrapper">
            <div class="primary-section bx-sizing">
                <div class="profile">
                    <div class="image"  style="background-image: url('../assets/images/example.jpg');"></div>
                </div>
                <div class="my-name"><b>Fikri Akbar Pratama</b></div>
                <div class="role">Frontend Developer</div>
            </div>
            <div class="line"></div>
            <div class="introduction-wrapper  bx-sizing">
                <div class="introduction">Welcome to my portfolio website! I am Fikri Akbar Pratama, a student at SMK Wikrama, majoring in Software and Game Development (PPLG). Currently, I am studying with a focus on website creation. Through this portfolio, I would like to share my work and projects that I have completed during my studies.</div>
            </div>
            <div class="line"></div>
            <div class="addition-wrapper  bx-sizing">
                <div class="addition-left">
                    <div class="left">
                        <ul>
                            <li><b>Date of birth</b> :</li>
                            <li><b>Address</b> :</li>
                            <li><b>Phone</b> :</li>
                            <li><b>Email</b> :</li>
                        </ul>
                    </div>
                    <div class="right">
                        <ul>
                            <li>11 December 2007</li>
                            <li>Bogor, Jawa Barat</li>
                            <li>+62 812-9152-3160</li>
                            <li>fikri.akbar1p@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="addition-right">
                <div class="left">
                        <ul>
                            <li><b>Nationality</b> : </li>
                            <li><b>Interest</b> : </li>
                            <li><b>Organizational</b> : </li>
                        </ul>
                    </div>
                    <div class="right">
                        <ul>
                            <li>Indonesia</li>
                            <li>Ride a bicycle</li>
                            <li>OSIS</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="skill-wrapper  bx-sizing">
                <div class="programming-skill">
                    <div class="title">Programming Skill</div>
                    <div class="programming-skill-wrapper">
                            <ul>
                                <li>
                                    <div class="skill">
                                        <div class="php">PHP</div>
                                        <div class="progres-bar">
                                            <div class="php-progres c-white p-progres">70%</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill">
                                        <div class="js">JavaScript</div>
                                        <div class="progres-bar">
                                            <div class="js-progres c-white p-progres">30%</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="language-skill">
                    <div class="title">Language Skill</div>
                    <div class="language-skill-wrapper">
                        <ul>
                            <li>
                                <div class="skill">
                                    <div class="english">English</div>
                                    <div class="progres-bar">
                                        <div class="english-progres c-white p-progres">10%</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection