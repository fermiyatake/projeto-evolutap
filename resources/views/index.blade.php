<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertisse - Home</title>
    <link rel="stylesheet" href="{{ asset ('/css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        #services {
            display: flex;
        }
    </style>
</head>
<body>
    <article>
        <section class="bg-[url('/img/bg01.png')] bg-cover w-full h-full relative">
            @include('components.header')

            <h1 class="absolute font-montserrat font-black text-7xl text-vertisse-purple text-right left-1/4 top-[20rem]">
                Reforme <br>agora!
            </h1>

            <img class="absolute bottom-0 left-64" src="/img/reforma.png" href="Vertisse Mobile">
            <img class="absolute top-60 left-2/4 translate-x-[-50%]" src="/img/mobile.png" href="Vertisse Mobile">

            <div class="absolute top-[22rem] right-[30rem] text-left w-1/6">
                <div class="border-b-[1px] border-gray-400 pb-4 w-6/12">
                    <h2 class="font-montserrat font-extrabold text-vertisse-purple text-3xl">
                        Parcele
                        <br>
                        <sm class="font-normal text-sm">
                            em até
                        </sm>
                        <br>
                        <div class="font-extrabold text-5xl bg-[#ec663b] rounded-md p-2">
                            300x
                        </div>
                    </h2>
                </div>

                <div class="border-b-[1px] border-gray-400 pt-2 pb-4 w-8/12">
                    <h2 class="font-montserrat font-extrabold text-vertisse-purple text-3xl">
                            Parcelas
                        <br>
                        <div class="font-normal text-sm">
                            a partir de
                        </div>
                        <div class="font-extrabold text-5xl bg-[#ec663b] rounded-md p-2">
                            R$ 399
                        </div>
                        <div class="font-normal text-sm">
                            ao mês
                        </div>
                    </h2>
                </div>

                <div class="pt-2 pb-4 w-11/12 mb-9">
                    <h3 class="font-montserrat font-extrabold text-vertisse-purple text-xl leading-6">
                        Contratando nossos serviços, tudo incluso sem se preocupar com mão de obra ou material.
                    </h3>
                </div>

                <a href="#" class="bg-[#09A069] rounded-full px-8 py-4 w-9/12 text-center font-montserrat font-semibold text-sm text-white">
                    Reforme com a Vertisse
                </a>
            </div>
        </section>

        <section class="bg-[url('/img/bg02.png')] bg-cover w-full h-full relative">

        </section>
    </article>
</body>
</html>