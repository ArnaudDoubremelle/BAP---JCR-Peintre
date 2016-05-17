<?php
/*
    Template Name: home
*/
?>
<?php get_header() ?>
<body>

<!--<div class="capture-video-jcr">-->
<!--    <video src="--><?php //bloginfo('template_directory') ?><!--/video/video_accueil_3_v2.mp4" muted="true" autoplay="true"></video>-->
<!--    <div class="language">-->
<!--        <a href="peintures" class="btn btn-custom"><img src="--><?php //bloginfo('template_directory') ?><!--/img/door.png" alt=""></a>-->
<!--    </div>-->
<!--</div>-->

<a href="peintures">
    <div id="animation">
        <div class="svg">
            <img src="<?php bloginfo('template_directory')?>/img/Logo.svg"  width="50%" height="50%">
        </div>
        <button class="btn btn-intro">Entrer</button>
    </div>
    <!--<svg xmlns="http://www.w3.org/2000/svg" id="my-svg" data-name="Calque 1" viewBox="0 0 387.29 245.8">
        <defs>
            <style>
                .cls-1{fill:#f2f2f2;stroke:#f9f9f9;stroke-miterlimit:10;}
            </style>
        </defs>
        <path d="M163.98 59.04c-5 .76-8.25 1.27-11.51 1.73a9.83 9.83 0 0 1-2.24-.5c2.08-1.53 3.45-3 5.14-3.72 23.82-10.24 40.1-31.41 62.14-44.21l1.74 1.78c-1.62 2-3 4.19-4.9 5.81-8.07 6.89-16.3 13.59-24.47 20.36l.76 1.31c6.16-2.11 12.3-4.28 18.49-6.31 22.29-7.3 44.59-14.69 66.92-21.69 3.91-1.24 8.17-1.49 12.3-1.86a7.76 7.76 0 0 1 5.5 2.09 16.88 16.88 0 0 1-2.89 1.09c-20.89 3.79-40.84 10.68-60.64 18.18-11.8 4.5-23.92 8.14-35.75 12.55-13.57 5.07-24.93 13.19-33.17 25.39-7.16 10.56-14.68 21.01-21.68 31.71-1.29 2-1.08 4.9-1.56 7.39 2.46-.54 5.09-.69 7.34-1.7 4.46-2 7.34-5.19 9.67-9.95a92.45 92.45 0 0 1 36.17-39.68c4.31-2.56 9.94-3.35 15.08-3.88 3.7-.39 5.6 2.35 3.29 5.94-2.69 4.17-5.32 8.59-8.87 12-8.93 8.48-18.35 16.43-27.59 24.57-1.73 1.52-3.55 2.94-5.33 4.41l.64 1.21c2.4-1.3 5.06-2.28 7.17-3.95q20.56-16.28 40.89-32.84c5.55-4.52 10.73-9.52 16.41-13.86 1.59-1.22 4.39-.85 6.63-1.21-.4 2-.09 4.78-1.31 6-5.07 5-10.84 9.33-15.9 14.36A173.64 173.64 0 0 0 210.1 85.8c-.79 1-.6 2.74-.87 4.14 1.54 0 3.34.62 4.6 0 9.63-4.47 18.06-10 22.88-20.32a69.12 69.12 0 0 1 28.36-30.76c3-1.77 7-5.12 10.26-1.13s.12 7.83-2.53 10.66c-5.45 5.82-11.36 11.21-17.17 16.69-3 2.86-6.34 5.41-9.33 8.3a53.94 53.94 0 0 0-4.47 5.59l.8 1.9c4.11-.46 8.73.13 12.24-1.56 16-7.72 31.73-16.06 47.5-24.27 1.32-.69 2.28-2.08 3.4-3.15l-.52-1.32-13.17 1.2c1.28-4.76 5.19-5.76 8.62-5.62 4.1.17 8.18 1.68 12.14 3 .55.19.68 2.75.37 4.05a6.13 6.13 0 0 1-2.27 3.19c-16.89 12.19-33.65 24.81-54.78 28.7-4.71.87-9.91.18-14.69-.8a19.28 19.28 0 0 0-15.19 2.94c-3.9 2.55-7.62 5.38-11.57 7.84-4.4 2.74-8.73 2.4-12.07-1.72-2.2-2.72-4.3-2.55-6.91-1-6.19 3.6-12.36 7.23-18.61 10.71-6 3.32-11.92 5.86-19.18 6.16-5.15.21-10.13 3.82-15.26 5.73-6.32 2.35-12.47-1.68-12.25-8.43a20.09 20.09 0 0 1 3-9.82 151.44 151.44 0 0 1 11.89-15.37c4.09-4.82 8.62-9.27 12.79-14 1.9-2.27 3.41-4.82 5.87-8.29zm-.12 36.5c14.71-9.93 29.73-19.52 38.78-35.51-16.08 8.42-29.38 19.86-38.78 35.51zm99.57-45.67l-1.23-1.27-10 9.58 1.2 1.22zm-92.46 159.28c-6.21 3-11.89 6.22-17.9 8.56s-9.62.31-10.16-4.73a6.17 6.17 0 0 1 .14-2.47c8.45-26.42 33-35.46 54.47-26.7-1.71 8.88-12.54 11-15.28 20.43 15.38-11.37 27.88-25.12 44.79-32.38l1.63 1.49a41.94 41.94 0 0 1-3.07 5.55c-4.84 6.35-9.94 12.52-14.73 18.91-1.53 2-2.42 4.57-3.61 6.87l1 1.41c2.62-.89 5.61-1.24 7.81-2.75q19.74-13.56 39.15-27.59c9-6.54 17.72-13.55 26.74-20.1a29.75 29.75 0 0 1 8.94-4.3c1.66-.49 3.8.61 5.73 1.76-21.31 16-43.84 29.64-61.31 49.45l.84 1.31c1.91-1.08 3.83-2.15 5.73-3.24 17.34-9.92 34.59-20 52.07-29.67 5.19-2.87 11-4.78 16.65-6.62 1.66-.54 3.89.66 5.85 1.07-1 1.86-1.59 4.71-3.14 5.42-11.63 5.34-23.36 10.51-35.26 15.21a53.16 53.16 0 0 0-20.33 14.07c-1.7 1.89-2.26 4.81-3.35 7.26 2.61.64 5.27 2 7.82 1.8 19-1.49 36.87-7.29 54.33-14.39 15.87-6.46 31.57-13.35 47.24-20.3a63.34 63.34 0 0 0 11.94-7.2c1.76-1.31 2.6-3.86 3.86-5.85-2-1-3.91-2.35-6-2.86-3.67-.88-7.47-1.22-11.85-1.88 5.73-3.46 21.06-1.66 24.2 2.84 1.1 1.57 1.23 5.18.15 6.63a25 25 0 0 1-8.42 7.49 587.24 587.24 0 0 1-92.76 36.61c-7.92 2.41-16.72 2.78-25.07 2.55-4.32-.12-8.48-3.79-12.85-5.53a7.3 7.3 0 0 0-5.14-.22c-3 1.37-5.62 3.55-8.52 5.17-4 2.22-7.49 1.45-11-1.47a8.5 8.5 0 0 0-5.82-1.65c-2.92.34-5.69 1.86-8.61 2.48-5.26 1.13-7.57-1.07-7-6.46.2-2 .65-3.88 1.26-7.36-2.87 2.21-4.67 3.71-6.58 5.05-4.62 3.26-9.09 6.8-14 9.56-5.27 2.94-7.51 1.98-10.58-3.23zm14.85-25.21c-12.89.71-21.38 7.68-29.39 15.35-3.78 3.62-7.5 7.57-7.62 13.9 12.39-3.93 33.91-20.59 37.01-29.25z" class="cls-1"/>
        <path d="M96.07 235.95c-10.32 5.29-20.64 11.38-33 8.69-8.74-1.9-11.55-7.83-8.52-16.33a103.33 103.33 0 0 1 6.51-13.46c2.16-4.06 4.87-8-1.08-11.06a3.66 3.66 0 0 1 .89-.93c6 1.63 9.11-2 12.75-6 39.39-43.17 85.56-76.47 141.33-95.33 16.69-5.64 33.93-8.47 51.66-5.78a24.52 24.52 0 0 1 3.43.64c14.87 4.5 17.87 15.18 6.78 26a91.19 91.19 0 0 1-18.19 13.91c-41.33 23.59-84.59 42.88-130.13 56.82-15.39 4.71-31 8.61-46.51 13-14.74 4.14-21.52 12.92-22 28.29-.19 5.8 3.39 9.22 9.23 7.93s11.44-3.48 17.16-5.21c3.08-.93 6.21-1.73 9.31-2.58zM76.2 201.6l1.06 1.25a8.67 8.67 0 0 0 1.94 0c6.32-1.49 12.69-2.8 18.92-4.59 39-11.2 76.22-27 113.42-42.9 17.47-7.46 34.64-15.69 49.78-27.36a61.59 61.59 0 0 0 13.4-13.97c4.89-7.24 2.38-12-6.11-13.27a95.58 95.58 0 0 0-40 3c-52.24 14.66-96.11 43.46-135.67 79.58-6.11 5.51-11.22 12.12-16.74 18.26zM193.88 6.38c-11.07-1.93-20.38.08-29.44 2.74A317.22 317.22 0 0 0 72.06 53.4c-4.44 3.09-8.34 6.92-12.54 10.4l.46 1.41c2.53.17 5.06.47 7.6.48 16 .07 32-.22 47.94.25a52.35 52.35 0 0 1 16 3.45c7.66 2.78 9.78 8.65 5.58 15.53-2.72 4.46-6.09 9-10.22 12.07-30.25 22.55-63 41.09-96.24 58.8a113.79 113.79 0 0 1-22.31 8.54c-2 .58-5.07-2.4-7.65-3.75 1.11-2 1.76-4.61 3.43-5.88 3.11-2.37 4.67-.6 4.48 3.82 8.59-4 16.78-7.64 24.75-11.67 28.72-14.5 57.07-29.68 82.65-49.38a86.39 86.39 0 0 0 14.21-13.93c4.83-6 3.27-9.75-4-12-12-3.69-24.11-1.68-36.18-.29-9.6 1.11-19.21 2.5-28.75-.41-7.75-2.36-9.34-6.93-4-13.16a50.82 50.82 0 0 1 11.16-9.89c33.51-21 69.24-37 107.78-46.31a45.57 45.57 0 0 1 15.82-.59c7.13.86 9.11 6.44 4.27 11.59-5.45 5.8-11.35 11.21-17.35 16.45-1.25 1.09-3.8.71-5.75 1 .83-1.86 1.21-4.21 2.58-5.5 4.23-4 9-7.45 13.24-11.39 1.78-1.56 2.88-3.84 4.86-6.66z" class="cls-1"/>
    </svg>-->
</a>


<div class="cd-transition-layer">
    <div class="bg-layer"></div>
</div> <!-- .cd-transition-layer -->



<?php get_footer()?>
<script>
    new Vivus('my-svg', {type: 'delayed', duration: 200},console.log('salut'));
</script>
