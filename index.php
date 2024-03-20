<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Json</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <div id="app">

        <header>
            
            <div class="container">
                
                <img src="https://th.bing.com/th/id/R.c2a12cba057711495849088844f950cc?rik=982VbYW4HE09lQ&riu=http%3a%2f%2f1000logos.net%2fwp-content%2fuploads%2f2017%2f08%2fSpotify-Logo.png&ehk=Gcl8lyv0FdI4gDVyKLmVCVfNf8yc1xDmAvEDyPzt8Bk%3d&risl=&pid=ImgRaw&r=0" alt="logo spotify" class="logo">
            
        
            </div>

        </header>

        <main class="container mt-3 px-5 pb-5">

            <div class="cards row justify-content-between gap-3">
                <div 
                    class="card col-3 d-flex flex-column align-items-center gap-2 py-4 text-center text-white"
                    v-for="currentAlbum in albums"
                >
                    <div class="poster">
                        <img :src="currentAlbum.poster" alt="" class="poster-image">
                    </div>
                    <div class="title fw-bold">
                        {{currentAlbum.title}}
                    </div>
                    <div class="author">
                        {{currentAlbum.author}}
                    </div>
                    <div class="year fw-bold">
                        {{currentAlbum.year}}
                    </div>
                </div>
            </div>

        </main>

    </div>

    


    <script src="./js/main.js"></script>    

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>

</html>