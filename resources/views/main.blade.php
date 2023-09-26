<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{$description ?? ''}}">
    <title>Dan Berges — {{$title ?? 'Dan Berges'}}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/dan_favicon.png') }}">
    <meta property="og:image:url" content="{{ asset('images/dan.jpg') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="nav-link" href="">Dan Berges</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#work">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#articles">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#books">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fiction">Fiction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#courses">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#podcasts">Podcasts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#music">Music</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="flex-grow-1 container extra-narrow mx-auto py-5">
        <h1>Dan Berges</h1>

        <section>
            <img src="{{ asset('images/dan.jpg') }}" class="img-fluid rounded mb-4" alt="Dan Berges">
            <p>I’m a Madrid-born, NYC-based entrepreneur with a background in arts, education, and computer programming.
                I build and develop sustainable growth models for small businesses based on complex systems that promote
                logistical efficiency and customer retention.</p>
            <p>I've been featured in <a target="_blank"
                                        href="https://elpais.com/economia/negocios/2023-07-20/de-una-banda-de-pop-jazz-en-barcelona-a-dar-clases-de-espanol-a-30000-estudiantes-en-nueva-york.html">
                    El País</a>, <a target="_blank" href="https://www.elmundo.es/economia/actualidad-economica/2023/08/07/64cfc087e85ece135d8b45a2.html">
                    El Mundo</a>, and
                <a target="_blank" href="https://www.elnacional.com/mundo/el-viaje-de-un-emprendedor-para-construir-una-cadena-de-escuelas-de-espanol-en-estados-unidos/">
                    El Nacional.</a> I was also included in Forbes España's
                <a target="_blank" href="https://forbes.es/100-creativos-en-el-mundo-de-los-negocios-2023/">
                    Los 100 más creativos en el mundo de los negocios 2023.
                </a>
            </p>
            <h3>Professional Bio</h3>
            <p>Dan Berges is a Spanish entrepreneur, teacher, author, programmer, and musician based in NYC.
                He is the Managing Director of <a target="_blank" href="https://www.bergesinstitutespanish.com/">Berges Institute</a>.
                He also hosts the podcast
                <a target="_blank" href="https://podcasts.apple.com/us/podcast/s%C3%A1bado-a-la-noche-con-dan-berges/id1485129955">
                    Sábado a la noche con Dan Berges</a> and leads the folk trio
                <a target="_blank" href="https://open.spotify.com/artist/2UAqi3lvWEtP9SHDVCYb1g/">Pammi Zacharia</a>.
                Dan is one of the authors of <a href="/writing/books">The Graf Method for Spanish Language</a>,
                and has also published articles for Forbes and San Diego Times. </p>
        </section>

        <section id="work">
            <h2>Work</h2>
            <a target="_blank" href="https://www.bergesinstitutespanish.com/">
                <h3>Berges Institute</h3>
            </a>
            <p>Berges Institute is a Spanish online language school for adults.
                Berges was founded in 2013 by
                Dan Berges and Vanessa Montilla, and is still managed by the founding team.</p>

            <a target="_blank" href="https://dwightapp.com/">
                <h3>Dwight</h3>
            </a>
            <p>Dwight is a task management solution based on Eisenhower's Box with a simple, clean interface.
                It lets you classify your to-do items as urgent and important, urgent but not important,
                important but not urgent, or not urgent and not important.</p>

            <a target="_blank" href="https://www.smoothsamples.com">
                <h3>Smooth Samples</h3>
            </a>
            <p>Quality audio samples written and performed by professional musicians and mixed and processed in-house
                at the Smooth Samples studios.</p>
        </section>

        <section id="articles">
            <h2>Articles</h2>
            <a target="_blank" href="https://hackernoon.com/why-llm-chatbots-wont-be-replacing-language-teachers-any-time-soon">
                <h3>Why LLM Chatbots Won’t Be Replacing Language Teachers Any Time Soon</h3>
            </a>
            <p class="mt-2">Published on HackerNoon on August 6, 2023</p>
            <a target="_blank" href="https://timesofsandiego.com/opinion/2023/06/16/learning-spanish-can-build-bridges-and-careers-in-todays-america/">
                <h3>Opinion: Learning Spanish Can Build Bridges–and Careers–in Today’s America</h3>
            </a>
            <p class="mt-2">Published on Times of San Diego on June 16, 2023</p>
            <a target="_blank" href="https://corp.smartbrief.com/original/2023/04/edtech-language-learning">
                <h3>How AI and VR will enhance language learning beyond 2023</h3>
            </a>
            <p class="mt-2">Published on SmartBrief on April 25, 2023</p>
            <a target="_blank" href="https://www.forbes.com/sites/forbesnycouncil/2019/09/30/how-to-grow-your-business-with-no-vc-money/?sh=5b5f9caa609b">
                <h3>How to Grow Your Business with No VC Money</h3>
            </a>
            <p class="mt-2">Published on Forbes on September 30, 2019</p>
            <a target="_blank" href="https://multilingual.com/why-us-citizens-should-embrace-spanish/">
                <h3>Why US Citizens Should Embrace Spanish</h3>
            </a>
            <p class="mt-2">Published on MultiLingual on January 9, 2019</p>
            <a target="_blank" href="https://www.forbes.com/sites/forbesnycouncil/2019/01/02/how-to-lease-commercial-space-in-the-big-city/?sh=ab75aab53c1d">
                <h3>How to Lease Commercial Space in the Big City</h3>
            </a>
            <p class="mt-2">Published on Forbes on January 2, 2019</p>
        </section>

        <section id="books">
            <h2>Books</h2>
            <a target="_blank" href="https://www.amazon.com/Graf-Method-Spanish-Language-Vol/dp/1977991327/ref=sr_1_1?ie=UTF8&qid=1513093699&sr=8-1&keywords=The+Graf+Method+for+Spanish+Language">
                <h3>The Graf Method for Spanish Language, Vol. 1</h3>
            </a>
            <p class="mt-2">Spanish for Absolute Beginners</p>

            <a target="_blank" href="https://www.amazon.com/Graf-Method-Spanish-Language-Vol/dp/1977991556/ref=sr_1_fkmr1_2?s=books&ie=UTF8&qid=1513633528&sr=1-2-fkmr1&keywords=graf+method+burgers">
                <h3>The Graf Method for Spanish Language, Vol. 2</h3>
            </a>
            <p class="mt-2">The Past Tense and Other Topics</p>

            <a target="_blank" href="https://www.amazon.com/Graf-Method-Spanish-Language-Vol/dp/1981702849/ref=sr_1_5?ie=UTF8&qid=1513631285&sr=8-5&keywords=graf+method+berges">
                <h3>The Graf Method for Spanish Language, Vol. 3</h3>
            </a>
            <p class="mt-2">The Imperfect Tense</p>

            <a target="_blank" href="https://www.amazon.com/Graf-Method-Spanish-Language-Vol/dp/1981706054/ref=sr_1_1?ie=UTF8&qid=1513631903&sr=8-1&keywords=graf+method+berges+vol+4">
                <h3>The Graf Method for Spanish Language, Vol. 4</h3>
            </a>
            <p class="mt-2">Object Pronouns, Future Tense and Verb Haber</p>

            <a target="_blank" href="https://www.amazon.com/Graf-Method-Spanish-Language-Vol/dp/1981706488/ref=sr_1_1?s=books&ie=UTF8&qid=1513632344&sr=1-1&keywords=graf+method+dan+berges">
                <h3>The Graf Method for Spanish Language, Vol. 5</h3>
            </a>
            <p class="mt-2">Subjunctive, Conditional and Imperative</p>
        </section>

        <section id="fiction">
            <h2>Fiction</h2>
            <a target="_blank" href="https://danberges.wordpress.com/">
                <h3>Luces de neón</h3>
            </a>
            <p class="mt-2">Short stories, 2014 - 2017</p>
        </section>

        <section id="courses">
            <h2>Courses</h2>
            <a target="_blank" href="https://www.skillshare.com/en/classes/CSS-Flexbox-Demystified/1512187596">
                <h3>CSS Flexbox Demystified</h3>
            </a>
            <p class="mt-2">Published on Skillshare in May 2022</p>

            <a target="_blank" href="https://skl.sh/3zdrrN1">
                <h3>Generative Art for NFTs with JavaScript and p5js</h3>
            </a>
            <p class="mt-2">Published on Skillshare in December 2021</p>

            <a target="_blank" href="https://skl.sh/3rzzr7O">
                <h3>How to Produce, Record, Edit and Publish a Podcast: A Guide</h3>
            </a>
            <p class="mt-2">Published on Skillshare in January 2022</p>
        </section>

        <section id="podcasts">
            <h2>Podcasts</h2>
            <a target="_blank" href="https://podcasters.spotify.com/pod/show/brainsbb/episodes/How-Learning-a-New-Language-can-Significantly-Delay-the-Onset-of-Alzheimers-Disease--Dementia-e234nuc/a-a9ubjfd">
                <h3>How Learning a New Language can Significantly Delay the Onset of Alzheimer's Disease & Dementia</h3>
            </a>
            <p class="mt-2">An episode of Brains Byte Back, by The Sociable</p>
            <a target="_blank" href="https://podcasts.apple.com/us/podcast/s%C3%A1bado-a-la-noche-con-dan-berges/id1485129955">
                <h3>My podcast: Sábado a la noche con Dan Berges</h3>
            </a>
            <p class="mt-2">It's in Spanish!</p>
            <a target="_blank" href="http://www.otherberkleealumni.com/2020/05/20/successful-berklee-alumni-181-dan-berges/">
                <h3>An interview in Kevin Block-Schwenk's podcast</h3>
            </a>
            <p class="mt-2">Kevin interviews Berklee alumni who don't work in the music industry.</p>
        </section>

        <section id="music">
            <h2>Music</h2>
            <a target="_blank" href="https://open.spotify.com/artist/2UAqi3lvWEtP9SHDVCYb1g/">
                <h3>My folk band, Pammi Zacharia</h3>
            </a>
            <p class="mt-2">With <a target="_blank" href="http://www.gregglassman.com/">Greg Glassman</a> & <a target="_blank" href="https://yukatadano.com/">Yuka Tadano</a>.</p>
            <a target="_blank" href="https://www.youtube.com/watch?v=lJlqAmnJPEg&list=OLAK5uy_kJcAInWijK6pbwIaycPkRBZywqse8YY8g">
                <h3>A short solo guitar EP I recently recorded</h3>
            </a>
            <p class="mt-2">Mostly improvised.</p>
            <a target="_blank" href="https://www.youtube.com/watch?v=_LCqZtI8bTw">
                <h3>A lofi tape I made in 2020</h3>
            </a>
            <p class="mt-2">My alter ego Compadrito made it.</p>
            <a target="_blank" href="https://ashockingtruestory.bandcamp.com/album/live-at-the-east-village">
                <h3>A live rock & roll album in the East Village from a while ago</h3>
            </a>
            <p class="mt-2">Play it loud.</p>
        </section>
    </main>

    <footer class="container extra-narrow mx-auto">
        <div class="p-5 border-top text-center small">
            <p>© {{Carbon\Carbon::now()->format('Y')}} Dan Berges</p>
            <div>
                <a target="_blank" href="https://twitter.com/danberges">Twitter</a> |
                <a target="_blank" href="https://www.linkedin.com/in/dan-berges/">LinkedIn</a> |
                <a target="_blank" href="https://www.youtube.com/channel/UC5yc-Wv0sHlH3gXxT1htQ6w">YouTube</a> |
                <a target="_blank" href="https://github.com/danb7788">GitHub</a> |
                <a target="_blank" href="https://www.skillshare.com/en/profile/Dan-Berges/82542014">Skillshare</a>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        (function() {
            const collapsable = document.querySelector('.navbar-collapse');

            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(item => item.addEventListener('click', () => {
                collapsable.classList.remove('show');
            }));
        })();
    </script>
</body>
</html>
