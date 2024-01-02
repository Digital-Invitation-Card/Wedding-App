<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digital Inviation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('frontend_asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('frontend_asset/js/jquery.slim.min.js')}}"></script>
    <script src="{{asset('frontend_asset/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend_asset/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Da+2&display=swap" />
</head>
<style>
    .card {
        background-color: transparent !important;
    }

    @font-face {
        font-family: 'DV_MEW_Shree0712';
        src: url("frontend_asset/marathi-font/DV_MEW_Shree0712.ttf") format('woff2'),
            /* Modern Browsers */
            url("frontend_asset/marathi-font/DV_MEW_Shree0712.ttf") format('woff');
        /* Modern Browsers */
        font-weight: normal;
        font-style: normal;
    }

    h1 {
        color: white;
    }
    

    body {
        font-family: 'DV_MEW_Shree0712', sans-serif;
        background-image: url("frontend_asset/img/bg-1.jpg");
    }

    .weds-text {
        color: red;
        font-weight: 600;
    }


    .fade-right,
    .fade-left,
    .fade-up {
        opacity: 0;
        transform: translateX(0);
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }

    .fade-right.show,
    .fade-left.show,
    .fade-up.show {
        opacity: 1;
        transform: translateX(0);
    }

    .fade-right {
        animation: fadeRight 1s forwards;
    }

    .fade-left {
        animation: fadeLeft 1s forwards;
    }

    .fade-up {
        animation: fadeUp 1s forwards;
    }

    @keyframes fadeRight {
        0% {
            opacity: 0;
            transform: translateX(50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeLeft {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .card-img-top {
        width: 100%;
        height: 40vh;
        object-fit: contain;
    }

    .hello {
        opacity: 1 !important;
    }

    .full {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .full .content {
        background-color: rgba(0, 0, 0, 0.75) !important;
        height: 100%;
        width: 100%;
        display: grid;
    }

    .full .content img {
        left: 50%;
        transform: translate3d(0, 0, 0);
        animation: zoomin 1s ease;
        max-width: 100%;
        max-height: 100%;
        margin: auto;
    }

    .byebye {
        opacity: 0;
    }

    .byebye:hover {
        transform: scale(0.2) !important;
    }

    .gallery {
        display: grid;
        grid-column-gap: 8px;
        grid-row-gap: 8px;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        grid-auto-rows: 8px;
    }

    .gallery img {
        max-width: 100%;
        border-radius: 8px;
        /* box-shadow: 0 0 16px #333; */
        transition: all 1.5s ease;
    }

    /* .gallery img:hover {
        box-shadow: 0 0 32px #333;
    } */

    .gallery .content {
        padding: 4px;
    }

    .gallery .gallery-item {
        transition: grid-row-start 300ms linear;
        transition: transform 300ms ease;
        transition: all 0.5s ease;
        cursor: pointer;
    }

    .gallery .gallery-item:hover {
        transform: scale(1.025);
    }

    @media (max-width: 600px) {
        .gallery {
            grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
        }
    }

    @media (max-width: 400px) {
        .gallery {
            grid-template-columns: repeat(auto-fill, minmax(50%, 1fr));
        }
    }

    @-moz-keyframes zoomin {
        0% {
            max-width: 50%;
            transform: rotate(-30deg);
            filter: blur(4px);
        }

        30% {
            filter: blur(4px);
            transform: rotate(-80deg);
        }

        70% {
            max-width: 50%;
            transform: rotate(45deg);
        }

        100% {
            max-width: 100%;
            transform: rotate(0deg);
        }
    }

    @-webkit-keyframes zoomin {
        0% {
            max-width: 50%;
            transform: rotate(-30deg);
            filter: blur(4px);
        }

        30% {
            filter: blur(4px);
            transform: rotate(-80deg);
        }

        70% {
            max-width: 50%;
            transform: rotate(45deg);
        }

        100% {
            max-width: 100%;
            transform: rotate(0deg);
        }
    }

    @-o-keyframes zoomin {
        0% {
            max-width: 50%;
            transform: rotate(-30deg);
            filter: blur(4px);
        }

        30% {
            filter: blur(4px);
            transform: rotate(-80deg);
        }

        70% {
            max-width: 50%;
            transform: rotate(45deg);
        }

        100% {
            max-width: 100%;
            transform: rotate(0deg);
        }
    }

    @keyframes zoomin {
        0% {
            max-width: 50%;
            transform: rotate(-30deg);
            filter: blur(4px);
        }

        30% {
            filter: blur(4px);
            transform: rotate(-80deg);
        }

        70% {
            max-width: 50%;
            transform: rotate(45deg);
        }

        100% {
            max-width: 100%;
            transform: rotate(0deg);
        }
    }

    @keyframes fadeInAnimation {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .jumbotron {
        width: 100%;
        height: 100%;
        background-size: 100% 100%;
        background-image: url("frontend_asset/img/wedding-background-img.jpg");
    }

    .welcome {
        margin-top: 20%;
        font-weight: 600;
    }

    p {
        font-weight: 600;
        color: white;
    }
</style>

<body>

    <div class="jumbotron text-center fade-up">
        <h1 class="weds-text welcome">स्वागत</h1>
        <h1 class="text-white">भाविका & प्रशांत</h1>
        <p class="text-white">।। यांचा शुभ मंगल विवाह ।।</p>
    </div>

    <div class="container">
        <div class="text-center">
            <h1 class="fade-right weds-text">वर आणि वधू</h1>
            <p class="fade-left">।। भाविका व प्रशांत च्या लग्नाकडे, डोळे लागले जगाचे…
                आहेरात आणा फक्त, अनमोल गिफ्ट आशीर्वादाचे… ।।</p>
        </div>
        <div class="row">
            <div class="col-lg-6 fade-right ">
                <div class="card border-0">
                    <img class="card-img-top embed-responsive-item" src="https://bhavika-weds-prashant.digitalnimantran.in/wp-content/uploads/2022/11/MG_6483-1-scaled-e1668525224264-1536x1343.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title text-center weds-text">चि. सौ. कां. भाविका</h3>
                        <p class="card-text text-center">कै.श्री. मिलिंद रमण खैरनार यांची द्वितीय कन्या
                            रा. पिंपळनेर, ह.मु. कळवा, ठाणे</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fade-left">
                <div class="card border-0">
                    <img class="card-img-top" src="https://bhavika-weds-prashant.digitalnimantran.in/wp-content/uploads/2022/11/insta-1-of-6-2-1-scaled-e1668510108780.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title text-center weds-text">चि. प्रशांत</h3>
                        <p class="card-text text-center">श्री. मोहन आनंदा पवार यांचे चतुर्थ चिरंजीव,रा. नंदुरबार</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <audio controls="" autoplay="">
            <source src="https://tushar-weds-pratiksha.digitalnimantran.in/wp-content/uploads/2022/11/Marathi-marriage-invitation-video.wav" type="audio/wav">
            Your browser does not support the audio element.
        </audio>
    </div>
    <div class="container mt-5 ">
        <div class="text-center fade-up">
            <h1 class="weds-text">आमची प्रेम कहाणी</h1>
            <p>तुमचा आशीर्वाद राहो, सदैव आमच्या पाठी…
                नक्की या जुळताना, भाविका आणि प्रशांतच्या रेशीमगाठी… </p>
        </div>
        <div class="card h-100 mb-2">
            <div class="row no-gutters">
                <div class="col-auto fade-up">
                    <img src="https://arthshikshan.com/wp-content/uploads/2021/07/Visit-to-bank-to-open-bank-account.jpg" class="img-fluid" alt="">
                </div>
                <div class="col fade-up">
                    <div class="card-block m-3">
                        <P class="weds-text" disabled="disabled">23rd Mar, 2022</P>
                        <h4 class="card-title  ">पहिली भेट</h4>
                        <p class="card-text ">वहिनीचे लग्न होते तिथे मी तिला पहिल्या वेळेस बघितले तिथे ती मला स्माईल देत होती मी तिला स्माईल करत होतो. आम्ही दोघं बोलण्यासाठी प्रयत्न करत होतो पण दोघांची हिंमत नाही झाली बोलण्याची. आणि मोबाईलला पण चार्जिंग कमी होती पण गुडलक असं त्यावेळेस कसातरी तो ऑन झाला तेव्हा वहिनीने नंबर दिला मला ऑन द रोडेच नंबर घेतला मी आणि लगेच मी तिला दोन टेक्स्ट मेसेज केले.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card h-100 mb-2">
            <div class="row no-gutters">
                <div class="col">
                    <div class="card-block m-3">
                        <P class="weds-text" disabled="disabled">2nd July, 2022</P>
                        <h4 class="card-title  ">ती 'हो' म्हणाली</h4>
                        <p class="card-text ">तिला माझी लाईफ पार्टनर म्हणून बघू लागलो पण तिने मला ब्लॉक करून दिला मग मी तिला सांगितलं की मी तुला खूप लाईक करतो आणि तू मला आवडायला लागली आहे. त्यानंतर पंधरा दिवसानंतर तिच्या आईला कळालं की आम्ही फोनवर बोलायला लागलो असं मग तिच्या आईने तिला समजलं की बोलायचं नाही मग मी त्यांच्या आईला भेटून सांगितलं की तुमची मुलगी आवडायला लागली आहे मला आणि मी तिच्याशीच लग्न करेल</p>
                    </div>
                </div>
                <div class="col-auto">
                    <img src="https://arthshikshan.com/wp-content/uploads/2021/07/Visit-to-bank-to-open-bank-account.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 ">
        <div class="text-center">
            <h1 class="text-danger font-weight-bold fade-up">कुटुंब</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card h-100 mb-2 border-0">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="card-block m-3">
                                <h4 class="card-title  ">कै.श्री.मिलिंद खैरनार</h4>
                                <p class="card-text ">-वधुचे बाबा-</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <img src="https://bhavika-weds-prashant.digitalnimantran.in/wp-content/uploads/2022/11/IMG_20221115_175601-e1668516686905-270x300.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 mb-2 border-0">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <img src="https://bhavika-weds-prashant.digitalnimantran.in/wp-content/uploads/2022/11/IMG_20221115_175601-e1668516686905-270x300.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <div class="card-block m-3">
                                <h4 class="card-title">श्री.मोहन आनंदा पवार</h4>
                                <p class="card-text ">-वराचे बाबा-</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 mb-2 border-0">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="card-block m-3">
                                <h4 class="card-title  ">कै.श्री.मिलिंद खैरनार</h4>
                                <p class="card-text ">-वधुचे बाबा-</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <img src="https://bhavika-weds-prashant.digitalnimantran.in/wp-content/uploads/2022/11/DSC_0820-e1668512634416.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 mb-2 border-0">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <img src="https://bhavika-weds-prashant.digitalnimantran.in/wp-content/uploads/2022/11/IMG-20220804-WA0107-e1668514133530-269x300.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <div class="card-block m-3">
                                <h4 class="card-title">श्रीमती.आशा मिलिंद खैरनार</h4>
                                <p class="card-text ">-वधूची आई-</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel text-center mt-5 ">
            <h1>नाती जन्मोजन्मींची, परमेश्वराने ठरवलेली, दोन जीवांना प्रेमभरल्या रेशीमगाठीत बांधलेली… लग्नाच्या हार्दिक शुभेच्छा..!!</h1>
        </div>
        <div class="text-center mt-5">
            <h1>आतुरता लग्नाची</h1>
            <div class="row d-flex justify-content-center m-3">
                <div class="card col-auto border-0 ">
                    <h2 id="days" class="text-white" ></h2>
                    <p>दिवस</p>
                </div>
                <div class="card col-auto border-0">
                    <h2 id="hours" class="text-white"></h2>
                    <p>तास</p>
                </div>
                <div class="card col-auto border-0">
                    <h2 id="minutes" class="text-white"></h2>
                    <p>मिनटं</p>
                </div>
                <div class="card col-auto border-0">
                    <h2 id="seconds" class="text-white"></h2>
                    <p>सेकंद</p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="text-center">
                <h1>सुवर्ण क्षण</h1>
                <p>प्रथम पुजावा श्री गणपती । धन्य ती भारतीय संस्कृती ।। ज्ञानेश्वराने चालवल्या भिंती । अर्जुनाच्या रथावर श्रीकृष्ण सारथी ।। सर्व काही ईश्वराच्या हाती । तोच जुळवितो नाती – गोती ।। वधु-वरास आशिर्वाद द्यावेत हीच आमची नम्र विनंती ।।</p>
            </div>

            <div class="row">
                <div class="gallery" id="gallery">
                    <div class="gallery-item">
                        <div class="content"><img src="https://source.unsplash.com/random/?tech,care" alt=""></div>
                    </div>
                    <div class="gallery-item">
                        <div class="content"><img src="https://source.unsplash.com/random/?tech,studied" alt=""></div>
                    </div>
                    <div class="gallery-item">
                        <div class="content"><img src="https://source.unsplash.com/random/?tech,substance" alt=""></div>
                    </div>
                    <div class="gallery-item">
                        <div class="content"><img src="https://source.unsplash.com/random/?tech,choose" alt=""></div>
                    </div>
                    <div class="gallery-item">
                        <div class="content"><img src="https://source.unsplash.com/random/?tech,past" alt=""></div>
                    </div>
                    <div class="gallery-item">
                        <div class="content"><img src="https://source.unsplash.com/random/?tech,lamp" alt=""></div>
                    </div>
                    <div class="gallery-item">
                        <div class="content"><img src="https://source.unsplash.com/random/?tech,yet" alt=""></div>
                    </div>
                    <div class="gallery-item">
                        <div class="content"><img src="https://source.unsplash.com/random/?tech,eight" alt=""></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container mt-3">
        <div class="panel text-center">
            <h1>कार्यक्रम</h1>
        </div>
        <div class="row">

            <div class="col-lg-4">
                <div class="card text-center border-0 ">
                    <h1>हळद</h1>
                    <p>रविवार, दि. ४ डिसेम्बर २०२३ रोजी विवाहस्थळी</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center border-0">
                    <h1>विवाहस्थळ</h1>
                    <p>कन्यादान मंगल कार्यालय ०८,नवल रोड, अहिंसा चौक , नंदुरबार.</p>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="card text-center border-0">
                    <h1>लग्न</h1>
                    <p>सोमवार, ५ डिसेम्बर २०२३ रोजी १२. २२ मिनीटांनी विवाहस्थळी</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card text-center border-0">
            <h1>कार्यक्रम पत्ता</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card border-0 text-center mt-25 ">
                    <h1>विवाहस्थळ</h1>
                    <p>कन्यादान मंगल कार्यालय ०८,नवल रोड, अहिंसा चौक , नंदुरबार.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1919371.2648072343!2d73.99634109980175!3d20.018081642471504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb985bbfb80117%3A0x7d0e1942a317501!2sAurangabad%20Metropolitan%20Area%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1703510372718!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    // Converting string to required date format 
    let deadline = new Date("Jan 5, 2024 15:37:25")
        .getTime();
    // To call defined fuction every second
    let x = setInterval(function() {
        // Getting current time in required format
        let now = new Date().getTime();
        // Calculating the difference
        let t = deadline - now;
        // Getting value of days, hours, minutes, seconds
        let days = Math.floor(t / (1000 * 60 * 60 * 24));
        let hours = Math.floor(
            (t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor(
            (t % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor(
            (t % (1000 * 60)) / 1000);
        // Output the remaining time
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // document.getElementById("demo").innerHTML =
        //     days + "d " + hours + "h " +
        //      + "m " +  + "s ";
        // Output for over time
        if (t < 0) {
            clearInterval(x);
            document.getElementById("days").innerHTML = "Congralation";
            document.getElementById("hours").innerHTML = "happy";
            document.getElementById("minutes").innerHTML = "married";
            document.getElementById("seconds").innerHTML = "life";
        }
    }, 1000);
    // Get the elements with class="column"
    var elements = document.getElementsByClassName("column");

    // Declare a loop variable
    var i;

    // Full-width images
    function one() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.msFlex = "100%"; // IE10
            elements[i].style.flex = "100%";
        }
    }

    // Two images side by side
    function two() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.msFlex = "50%"; // IE10
            elements[i].style.flex = "50%";
        }
    }

    // Four images side by side
    function four() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.msFlex = "25%"; // IE10
            elements[i].style.flex = "25%";
        }
    }

    var gallery = document.querySelector('#gallery');
    var getVal = function(elem, style) {
        return parseInt(window.getComputedStyle(elem).getPropertyValue(style));
    };
    var getHeight = function(item) {
        return item.querySelector('.content').getBoundingClientRect().height;
    };
    var resizeAll = function() {
        var altura = getVal(gallery, 'grid-auto-rows');
        var gap = getVal(gallery, 'grid-row-gap');
        gallery.querySelectorAll('.gallery-item').forEach(function(item) {
            var el = item;
            el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
        });
    };
    gallery.querySelectorAll('img').forEach(function(item) {
        item.classList.add('byebye');
        if (item.complete) {
            console.log(item.src);
        } else {
            item.addEventListener('load', function() {
                var altura = getVal(gallery, 'grid-auto-rows');
                var gap = getVal(gallery, 'grid-row-gap');
                var gitem = item.parentElement.parentElement;
                gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
                item.classList.remove('byebye');
            });
        }
    });
    window.addEventListener('resize', resizeAll);
    gallery.querySelectorAll('.gallery-item').forEach(function(item) {
        item.addEventListener('click', function() {
            item.classList.toggle('full');
        });
    });
</script>