// this file tells lightGallery to target the core wp gallery block.



document.addEventListener('DOMContentLoaded', function () {

    /* +++++ find the gallery +++++
    
    - looks for the css class '.wp-block-gallery' that wp adds to every gallery block */

    const galleries = document.querySelectorAll('.wp-block-gallery');



    /* +++++ check if it exists +++++
    
    - 'if' prevents code from breaking if the page doesnt have a gallery */

    if (galleries.length > 0) {

        // testing why i couldnt see the lightbox ???

        console.log('Found' + galleries.length + ' gallery/galleries');



        galleries.forEach(gallery => {




            /* +++++ start the lightbox +++++
            
            - tells lightGallery to watch any 'found' gallery */

            lightGallery(gallery, {



                /* select the clickable links (set to 'Link to: Media File' in wp editor)
                
                - only trigger the lightbox when the correct <a> link is clicked */

                selector: '.wp-block-image a',



                // transition speed (slide animation)

                speed: 500,



                // smooth transition between images (animation stylee)

                mode: 'lg-fade',



                // hides download icon that would normally show on top of pics

                download: false,

                counter: true,



                // +++++ for thumbnails +++++

                plugins: [lgThumbnail],

                thumbnail: true,

                animateThumb: true,

                showThumbByDefault: true

            });

        });

    } else {

        // testing why i couldnt see the lightbix???

        console.warn('No .wp-block-gallery found on this page');

    }

});