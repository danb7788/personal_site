<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ __('Official site for Spanish content creator, teacher, author and entrepreneur Dan Berges') }}">
    <title>Dan Berges — {{ __('Content creator, teacher, and entrepreneur') }}</title>
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
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="nav-link" href="">Dan Berges</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ Str::slug(__('Bio')) }}">{{ __('Bio') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ Str::slug(__('Articles')) }}">{{ __('Articles') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ Str::slug(__('Books')) }}">{{ __('Books') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ Str::slug(__('Fiction')) }}">{{ __('Fiction') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ Str::slug(__('Courses')) }}">{{ __('Courses') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ Str::slug(__('Podcasts')) }}">{{ __('Podcasts') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ Str::slug(__('In the press')) }}">{{ __('In the press') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ Str::slug(__('Contact')) }}">{{ __('Contact') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="flex-grow-1 container extra-narrow mx-auto py-5">
        <h1>Dan Berges</h1>

        <img src="{{ asset('images/dan.jpg') }}" class="img-fluid rounded mt-3" alt="Dan Berges">

        <section id="{{ Str::slug(__('Bio')) }}">
            <h2>{{ __('Bio') }}</h2>
            @if (app()->getLocale() === 'es')
                <p>Soy un emprendedor y creador de contenidos español nacido en Madrid con <i>background</i> en arte, educación, lingüística y programación.
                    Publico sobre todo contenidos <i>short form</i> en Instagram, YouTube y TikTok sobre gramática, semántica y pragmática.</p>
                <p>Fundé <a target="_blank" href="https://www.bergesinstitutespanish.com/">Berges Institute</a>
                    en 2013 en Nueva York, y después de vivir en Estados Unidos durante 15 años me volví a Madrid, donde vivo actualmente.</p>
            @else
                <p>I’m a Madrid-born Spanish entrepreneur and content creator with a background in arts, education, linguistics and computer programming.
                    I publish mostly short-form content on Instagram, YouTube and TikTok about grammar, semantics, and pragmatics.</p>
                <p>I founded <a target="_blank" href="https://www.bergesinstitutespanish.com/">Berges Institute</a>
                    in 2013 in New York City, and after living in the United States for 15 years moved
                    back to Madrid, Spain, where I currently live.</p>
            @endif
        </section>

        <section id="{{ Str::slug(__('Articles')) }}">
            <h2>{{ __('Articles') }}</h2>
            <a target="_blank" href="https://hrsea.economictimes.indiatimes.com/news/workplace/3-compelling-reasons-why-sea-businesses-are-embracing-multilingualism/103033101?redirect=1">
                <h3>3 compelling reasons why SEA businesses are embracing multilingualism</h3>
            </a>
            <p class="mt-2">India Times / HR News Southeast Asia | {{ \Carbon\Carbon::parse('2023-08-25')->format(__('Y-m-d')) }}</p>
            <a target="_blank" href="https://hackernoon.com/why-llm-chatbots-wont-be-replacing-language-teachers-any-time-soon">
                <h3>Why LLM Chatbots Won’t Be Replacing Language Teachers Any Time Soon</h3>
            </a>
            <p class="mt-2">HackerNoon | {{ \Carbon\Carbon::parse('2023-08-06')->format(__('Y-m-d')) }}</p>
            <a target="_blank" href="https://timesofsandiego.com/opinion/2023/06/16/learning-spanish-can-build-bridges-and-careers-in-todays-america/">
                <h3>Opinion: Learning Spanish Can Build Bridges–and Careers–in Today’s America</h3>
            </a>
            <p class="mt-2">Times of San Diego | {{ \Carbon\Carbon::parse('2023-06-16')->format(__('Y-m-d')) }}</p>
            <a target="_blank" href="https://corp.smartbrief.com/original/2023/04/edtech-language-learning">
                <h3>How AI and VR will enhance language learning beyond 2023</h3>
            </a>
            <p class="mt-2">SmartBrief | {{ \Carbon\Carbon::parse('2023-04-25')->format(__('Y-m-d')) }}</p>
            <a target="_blank" href="https://www.forbes.com/sites/forbesnycouncil/2019/09/30/how-to-grow-your-business-with-no-vc-money/?sh=5b5f9caa609b">
                <h3>How to Grow Your Business with No VC Money</h3>
            </a>
            <p class="mt-2">Forbes | {{ \Carbon\Carbon::parse('2019-09-30')->format(__('Y-m-d')) }}</p>
            <a target="_blank" href="https://multilingual.com/why-us-citizens-should-embrace-spanish/">
                <h3>Why US Citizens Should Embrace Spanish</h3>
            </a>
            <p class="mt-2">MultiLingual | {{ \Carbon\Carbon::parse('2019-01-09')->format(__('Y-m-d')) }}</p>
            <a target="_blank" href="https://www.forbes.com/sites/forbesnycouncil/2019/01/02/how-to-lease-commercial-space-in-the-big-city/?sh=ab75aab53c1d">
                <h3>How to Lease Commercial Space in the Big City</h3>
            </a>
            <p class="mt-2">Forbes | {{ \Carbon\Carbon::parse('2019-01-02')->format(__('Y-m-d')) }}</p>
        </section>

        <section id="{{ Str::slug(__('Books')) }}">
            <h2>{{ __('Books') }}</h2>
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

        <section id="{{ Str::slug(__('Fiction')) }}">
            <h2>{{ __('Fiction') }}</h2>
            <a target="_blank" href="https://danberges.wordpress.com/">
                <h3>Luces de neón</h3>
            </a>
            <p class="mt-2">{{ __('Short stories') }}, 2014 - 2017</p>
        </section>

        <section id="{{ Str::slug(__('Courses')) }}">
            <h2>{{ __('Courses') }}</h2>
            <a target="_blank" href="https://www.skillshare.com/en/classes/CSS-Flexbox-Demystified/1512187596">
                <h3>CSS Flexbox Demystified</h3>
            </a>
            <p class="mt-2">Skillshare | {{ \Carbon\Carbon::parse('2022-05')->format(__('Y-m')) }}</p>

            <a target="_blank" href="https://skl.sh/3rzzr7O">
                <h3>How to Produce, Record, Edit and Publish a Podcast: A Guide</h3>
            </a>
            <p class="mt-2">Skillshare | {{ \Carbon\Carbon::parse('2022-01')->format(__('Y-m')) }}</p>

            <a target="_blank" href="https://skl.sh/3zdrrN1">
                <h3>Generative Art for NFTs with JavaScript and p5js</h3>
            </a>
            <p class="mt-2">Skillshare | {{ \Carbon\Carbon::parse('2021-12')->format(__('Y-m')) }}</p>
        </section>

        <section id="{{ Str::slug(__('Podcasts')) }}">
            <h2>{{ __('Podcasts') }}</h2>
            <a target="_blank" href="https://youtu.be/3F2c9JMbXBM?si=Fvby4DTPdPPyln0i">
                <h3>Surveying Black Swan Events with Digital Transformation</h3>
            </a>
            <p class="mt-2">Intel Business | {{ \Carbon\Carbon::parse('2024-02-29')->format(__('Y-m-d')) }}</p>
            <a target="_blank" href="https://podcasters.spotify.com/pod/show/brainsbb/episodes/How-Learning-a-New-Language-can-Significantly-Delay-the-Onset-of-Alzheimers-Disease--Dementia-e234nuc/a-a9ubjfd">
                <h3>How Learning a New Language can Significantly Delay the Onset of Alzheimer's Disease & Dementia</h3>
            </a>
            <p class="mt-2">Brains Byte Back | {{ \Carbon\Carbon::parse('2023-06-02')->format(__('Y-m-d')) }}</p>
            <a target="_blank" href="http://www.otherberkleealumni.com/2020/05/20/successful-berklee-alumni-181-dan-berges/">
                <h3>Successful Berklee Alumni #181: Dan Berges</h3>
            </a>
            <p class="mt-2">Other Berklee Alumni | {{ \Carbon\Carbon::parse('2020-05-20')->format(__('Y-m-d')) }}</p>
            <a target="_blank" href="https://podcasts.apple.com/us/podcast/s%C3%A1bado-a-la-noche-con-dan-berges/id1485129955">
                <h3>Sábado a la noche con Dan Berges</h3>
            </a>
            <p class="mt-2">{{ __('My podcast') }} | 2019-2020</p>
        </section>

        <section id="{{ Str::slug(__('In the press')) }}">
            <h2>{{ __('In the press') }}</h2>
            <a target="_blank" href="https://www.larazon.es/cultura/texto-espanol-cree-antiguo-existe/20241113/1135018.html">
                <h3>El texto en español que se cree que es el más antiguo que existe</h3>
            </a>
            <p class="mt-2">La Razón | {{ \Carbon\Carbon::parse('2024-11-13')->format(__('Y-m-d')) }}</p>

            <a target="_blank" href="https://www.que.es/2024/10/30/rae-i-griega-abecedario-espanol/">
                <h3>La RAE se carga la «i griega», que ya no existe en el abecedario español</h3>
            </a>
            <p class="mt-2">Qué! | {{ \Carbon\Carbon::parse('2024-10-30')->format(__('Y-m-d')) }}</p>

            <a target="_blank" href="https://www.infobae.com/mexico/2024/10/02/cual-es-la-palabra-del-espanol-que-se-puede-decir-pero-no-se-puede-escribir/">
                <h3>Cuál es la palabra del español que se puede decir, pero no se puede escribir</h3>
            </a>
            <p class="mt-2">Infobae | {{ \Carbon\Carbon::parse('2024-10-02')->format(__('Y-m-d')) }}</p>

            <a target="_blank" href="https://www.huffingtonpost.es/virales/un-director-academia-idiomas-estados-unidos-explica-mas-les-explota-cabeza-sobre-espanol.html">
                <h3>Un director de una academia de idiomas en Estados Unidos explica lo que más les explota la cabeza sobre el español</h3>
            </a>
            <p class="mt-2">HuffPost | {{ \Carbon\Carbon::parse('2024-09-20')->format(__('Y-m-d')) }}</p>

            <a target="_blank" href="https://toronto.citynews.ca/2024/02/27/generations-of-immigrants-working-to-keep-languages-and-culture-alive-in-canada/">
                <h3>Generations of immigrants working to keep languages and culture alive in Canada</h3>
            </a>
            <p class="mt-2">CityNews Toronto | {{ \Carbon\Carbon::parse('2024-02-27')->format(__('Y-m-d')) }}</p>

            <a target="_blank" href="https://abcnews.go.com/GMA/Living/video/sabo-kids-navigate-speaking-spanish-103557237">
                <h3>How 'No Sabo Kids' navigate not speaking Spanish</h3>
            </a>
            <p class="mt-2">ABC News / Good Morning America | {{ \Carbon\Carbon::parse('2023-09-28')->format(__('Y-m-d')) }}</p>

            <a target="_blank" href="https://forbes.es/100-creativos-en-el-mundo-de-los-negocios-2023/">
                <h3>Lista Forbes | Los 100 más creativos en el mundo de los negocios 2023</h3>
            </a>
            <p class="mt-2">Forbes España | {{ \Carbon\Carbon::parse('2023-09-05')->format(__('Y-m-d')) }}</p>

            <a target="_blank" href="https://www.elmundo.es/economia/actualidad-economica/2023/08/07/64cfc087e85ece135d8b45a2.html">
                <h3>Por qué la gramática del Berges Institute también es sexi</h3>
            </a>
            <p class="mt-2">El Mundo | {{ \Carbon\Carbon::parse('2023-08-07')->format(__('Y-m-d')) }}</p>

            <a target="_blank" href="https://elpais.com/economia/negocios/2023-07-20/de-una-banda-de-pop-jazz-en-barcelona-a-dar-clases-de-espanol-a-30000-estudiantes-en-nueva-york.html">
                <h3>De una banda de pop-jazz en Barcelona a dar clases de español a 30.000 estudiantes en Nueva York</h3>
            </a>
            <p class="mt-2">El País | {{ \Carbon\Carbon::parse('2023-07-20')->format(__('Y-m-d')) }}</p>

            <a target="_blank" href="https://www.entrepreneur.com/es/emprendedores/dan-berges-el-espanol-que-fundo-una-escuela-para/454530">
                <h3>Dan Berges, el español que fundó una escuela para promover el aprendizaje del castellano en Estados Unidos</h3>
            </a>
            <p class="mt-2">Entrepreneur en Español | {{ \Carbon\Carbon::parse('2023-06-21')->format(__('Y-m-d')) }}</p>

            <a target="_blank" href="https://www.elnacional.com/mundo/el-viaje-de-un-emprendedor-para-construir-una-cadena-de-escuelas-de-espanol-en-estados-unidos/">
                <h3>El viaje de un emprendedor para construir una cadena de escuelas de español en Estados Unidos</h3>
            </a>
            <p class="mt-2">El Nacional | {{ \Carbon\Carbon::parse('2023-06-10')->format(__('Y-m-d')) }}</p>
        </section>

        <section id="{{ Str::slug(__('Contact')) }}">
            <h2>{{ __('Contact') }}</h2>
            <p>{{ __('Send me a DM!') }}</p>
        </section>
    </main>

    <footer class="container extra-narrow mx-auto">
        <div class="p-5 border-top text-center small">
            <p>© {{Carbon\Carbon::now()->format('Y')}} Dan Berges</p>
            <div>
                <a target="_blank" href="https://www.instagram.com/danberges/">Instagram</a> |
                <a target="_blank" href="https://www.tiktok.com/@dan_berges">TikTok</a> |
                <a target="_blank" href="https://www.youtube.com/@danberges">YouTube</a> |
                <a target="_blank" href="https://twitter.com/danberges">Twitter</a> |
                <a target="_blank" href="https://www.linkedin.com/in/dan-berges/">LinkedIn</a> |
                <a target="_blank" href="https://www.youtube.com/channel/UC5yc-Wv0sHlH3gXxT1htQ6w">YouTube</a> |
                <a target="_blank" href="https://github.com/danb7788">GitHub</a> |
                <a target="_blank" href="https://www.skillshare.com/en/profile/Dan-Berges/82542014">Skillshare</a>
            </div>
        </div>
    </footer>
</body>
</html>
